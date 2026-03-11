<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login — The Hatch Burgers</title>
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
      <li><a href="search.php" class="nav-link">Search</a></li>
      <li class="nav-dot">•</li>
      <li><a href="reservation.php" class="nav-link">Reserve</a></li>
      <li class="nav-dot">•</li>
      <li><a href="contact.php" class="nav-link">Contact</a></li>
    </ul>
    <a href="javascript:history.back()" class="nav-cart">Back</a>
  </nav>

  <main>
    <div class="login-wrap">
      <!-- FORM — connect action to login.php -->
      <form class="login-box" action="login.php" method="POST">
        <div class="login-logo">The Hatch</div>
        <div class="login-sub">Admin Login</div>

        <div class="form-group">
          <label class="form-label">Username</label>
          <input class="form-input" type="text" name="username" placeholder="admin" required>
        </div>
        <div class="form-group">
          <label class="form-label">Password</label>
          <input class="form-input" type="password" name="password" placeholder="••••••••" required>
        </div>

        <!-- PHP: show error message here if login fails -->
        <!-- <div style="color:rgba(220,80,60,0.8); font-size:0.75rem; margin-bottom:1rem;">Invalid credentials.</div> -->

        <button class="btn" type="submit" style="width:100%;">Login</button>
      </form>
    </div>
  </main>
</body>
</html>