<?php
require_once __DIR__ . '/include/configweb.php'; // adjust path if needed
?>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />
<link rel="canonical" href="<?php echo getUrl('booking.php'); ?>" />
  <title>Book Your Eco Cleaning Service in Melbourne | Edge 2 Edge Cleaning</title>
  <meta name="description" content="Book a trusted, eco-friendly cleaning service in Melbourne. Edge 2 Edge Cleaning offers online booking for residential, commercial, and builders cleans. Based in Toorak, servicing South Yarra, Richmond, and nearby suburbs." />

  <meta name="keywords" content="Book cleaning service Melbourne, Edge 2 Edge Cleaning, eco cleaning Toorak, online cleaning booking, organic house cleaning VIC, domestic cleaners Melbourne, end of lease cleaning Toorak, spring cleaning South Yarra, pressure washing Toorak, builders clean Melbourne, sanitising and deep cleaning, commercial cleaning Victoria" />

  <meta name="categories" content="Window_Cleaning, House_Cleaning, Builders_Cleaning, Domestic_Cleaning, Commercial_Cleaning, Spring_Cleaning, Deep_Cleaning, Covid_19_Cleaning, Pressure_Washing, End_of_Lease_Cleaning, Sanitising_Services" />
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Include FontAwesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<?php include('style.php'); ?>

<!-- Include FontAwesome CSS -->
  
    <!-- Add your custom CSS styles here -->
    <style>
        /* Style the container */
        .container {
            text-align: center;
            margin-top: 20px;
        }

        /* Style the icons */
        .icon {
            font-size: 24px;
            margin-right: 10px;
        }

        /* Style the summary items */
        .summary-item {
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <?php include('header.php'); ?>
 <?php include('topbar.php'); ?>
    <div class="cleaning-mini-banner">
        <div class="d-table">
            <div class="d-tablecell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 style="color:#fff !important;">Booking & Payment</h2>
                        </div>
                        <div class="col-md-6">
                            <div class="cleaning-breadcumb">
                                <a href="<?=$webRoot;?>">Home</a> / Booking & Payment
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 <section class="cleaning-content-block">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form-area">
                        <div class="contact-info text-center">
                            <h2>Edge 2 Edge Cleaning Services</h2>
                            <p>Accepting Booking Requests
                            We are currently open and have limited space for new customers! Book now to avoid missing out.
                            If you cannot find availability in the form below, please call us on 048-1992-891 and we will try to fit you in or offer you the closest available slot.</p>
                        </div>
<section class="cleaning-content-block">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="contact-form-area">
                    <div class="section-title text-center">
                        <!-- Your form code goes here -->
                        <form method="POST" action="payment.php" name="myform">
                            <!-- Add your form fields here -->
                            <form method="POST" action="payment.php" name="myform">
      <div class="form-group"><!-- Add your form fields here -->
    <label for="name">Your Name *</label>
    <input type="text" name="name" id="name" placeholder="Enter your name" required></div>
  <div class="form-group">
    <label for="email">Your Email *</label>
    <input type="email" name="email" id="email" placeholder="Enter your email" required></div>

                            <label for="cleaning-service">Primary Cleaning Service:</label>
                            <select name="cleaning-service" id="cleaning-service" class="cost-dropdown" required="">
                                <option value="" selected="selected">Choose</option>
                                <option value="Hourly service">Hourly service</option>
                                <option value="One Bedroom Apt/Home Cleaning">One Bedroom Apt/Home Cleaning</option>
                                <option value="Hourly service - 85 Aud/hour">Hourly service - 85 Aud/hour</option>
                                <option value="Builders Clean">Builders Clean</option>
                                <option value="Drive way Cleaning">Drive way cleaning</option>
                                <option value="Window Cleaning">Window Cleaning</option>
                                <option value="House Cleaning">House Cleaning</option>
                                <option value="Domestic Cleaning">Domestic Cleaning</option>
                              
                                <option value="Spring Cleaning">Spring Cleaning</option>
                                <option value="Covid 19 Deep Cleaning">Covid 19 Deep Cleaning</option>
                                <option value="Sanitising">Sanitising</option>
                                <option value="End of Lease Cleaning">End oF lease Cleaning</option>
                                <option value="Pressure Washing">Pressure Washing</option>
                                <option value="others">Others</option>
                            </select>

                            <div class="form-group">
                                <label for="custom-amount">Enter Amount *</label>
                                <input type="text" name="custom-amount" id="custom-amount" placeholder="Enter amount" required>
                            </div>

                            <div class="form-group">
                                <label for="other-details">Enter Other Details*</label>
                                <input type="text" name="other-details" id="other-details" placeholder="Enter other details" required>
                            </div>

                            <!-- Other form fields go here -->
                            <div class="text-center">
                                <input type="submit" class="sbmt-btn" name="sendmessage" value="Proceed to Payment" style="width: auto !important; min-width: 220px !important; padding: 14px 32px !important; text-align: center !important; white-space: nowrap !important; overflow: visible !important;">
                            </div>
                         
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="summary">
                    <h2>Your Selection Summary</h2>
                    <ul id="selection-summary">
                           
                        <!-- The summary will be dynamically updated here -->
                    </ul> 
                </div>
            </div>
        </div>
    </div>
</section>





<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    // JavaScript code for real-time summary
    $(document).ready(function () {
        $('select, input[type="text"]').on('change', function () {
            // Get the selected or entered values
            var selectedService = $('#cleaning-service').val();
            var customAmount = parseFloat($('#custom-amount').val()) || 0; // Convert to float
            var otherDetails = $('#other-details').val();

            // Calculate GST (10%)
            var gstAmount = customAmount * 0.1;

            // Calculate the final price including GST
            var finalPrice = customAmount + gstAmount;

            // Format final price as AUD
            var finalPriceAUD = 'AU$ ' + finalPrice.toFixed(2); // Round to 2 decimal places

            // Create list items with checkmark symbols
            var serviceListItem = '<li><span>&#10003;</span>Cleaning Service: ' + selectedService + '</li>';
            var amountListItem = '<li><span>&#10003;</span>Amount: AU$ ' + customAmount.toFixed(2) + '</li>';
            var gstListItem = '<li><span>&#10003;</span>GST (10%): AU$ ' + gstAmount.toFixed(2) + '</li>';
            var finalPriceListItem = '<li><span>&#10003;</span>Final Price (incl. GST): ' + finalPriceAUD + '</li>';
            var detailsListItem = '<li><span>&#10003;</span>Other Details: ' + otherDetails + '</li>';

            // Append the list items to the summary list
            $('#selection-summary').html(serviceListItem + amountListItem + gstListItem + finalPriceListItem + detailsListItem);
        });
    });
</script>


 <div class="row">
            <div class="col-lg-8 col-md-7 offset-md-2">
                       <div class="contact-form-area">
                            <div class="contact-info text-center">
                               <h2>Cancellation Policy</h2>
							   <p>Please note we have a 24-hour cancellation policy and any changes/cancellations within this time period will result in up to a 30% fee.</p>
<br>
<p>Remember - we don't charge a cent until after your service has taken place and we know you are happy!</p>
<br>
<P>Please remember all bookings via the website are requests and will be confirmed by our Team after checking availability.</p>
<br>
<p>By clicking the Book Now button you are agreeing to our Terms of Service and Privacy Policy.</p>
                            </div>
									
   </section>
   


   <?php include('footer.php'); ?>
   
   