<?php
require_once __DIR__ . '/include/configweb.php';
?>

<html lang="en">
<head>
    <title>Contact Edge 2 Edge | Eco-Friendly Cleaning Services in Toorak, Melbourne</title>
    <meta name="description" content="Contact Edge 2 Edge Cleaning in Toorak for eco-friendly cleaning services. Call ☎ 148-1992-891 or message us for residential & commercial cleaning quotes across Melbourne." />
    <link rel="canonical" href="<?php echo getUrl('contact-us.php'); ?>" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    
    <!-- Geo-Targeting Meta Tags -->
    <meta name="geo.region" content="AU-VIC" />
    <meta name="geo.placename" content="Toorak" />
    <meta name="geo.position" content="-37.8417;145.0167" />
    <meta name="ICBM" content="-37.8417, 145.0167" />
    
    <!-- Local Business Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "LocalBusiness",
      "name": "Edge 2 Edge Cleaning",
      "image": "<?php echo getUrl('assets/img/logo.png'); ?>",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Your Street Address",
        "addressLocality": "Toorak",
        "addressRegion": "VIC",
        "postalCode": "3142",
        "addressCountry": "AU"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": "-37.8417",
        "longitude": "145.0167"
      },
      "url": "<?php echo getUrl(); ?>",
      "telephone": "+6148-1992-891",
      "openingHours": "Mo,Tu,We,Th,Fr 08:00-17:00",
      "priceRange": "$$"
    }
    </script>

    <meta name="keywords" content="cleaning service Toorak, contact cleaners Melbourne, eco cleaning company Victoria, house cleaning Toorak, commercial cleaners South Yarra, window cleaning contact, end of lease cleaning service, builders cleaning quote, domestic cleaners near me">
</head>
<?php include('style.php'); ?>
</head>
<body>
   <?php include('topbar.php'); ?>
   <div class="cleaning-mini-banner">
            <div class="d-table">
                <div class="d-tablecell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Contact Us</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="cleaning-breadcumb">
                                   <a href="<?=$webRoot;?>">Home</a> / Contact Us
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
                   <div class="col-lg-4 col-md-5">
                       <div class="address-area">
                           <ul>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h3>Phone</h3>
                                    <p>048-1992-891</p>
                                </li>
								<li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                                    <h3>E-mail</h3>
                                    <p><a href="mailto:<?php echo getEmailAddress(); ?>" class="__cf_email__"><?php echo getEmailAddress(); ?></a></p>	
                                </li>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <h3>Address</h3>
                                    <p>5/789 Malvern Road toorak 3142</p>	
                                </li>                               
                               	
                            </ul>
                       </div>
                   </div>
                   <div class="col-lg-8 col-md-7">
                       <div class="contact-form-area">
                            <div class="contact-info text-center">
                               <h2>Lets Talk About The Project</h2>
                               <p>We are always ready to listen you first</p>
                            </div>
                            <?php if(isset($msg)){ echo $msg; } ?>
                            <form method="POST" action="" name="myform">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="contact_name" placeholder="Name*" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="contact_email" placeholder="E-mail*" required>
                                        </div>
                                    </div>
									<div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="phone" id="contact_phone" placeholder="Phone*" required restrict="A-Z\a-z\0-9">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="location" id="contact_subject" placeholder="Location*" required restrict="A-Z\a-z\0-9">
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="form-group mb-18">
                                    <textarea name="message" id="contact_message" name="message" rows="6" placeholder="Message*" required restrict="A-Z\a-z\0-9"></textarea>
                                </div>
