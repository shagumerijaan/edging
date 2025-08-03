<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css

<footer class="site-footer">
    <div class="footer-top-area">
        <div class="container">
            <div class="row">                        
                <div class="col-lg-4 col-md-6">
                    <div class="footer-wid footer-menu pl-30">
                       <h3 class="footer-wid-title">Quick Links</h3>
<ul>
    <li><a href="<?=WEB_ROOT?>index"><i class="fa fa-chevron-circle-right"></i> Home</a></li>
    <li><a href="<?=WEB_ROOT?>about-us"><i class="fa fa-chevron-circle-right"></i> About Us</a></li>
    <li><a href="<?=WEB_ROOT?>services"><i class="fa fa-chevron-circle-right"></i> Services</a></li>
    <li><a href="<?=WEB_ROOT?>gallery"><i class="fa fa-chevron-circle-right"></i> Gallery</a></li>
    <li><a href="<?=WEB_ROOT?>contact-us"><i class="fa fa-chevron-circle-right"></i> Contact Us</a></li>
    <li><a href="<?=WEB_ROOT?>get-a-quote"><i class="fa fa-chevron-circle-right"></i> Get A Quote</a></li>
    <li><a href="<?=WEB_ROOT?>terms"><i class="fa fa-chevron-circle-right"></i> Terms & Conditions</a></li>
    <li><a href="<?=WEB_ROOT?>Booking"><i class="fa fa-chevron-circle-right"></i> Booking</a></li>
</ul>
      </div>           </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="footer-wid">
                        <h3 class="footer-wid-title">Get in Touch</h3>
                        <ul class="opening-hour">
                            <li>Address: <a>5/789 Malvern Road, Toorak, Victoria 3142, Australia</a></li>
                            <li>Email: <span><a href="mailto:<?php echo getEmailAddress(); ?>"><?php echo getEmailAddress(); ?></a></span></li>
                            <li>Phone: <span><a href="tel:0481992891">048-1992-891</a></span></li>
                        </ul>

                        <!-- Social Icons -->
                        <div class="social-icons">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/edge2edgecleaning" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/edge2edgecleaning/" target="_blank">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/61481992891" target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/search?q=edge2edgecleaning" target="_blank">
                                        <i class="fab fa-google"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">    <div class="footer-wid"><h3 class="footer-wid-title">Location</h3>
                   
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3150.4407841545435!2d145.0177899146826!3d-37.849975579745795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642763b4adc0b%3A0xdc46edd5b649933b!2s5%2F789%20Malvern%20Rd%2C%20Toorak%20VIC%203142%2C%20Australia!5e0!3m2!1sen!2sin!4v1660455342758!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p>We are always ready to help you.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
      <div/>  <div/> <div/>  <div/>
      
          
      <div class="container">
    <div class="footer-wid">
        <h3 class="clients-title">Our Valued Clients</h3>
        <div class="clients-slider-wrapper">
            <div class="clients-slider" id="clients-slider">
                <!-- Clients will be populated here -->
            </div>
        </div>
    </div>
</div>

