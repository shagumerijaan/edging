
<?php
require_once __DIR__ . '/include/configweb.php'; // adjust path if needed
?>

<html lang="en">
<head>
   <link rel="canonical" href="<?php echo getUrl(); ?>" /> 
  <title>Eco Cleaning Melbourne | Edge 2 Edge – Safe & Organic</title>
<meta name="description" content="Eco-friendly home, office & commercial cleaning in Toorak using non-toxic, Australian-made products. Book with Edge 2 Edge Cleaning today!" />
      <meta property="og:title" content="Eco-Friendly Cleaning in Melbourne | Edge 2 Edge Cleaning" />
<meta property="og:description" content="Book eco-friendly, non-toxic home, office & commercial cleaning using Australian-made products. Available across Melbourne." />
<meta property="og:image" content="<?php echo getUrl('assets/img/builder-cleaning.jpg'); ?>" />
<meta property="og:url" content="<?php echo getUrl(); ?>" />
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Edge 2 Edge Cleaning" />
    
      <!-- Geo-Targeting Meta Tags -->
    <meta name="geo.region" content="AU-VIC" />
    <meta name="geo.placename" content="Toorak" />
    <meta name="geo.position" content="-37.8417;145.0167" />
    <meta name="ICBM" content="-37.8417, 145.0167" />
    
    <!-- Local Business Schema -->

        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
<meta name="keywords" content=" Eco-friendly in Mellbourne, Organic Cleaner in Australia, Builders Clean in toorak, Domestic Cleaning near toorak, Edge 2 Edge cleaning services, Edge 2 Edge cleaner in toorak, Edge 2 Edge builder clean in victoria, toorak edge 2 edge cleaner, cleaner near southyarra, Toorak House Cleaner, cleaner toorak,End of lease cleaning">
<meta name="description" content="As a distinguished luxury professional cleaning company, Edge 2 Edge Cleaning Services is dedicated to delivering exceptional domestic cleaning services to every home in Australia. Our comprehensive range of services includes Window Cleaning, Builders Cleaning, House Cleaning, Domestic Cleaning, Commercial Cleaning, Covid-19 Deep Cleaning, Spring Cleaning, Pressure Washing, and End of Lease Cleaning.">
<meta name="categories" content="Window_Cleaning, House_Cleaning , Builders_Cleaning, Domestic_Cleaning, Commercial_cleaning,Sanitising, Spring_ Cleaning, Covid_19_Deep_Cleaning, Pressure_washing, End_Of_Lease_cleaning">

<?php include('style.php'); ?>
</head>
<body>

<?php include('topbar.php'); ?>
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
   
   <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-TWEKM35J8Z">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-TWEKM35J8Z');
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "Edge2Edge Cleaning – Professional Services in Melbourne",
  "description": "Edge2Edge Cleaning provides residential, commercial, and end-of-lease cleaning services in Melbourne.",
  "thumbnailUrl": "<?php echo getUrl('assets/images/video-thumbnail.jpg'); ?>",
  "uploadDate": "2025-07-01",
  "contentUrl": "<?php echo getUrl('assets/videos/edge2edge-intro.mp4'); ?>",
  "embedUrl": "<?php echo getUrl(); ?>",
  "duration": "PT1M30S"
}
</script>
<style>
  .hero-section {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
  }

  .background-video {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
  }

  .slide-content {
    position: relative;
    z-index: 1;
    max-width: 700px;
    color: white;
    background: rgba(0, 0, 0, 0.4);
    padding: 20px;
    border-radius: 8px;
    text-align: left;
  }

  .slide-content h1 {
    font-size: 30px;
    margin-bottom: 10px;
     color: #ff6600;
  }

  .slide-content p {
    font-size: 12px;
    margin-bottom: 20px;
   color: white;
  }

  .button-group {
    display: flex;
    gap: 15px;
  }

  .btn {
    padding: 12px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 16px;
  }

  .btn-call {
    background: #ff6600;
    color: white;
  }

  .btn-quote {
    background: #007bff;
    color: white;
  }

  .btn:hover {
    opacity: 0.8;
  }

  @media (max-width: 768px) {
    .slide-content {
      max-width: 90%;
      text-align: center;
    }

    .slide-content h1 {
      font-size: 22px;
    }

    .slide-content p {
      font-size: 16px;
    }

    .button-group {
      flex-direction: column;
      align-items: center;
    }
  }

  .mute-toggle {
    position: absolute;
    bottom: 20px;
    right: 20px;
    background: rgba(0,0,0,0.6);
    color: white;
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    cursor: pointer;
    z-index: 2;
    border-radius: 5px;
  }

  .mute-toggle:hover {
    background: rgba(0,0,0,0.8);
  }
