<?php
include 'db.php';
$stmt   = $pdo->query("SELECT * FROM menu_items WHERE available = 1 ORDER BY category, name");
$items  = $stmt->fetchAll();
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
      <?php foreach ($items as $item) { ?>
      <div class="item-card">
        <div class="item-img-placeholder"><span><?php echo $item['category']; ?></span></div>
        <div class="item-info">
          <span class="item-name-label"><?php echo $item['name']; ?></span>
          <span class="item-price">€<?php echo $item['price']; ?></span>
        </div>
      </div>
      <?php } ?>

      <?php if (count($items) == 0) { ?>
        <p style="color: #aaa;">No items on the menu yet.</p>
      <?php } ?>
    </div>
  </main>
</body>
</html>