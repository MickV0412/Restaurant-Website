<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search — The Hatch Burgers</title>
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
      <li><a href="menu.php" class="nav-link">Menu</a></li>
      <li class="nav-dot">•</li>
      <li><a href="search.php" class="nav-link active">Search</a></li>
      <li class="nav-dot">•</li>
      <li><a href="reservation.php" class="nav-link">Reserve</a></li>
      <li class="nav-dot">•</li>
      <li><a href="contact.php" class="nav-link">Contact</a></li>
    </ul>
    <a href="login.php" class="nav-cart">Login</a>
  </nav>

  <div class="page-header">
    <div class="page-title">Search</div>
    <div class="page-subtitle">Find a specific item</div>
    <div class="gold-rule"></div>
  </div>

  <main>
    <!-- SEARCH BAR — connect action to PHP search handler -->
    <form class="search-page-bar" action="search.php" method="GET">
      <input class="search-input" type="text" name="q" placeholder="Search for a burger, side or drink...">
      <button class="btn" type="submit">Search</button>
    </form>

    <!-- SEARCH RESULTS — populated by PHP with results from DB -->
    <div class="search-results-grid">

      <!-- RESULT CARD — duplicate per result in PHP loop -->
      <div class="search-result-card">
        <div class="search-result-img">
          <!-- Replace with: <img src="images/item.jpg" alt="Item Name"> -->
          <span>Image</span>
        </div>
        <div class="search-result-name">Placeholder Item</div>
        <div class="search-result-price">€0.00</div>
      </div>

      <div class="search-result-card">
        <div class="search-result-img"><span>Image</span></div>
        <div class="search-result-name">Placeholder Item</div>
        <div class="search-result-price">€0.00</div>
      </div>

      <div class="search-result-card">
        <div class="search-result-img"><span>Image</span></div>
        <div class="search-result-name">Placeholder Item</div>
        <div class="search-result-price">€0.00</div>
      </div>

    </div>

    <!-- EMPTY STATE — show this when no results found in PHP -->
    <!-- <div class="search-empty">No results found for "<strong>query</strong>"</div> -->
  </main>
</body>
</html>
