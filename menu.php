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
  <?php $activePage = 'menu'; include 'header.php'; ?>

  <div class="page-header">
    <div class="page-title">Menu</div>
    <div class="page-subtitle">All · Burgers · Sides · Drinks</div>
    <div class="gold-rule"></div>
  </div>

  <main>
    <div class="search-bar">
      <input type="text" class="search-input" placeholder="Search the menu...">
      <button type="button" class="btn">Search</button>
    </div>

    <div class="items-grid">
      <?php foreach ($gerechten as $gerecht): ?>
      <div class="item-card">
        <?php if (!empty($gerecht['foto'])): ?>
          <img class="item-img" src="<?= htmlspecialchars($gerecht['foto']) ?>" alt="<?= htmlspecialchars($gerecht['naam']) ?>">
        <?php else: ?>
          <div class="item-img-placeholder"><span>Image</span></div>
        <?php endif; ?>
        <div class="item-info">
          <span class="item-name-label"><?= htmlspecialchars($gerecht['naam']) ?></span>
          <span class="item-price">€<?= number_format($gerecht['prijs'], 2) ?></span>
        </div>
      </div>
      <?php endforeach; ?>

      <?php if (empty($gerechten)): ?>
        <p style="color: #aaa;">Geen gerechten gevonden in de database.</p>
      <?php endif; ?>
    </div>
  </main>
</body>
</html>