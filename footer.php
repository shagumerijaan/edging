<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css

<footer class="site-footer">
    <div class="footer-top-area">
        <div class="container">
            <div class="row">                        
                <div class="col-lg-4 col-md-6">
                    <div class="footer-wid footer-menu pl-30">
                       <h3 class="footer-wid-title">Quick Links</h3>
<ul class="footer-links-list">
    <li><a href="<?=WEB_ROOT?>index"><i class="fas fa-home"></i> Home</a></li>
    <li><a href="<?=WEB_ROOT?>about-us"><i class="fas fa-info-circle"></i> About Us</a></li>
    <li><a href="<?=WEB_ROOT?>services"><i class="fas fa-tools"></i> Services</a></li>
    <li><a href="<?=WEB_ROOT?>gallery"><i class="fas fa-images"></i> Gallery</a></li>
    <li><a href="<?=WEB_ROOT?>contact-us"><i class="fas fa-envelope"></i> Contact Us</a></li>
    <li><a href="<?=WEB_ROOT?>get-a-quote"><i class="fas fa-calculator"></i> Get A Quote</a></li>
    <li><a href="<?=WEB_ROOT?>terms"><i class="fas fa-file-contract"></i> Terms & Conditions</a></li>
    <li><a href="<?=WEB_ROOT?>Booking"><i class="fas fa-calendar-check"></i> Booking</a></li>
</ul>
      </div>           </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="footer-wid">
                        <h3 class="footer-wid-title">Get in Touch</h3>
                        <ul class="contact-info-list">
                            <li><strong>Address:</strong> <span>5/789 Malvern Road, Toorak, Victoria 3142, Australia</span></li>
                            <li><strong>Email:</strong> <span><a href="mailto:<?php echo getEmailAddress(); ?>"><?php echo getEmailAddress(); ?></a></span></li>
                            <li><strong>Phone:</strong> <span><a href="tel:0481992891">048-1992-891</a></span></li>
                        </ul>

                        <!-- Social Icons -->
                        <div class="social-icons">
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com/edge2edgecleaning" target="_blank" title="Follow us on Facebook">
                                        <i class="fab fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/edge2edgecleaning/" target="_blank" title="Follow us on Instagram">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://wa.me/61481992891" target="_blank" title="Chat with us on WhatsApp">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.google.com/search?q=edge2edgecleaning" target="_blank" title="Find us on Google">
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
        <h3 class="clients-title"><br>
        <br>
        Our Valued Clients</h3>
        <div class="clients-slider-wrapper">
            <div class="clients-slider" id="clients-slider">
                <!-- Clients will be populated here -->
            </div>
        </div>
    </div>
</div>

