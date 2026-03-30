<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Hatch Burgers</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,600;1,400&family=Bebas+Neue&family=DM+Sans:wght@200;300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php $activePage = 'home'; include 'header.php'; ?>

  <main>
    <div class="home-wrap">
      <div class="cat-grid">

        <a href="menu.php" class="cat-card">
          <div class="cat-icon">
            <img src="images/burger.png" alt="Burgers">
          </div>
          <span class="cat-label">Burgers</span>
        </a>

        <a href="menu.php" class="cat-card">
          <div class="cat-icon">
            <img src="images/french-fries.png" alt="Sides">
          </div>
          <span class="cat-label">Sides</span>
        </a>

        <a href="menu.php" class="cat-card">
          <div class="cat-icon">
            <img src="images/soft-drink.png" alt="Drinks">
          </div>
          <span class="cat-label">Drinks</span>
        </a>

      </div>
    </div>
  </main>
</body>
</html>