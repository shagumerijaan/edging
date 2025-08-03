<?php
require_once __DIR__ . '/include/configweb.php'; // adjust path if needed
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

  <title>Book Your Eco Cleaning Service in Melbourne | Edge 2 Edge Cleaning</title>
  <meta name="description" content="Book a trusted, eco-friendly cleaning service in Melbourne. Edge 2 Edge Cleaning offers online booking for residential, commercial, and builders cleans. Based in Toorak, servicing South Yarra, Richmond, and nearby suburbs." />

  <meta name="keywords" content="Book cleaning service Melbourne, Edge 2 Edge Cleaning, eco cleaning Toorak, online cleaning booking, organic house cleaning VIC, domestic cleaners Melbourne, end of lease cleaning Toorak, spring cleaning South Yarra, pressure washing Toorak, builders clean Melbourne, sanitising and deep cleaning, commercial cleaning Victoria" />

  <meta name="categories" content="Window_Cleaning, House_Cleaning, Builders_Cleaning, Domestic_Cleaning, Commercial_Cleaning, Spring_Cleaning, Deep_Cleaning, Covid_19_Cleaning, Pressure_Washing, End_of_Lease_Cleaning, Sanitising_Services" />
</head>
<body>
    <form id="booking-form" action="process_payment.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <!-- Other booking fields here -->

        <label for="card">Card Number:</label>
        <input type="text" id="card" name="card" required><br>

        <button type="submit">Book & Pay</button>
    </form>

    <!-- JavaScript for Client-Side Validation -->
    <script>
        document.getElementById("booking-form").addEventListener("submit", function (event) {
            if (!isValid()) {
                event.preventDefault(); // Prevent form submission
            }
        });

        function isValid() {
            // Implement your validation logic here
            // Return true if the form is valid, false otherwise
            // You can use JavaScript to check the form fields and display error messages if needed
            // For example, you can use regular expressions to validate the card number
            return true; // Change to your validation logic
        }
    </script>

    <?php
    // PHP code for server-side processing can be added here
    // For example, you can process form data and initiate payment processing
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Process form data here
        $name = $_POST['name'];
        $email = $_POST['email'];
        // Process other form fields

        // Redirect to payment processing page
        header('Location: process_payment.php');
        exit;
    }
    ?>
</body>
</html>
