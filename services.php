<?php
require_once __DIR__ . '/include/configweb.php';
?>

<html lang="en">
<head>
    <title>Professional Cleaning Services Melbourne | Edge 2 Edge Cleaning</title>
    <meta name="description" content="Edge 2 Edge offers premium cleaning services across Melbourne - from domestic cleaning to commercial pressure washing. Eco-friendly solutions since 2018. Book online today!" />
    <link rel="canonical" href="<?php echo getUrl('services/'); ?>" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    
    <!-- Schema Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "Edge 2 Edge Cleaning",
      "description": "Comprehensive cleaning services provider in Melbourne",
      "serviceArea": {
        "@type": "AdministrativeArea",
        "name": "Melbourne, VIC"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Cleaning Services",
        "itemListElement": [
          {
            "@type": "OfferCatalog",
            "name": "Residential Cleaning",
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
                  "name": "End of Lease Cleaning"
                }
              }
            ]
          },
          {
            "@type": "OfferCatalog",
            "name": "Commercial Cleaning",
            "itemListElement": [
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Office Cleaning"
                }
              },
              {
                "@type": "Offer",
                "itemOffered": {
                  "@type": "Service",
                  "name": "Pressure Washing"
                }
              }
            ]
          }
        ]
      }
    }
    </script>

    <meta name="keywords" content="cleaning services Melbourne, house cleaners, commercial cleaning, end of lease cleaning, window cleaning, pressure washing, eco-friendly cleaners, office cleaning, professional cleaners">
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
                     <h2>Services</h2>
                  </div>
                  <div class="col-md-6">
                     <div class="cleaning-breadcumb">
                        <a href="<?=$webRoot;?>">Home</a> / Services
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div> <div/>  <div/>
   <section class="services-provide pt-100 pb-70 gray-bg">
    
      <div class="container"><div/>  <div/>
         <div class="section-title2">
            <h4>our services</h4>
            <h4>Bringing Joy with Exquisite Professional Cleaning Services</h4>
         </div>   <div/>  <div/>
         <div class="row">
            <div class="col-md-6 col-lg-4">
               <div class="single-pro-service">
                  <div class="pro-img">
                     <img src="<?=$webRoot;?>assets/img/builder-cleaning.jpg" alt="Image">
                  </div>
                  <div class="p-serv-caption">
                     <h3>Builders Cleaning</h3>
                     <p>A builders clean encompasses a thorough cleaning of all project areas, including kitchens, bathrooms, bedrooms, joinery, floors, walls, skirtings, windows, and frames, essential for all builders.</p>
                     <a href="<?=$webRoot;?>builders-cleaning" class="pro-serv-btn">view details</a>
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
                     <a href="<?=$webRoot;?>window-cleaning" class="pro-serv-btn">view details</a>
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
                     <a href="<?=$webRoot;?>house-cleaning" class="pro-serv-btn">view details</a>
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
                     <a href="<?=$webRoot;?>domestic-cleaning" class="pro-serv-btn">view details</a>
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
                     <a href="<?=$webRoot;?>spring-cleaning" class="pro-serv-btn">view details</a>
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
                     <a href="<?=$webRoot;?>pressure-washing" class="pro-serv-btn">view details</a>
                  </div>
               </div>
            </div>
             <div/>  <div/> <div/>  <div/>
         </div>
      </div>
   </section>   <div/>  <div/>
   <?php include('footer.php'); ?>