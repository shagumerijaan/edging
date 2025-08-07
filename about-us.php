
<?php
require_once __DIR__ . '/include/configweb.php'; // adjust path if needed
?>

<html lang="en">
<head>
   <link rel="canonical" href="<?php echo getUrl('about-us.php'); ?>" /> 
  <title>About Us – Melbourne’s Eco‑Friendly Cleaning Experts | Edge 2 Edge</title>
<meta name="description" content="Learn how Edge 2 Edge Cleaning, based in Toorak, Victoria, uses Australian-made eco products and 5 years’ experience to deliver safe & sustainable cleaning across Melbourne." />
    
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">

    <meta name="description" content="Edge 2 Edge Cleaning is Melbourne’s trusted eco-friendly cleaning company. Based in Toorak, we provide organic, non-toxic solutions for residential and commercial spaces, including window, builders, spring, and end of lease cleaning services.">

  <meta name="keywords" content="Edge 2 Edge Cleaning, eco-friendly cleaning Melbourne, organic cleaning Toorak, builders cleaning Melbourne, domestic cleaning Toorak, commercial cleaning South Yarra, house cleaning Toorak, end of lease cleaning Victoria, window cleaning Melbourne, spring cleaning Toorak, deep cleaning, sanitising services, pressure washing">

  <meta name="categories" content="Window_Cleaning, House_Cleaning, Builders_Cleaning, Domestic_Cleaning, Commercial_Cleaning, Spring_Cleaning, Deep_Cleaning, Covid_19_Cleaning, Pressure_Washing, End_of_Lease_Cleaning, Sanitising_Services">
</head>
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
<?php include('style.php'); ?>





  <style>
        /* General Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Homepage Slides */
        .homepage-slides {
            width: 100%;
            overflow: hidden;
        }

        /* Single Slide */
        .single-slider-item {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100vh; /* Full screen height */
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            text-align: left;
            padding: 20px;
        }

        /* Background Images */
        .slide-bg-1 { background-img: url('slide-1.jpg'); }
        .slide-bg-2 { background-img: url('slide2.jpg'); }
        .slide-bg-3 { background-img: url('slide3.jpg'); }

        /* Content Box */
        .slide-content {
            max-width: 700px;
            color: white;
            background: rgba(0, 0, 0, 0.4);
            padding: 20px;
            border-radius: 8px;
        }

        .slide-content h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        .slide-content p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        /* Button Container (to align buttons next to each other) */
        .button-group {
            display: flex;
            gap: 15px; /* Space between buttons */
        }

        /* Buttons */
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
            background: #ff6600;
            color: white;
        }

        .btn:hover {
            opacity: 0.8;
        }

        /* Responsive Adjustments */
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

