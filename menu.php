<?php require_once 'db.php'; ?>
<?php
$stmt = $pdo->query("SELECT * FROM gerechten ORDER BY categorie, naam");
$gerechten = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu — The Hatch Burgers</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,600;1,400&family=Bebas+Neue&family=DM+Sans:wght@200;300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav>
    <a href="index.php" class="nav-brand">
      <div class="nav-brand-title">The Hatch</div>
      <div class="nav-brand-sub">Burgers · Nijmegen</div>
    </a>
    <ul class="nav-links">
      <li><a href="index.php" class="nav-link">Home</a></li>
      <li class="nav-dot">•</li>
      <li><a href="menu.php" class="nav-link active">Menu</a></li>
      <li class="nav-dot">•</li>
      <li><a href="search.php" class="nav-link">Search</a></li>
      <li class="nav-dot">•</li>
      <li><a href="reservation.php" class="nav-link">Reserve</a></li>
      <li class="nav-dot">•</li>
      <li><a href="contact.php" class="nav-link">Contact</a></li>
    </ul>
    <a href="login.php" class="nav-cart">Login</a>
  </nav>

  <div class="page-header">
    <div class="page-title">Menu</div>
    <div class="page-subtitle">All · Burgers · Sides · Drinks</div>
    <div class="gold-rule"></div>
  </div>

  <main>
    <div class="order-layout">

      <div class="items-grid">
        <?php foreach ($gerechten as $gerecht): ?>
        <div class="item-card" data-id="<?= $gerecht['id'] ?>" data-naam="<?= htmlspecialchars($gerecht['naam']) ?>" data-prijs="<?= $gerecht['prijs'] ?>">
          <?php if (!empty($gerecht['foto'])): ?>
            <img class="item-img" src="<?= htmlspecialchars($gerecht['foto']) ?>" alt="<?= htmlspecialchars($gerecht['naam']) ?>">
          <?php else: ?>
            <div class="item-img-placeholder"><span>Image</span></div>
          <?php endif; ?>
          <div class="item-info">
            <div>
              <span class="item-name-label"><?= htmlspecialchars($gerecht['naam']) ?></span>
              <span class="item-price">€<?= number_format($gerecht['prijs'], 2) ?></span>
            </div>
            <div class="item-qty">
              <span class="qty-btn qty-min">−</span>
              <span class="qty-val">0</span>
              <span class="qty-btn qty-plus">+</span>
            </div>
          </div>
        </div>
        <?php endforeach; ?>

        <?php if (empty($gerechten)): ?>
          <p style="color: #aaa;">Geen gerechten gevonden in de database.</p>
        <?php endif; ?>
      </div>

      <!-- CART PANEL -->
      <div class="cart-panel">
        <div class="cart-panel-title">Your Order</div>
        <div id="cart-items"></div>
        <div class="cart-total-row">
          <span class="cart-total-label">Total:</span>
          <span class="cart-total-val" id="cart-total">€0.00</span>
        </div>
        <div class="btn-order">Place Order</div>
      </div>

    </div>
  </main>

  <script>
    const cart = {};

    document.querySelectorAll('.item-card').forEach(card => {
      const id = card.dataset.id;
      const naam = card.dataset.naam;
      const prijs = parseFloat(card.dataset.prijs);
      const qtyVal = card.querySelector('.qty-val');

      card.querySelector('.qty-plus').addEventListener('click', () => {
        cart[id] = cart[id] || { naam, prijs, qty: 0 };
        cart[id].qty++;
        qtyVal.textContent = cart[id].qty;
        updateCart();
      });

      card.querySelector('.qty-min').addEventListener('click', () => {
        if (!cart[id] || cart[id].qty === 0) return;
        cart[id].qty--;
        qtyVal.textContent = cart[id].qty;
        if (cart[id].qty === 0) delete cart[id];
        updateCart();
      });
    });

    function updateCart() {
      const cartItems = document.getElementById('cart-items');
      const cartTotal = document.getElementById('cart-total');
      cartItems.innerHTML = '';
      let total = 0;

      for (const id in cart) {
        const item = cart[id];
        total += item.prijs * item.qty;
        cartItems.innerHTML += `
          <div class="cart-row">
            <span class="cart-item-name">${item.naam} x${item.qty}</span>
            <span>€${(item.prijs * item.qty).toFixed(2)}</span>
          </div>`;
      }

      cartTotal.textContent = '€' + total.toFixed(2);
    }
  </script>
</body>
</html>