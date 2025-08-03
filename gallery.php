<?php
require_once __DIR__ . '/include/configweb.php';
?>

<html lang="en">
<head>
    <title>Domestic Cleaning Gallery | Before & After Photos | Edge 2 Edge Toorak</title>
    <meta name="description" content="See our domestic cleaning transformation gallery. Edge 2 Edge showcases real before/after photos of our eco-friendly house cleaning services in Melbourne and Toorak." />
    
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0">
    <link rel="canonical" href="<?php echo getUrl('gallery/'); ?>" />
    <!-- Geo & Image Metadata -->
    <meta name="geo.region" content="AU-VIC" />
    <meta name="geo.placename" content="Toorak" />
    <meta property="og:image" content="<?php echo getUrl('assets/img/gallery/domestic-cleaning-before-after.jpg'); ?>" />
    <meta property="og:image:alt" content="Domestic cleaning transformation in Toorak home" />
    
    <!-- Schema Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CollectionPage",
      "name": "Domestic Cleaning Gallery",
      "description": "Visual portfolio of our residential cleaning services",
      "publisher": {
        "@type": "ProfessionalService",
        "name": "Edge 2 Edge Cleaning",
        "image": "<?php echo getUrl('assets/img/logo.png'); ?>",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Toorak",
          "addressRegion": "VIC",
          "postalCode": "3142"
        }
      },
      "hasPart": [
        {
          "@type": "ImageGallery",
          "name": "Kitchen Cleaning Transformations",
          "description": "Before and after photos of our deep kitchen cleaning"
        },
        {
          "@type": "ImageGallery",
          "name": "Bathroom Sanitization Results",
          "description": "Gallery of bathroom cleaning and sanitization"
        }
      ]
    }
    </script>

    <meta name="keywords" content="cleaning before after photos, domestic cleaning gallery, house cleaning results Toorak, eco cleaning transformations, Melbourne cleaning portfolio, visual cleaning proof, residential cleaning examples, trusted cleaners gallery">
</head>
<?php include('style.php'); ?>
</head>
<body>
    
      
   <?php include('topbar.php'); ?>
   <div class="cleaning-mini-banner">
     
            
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Gallery</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="cleaning-breadcumb">                                     <a href="<?=$webRoot;?>">Home</a> / Gallery
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>   <div/>  <div/>
   <section class="gallery-section">
            <div class="container">
                <div class="row shorting">
                    <div class="col-lg-4 col-md-6 mix category-a category-d">
                        <div class="gallery-block-item">
                            <a href="assets/img/gallery-item-1.jpg" class="gallery-item">
                                <img src="assets/img/gallery-item-1.jpg" alt="Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix category-b">
                        <div class="gallery-block-item">
                            <a href="assets/img/gallery-item-2.jpg" class="gallery-item">
                                <img src="assets/img/gallery-item-2.jpg" alt="Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix category-c category-d">
                        <div class="gallery-block-item">
                            <a href="assets/img/gallery-item-3.jpg" class="gallery-item">
                                <img src="assets/img/gallery-item-3.jpg" alt="Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix category-d category-c">
                        <div class="gallery-block-item">
                            <a href="assets/img/gallery-item-4.jpg" class="gallery-item">
                                <img src="assets/img/gallery-item-4.jpg" alt="Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix category-a">
                        <div class="gallery-block-item">
                            <a href="assets/img/gallery-item-5.jpg" class="gallery-item">
                                <img src="assets/img/gallery-item-5.jpg" alt="Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix category-b category-d">
                        <div class="gallery-block-item">
                            <a href="assets/img/gallery-item-6.jpg" class="gallery-item">
                                <img src="assets/img/gallery-item-6.jpg" alt="Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix category-c category-d">
                        <div class="gallery-block-item">
                            <a href="assets/img/gallery-item-7.jpg" class="gallery-item">
                                <img src="assets/img/gallery-item-7.jpg" alt="Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix category-d category-a">
                        <div class="gallery-block-item">
                            <a href="assets/img/gallery-item-8.jpg" class="gallery-item">
                                <img src="assets/img/gallery-item-8.jpg" alt="Gallery">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mix category-a">
                        <div class="gallery-block-item">
                            <a href="assets/img/gallery-item-9.jpg" class="gallery-item">
                                <img src="assets/img/gallery-item-9.jpg" alt="Gallery">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
   <?php include('footer.php'); ?>