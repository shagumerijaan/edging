<?php
require_once __DIR__ . '/include/configweb.php';
?>

<html lang="en">
<head>
    <title>Instant Cleaning Quote | Toorak & Melbourne | Edge 2 Edge</title>
    <meta name="description" content="Get a free instant quote for eco-friendly cleaning services in Toorak. Our 60-second form calculates prices for domestic, commercial, and specialized cleaning across Melbourne." />
    <link rel="canonical" href="<?php echo getUrl('get-a-quote.php'); ?>" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    
    <!-- Conversion Tracking -->
    <meta name="robots" content="noindex" /> <!-- Remove after testing -->
    <meta property="og:url" content="<?php echo getUrl('get-a-quote'); ?>" />
    
    <!-- Geo & Business Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Get a Cleaning Quote",
      "description": "Instant pricing calculator for cleaning services",
      "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [{
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "<?php echo getUrl(); ?>"
        },{
          "@type": "ListItem",
          "position": 2,
          "name": "Get a Quote"
        }]
      },
      "potentialAction": {
        "@type": "OrganizeAction",
        "target": {
          "@type": "EntryPoint",
          "urlTemplate": "<?php echo getUrl('get-a-quote'); ?>",
          "actionPlatform": [
            "http://schema.org/DesktopWebPlatform",
            "http://schema.org/IOSPlatform",
            "http://schema.org/AndroidPlatform"
          ]
        }
      }
    }
    </script>

    <meta name="keywords" content="cleaning quote Toorak, instant price calculator, house cleaning estimate Melbourne, commercial cleaning rates, free online quote, eco cleaning pricing, same-day service cost, transparent pricing">
</head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <?php include('style.php'); ?>
</head>
<body>
     <?php include('topbar.php'); ?>
   

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
        $post_code = trim($_POST['post_code']);
        $preferred_date = htmlspecialchars($_POST['preferred_date']);
        $cleaning_supplies = htmlspecialchars($_POST['cleaning-supplies']);
        $Enter_other_details = htmlspecialchars($_POST['Enter_other_details']);
        $cleaning_supplies1 = htmlspecialchars($_POST['cleaning-supplies1']);
        $Enter_other_details1 = htmlspecialchars($_POST['Enter_other_details1']);
        $cleaning_frequency = htmlspecialchars($_POST['cleaning-frequency']);
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
                    $content .= "<b>Post Code:</b> $post_code<br />";
                    $content .= "<b>Preferred Date:</b> $preferred_date<br />";
                    $content .= "<b>Choose the service:</b> $cleaning_supplies<br />";
                    $content .= "<b>Enter other details:</b> $Enter_other_details<br />";
                    $content .= "<b>Choose the service (type):</b> $cleaning_supplies1<br />";
                    $content .= "<b>Enter other details1:</b> $Enter_other_details1<br />";
                    $content .= "<b>Cleaning frequency:</b> $cleaning_frequency<br />";
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
    <div class="cleaning-mini-banner">
        <div class="d-table">
            <div class="d-tablecell">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Get A Quote</h2>
                        </div>
                        <div class="col-md-6">
                            <div class="cleaning-breadcumb">
                                <a href="<?=$webRoot;?>">Home</a> / Get A Quote
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
                            <h2>Edge 2 Edge Cleaning Services Quotes</h2>
                            <p>We are currently open and have limited space for new customers! Book now to avoid missing out.</p>
                        </div>

                        <?php if (isset($msg)) { echo $msg; } ?>
                        <form method="POST" action="" name="myform">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Name*</label>
                                        <input type="text" name="name" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email*</label>
                                        <input type="email" name="email" placeholder="E-mail" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone*</label>
                                        <input type="text" name="phone" placeholder="Phone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Location*</label>
                                        <input type="text" name="location" placeholder="Location" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Enter Post Code*</label>
                                        <input type="text" name="post_code" placeholder="Enter Post Code" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Preferred Date*</label>
                                        <input type="date" name="preferred_date" required>
                                    </div>
                                </div>
                                
                               
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Choose the service:*</label>
                                        <select name="cleaning-supplies" required>
                                            <option value="" selected="selected">Choose</option>
                                            <option value="Hourly service">Hourly service - 85$/hour</option>
                                            <option value="One Bedroom Apt/Home Cleaning">One Bedroom Apt/Home Cleaning</option>
                                            <option value="Two Bedroom Home Cleaning">Two Bedroom Home Cleaning</option>
                                            <option value="Three Bedroom Home Cleaning">Three Bedroom Home Cleaning</option>
                                            <option value="Four Bedroom Home Cleaning">Four Bedroom Home Cleaning</option>
                                            <option value="Five Bedroom Home Cleaning">Five Bedroom Home Cleaning</option>
                                            <option value="Six Bedroom Home Cleaning">Six Bedroom Home Cleaning</option>
                                            <option value="Steam Cleaning /bedroom">Steam Cleaning /bedroom</option>
                                            <option value="others">others</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Enter other details*</label>
                                        <input type="text" name="Enter_other_details" placeholder="Enter other details" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Choose the service type:*</label>
                                        <select name="cleaning-supplies1" required>
                                            <option value="" selected="selected">Choose</option>
                                            <option value="Builders Clean">Builders Clean</option>
                                            <option value="Drive way Cleaning">Drive way cleaning</option>
                                            <option value="Window Cleaning">Window Cleaning</option>
                                            <option value="House Cleaning">House Cleaning</option>
                                            <option value="Domestic Cleaning">Domestic Cleaning</option>

                                            <option value="Spring Cleaning">Spring Cleaning</option>
                                            <option value="Covid 19 Deep Cleaning">Covid 19 Deep Cleaning</option>
                                            <option value="Deep Cleaning">Deep Cleaning</option>
                                            <option value="Sanitising">Sanitising</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Enter other details1*</label>
                                        <input type="text" name="Enter_other_details1" placeholder="Enter other details" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Cleaning frequency:*</label>
                                        <select name="cleaning-frequency" required>
                                            <option value="" selected="selected">Choose</option>
                                            <option value="Weekly">Weekly</option>
                                            <option value="Fortnightly">Fortnightly</option>
                                            <option value="Monthly">Monthly</option>
                                            <option value="One-off">One-off</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Message</label>
                                        <textarea name="message" rows="5" placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <div id="contact_send_status"></div>
                                <input type="submit" class="cleaning-btn sbmt-btn" name="sendmessage" value="Send Message">
                            </div>
                            <input type="text" name="website" style="display:none;" />
                                   </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include('footer.php'); ?>
    
    <script>
  function validateForm() {
    const form = document.forms["myform"];
    const name = form["name"].value.trim();
    const phone = form["phone"].value.trim();
    const details = form["Enter_other_details"].value.trim();
    const message = form["message"].value.trim();
    const honeypot = form["website"].value;

    const nameRegex = /^[a-zA-Z\s]{3,}$/;
    const phoneRegex = /^[0-9+\-\s]{7,15}$/;

    // Honeypot check (bot fills hidden fields)
    if (honeypot !== "") {
      alert("Spam detected.");
      return false;
    }

    if (!nameRegex.test(name)) {
      alert("Please enter a valid name (only letters, min 3 characters).");
      return false;
    }

    if (!phoneRegex.test(phone)) {
      alert("Please enter a valid phone number.");
      return false;
    }

    if (details.length < 5) {
      alert("Please enter more details.");
      return false;
    }

    if (message !== "" && message.length < 10) {
      alert("Your message is too short.");
      return false;
    }

    return true;
  }
</script>
</body>
</html>