<body>
   <?php include('topbar.php'); ?>
  
        
          <div class="homepage-slides">

        <!-- Slide 1 -->
        <div class="single-slider-item slide-bg-1">
            <div class="slide-content">
                <h1>Leading <span>Builders Cleaning</span> Specialists</h1>
                <p>We guarantee the highest standards across all aspects of commercial cleaning.</p>
                
                <!-- Buttons Side by Side -->
                <div class="button-group">
                    <a href="tel:+61481992891" class="cleaning-btn slide-btn">📞 Call Us: +61 481 992 891</a>
                </div>
            </div>
        </div>

        <!-- Slide 2 -->
        <div class="single-slider-item slide-bg-2">
            <div class="slide-content">
                <h1><span>Organic/ ECO Friendly Cleaning </span> Services</h1>
                <p>We provide the highest standards across all aspects of commercial cleaning.</p>

                <!-- Buttons Side by Side -->
                <div class="button-group">
                    <a href="tel:+61481992891" class="cleaning-btn slide-btn">📞 Call Us: +61 481 992 891</a>
                </div>
            </div>
        </div>

        <!-- Slide 3 -->
        <div class="single-slider-item slide-bg-3">
            <div class="slide-content">
                <h1>Leading <span>Professional Luxury</span> Cleaning</h1>
                <p>Experience unparalleled excellence in commercial cleaning services.</p>

                <!-- Buttons Side by Side -->
                <div class="button-group">
                    <a href="tel:+61481992891" class="cleaning-btn slide-btn">📞 Call Us: +61 481 992 891</a>
                </div>
            </div>
        </div>

    </div>
    
     <div class="cleaning-mini-banner">
            <div class="d-table">
                <div class="d-tablecell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>About Us</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="cleaning-breadcumb">
                                   <a href="<?=$webRoot;?>">Home</a> / About Us
                               </div>
                            </div>
                        </div>
                    </div>
                </div>  </div>
        </div>
            </div>
        </div>
        
		<section class="cleaning-content-block about-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h2>About Us</h2>                            
                        </div>
                    </div>
                </div>                
                <div class="row">
                    <div class="col-lg-7">
                        <div class="who-we-info">
                            <div class="single-info">
                                <p>Edge 2 Edge cleaning In order to ensure the highest scientific standards, Edge 2 Edge Cleaning uses accredited microbiology and chemistry laboratories to provide clients with accurate and reliable results. We can assure you that our assessments are reliable and unbiased because Edge 2 Edge Cleaning is not associated with third party consulting or laboratory companies.<br /><br />

Edge 2 Edge Cleaning is a leading environmental protection company with more than 15 years of experience, providing diverse services for all sizes and types of commercial or residential buildings.<br /><br />
Our experienced staffs undergo a wide range of training and certification, ensuring that they always keep up to date with the latest industry standards in terms of environmental risks and safety practices. <br /><br />

Depending upon your budget and at the times that are convenient for you, our regular house cleaning service can be tailored. We provide impeccable housekeeping, maid and cleaning lady service. Our dedicated house cleaners are true professionals and make sure your home or office is transformed about a spotless museum.
								</p>
                            </div>    
                        </div> 
                    </div>
                    
                    <div class="col-lg-5">
                        <div class="promo-video">
                            <img src="<?=$webRoot;?>assets/img/about2.jpg" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
         <section class="cleaning-content-block about-us">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="section-title text-center">
                  <h2>WHY CHOOUSE US?</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6">
               <div class="promo-video">
                  <img src="<?=$webRoot;?>assets/img/whychoose.jpg" alt="" />
               </div>
            </div>
            <div class="col-lg-6">
               <div class="who-we-info">
                  <p>EDGE2EDGE is your Melbourne-based, reputable, professional eco-home cleaning service that uses only eco-friendly, organic products that are created in Australia; we believe in cleaning with a conscience.</p>
                    <h4>ECO CLEANING</h4>
                    <p>A better method for the environment and you
Commercial cleaning company EDGE2EDGE , with offices in Melbourne, focuses on offering services that are both safe and kind to the environment. With Eco Cleaning, you are protected from exposure to dangerous chemicals that could harm your health.
Did you know that the American EPA lists poor indoor air quality as one of the main contributors to health issues among office workers? And what is the main reason why office buildings' air quality is so bad? There are no green cleaning products!</p>
                    <h3>NON TOXIC PRODUCTS</h3>
                    <p>Numerous conventional cleaning agents have been connected to diseases like cancer, ADHD, allergies, and even cancer.
