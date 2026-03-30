<?php
session_start();

if (!isset($_SESSION['ingelogd'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard — The Hatch</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,600;1,400&family=Bebas+Neue&family=DM+Sans:wght@200;300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav>
    <a href="index.php" class="nav-brand">
      <div class="nav-brand-title">The Hatch</div>
      <div class="nav-brand-sub">Admin Panel</div>
    </a>
    <ul class="nav-links">
      <li><a href="index.php" class="nav-link">← View Site</a></li>
    </ul>
    <a href="logout.php" class="nav-cart">Logout</a>
  </nav>

  <div class="admin-layout">

    <!-- SIDEBAR -->
    <aside class="admin-sidebar">
      <div class="admin-sidebar-title">Admin Menu</div>
      <a href="admin-dashboard.php" class="admin-nav-link active">Dashboard</a>
      <a href="admin-menu.php"      class="admin-nav-link">Menu Items</a>
      <a href="admin-messages.php"  class="admin-nav-link">Messages</a>
      <a href="admin-reservations.php" class="admin-nav-link">Reservations</a>
    </aside>

    <!-- CONTENT -->
    <div class="admin-content">
      <div class="admin-page-title">Dashboard</div>
      <div class="admin-page-sub">Welcome back, Admin</div>

      <!-- STATS -->
      <div class="stats-row">
        <div class="stat-card">
          <div class="stat-value">0</div>
          <div class="stat-label">Menu Items</div>
        </div>
        <div class="stat-card">
          <div class="stat-value">0</div>
          <div class="stat-label">New Messages</div>
        </div>
        <div class="stat-card">
          <div class="stat-value">0</div>
          <div class="stat-label">Reservations Today</div>
        </div>
        <div class="stat-card">
          <div class="stat-value">0</div>
          <div class="stat-label">Total Reservations</div>
        </div>
      </div>

      <!-- QUICK LINKS -->
      <div style="display:flex; gap:1rem; flex-wrap:wrap;">
        <a href="admin-menu.php"         class="btn">Manage Menu</a>
        <a href="admin-messages.php"     class="btn btn-outline">View Messages</a>
        <a href="admin-reservations.php" class="btn btn-outline">View Reservations</a>
      </div>
    </div>

  </div>
</body>
</html>
