<?php
session_start();

if (!isset($_SESSION['ingelogd'])) {
    header('Location: login.php');
    exit;
}

include 'db.php';

// Haal het item op met het ID uit de URL
$id   = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM menu_items WHERE id = ?");
$stmt->execute([$id]);
$item = $stmt->fetch();

// Sla wijzigingen op als het formulier verstuurd is
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $pdo->prepare("UPDATE menu_items SET name=?, price=?, category=?, available=?, description=? WHERE id=?");
    $stmt->execute([$_POST['name'], $_POST['price'], $_POST['category'], $_POST['available'], $_POST['description'], $id]);

    header('Location: admin-menu.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Item — The Hatch Admin</title>
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
    <aside class="admin-sidebar">
      <div class="admin-sidebar-title">Admin Menu</div>
      <a href="admin-dashboard.php"    class="admin-nav-link">Dashboard</a>
      <a href="admin-menu.php"         class="admin-nav-link active">Menu Items</a>
      <a href="admin-messages.php"     class="admin-nav-link">Messages</a>
      <a href="admin-reservations.php" class="admin-nav-link">Reservations</a>
    </aside>

    <div class="admin-content">
      <div class="admin-page-title">Edit Item</div>
      <div class="admin-page-sub">Editing: <span style="color:var(--accent);"><?php echo $item['name']; ?></span></div>

      <form class="admin-form" action="admin-edit-item.php?id=<?php echo $id; ?>" method="POST">
        <div class="admin-form-title">Item Details</div>

        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Item Name</label>
            <input class="form-input" type="text" name="name" value="<?php echo $item['name']; ?>" required>
          </div>
          <div class="form-group">
            <label class="form-label">Price (€)</label>
            <input class="form-input" type="number" step="0.01" name="price" value="<?php echo $item['price']; ?>" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Category</label>
            <select class="form-select" name="category">
              <option value="burgers" <?php if ($item['category'] == 'burgers') echo 'selected'; ?>>Burgers</option>
              <option value="sides"   <?php if ($item['category'] == 'sides')   echo 'selected'; ?>>Sides</option>
              <option value="drinks"  <?php if ($item['category'] == 'drinks')  echo 'selected'; ?>>Drinks</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-label">Availability</label>
            <select class="form-select" name="available">
              <option value="1" <?php if ($item['available'] == 1) echo 'selected'; ?>>Available</option>
              <option value="0" <?php if ($item['available'] == 0) echo 'selected'; ?>>Unavailable</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="form-label">Description</label>
          <textarea class="form-textarea" name="description" style="min-height:80px;"><?php echo $item['description']; ?></textarea>
        </div>

        <div style="display:flex; gap:1rem;">
          <button class="btn" type="submit">Save Changes</button>
          <a href="admin-menu.php" class="btn btn-outline">Cancel</a>
        </div>
      </form>

    </div>
  </div>
</body>
</html>
