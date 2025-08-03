<?php
require_once __DIR__ . '/include/configweb.php';
?>

<html lang="en">
<head>
    <title>Domestic Cleaning Toorak | Premium House Cleaning Services Melbourne | Edge 2 Edge</title>
    <meta name="description" content="Edge 2 Edge offers expert domestic cleaning in Toorak & Melbourne. Eco-friendly, thorough house cleaning with flexible scheduling. Book online or call ☎ 1+6148-1992-891 today!" />
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <link rel="canonical" href="<?php echo getUrl('domestic-cleaning.php'); ?>" />
    <!-- Geo-Targeting Meta Tags -->
    <meta name="geo.region" content="AU-VIC" />
    <meta name="geo.placename" content="Toorak" />
    <meta name="geo.position" content="-37.8417;145.0167" />
    <meta name="ICBM" content="-37.8417, 145.0167" />
    
    <!-- Local Business Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Domestic Cleaning",
      "provider": {
        "@type": "LocalBusiness",
        "name": "Edge 2 Edge Cleaning",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Your Street Address",
          "addressLocality": "Toorak",
          "addressRegion": "VIC",
          "postalCode": "3142",
          "addressCountry": "AU"
        },
        "telephone": "+6148-1992-891"
      },
      "areaServed": {
        "@type": "GeoCircle",
        "geoMidpoint": {
          "@type": "GeoCoordinates",
          "latitude": "-37.8417",
          "longitude": "145.0167"
        },
        "geoRadius": "20000"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Domestic Cleaning Services",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Regular House Cleaning"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Deep Cleaning"
            }
          }
        ]
      }
    }
    </script>

    <meta name="keywords" content="domestic cleaning Toorak, house cleaners Melbourne, regular cleaning service, eco-friendly home cleaning, deep cleaning services, maid service Toorak, residential cleaners Victoria, trusted home cleaners, affordable house cleaning, vacuum mopping service">
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
                     <h2>Domestic Cleaning</h2>
                  </div>
                  <div class="col-md-6">
                     <div class="cleaning-breadcumb">
                        <a href="<?=$webRoot;?>">Home</a> / Domestic Cleaning
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
            <div class="col-lg-8">
               <div class="post-details-area">
                  <div class="">
					<img src="assets/img/domestic-cleaning.jpg" alt="Image">
                  </div>
                  <div class="post-description">
                     <h2>Domestic Cleaning Services</h2>                     
                     <p>We are a cleaning company that goes far beyond just regular and ordinary cleaners. We focus on you, the client, in details and with utmost attention to your needs and preferences. We pride ourselves on our services and look to retain happy and repeat consumer for life. Our long-term customers will vouch for us and our work speaks for itself. Our Edge 2 Edge cleaning service stands behind our clients and cater to their needs as we would expect them to cater to us, and the same we cater to our families as we believe our long-term consumer as extended family. We are here for you and to make your hectic life that much simpler. The little things and attention to detail that we provide will shine above the rest.</p>
                     <p>We all desire to have a clean home, however, it can be hard work and we don’t always have time. Edge 2 Edge cleaning service is here to help. Our standard cleaning service offers a wonderful cleaning job at an affordable price. Our cleaners are highly trained and professional and they cater to you and your home’s cleaning needs. <br /><br />

Edge 2 Edge cleaning service pricing is based on the size of your home and the desired level of service. We operate on a flat-rate basis given the number of bedrooms, and we also offer hourly services. We use and provide environmentally friendly supplies and nearly all equipment required for cleaning your apartment. However, we do not provide a conventional mop and bucket, step stool, toilet brush or specialty products.</p>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <?php include('sidebar.php'); ?>
            </div>
         </div>
      </div>
   </section>
   <?php include('footer.php'); ?>