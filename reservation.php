<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservation — The Hatch Burgers</title>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,600;1,400&family=Bebas+Neue&family=DM+Sans:wght@200;300;400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?php $activePage = 'reservation'; include 'header.php'; ?>

  <div class="page-header">
    <div class="page-title">Reservation</div>
    <div class="page-subtitle">Book a table · 1 hour slots</div>
    <div class="gold-rule"></div>
  </div>

  <main>
    <!-- FORM — connect action to reservation.php -->
    <form class="reservation-layout" action="reservation.php" method="POST">

      <!-- LEFT: Customer details + date -->
      <div>
        <div class="form-group">
          <label class="form-label">Full Name</label>
          <input class="form-input" type="text" name="name" placeholder="John Smith" required>
        </div>
        <div class="form-group">
          <label class="form-label">Email Address</label>
          <input class="form-input" type="email" name="email" placeholder="john@example.com" required>
        </div>
        <div class="form-group">
          <label class="form-label">Phone Number</label>
          <input class="form-input" type="tel" name="phone" placeholder="+31 00 000 0000">
        </div>
        <div class="form-group">
          <label class="form-label">Number of Guests</label>
          <select class="form-select" name="guests">
            <option>1 guest</option>
            <option>2 guests</option>
            <option>3 guests</option>
            <option>4 guests</option>
            <option>5+ guests</option>
          </select>
        </div>
        <div class="form-group">
          <label class="form-label">Date</label>
          <input class="form-input" type="date" name="date" required>
        </div>
        <div class="form-group">
          <label class="form-label">Notes (optional)</label>
          <textarea class="form-textarea" name="notes" placeholder="Allergies, special requests..."></textarea>
        </div>
      </div>

      <!-- RIGHT: Time slot picker + summary -->
      <div>
        <div class="form-group">
          <label class="form-label">Select a Time Slot (1h)</label>
          <!-- PHP will generate these slots dynamically based on availability -->
          <div class="time-slots">
            <div class="time-slot">12:00</div>
            <div class="time-slot">13:00</div>
            <div class="time-slot selected">14:00</div>
            <div class="time-slot">15:00</div>
            <div class="time-slot unavailable">16:00</div>
            <div class="time-slot">17:00</div>
            <div class="time-slot">18:00</div>
            <div class="time-slot unavailable">19:00</div>
            <div class="time-slot">20:00</div>
            <div class="time-slot">21:00</div>
            <div class="time-slot">22:00</div>
          </div>
          <!-- Hidden input to hold selected time — set via PHP/JS -->
          <input type="hidden" name="time" value="14:00">
        </div>

        <!-- RESERVATION SUMMARY -->
        <div class="reservation-summary">
          <div class="reservation-summary-title">Booking Summary</div>
          <div class="summary-row">
            <span class="summary-label">Date</span>
            <span class="summary-val">— Select a date</span>
          </div>
          <div class="summary-row">
            <span class="summary-label">Time</span>
            <span class="summary-val">14:00 – 15:00</span>
          </div>
          <div class="summary-row">
            <span class="summary-label">Duration</span>
            <span class="summary-val">1 hour</span>
          </div>
          <div class="summary-row">
            <span class="summary-label">Guests</span>
            <span class="summary-val">— Select guests</span>
          </div>
        </div>

        <button class="btn" type="submit" style="width:100%; margin-top:1.5rem; text-align:center;">
          Confirm Reservation
        </button>
      </div>

    </form>
  </main>
</body>
</html>