</style>

<div class="hero-section">
  <video id="bgVideo" autoplay muted loop playsinline class="background-video">
    <source src="assets/img/slide-bg-1.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>

  <div class="slide-content">
    <h1>Expert After-Build Cleaners | Residential, Commercial Cleaning</h1>
    <p>From debris removal to fine detailing — we ensure your site is clean, safe, and move-in ready.</p>
    <div class="button-group">
      <a href="tel:+61481992891" class="cleaning-btn slide-btn">📞 Call Us: +61 481 992 891</a>
      <a href="<?=$webRoot;?>get-a-quote" class="cleaning-btnnew slide-btn">📝 Get A Quote</a>
    </div>
  </div>

  <!-- 🔊 Mute/Unmute Button -->
  <button class="mute-toggle" onclick="toggleMute()">🔇 Unmute</button>
</div>

<script>
  const video = document.getElementById('bgVideo');
  const btn = document.querySelector('.mute-toggle');

  function toggleMute() {
    video.muted = !video.muted;
    btn.textContent = video.muted ? '🔇 Unmute' : '🔊 Mute';
  }
</script>



<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
  }

  .hero-section {
    position: relative;
    width: 100%;
    height: 100vh;
    overflow: hidden;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
  }

  .background-video {
    position: absolute;
    top: 0; left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
  }

  .slide-content {
    position: relative;
    z-index: 1;
    max-width: 700px;
    color: white;
    background: rgba(0, 0, 0, 0.4);
    padding: 20px;
    border-radius: 8px;
    text-align: left;
  }

  .slide-content h1 {
    font-size: 36px;
    margin-bottom: 10px;
  }

  .slide-content p {
    font-size: 18px;
    margin-bottom: 20px;
  }

  .button-group {
    display: flex;
    gap: 15px;
  }

  .btn {
    padding: 12px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 16px;
  }

  .btn-call {
    background: #ff6600;
    color: white;
  }

  .btn-quote {
    background: #007bff;
    color: white;
  }

  .btn:hover {
    opacity: 0.8;
  }

  @media (max-width: 768px) {
    .slide-content {
      max-width: 90%;
      text-align: center;
    }

    .slide-content h1 {
      font-size: 28px;
    }

    .slide-content p {
      font-size: 16px;
    }

    .button-group {
      flex-direction: column;
      align-items: center;
    }
  }
</style>

 <section class="gallery-section text-center">
    <div class="section-title text-center">
        <h2>Why Choose Edge 2 Edge Cleaning?</h2>
    </div>
    <div class="container">
        <div class="row align-items-center">
            <!-- Video Section -->
            <div class="col-lg-5"> <div class="video-container">
                                  <video autoplay muted loop playsinline class="styled-video">
                        <source src="/assets/img/Edgevideo.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>  </div>
                <!-- Text Section -->
            <div class="col-lg-7 text-left">
                <ul class="list-inline">
                    <li><img src="<?=$webRoot;?>assets/img/check.png" alt="check" /> We are your local cleaning experts, serving 80 KM area from toorak and the surrounding areas.</li>
                    <li><img src="<?=$webRoot;?>assets/img/check.png" alt="check" /> Our team is highly trained, experienced, and dedicated to delivering the best results.</li>
                    <li><img src="<?=$webRoot;?>assets/img/check.png" alt="check" /> We offer competitive cleaning rates and flexible scheduling to meet your needs.</li>
                    <li><img src="<?=$webRoot;?>assets/img/check.png" alt="check" /> At Edge 2 Edge Cleaning, we believe that a clean space leads to a healthier and happier life.</li>
                </ul>
                <h4 class="mt-60">Achieve cleanliness and hygiene like never before. Choose Edge 2 Edge Cleaning for all your cleaning needs!</h4>
                <p>Contact us today at [+61481992891] to schedule your cleaning service and experience the difference with Edge 2 Edge Cleaning.</p>
            </div>
        </div>
    </div>
