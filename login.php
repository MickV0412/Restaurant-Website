<?php
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'admin' && $password == 'admin123') {
        $_SESSION['ingelogd'] = true;
        header('Location: admin-dashboard.php');
        exit;
    } else {
        $error = 'Gebruikersnaam of wachtwoord is onjuist.';
    }
}
?>
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
      <li><a href="reservation.php" class="nav-link">Reserve</a></li>
      <li class="nav-dot">•</li>
      <li><a href="contact.php" class="nav-link">Contact</a></li>
    </ul>
    <a href="index.php" class="nav-cart">Back</a>
  </nav>

  <main>
    <div class="login-wrap">
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

        <?php if ($error != '') { ?>
          <div style="color:rgba(220,80,60,0.8); font-size:0.75rem; margin-bottom:1rem;"><?php echo $error; ?></div>
        <?php } ?>

        <button class="btn" type="submit" style="width:100%;">Login</button>
      </form>
    </div>
  </main>
</body>
</html>