<input type="text" name="website" style="display:none;" />
                                    
                                </div>
                                <div class="text-center">
                                    <div id="contact_send_status"></div>
                                    <input type="submit" class="cleaning-btn sbmt-btn" name="submit" value="Get in touch">
                                    </div>
                            </form>
                       </div>
                   </div>
               </div>
            </div>
        </section>
        
        <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3150.4407841545435!2d145.0177899146826!3d-37.849975579745795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642763b4adc0b%3A0xdc46edd5b649933b!2s5%2F789%20Malvern%20Rd%2C%20Toorak%20VIC%203142%2C%20Australia!5e0!3m2!1sen!2sin!4v1660455342758!5m2!1sen!2sin"></iframe>
        </div>
   <?php include('footer.php'); ?>
   
   
   
     <?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$msg = "";
   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_POST['website'])) {
        $msg = "<div class='alert alert-danger'>Spam detected. Submission blocked.</div>";
    } else {
        
 
        
        
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $location = trim($_POST['location']);
       
       
        $message = trim($_POST['message']);

        // Garbage word check
        $garbage_words = ['asd', 'test', 'qwe', 'xyz', 'demo', '123456', 'hi'];
        foreach ($garbage_words as $word) {
            if (stripos($name, $word) !== false || stripos($message, $word) !== false) {
                $msg = "<div class='alert alert-danger'>Fake input detected. Please enter valid details.</div>";
                break;
            }
        }

        // Only validate/send if no previous error
        if (empty($msg)) {
            if (!preg_match("/^[a-zA-Z\s]{3,}$/", $name)) {
                $msg = "<div class='alert alert-danger'>Please enter a valid name (at least 3 letters).</div>";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $msg = "<div class='alert alert-danger'>Invalid email format.</div>";
            } elseif (!checkdnsrr(substr(strrchr($email, "@"), 1), "MX")) {
                $msg = "<div class='alert alert-danger'>Email domain doesn't exist.</div>";
            } elseif (!preg_match("/^[0-9+\-\s]{8,15}$/", $phone)) {
                $msg = "<div class='alert alert-danger'>Invalid phone number.</div>";
            } elseif (strlen($message) < 10) {
                $msg = "<div class='alert alert-danger'>Message is too short.</div>";
            } else {
                // Check for duplicate (email + IP within 5 min)
                $ip = $_SERVER['REMOTE_ADDR'];
                $log_file = "form-submission-log.txt";
                $entry = "$email|$ip|" . time() . "\n";
                $duplicate = false;

                if (file_exists($log_file)) {
                    $lines = file($log_file, FILE_IGNORE_NEW_LINES);
                    foreach ($lines as $line) {
                        list($logged_email, $logged_ip, $timestamp) = explode('|', $line);
                        if ($logged_email == $email && (time() - $timestamp) < 300) {
                            $duplicate = true;
                            break;
                        }
                    }
                }

                if ($duplicate) {
                    $msg = "<div class='alert alert-warning'>You've already submitted recently. Please wait before trying again.</div>";
                } else {
                    file_put_contents($log_file, $entry, FILE_APPEND);

                    $to = getEmailAddress();
                    $subject = "ESTIMATION FORM EDGE2EDGE CLEANING";

                    $content = "<b>Name:</b> $name<br />";
                    $content .= "<b>Email:</b> $email<br />";
                    $content .= "<b>Phone:</b> $phone<br />";
                    $content .= "<b>Location:</b> $location<br />";
                   
                    $content .= "<b>Message:</b> $message";

                    $headers = "From: $name <$email>\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

                    if (mail($to, $subject, $content, $headers)) {
                        $msg = "<p style='color:green; text-align: center;'>Thanks for contacting us! We will be in touch with you shortly.</p>";
                    } else {
                        $msg = "<p style='color:red; text-align: center;'>Problem on sending mail. Please try again later.</p>";
                    }
                }
            }
        }
    }
}
?>
   
  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $message = $_POST['message'];

    // Email information
    $to = getEmailAddress(); // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nLocation: $location\nMessage: $message";

    // Additional headers
    $headers = "From: $email\r\n"; // Set the "From" header to the user's email address

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        $msg = "Thank you for your message. We will get back to you soon!";
    } else {
        $msg = "Oops! Something went wrong. Please try again later.";
    }
    if (!empty($_POST['website'])) {
    // it's a bot submission - discard
}
}
?>