<script>
   const clients = [
        { name: "Dash Construct", logo: "/assets/img/DASH CONSTRUCT.png" },
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

<!-- Footer Links Styling -->
<style>
    .footer-links-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .footer-links-list li {
        margin-bottom: 12px;
        transition: all 0.3s ease;
    }
    
    .footer-links-list li a {
        color: #ffffff;
        text-decoration: none;
        display: flex;
        align-items: center;
        padding: 8px 12px;
        border-radius: 6px;
        transition: all 0.3s ease;
        font-size: 15px;
        font-weight: 400;
        line-height: 1.4;
    }
    
    .footer-links-list li a:hover {
        background-color: rgba(232, 118, 12, 0.1);
        color: #E8760C;
        transform: translateX(5px);
        text-decoration: none;
    }
    
    .footer-links-list li a i {
        margin-right: 12px;
        width: 18px;
        text-align: center;
        font-size: 16px;
        color: #E8760C;
        transition: all 0.3s ease;
    }
    
    .footer-links-list li a:hover i {
        color: #E8760C;
        transform: scale(1.1);
    }
    
    .footer-links-list li:last-child {
        margin-bottom: 0;
    }

    /* Contact Info Styling */
    .contact-info-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .contact-info-list li {
        margin-bottom: 15px;
        display: flex;
        align-items: flex-start;
        line-height: 1.6;
    }
    
    .contact-info-list li strong {
        color: #E8760C;
        font-weight: 600;
        min-width: 80px;
        display: inline-block;
        margin-right: 10px;
        flex-shrink: 0;
    }
    
    .contact-info-list li span {
        color: #ffffff;
        flex: 1;
    }
    
    .contact-info-list li span a {
        color: #ffffff;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    
    .contact-info-list li span a:hover {
        color: #E8760C;
        text-decoration: none;
    }
    
    .contact-info-list li:last-child {
        margin-bottom: 0;
    }

    /* Modern Social Icons Redesign - Perfect Alignment */
    .social-icons {
        margin-top: 25px;
    }
    
    .social-icons ul {
        list-style: none !important;
        padding: 0 !important;
        margin: 0 !important;
        display: flex !important;
        gap: 15px !important;
        flex-wrap: wrap !important;
        align-items: center !important;
    }
    
    .social-icons ul li {
        margin: 0 !important;
        padding: 0 !important;
        list-style: none !important;
    }
    
    .social-icons ul li::before {
        display: none !important;
        content: none !important;
    }
    
    .social-icons ul li a {
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
        width: 48px !important;
        height: 48px !important;
        background: linear-gradient(135deg, #ee7600 0%, #ff8c1a 100%) !important;
        color: #ffffff !important;
        border-radius: 50% !important;
        font-size: 20px !important;
        text-decoration: none !important;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1) !important;
        box-shadow: 0 4px 15px rgba(238, 118, 0, 0.3) !important;
        border: 2px solid transparent !important;
        position: relative !important;
        overflow: hidden !important;
        line-height: 1 !important;
        text-align: center !important;
    }
    
    .social-icons ul li a i {
        color: #ffffff !important;
        font-size: 20px !important;
        line-height: 1 !important;
        display: block !important;
        text-align: center !important;
        vertical-align: middle !important;
        position: relative !important;
        z-index: 2 !important;
        margin: 0 !important;
        padding: 0 !important;
    }
    
    .social-icons ul li a:hover {
        transform: translateY(-4px) scale(1.1) !important;
        box-shadow: 0 8px 25px rgba(238, 118, 0, 0.5) !important;
        border-color: #ee7600 !important;
    }
    
    .social-icons ul li a:hover i {
        color: #ffffff !important;
        transform: scale(1.1) !important;
    }
    
    .social-icons ul li a::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s ease;
    }
    
    .social-icons ul li a:hover::before {
        left: 100%;
    }
    
    /* Individual social platform colors on hover - Perfectly Centered */
    .social-icons ul li a[href*="facebook"]:hover {
        background: #1877f2 !important;
        border-color: #1877f2 !important;
        box-shadow: 0 8px 25px rgba(24, 119, 242, 0.4) !important;
    }
    
    .social-icons ul li a[href*="facebook"]:hover i {
        color: #ffffff !important;
    }
    
    .social-icons ul li a[href*="instagram"]:hover {
        background: linear-gradient(135deg, #e4405f 0%, #833ab4 50%, #fccc63 100%) !important;
        border-color: #e4405f !important;
        box-shadow: 0 8px 25px rgba(228, 64, 95, 0.4) !important;
    }
    
    .social-icons ul li a[href*="instagram"]:hover i {
        color: #ffffff !important;
    }
    
    .social-icons ul li a[href*="whatsapp"]:hover,
    .social-icons ul li a[href*="wa.me"]:hover {
        background: #25d366 !important;
        border-color: #25d366 !important;
        box-shadow: 0 8px 25px rgba(37, 211, 102, 0.4) !important;
    }
    
    .social-icons ul li a[href*="whatsapp"]:hover i,
    .social-icons ul li a[href*="wa.me"]:hover i {
        color: #ffffff !important;
    }
    
    .social-icons ul li a[href*="google"]:hover {
        background: #4285f4 !important;
        border-color: #4285f4 !important;
        box-shadow: 0 8px 25px rgba(66, 133, 244, 0.4) !important;
    }
    
    .social-icons ul li a[href*="google"]:hover i {
        color: #ffffff !important;
    }

    /* Footer Copyright Area Styling */
    .footer-copyright-area {
        background-color: #111111 !important;
        padding: 20px 0;
        border-top: 1px solid #333333;
    }
    
    .copyright-content {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }
    
    .copyright-text {
        color: #ffffff;
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 5px;
    }
    
    .footer-contact-info {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 5px;
    }
    
    .footer-contact-info a {
        color: #cccccc;
        text-decoration: none;
        font-size: 13px;
        transition: color 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }
    
    .footer-contact-info a:hover {
        color: #E8760C;
        text-decoration: none;
    }
    
    .footer-contact-info a i {
        font-size: 12px;
        color: #E8760C;
    }
    
    .footer-contact-info .separator {
        color: #666666;
        margin: 0 8px;
        font-size: 12px;
    }
    
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .footer-copyright-area .row {
            text-align: center;
        }
        
        .footer-copyright-area .col-lg-3 {
            margin-top: 15px;
        }
        
        .footer-contact-info {
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .copyright-text {
            text-align: center;
        }
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
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="copyright-content">
                        <div class="copyright-text">
                            © 2022 | Edge 2 Edge Cleaning Pvt. Ltd. | All Rights Reserved.
                        </div>
                        <div class="footer-contact-info">
                            <a href="mailto:<?php echo getEmailAddress(); ?>">
                                <i class="fa fa-envelope"></i> Mail at <?php echo getEmailAddress(); ?>
                            </a>
                            <span class="separator">|</span>
                            <a href="tel:0481992891">
                                <i class="fa fa-phone"></i> Call Us: 048-1992-891
                            </a>
                            <span class="separator">|</span>
                            <a href="https://www.facebook.com/edge2edgecleaning" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <span class="separator">|</span>
                            <a href="https://www.instagram.com/edge2edgecleaning/" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <span class="separator">|</span>
                            <a href="https://wa.me/61481992891" target="_blank">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <span class="separator">|</span>
                            <a href="https://www.google.com/search?q=edge2edgecleaning" target="_blank">
                                <i class="fab fa-google"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-end">
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

