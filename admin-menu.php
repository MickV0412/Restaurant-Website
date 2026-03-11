<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage Menu — The Hatch Admin</title>
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
    <a href="login.php" class="nav-cart">Logout</a>
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
      <div class="admin-page-title">Menu Items</div>
      <div class="admin-page-sub">Add, edit or remove items from the menu</div>

      <!-- ADD ITEM FORM -->
      <!-- PHP: POST to admin-menu.php to INSERT into database -->
      <form class="admin-form" action="admin-menu.php" method="POST" enctype="multipart/form-data" style="margin-bottom:3rem;">
        <div class="admin-form-title">Add New Item</div>

        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Item Name</label>
            <input class="form-input" type="text" name="name" placeholder="The Original" required>
          </div>
          <div class="form-group">
            <label class="form-label">Price (€)</label>
            <input class="form-input" type="number" step="0.01" name="price" placeholder="0.00" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group">
            <label class="form-label">Category</label>
            <select class="form-select" name="category">
              <option value="burgers">Burgers</option>
              <option value="sides">Sides</option>
              <option value="drinks">Drinks</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-label">Availability</label>
            <select class="form-select" name="available">
              <option value="1">Available</option>
              <option value="0">Unavailable</option>
            </select>
          </div>
        </div>

        <div class="form-group">
          <label class="form-label">Description</label>
          <textarea class="form-textarea" name="description" placeholder="Short description of the item..." style="min-height:80px;"></textarea>
        </div>

        <div class="form-group">
          <label class="form-label">Image</label>
          <!-- PHP: move_uploaded_file() to /images/ folder -->
          <input class="form-input" type="file" name="image" accept="image/*">
        </div>

        <button class="btn" type="submit" name="action" value="add">Add Item</button>
      </form>

      <!-- EXISTING ITEMS TABLE -->
      <!-- PHP: SELECT * FROM menu_items and loop through rows here -->
      <table class="admin-table">
        <thead>
          <tr>
            <th>Image</th>
            <th>Name</th>
            <th>Category</th>
            <th>Price</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>

          <!-- PLACEHOLDER ROW — replace with PHP loop -->
          <tr>
            <td>
              <div class="table-img">
                <!-- Replace with: <img src="images/item.jpg" class="table-img-real" alt=""> -->
                img
              </div>
            </td>
            <td>Placeholder Item</td>
            <td>Burgers</td>
            <td>€0.00</td>
            <td><span class="badge badge-available">Available</span></td>
            <td>
              <div class="action-group">
                <!-- PHP: link passes item ID to edit page -->
                <a href="admin-edit-item.php" class="btn btn-outline" style="font-size:0.75rem; padding:0.35rem 0.9rem;">Edit</a>
                <!-- PHP: POST to admin-menu.php with action=delete&id=X -->
                <button class="btn btn-danger" style="font-size:0.75rem; padding:0.35rem 0.9rem;">Delete</button>
              </div>
            </td>
          </tr>

          <tr>
            <td><div class="table-img">img</div></td>
            <td>Placeholder Item</td>
            <td>Sides</td>
            <td>€0.00</td>
            <td><span class="badge badge-unavailable">Unavailable</span></td>
            <td>
              <div class="action-group">
                <a href="admin-edit-item.php" class="btn btn-outline" style="font-size:0.75rem; padding:0.35rem 0.9rem;">Edit</a>
                <button class="btn btn-danger" style="font-size:0.75rem; padding:0.35rem 0.9rem;">Delete</button>
              </div>
            </td>
          </tr>

          <tr>
            <td><div class="table-img">img</div></td>
            <td>Placeholder Item</td>
            <td>Drinks</td>
            <td>€0.00</td>
            <td><span class="badge badge-available">Available</span></td>
            <td>
              <div class="action-group">
                <a href="admin-edit-item.php" class="btn btn-outline" style="font-size:0.75rem; padding:0.35rem 0.9rem;">Edit</a>
                <button class="btn btn-danger" style="font-size:0.75rem; padding:0.35rem 0.9rem;">Delete</button>
              </div>
            </td>
          </tr>

        </tbody>
      </table>

    </div>
  </div>
</body>
</html>