<script>
   const clients = [
        { name: "Dash Construct", logo: "/assets/img/DASH CONSTRUCT.jpg" },
        { name: "Customs Building Group", logo: "/assets/img/custombuild.jpg" },
        { name: "Mikdev Construction", logo: "/assets/img/mikdev.png" },
        { name: "ALDA Projects", logo: "/assets/img/Alda.png" },
        { name: "Vigor Homes", logo: "/assets/img/vigor-homes.png" },
        { name: "Platinum Constuction ", logo: "/assets/img/platinum.png" },
        { name: "Pultino Commercial Construction", logo: "/assets/img/pulitano.png" },
        { name: "Anderson Constructions", logo: "/assets/img/anderson.png" },
        { name: "Tripple Group", logo: "/assets/img/tripple.jpg" },
        { name: "Anthony Larne Constructions", logo: "/assets/img/Anthony.jpg" },
        { name: "Dimona Construction", logo: "/assets/img/dimona.png" },
        { name: "Built By Luxe", logo: "/assets/img/builtbyluxe.png" },
        { name: "MPR Design & Build", logo: "/assets/img/mpr.png" },
        { name: "EmbR Projects", logo: "/assets/img/EMBR.png" },
        { name: "Rubicon Real Estate", logo: "/assets/img/Rubicon.png" },
        { name: "A.P Build Group", logo: "/assets/img/ap build.jpg" },
       
  
        { name: "Idea Construction", logo: "/assets/img/Idea.jpg" },
        { name: "A Plus Designer Homes", logo: "/assets/img/Aplus.png" },
     
        { name: "Edgestone Developments", logo: "/assets/img/Edgestone-Developments.png" },
        { name: "Crisp Project", logo: "/assets/img/crisp.png" },
        { name: "Moodie Building Group", logo: "/assets/img/moodie.png" },
        { name: "Inner Real Estate", logo: "/assets/img/inner-realestate.png" },
        { name: "Southern Hemisphere Builder", logo: "/assets/img/southernhemisphere.png" },
        { name: "BAL Real Estate", logo: "/assets/img/bal-realestate.png" }
    ];

      const clientsSlider = document.getElementById('clients-slider');
    [...clients, ...clients].forEach(client => { // Duplicate to create seamless loop
        const clientItem = document.createElement('div');
        clientItem.className = 'client-item';
        
        const img = document.createElement('img');
        img.src = client.logo;
        img.alt = `${client.name} Logo`;
        
        const name = document.createElement('div');
        name.className = 'client-name';
        name.textContent = client.name;
        
        clientItem.appendChild(img);
        clientItem.appendChild(name);
        clientsSlider.appendChild(clientItem);
    });
</script>


<style>
    .clients-title {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 20px;
        color: #E8760C;
        text-align: center;
    }

    .clients-slider-wrapper {
        overflow: hidden;
        white-space: nowrap;
        position: relative;
        width: 100%;
    }

    .clients-slider {
        display: flex;
        gap: 30px;
        animation: scroll 30s linear infinite;
        width: max-content;
    }

    .client-item {
        flex: 0 0 auto;
        text-align: center;
        width: 150px;
        display: flex;
        flex-direction: column;
        align-items: center;
		 transition: transform 0.3s ease-in-out;
    }

    .client-item img {
      width: 150px; /* Uniform size */
    height: 150px; /* Uniform shape */
        object-fit: contain;
		 border-radius: 8px; /* Curved edges */
        filter: grayscale(100%);
        transition: transform 0.3s ease-in-out;
     padding: 10px;
    border: 2px solid #fff; /* White border around logos */
    display: block;
  }
 .client-item:hover img {
    transform: scale(1.1);
    filter: grayscale(100%); /* Keeps logos in black & white on hover */
  }

    
    .client-name {
        margin-top: 5px;
        font-size: 14px;
        font-weight: bold;
        color: #E8760C;
        text-align: center;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        max-width: 150px;
    }

    @keyframes scroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
     .clients-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 30px;
    justify-items: center;
     }



</style>

    <!-- Service Areas Section -->
  <style>
    .service-list {
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        padding: 0;
        list-style: none;
        justify-content: center;
    }

    .service-list li {
        display: inline-block;
        background: #f8f9fa;
        padding: 8px 15px;
        border-radius: 5px;
        font-size: 14px;
        font-weight: 500;
        box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1);
    }
</style>

<div class="container">
    <div class="service-area text-center">
        <h2 class="mb-4">Areas We Cover</h2>
        <p>We provide services within an 80 km radius from Toorak.</p>
        <ul class="service-list">
            <li>Toorak</li>
            <li>South Yarra</li>
            <li>Richmond</li>
            <li>Armadale</li>
            <li>Hawthorn</li>
            <li>Kew</li>
            <li>Prahran</li>
            <li>Windsor</li>
            <li>St Kilda</li>
            <li>Albert Park</li>
            <li>Middle Park</li>
            <li>Brighton</li>
            <li>Glenferrie</li>
            <li>Clayton</li>
            <li>Hampton</li>
            <li>Port Melbourne</li>
            <li>Cremorne</li>
            <li>Burnley</li>
            <li>Lansell Plaza</li>
            <li>South Melbourne</li>
            <li>Balaclava</li>
            <li>Batman</li>
            <li>East Melbourne</li>
            <li>Southbank</li>
            <li>Abbotsford</li>
            <li>Hawksburn</li>
            <li>Kooyong</li>
            <li>Malvern</li>
            <li>Auburn</li>
        </ul>
    </div>
</div>