So, we decided to limit our cleaning services to using only natural materials. Along with some good ol' fashioned hard work. There are no harsh, unpleasant, or hazardous goods. Did you know that some non-environmentally friendly cleaning chemicals deteriorate and become more toxic? Neither of these products, nor do we at Eco Cleaning employ volatile organic chemicals.
Additionally, the method we use lessens your carbon footprint</p>
<h4>EDGE2EDGE CLEANING GUARANTEE</h4>
<p>Our work is guaranteed, as are the cleaning materials and procedures we employ.
If for any reason you are not entirely happy, we will rectify the situation at no further cost to you. There aren't any prerequisites, ifs, or buts. And if you're still unsatisfied, you get a free week of cleaning.</p>
                  </p>
               </div>
            </div>
         </div>
      </div>
   </section>
   
    <section class="cleaning-content-block about-us">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="section-title text-center">
                  <h2>Professional Cleaning Services</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-lg-6">
               <div class="who-we-info">
                  <p>Don’t go in for the bait. If anyone suggested you that spending on a professional cleaning service is a waste of money, we will prove them wrong. <br /><br /> 
                     We not only offer cleaning services that are cost-effective but also we guarantee you to provide the most fabulous cleaning services in Australia that you have ever experienced while you sit back and enjoy spending time with your family and kids.We have an expert team that will provide you top-notch services without giving you any hassles. <br /><br />
                     Trust us to clean areas that require delicate handling. Be it your carpets, upholstery, mattress, tiles & grout or the curtains dry and curtains steam– we assure you that we clean it in the right manner without causing any damage. <br /><br /> What you are left with is a spick and span home/office that tells tales of your preference for having a happy and an inviting room.
                  </p>
               </div>
            </div>
            <div class="col-lg-6">
               <div class="promo-video">
                  <img src="<?=$webRoot;?>assets/img/whychoose1.jpg" alt="" />
               </div>
            </div>
         </div>
      </div>
   </section>
       <section class="cleaning-content-block testimonial">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="section-title text-center">
                  <h2>Our Valueable Client Says</h2>
               </div>
            </div>
         </div>
         <div class="testimonial-slides">
            <div class="testimonial-slide-item wow fadeInUp">
               <div class="row align-items-center">
                  <div class="col-md-4">
                     <div class="profile-item">
                        <img src="<?=$webRoot;?>assets/img/client-img1.jpg" class="img-circle" alt="nick" />
                        <span class="qout-icon"><img src="<?=$webRoot;?>assets/img/qoute.png" alt="qoute" /></span>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <h3>Charlie Benjamin</h3>
                     <p>"At the point when I lived in toorak I was incredibly content with this cleaning organization. They have an expert group. It's perhaps the best organization in toorak victoria. Great fulfillment."
                     </p>
                  </div>
               </div>
            </div>
            <div class="testimonial-slide-item wow fadeInUp">
               <div class="row align-items-center">
                  <div class="col-md-4">
                     <div class="profile-item">
                        <img src="<?=$webRoot;?>assets/img/client-img2.jpg" class="img-circle" alt="nick" />
                        <span class="qout-icon"><img src="<?=$webRoot;?>assets/img/qoute.png" alt="qoute" /></span>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <h3>Mike Veaudry</h3>
                     <p>"Easy to deal with and get the job done. Had a fussy agent, they did a free return visit to satisfy his requirements!"</p>
                     </p>
                  </div>
               </div>
            </div>
        
     
      <div class="testimonial-slide-item wow fadeInUp">
               <div class="row align-items-center">
                  <div class="col-md-4">
                     <div class="profile-item">
                        <img src="<?=$webRoot;?>assets/img/client-img3.jpg" class="img-circle" alt="nick" />
                        <span class="qout-icon"><img src="<?=$webRoot;?>assets/img/qoute.png" alt="qoute" /></span>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <h3>Brodie Hart</h3>
                     <p>"We’ve been working with EDGE2EDGE Cleaning since they started operating in TOORAK and can honestly say they have been so reliable, professional and consistent with their high quality of work!"</p>
                     </p>
                  </div>
               </div>
            </div>
            <div class="testimonial-slide-item wow fadeInUp">
               <div class="row align-items-center">
                  <div class="col-md-4">
                     <div class="profile-item">
                        <img src="<?=$webRoot;?>assets/img/client-img4.jpg" class="img-circle" alt="nick" />
                        <span class="qout-icon"><img src="<?=$webRoot;?>assets/img/qoute.png" alt="qoute" /></span>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <h3>Ed Schulz</h3>
                     <p>"EDGE2EDGE Cleaning are a pleasure to deal with and will work with you to tackle anything out of the ordinary. Delivering on time and budget without fail.!"</p>
                     </p>
                  </div>
               </div>
            </div>
            
            <div class="testimonial-slide-item wow fadeInUp">
               <div class="row align-items-center">
                  <div class="col-md-4">
                     <div class="profile-item">
                        <img src="<?=$webRoot;?>assets/img/client-img5.jpg" class="img-circle" alt="nick" />
                        <span class="qout-icon"><img src="<?=$webRoot;?>assets/img/qoute.png" alt="qoute" /></span>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <h3>Alan Sheppard</h3>
                     <p>"Always high quality and happy to go the extra for our clients."</p>
                     </p>
                  </div>
               </div>
            </div>
            <div class="testimonial-slide-item wow fadeInUp">
               <div class="row align-items-center">
                  <div class="col-md-4">
                     <div class="profile-item">
                        <img src="<?=$webRoot;?>assets/img/client-img6.jpg" class="img-circle" alt="nick" />
                        <span class="qout-icon"><img src="<?=$webRoot;?>assets/img/qoute.png" alt="qoute" /></span>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <h3>Ryan De Visser</h3>
                     <p>"Consistent, high quality cleaning every time, even with minimal notice."</p>
                     </p>
                  </div>
               </div>
            </div>
                 <div class="testimonial-slide-item wow fadeInUp">
               <div class="row align-items-center">
                  <div class="col-md-4">
                     <div class="profile-item">
                        <img src="<?=$webRoot;?>assets/img/client-img7.jpg" class="img-circle" alt="nick" />
                        <span class="qout-icon"><img src="<?=$webRoot;?>assets/img/qoute.png" alt="qoute" /></span>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <h3>Andrew Domingo</h3>
                     <p>"egde2edge  Cleaning  management and staff are second to none. Nothing is too much trouble - which is great for our business."</p>
                     </p>
                  </div>
               </div>
            </div>
                 <div class="testimonial-slide-item wow fadeInUp">
               <div class="row align-items-center">
                  <div class="col-md-4">
                     <div class="profile-item">
                        <img src="<?=$webRoot;?>assets/img/client-img8.jpg" class="img-circle" alt="nick" />
                        <span class="qout-icon"><img src="<?=$webRoot;?>assets/img/qoute.png" alt="qoute" /></span>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <h3>Hamish Villis</h3>
                     <p>"Our experience with EDGE2EDGE Cleaning has been one of great communication and service. Always keen to help, and even at late notice, they have been able to deliver."</p>
                     </p>
                  </div>
               </div>
            </div>
                 <div class="testimonial-slide-item wow fadeInUp">
               <div class="row align-items-center">
                  <div class="col-md-4">
                     <div class="profile-item">
                        <img src="<?=$webRoot;?>assets/img/client-img9.jpg" class="img-circle" alt="nick" />
                        <span class="qout-icon"><img src="<?=$webRoot;?>assets/img/qoute.png" alt="qoute" /></span>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <h3>Luke Callery</h3>
                     <p>"It still blows me away how accommodating the EDGE2EDGE cleaning team are &amp; the drive that they have to ensure that the project is left feeling like a home, not a building site!"</p>
                     </p>
                  </div>
               </div>
            </div>
                      <div class="testimonial-slide-item wow fadeInUp">
               <div class="row align-items-center">
                  <div class="col-md-4">
                     <div class="profile-item">
                        <img src="<?=$webRoot;?>assets/img/client-img10.jpg" class="img-circle" alt="nick" />
                        <span class="qout-icon"><img src="<?=$webRoot;?>assets/img/qoute.png" alt="qoute" /></span>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <h3>Zak Johnson</h3>
                     <p>""Very professional, nothing was a problem and I was really impressed with their can do attitude! Can highly recommend these guys as a professional business and great cleaners."</p>
                     </p>
                  </div>
               </div>
            </div>
                      <div class="testimonial-slide-item wow fadeInUp">
               <div class="row align-items-center">
                  <div class="col-md-4">
                     <div class="profile-item">
                        <img src="<?=$webRoot;?>assets/img/client-img11.jpg" class="img-circle" alt="nick" />
                        <span class="qout-icon"><img src="<?=$webRoot;?>assets/img/qoute.png" alt="qoute" /></span>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <h3>Nick Vartzokas</h3>
                     <p>"EDGE2EDGE Cleaning help us handover to happy customers every time."</p>
                     </p>
                  </div>
               </div>
            </div>
            
            
            <div class="testimonial-slide-item wow fadeInUp">
               <div class="row align-items-center">
                  <div class="col-md-4">
                     <div class="profile-item">
                        <img src="<?=$webRoot;?>assets/img/client-img12.jpg" class="img-circle" alt="nick" />
                        <span class="qout-icon"><img src="<?=$webRoot;?>assets/img/qoute.png" alt="qoute" /></span>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <h3>John Albrecht</h3>
                     <p>"Ubhi and his Team are the ultimate professionals. They had to oversee and deliver a complex clean after major plumbing works. Their attention to detail across windows, glass structures and so on was amazing. This team's services also extends to automotive and so on, and they separately, made my wife's car look brand new. On time, professional and polite. 10/10!"</p>
                     </p>
                  </div>
               </div>
            </div>
            <div class="testimonial-slide-item wow fadeInUp">
               <div class="row align-items-center">
                  <div class="col-md-4">
                     <div class="profile-item">
                        <img src="<?=$webRoot;?>assets/img/client-img13.jpg" class="img-circle" alt="nick" />
                        <span class="qout-icon"><img src="<?=$webRoot;?>assets/img/qoute.png" alt="qoute" /></span>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <h3>gurinder kaurs</h3>
                     <p>"It was so amazing service we have received.
