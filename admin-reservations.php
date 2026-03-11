<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservations — The Hatch Admin</title>
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
      <a href="admin-menu.php"         class="admin-nav-link">Menu Items</a>
      <a href="admin-messages.php"     class="admin-nav-link">Messages</a>
      <a href="admin-reservations.php" class="admin-nav-link active">Reservations</a>
    </aside>

    <div class="admin-content">
      <div class="admin-page-title">Reservations</div>
      <div class="admin-page-sub">All customer bookings — 1 hour slots</div>

      <!-- DATE FILTER — PHP: GET parameter ?date=YYYY-MM-DD -->
      <form action="admin-reservations.php" method="GET" style="display:flex; gap:0.75rem; margin-bottom:2rem; align-items:flex-end;">
        <div class="form-group" style="margin:0;">
          <label class="form-label">Filter by Date</label>
          <input class="form-input" type="date" name="date" style="width:200px;">
        </div>
        <button class="btn" type="submit">Filter</button>
        <a href="admin-reservations.php" class="btn btn-outline">Clear</a>
      </form>

      <!-- PHP: SELECT * FROM reservations ORDER BY date ASC, time ASC -->
      <!-- PHP: loop each row into a .reservation-card below -->

      <!-- RESERVATION CARD -->
      <div class="reservation-card">
        <!-- Customer info -->
        <div>
          <div class="reservation-customer">Placeholder Customer</div>
          <div class="reservation-detail">📧 customer@email.com</div>
          <div class="reservation-detail">📞 +31 00 000 0000</div>
          <div class="reservation-detail">👥 0 guests</div>
          <div class="reservation-detail" style="margin-top:0.5rem; color:var(--text-secondary); font-size:0.68rem;">
            Notes: Placeholder special request or allergy info
          </div>
        </div>
        <!-- Date + time -->
        <div>
          <div class="reservation-detail" style="font-size:0.6rem; letter-spacing:0.35em; text-transform:uppercase; color:var(--accent); margin-bottom:0.4rem;">Date</div>
          <div style="font-family:'Cormorant Garamond', serif; font-size:1.2rem; color:var(--text-primary);">00 Month 0000</div>
          <div class="reservation-time-block" style="margin-top:0.75rem;">
            <div class="reservation-time">00:00</div>
            <div class="reservation-duration">to 00:00 · 1 hour</div>
          </div>
        </div>
        <!-- Status + actions -->
        <div style="display:flex; flex-direction:column; gap:0.75rem; align-items:flex-end;">
          <span class="badge badge-confirmed">Confirmed</span>
          <!-- PHP: POST to admin-reservations.php with action=cancel&id=X -->
          <button class="btn btn-danger" style="font-size:0.75rem; padding:0.4rem 1rem; white-space:nowrap;">Cancel</button>
        </div>
      </div>

      <div class="reservation-card">
        <div>
          <div class="reservation-customer">Placeholder Customer</div>
          <div class="reservation-detail">📧 customer@email.com</div>
          <div class="reservation-detail">📞 +31 00 000 0000</div>
          <div class="reservation-detail">👥 0 guests</div>
          <div class="reservation-detail" style="margin-top:0.5rem; color:var(--text-secondary); font-size:0.68rem;">
            Notes: —
          </div>
        </div>
        <div>
          <div class="reservation-detail" style="font-size:0.6rem; letter-spacing:0.35em; text-transform:uppercase; color:var(--accent); margin-bottom:0.4rem;">Date</div>
          <div style="font-family:'Cormorant Garamond', serif; font-size:1.2rem; color:var(--text-primary);">00 Month 0000</div>
          <div class="reservation-time-block" style="margin-top:0.75rem;">
            <div class="reservation-time">00:00</div>
            <div class="reservation-duration">to 00:00 · 1 hour</div>
          </div>
        </div>
        <div style="display:flex; flex-direction:column; gap:0.75rem; align-items:flex-end;">
          <span class="badge badge-pending">Pending</span>
          <button class="btn" style="font-size:0.75rem; padding:0.4rem 1rem; white-space:nowrap;">Confirm</button>
          <button class="btn btn-danger" style="font-size:0.75rem; padding:0.4rem 1rem; white-space:nowrap;">Cancel</button>
        </div>
      </div>

      <div class="reservation-card">
        <div>
          <div class="reservation-customer">Placeholder Customer</div>
          <div class="reservation-detail">📧 customer@email.com</div>
          <div class="reservation-detail">📞 +31 00 000 0000</div>
          <div class="reservation-detail">👥 0 guests</div>
          <div class="reservation-detail" style="margin-top:0.5rem; color:var(--text-secondary); font-size:0.68rem;">
            Notes: Placeholder special request
          </div>
        </div>
        <div>
          <div class="reservation-detail" style="font-size:0.6rem; letter-spacing:0.35em; text-transform:uppercase; color:var(--accent); margin-bottom:0.4rem;">Date</div>
          <div style="font-family:'Cormorant Garamond', serif; font-size:1.2rem; color:var(--text-primary);">00 Month 0000</div>
          <div class="reservation-time-block" style="margin-top:0.75rem;">
            <div class="reservation-time">00:00</div>
            <div class="reservation-duration">to 00:00 · 1 hour</div>
          </div>
        </div>
        <div style="display:flex; flex-direction:column; gap:0.75rem; align-items:flex-end;">
          <span class="badge badge-confirmed">Confirmed</span>
          <button class="btn btn-danger" style="font-size:0.75rem; padding:0.4rem 1rem; white-space:nowrap;">Cancel</button>
        </div>
      </div>

    </div>
  </div>
</body>
</html>