</html>
    <div class="footer-copyright-area">
        <div class="container">
            <div class="row">
                                       
                
                
                <div class="col-lg-12">© 2022 | Edge 2 Edge Cleaning Pvt. Ltd. | All Rights Reserved.</div>   <div class="container">
        <div class="row">
            <div class="col-lg-9 info">
                <a href="mailto:<?php echo getEmailAddress(); ?>"><i class="fa fa-envelope"></i> Mail at <?php echo getEmailAddress(); ?></a> 
                <span class="separator">|</span>
                <a href="tel:+123-5677-890"><i class="fa fa-phone"></i> Call Us: 048-1992-891</a>
        
         <span class="separator">|</span> 
         
         <a href="https://www.facebook.com/edge2edgecleaning" target="_blank"> <i class="fab fa-facebook-f"></i> </a>
                                <span class="separator">|</span>
                                    <a href="https://www.instagram.com/edge2edgecleaning/" target="_blank"><i class="fab fa-instagram"></i> </a>
                                <span class="separator">|</span>
                                <a href="https://wa.me/61481992891" target="_blank"><i class="fab fa-whatsapp"></i> </a>
                                <span class="separator">|</span>
                                    <a href="https://www.google.com/search?q=edge2edgecleaning" target="_blank"><i class="fab fa-google"></i>
                                    </a>
                               

                        </div>
    </div>
</div><div class="col-lg-3 text-end">
    <a href="<?php echo WEB_ROOT; ?>get-a-quote" class="cleaning-btnnew slide-btn fixed-quote-btn">GET A QUOTE</a>
</div>
            </div>
        </div>
    </div>
</footer>

<a href="#" id="back-to-top" title="Back to Top">
    <i class="fa fa-long-arrow-up"></i>
</a>

<!-- Scripts -->
<script src="<?=$webRoot;?>assets/js/jquery.min.js"></script>
<script src="<?=$webRoot;?>assets/js/bootstrap.min.js"></script>
<script src="<?=$webRoot;?>assets/js/popper.min.js"></script>
<script src="<?=$webRoot;?>assets/js/owl.carousel.min.js"></script>
<script src="<?=$webRoot;?>assets/js/jquery.slicknav.min.js"></script>
<script src="<?=$webRoot;?>assets/js/jquery.magnific-popup.min.js"></script>
<script src="<?=$webRoot;?>assets/js/mixitup.min.js"></script>
<script src="<?=$webRoot;?>assets/js/wow.min.js"></script>
<script src="<?=$webRoot;?>assets/js/jquery.counterup.min.js"></script>
<script src="<?=$webRoot;?>assets/js/waypoints.min.js"></script>
<script src="<?=$webRoot;?>assets/js/active.js"></script>
<script src="<?=$webRoot;?>assets/js/modern-enhancements.js"></script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Edge 2 Edge Cleaning",
  "image": "<?php echo getUrl('images/logo.png'); ?>",
  "@id": "<?php echo getUrl(); ?>",
  "url": "<?php echo getUrl(); ?>",
  "telephone": "+61 413 321 544",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Toorak Rd",
    "addressLocality": "Toorak",
    "addressRegion": "VIC",
    "postalCode": "3142",
    "addressCountry": "AU"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": -37.8416,
    "longitude": 145.0174
  },
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday",
        "Saturday"
      ],
      "opens": "08:00",
      "closes": "18:00"
    }
  ],
  "sameAs": [
    "https://www.facebook.com/edge2edgecleaning",
    "https://www.instagram.com/edge2edgecleaning"
  ],
  "priceRange": "$$",
  "description": "Melbourne-based eco-friendly cleaning company offering residential and commercial services using non-toxic, Australian-made products."
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Eco-Friendly Domestic Cleaning",
  "provider": {
    "@type": "LocalBusiness",
    "name": "Edge 2 Edge Cleaning",
    "url": "<?php echo getUrl(); ?>",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Toorak Rd",
      "addressLocality": "Toorak",
      "addressRegion": "VIC",
      "postalCode": "3142",
      "addressCountry": "AU"
    }
  },
  "areaServed": {
    "@type": "Place",
    "name": "Melbourne, Victoria, Australia"
  },
  "hasOfferCatalog": {
    "@type": "OfferCatalog",
    "name": "Cleaning Services",
    "itemListElement": [
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Residential Cleaning"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "End of Lease Cleaning"
        }
      },
      {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "name": "Commercial Cleaning"
        }
      }
    ]
  }
}
</script>