</section>

<!-- CSS Styles -->
<style>
    .video-container {
        border: 5px solid #E8760C; /* Adds a blue border */
        padding: 5px; /* Adds spacing inside the border */
        display: inline-block;
    }

   .styled-video {
    width: 100%; /* Responsive width */
    max-width: 400px; /* Limits size on larger screens */
    height: auto; /* Maintains aspect ratio */
    border-radius: 10px; /* Adds rounded corners */
    display: block;
    margin: 0 auto; /* Centers the video */
}

/* Adjust for smaller screens */
@media (max-width: 768px) {
    .styled-video {
        max-width: 300px; /* Smaller size for mobile */
    }
}
</style>

   <section class="cleaning-content-block about-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center">
                    <h2>Achieve a Spotless Home or Office with Edge 2 Edge Cleaning</h2>
                    <p>
                        When it comes to maintaining a clean and hygienic environment, you deserve nothing but the best. At Edge 2 Edge Cleaning, we understand the importance of cleanliness, whether it's your home or workplace. Our team of dedicated professionals specializes in a wide range of cleaning services, ensuring that your space is not just clean but spotless.
                    </p>
                    <p>
                        With our commitment to excellence and a keen eye for detail, we've become the top choice for cleaning services in [Toorak and nearby 10 km radius].
                    </p>
                </div>
            </div>  </div>
            </div>
           <div class="cleaning-mini-banner">
      <div class="d-table">
         <div class="d-tablecell">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <h2 style="color:#fff !important;">Services</h2>
                  </div>
                                   </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <section class="services-provide pt-100 pb-70">
      <div class="container">
         <div class="section-title2">
            <h4>our services</h4>
            <h2>Bringing Joy with Exquisite Professional Cleaning Services</h2>
         </div>
         <div class="row">
            <div class="col-md-6 col-lg-4">
               <div class="single-pro-service">
                  <div class="pro-img">
                     <img src="<?=$webRoot;?>assets/img/builder-cleaning.jpg" alt="Image">
                  </div>
                  <div class="p-serv-caption">
                     <h3>Builders Cleaning</h3>
                     <p>A builders clean encompasses a thorough cleaning of all project areas, including kitchens, bathrooms, bedrooms, joinery, floors, walls, skirtings, windows, and frames, essential for all builders.</p>
                     <a href="<?=$webRoot;?>builders-cleaning" class="cleaning-btn pro-serv-btn">view details</a>
                  </div>
               </div>
            </div>
            <div class="col-md-6 col-lg-4">
               <div class="single-pro-service">
                  <div class="pro-img">
                     <img src="<?=$webRoot;?>assets/img/windowcleaning.jpg" alt="Image">
                  </div>
                  <div class="p-serv-caption">
                     <h3>Window Cleaning</h3>
                     <p>Window cleaning involves cleaning architectural glass for structural, lighting, or decorative purposes, utilizing manual tools, access equipment, and automation.</p>
                     <a href="<?=$webRoot;?>window-cleaning" class="cleaning-btn pro-serv-btn">view details</a>
                  </div>
               </div>
            </div>
            
                <div class="col-md-6 col-lg-4">
               <div class="single-pro-service">
                  <div class="pro-img">
                     <img src="<?=$webRoot;?>assets/img/cleaning-home.jpg" alt="Image">
                     
                  </div>
                  <div class="p-serv-caption">
                     <h3>House Cleaning</h3>
                     <p>House cleaning is a comprehensive service encompassing tasks like kitchen, lounge, bathroom, and bedroom cleaning, including mopping, vacuuming, dusting, polishing, and sweeping.</p>
                     <a href="<?=$webRoot;?>house-cleaning" class="cleaning-btn pro-serv-btn">view details</a>
                  </div>
               </div>
            </div>
            
        
            
           
            
            
            <div class="col-md-6 col-lg-4">
               <div class="single-pro-service">
                  <div class="pro-img">
                     <img src="<?=$webRoot;?>assets/img/domestic.jpg" alt="Image">
                     
                  </div>
                  <div class="p-serv-caption">
                     <h3>Domestic Cleaning</h3>
                     <p>Domestic cleaning involves performing cleaning tasks within a private residential home, typically encompassing activities like dusting, vacuuming, mopping, and cleaning bathrooms and kitchens.</p>
                     <a href="<?=$webRoot;?>domestic-cleaning" class="cleaning-btn pro-serv-btn">view details</a>
                  </div>
               </div>
            </div>
            
            
          
            <div class="col-md-6 col-lg-4">
               <div class="single-pro-service">
                  <div class="pro-img">
                     <img src="<?=$webRoot;?>assets/img/service08.jpg" alt="Image">
                  </div>
                  <div class="p-serv-caption">
                     <h3>Spring Cleaning</h3>
                     <p>Spring cleaning, typically undertaken in colder climates after winter, involves a thorough house cleaning during spring, but in some cultures, annual cleaning occurs at year-end, determined by the calendar.</p>
                     <a href="<?=$webRoot;?>spring-cleaning" class="cleaning-btn pro-serv-btn">view details</a>
                  </div>
               </div>
            </div>
            
            
            <div class="col-md-6 col-lg-4">
               <div class="single-pro-service">
                  <div class="pro-img">
                     <img src="<?=$webRoot;?>assets/img/pressure-washing.jpg" alt="Image">
                  </div>
                  <div class="p-serv-caption">
                     <h3>Pressure Washing</h3>
                     <p>Pressure washing is a cleaning technique that use the high-pressure water spray to remove dirt and grime from surfaces.</p>
                     <a href="<?=$webRoot;?>pressure-washing" class="cleaning-btn pro-serv-btn">view details</a>
                  </div>
               </div>
            </div>
            
         </div>
      </div>
   </section>
  
  
   <!--<div class="working-info">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-lg-6">
               <div class="single-working-info wow fadeInUp">
                  <i class="fa fa-clock-o"></i>
                  <h3>Opening Hours</h3>
                  <p>
                     Monday - Friday <br />
                     <span>08.00 am - 10.00 pm</span>
                  </p>
               </div>
            </div>
            <div class="col-md-6 col-lg-6">
               <div class="single-working-info wow fadeInUp" data-wow-delay="0.4s">
                  <i class="fa fa-phone"></i>
                  <h3>Any Questions?</h3>
                  <p>
                     Call Us Now <br />
                     <span>048-1992-891</span>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </div>
  
   <section class="cleaning-content-block achivment-section">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-lg-3 wow fadeInUp">
               <div class="counter-box">
                  <i class="fa fa-calendar"></i>
                  <h3 class="counter-number">10</h3>
                  <p>Years Experience</p>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
               <div class="counter-box">
                  <i class="fa fa-user-plus"></i>
                  <h3 class="counter-number">9975</h3>
                  <p>Satisfied Customers</p>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
               <div class="counter-box">
                  <i class="fa fa-home"></i>
                  <h3 class="counter-number">382</h3>
                  <p>Live sites across Australia</p>
               </div>
            </div>
            <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
               <div class="counter-box">
                  <i class="fa fa-bath"></i>
                  <h3 class="counter-number">499</h3>
                  <p>Covid cleans to date</p>
               </div>
            </div>
         </div>
      </div>
   </section>-->

 
   
   
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
                            <h2 style="color:#fff !important;" >Get A Quote</h2>
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
                  <input type="text" name="website" id="website" style="display:none;" />
                            <form method="POST" action="" name="myform" onsubmit="return validateForm()">
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
                                            <option value="Commercial Cleaning">Commercial Cleaning</option>
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
                                <input type="submit" class="sbmt-btn" name="sendmessage" value="Send Message">
                            </div>
                            <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">
                             </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php include('footer.php'); ?>
   
