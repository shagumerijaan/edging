<?php // dir.php should already be included by the main page ?>
<div class="header-top-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 info">
                        <a href="mailto:<?php echo getEmailAddress(); ?>"><i class="fa fa-envelope"></i> Mail at: <span class="__cf_email__"><?php echo getEmailAddress(); ?></span></a> <span class="seprator">|</span>
                        <a href="tel:+123-5677-890"><i class="fa fa-phone"></i> Call Us: 048-1992-891</a>
                    </div>
                    <div class="col-lg-3 text-end">
                        <a href="<?=$webRoot;?>get-a-quote" class="cleaning-btnnew slide-btn">GET A QUOTE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainmenu-area">
    <div class="container">
    <div class="row">
        <div class="col-lg-4">
            <div class="logo">
               <a href="<?=$webRoot;?>"><img src="assets/img/logo.png" alt="Logo" class="img-fluid" style="max-width: 10px; max-height: 4px;"></a>
            <div class="responsive-menu-wrap"></div>
        </div>
        <div class="col-lg-8">
            <div class="mainmenu">
                <ul id="navigation">
                    <li class="active"><a href="<?=$webRoot;?>">Home</a></li>
                    <li><a href="<?=$webRoot;?>about-us">About Us</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">Dropdown</a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Dropdown Item 1</a></li>
                            <li><a href="#">Dropdown Item 2</a></li>
                            <li><a href="#">Dropdown Item 3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
In this modified code, I added a new list item <li> with the class "dropdown". Inside this list item, there is an <a> tag with the class "dropdown-toggle" and the data-bs-toggle attribute set to "dropdown". This will make the link toggle the visibility of the dropdown menu.

The dropdown menu itself is represented by a <ul> element with the class "dropdown-menu". Inside this list, you can add individual dropdown items as <li> elements with their respective <a> tags.

Please make sure you have included the necessary Bootstrap CSS and JavaScript files for the dropdown component to work properly.







                                                <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu bg-light m-0">
                                <a href="<?=$webRoot;?>features" class="dropdown-item">Features</a>
                                <a href="<?=$webRoot;?>quote" class="dropdown-item">Free Quote</a>
                                <a href="<?=$webRoot;?>team" class="dropdown-item">Our Team</a>
                                <a href="<?=$webRoot;?>testimonial" class="dropdown-item">Testimonial</a>
                                <a href="<?=$webRoot;?>404" class="dropdown-item">404 Page</a>
                            </div>
                        </li>
                        <li><a href="<?=$webRoot;?>gallery">Gallery</a></li>
                        <li><a href="<?=$webRoot;?>contact-us">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