Workers are so professional, their equipments and uniforms are so professional.
Quality of work was awesome.
Thank you so much for great service
I will definitely go to them for my routine 6 monthly cleaning with them.
Great job. Well done"</p>
                     </p>
                  </div>
               </div>
            </div>
            
            <div class="testimonial-slide-item wow fadeInUp">
               <div class="row align-items-center">
                  <div class="col-md-4">
                     <div class="profile-item">
                        <img src="<?=$webRoot;?>assets/img/client-img14.jpg" class="img-circle" alt="nick" />
                        <span class="qout-icon"><img src="<?=$webRoot;?>assets/img/qoute.png" alt="qoute" /></span>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <h3>jas cheema</h3>
                     <p>"Absolutely fantastic!!
The team went above and beyond what I expected.
It was a big clean up job but they powered through and the place came up great. The customer service was as amazing as one could ask for. Will definitely use them again."</p>
                     </p>
                  </div>
               </div>
            </div><div class="testimonial-slide-item wow fadeInUp">
               <div class="row align-items-center">
                  <div class="col-md-4">
                     <div class="profile-item">
                        <img src="<?=$webRoot;?>assets/img/client-img15.jpg" class="img-circle" alt="nick" />
                        <span class="qout-icon"><img src="<?=$webRoot;?>assets/img/qoute.png" alt="qoute" /></span>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <h3>Priya Kaushall</h3>
                     <p>"They were very very professional  and punctual!
Priced fairly!
Loved the work thank you soo much! Ill b in touch again!"</p>
                     </p>
                  </div>
               </div>
            </div>
            
            <div class="testimonial-slide-item wow fadeInUp">
               <div class="row align-items-center">
                  <div class="col-md-4">
                     <div class="profile-item">
                        <img src="<?=$webRoot;?>assets/img/client-img16.jpg" class="img-circle" alt="nick" />
                        <span class="qout-icon"><img src="<?=$webRoot;?>assets/img/qoute.png" alt="qoute" /></span>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <h3>Nathan Stones</h3>
                     <p>"EDGE2EDGE Cleaning are a professional, reliable &amp; consistent cleaning service to work with!"</p>
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   
   <?php include('footer.php'); ?>