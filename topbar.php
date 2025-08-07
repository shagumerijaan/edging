<?php
// Get current page name for active navigation
$currentPage = basename($_SERVER['PHP_SELF'], '.php');
$currentUri = $_SERVER['REQUEST_URI'];

// Function to check if current page matches navigation item
function isActivePage($page, $currentPage, $currentUri) {
    // Handle home page
    if ($page === 'home') {
        return ($currentPage === 'index' || $currentUri === '/' || $currentUri === '/edging/' || $currentUri === '/edging/index.php');
    }
    
    // Handle services page and its sub-pages
    if ($page === 'services') {
        $servicePages = ['services', 'builders-cleaning', 'window-cleaning', 'house-cleaning', 'domestic-cleaning', 'spring-cleaning', 'pressure-washing'];
        foreach ($servicePages as $servicePage) {
            if ($currentPage === $servicePage || strpos(strtolower($currentUri), $servicePage) !== false) {
                return true;
            }
        }
        return false;
    }
    
    // Handle other pages
    $pageName = strtolower(str_replace(['-', ' '], ['', ''], $page));
    $currentPageClean = strtolower(str_replace(['-', ' '], ['', ''], $currentPage));
    
    // Check direct match
    if ($currentPageClean === $pageName) {
        return true;
    }
    
    // Check URI contains the page name
    if (strpos(strtolower($currentUri), strtolower($page)) !== false) {
        return true;
    }
    
    return false;
}
?>

<style>
/* Logo styling - make it bigger */
.mainmenu-area .logo img {
    max-height: 80px !important;
    width: auto !important;
    transition: all 0.3s ease;
}

/* Dropdown menu styles */
.mainmenu ul li.has-dropdown {
    position: relative;
}

.mainmenu ul li.has-dropdown > a i {
    margin-left: 5px;
    transition: transform 0.3s ease;
}

.mainmenu ul li.has-dropdown:hover > a i {
    transform: rotate(180deg);
}

.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    background: #ee7600;
    min-width: 220px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    border-radius: 8px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(10px);
    transition: all 0.3s ease;
    z-index: 1000;
    padding: 8px;
    border: 1px solid #ee7600;
}

.mainmenu ul li.has-dropdown:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.dropdown-menu li {
    display: block;
    width: 100%;
    margin: 0 0 4px 0;
    padding: 0;
}

.dropdown-menu li:last-child {
    margin-bottom: 0;
}

.mainmenu ul li.has-dropdown .dropdown-menu li a,
.dropdown-menu li a,
.mainmenu-area .mainmenu ul li ul li a {
    display: block;
    padding: 12px 8px !important;
    color: #fff;
    text-decoration: none;
    font-size: 14px;
    font-weight: 500;
    border: 2px solid #ff8c1a !important;
    border-radius: 15px !important;
    transition: all 0.3s ease;
    background: rgba(255, 255, 255, 0.05);
    width: 100%;
    box-sizing: border-box;
    overflow: hidden;
}

.mainmenu ul li.has-dropdown .dropdown-menu li a:hover,
.dropdown-menu li a:hover {
    background: #ff8c1a;
    color: #fff;
    border-color: #ff8c1a;
    transform: translateY(-1px);
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
}

.dropdown-menu li:last-child a {
    border-bottom: 3px solid #ff8c1a;
}

/* Override conflicting styles from other CSS files */
.mainmenu ul li.has-dropdown .dropdown-menu li a,
.mainmenu ul li ul li a,
.mainmenu-area .mainmenu ul li ul li a {
    border-radius: 15px !important;
    border: 2px solid #ff8c1a !important;
    padding: 12px 8px !important;
}

/* Responsive adjustments */
@media (max-width: 991px) {
    .mainmenu-area .logo img {
        max-height: 60px !important;
    }
    
    .dropdown-menu {
        position: static;
        opacity: 1;
        visibility: visible;
        transform: none;
        box-shadow: none;
        background: #ee7600;
        border: 1px solid #ee7600;
        border-radius: 8px;
        padding: 8px;
        margin: 8px 20px;
    }
    
    .mainmenu ul li.has-dropdown .dropdown-menu {
        display: none;
    }
    
    .mainmenu ul li.has-dropdown:hover .dropdown-menu,
    .mainmenu ul li.has-dropdown.active .dropdown-menu {
        display: block;
    }
    
    .dropdown-menu li {
        margin: 0 0 4px 0;
    }
    
    .dropdown-menu li:last-child {
        margin-bottom: 0;
    }
    
    .mainmenu ul li.has-dropdown .dropdown-menu li a,
    .dropdown-menu li a,
    .mainmenu-area .mainmenu ul li ul li a {
        color: #fff;
        font-weight: 500;
        padding: 10px 8px !important;
        border: 2px solid #ff8c1a !important;
        border-radius: 15px !important;
        background: rgba(255, 255, 255, 0.05);
        width: 100%;
        box-sizing: border-box;
        overflow: hidden;
    }
    
    .mainmenu ul li.has-dropdown .dropdown-menu li a:hover,
    .dropdown-menu li a:hover {
        background: #ff8c1a;
        color: #fff;
        border-color: #ff8c1a;
        transform: translateY(-1px);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
    }
}
</style>
<div class="mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="logo">
                   <a href="<?= WEB_ROOT; ?>"><img src="assets/img/logo.png" alt="Logo" class="img-fluid"></a>
                </div>
                <div class="responsive-menu-wrap"></div>
            </div>
            <div class="col-lg-8">
                                 <div class="mainmenu">
                    <ul id="navigation">
                        <li<?= isActivePage('home', $currentPage, $currentUri) ? ' class="active"' : ''; ?>><a href="<?= WEB_ROOT; ?>">Home</a></li>
                        <li<?= isActivePage('about-us', $currentPage, $currentUri) ? ' class="active"' : ''; ?>><a href="<?= WEB_ROOT; ?>about-us">About Us</a></li>
                        <li class="has-dropdown<?= isActivePage('services', $currentPage, $currentUri) ? ' active' : ''; ?>">
                            <a href="<?= WEB_ROOT; ?>services">Services <i class="fa fa-angle-down"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= WEB_ROOT; ?>builders-cleaning.php">Builders Cleaning</a></li>
                                <li><a href="<?= WEB_ROOT; ?>window-cleaning.php">Window Cleaning</a></li>
                                <li><a href="<?= WEB_ROOT; ?>house-cleaning.php">House Cleaning</a></li>
                                <li><a href="<?= WEB_ROOT; ?>domestic-cleaning.php">Domestic Cleaning</a></li>
                                <li><a href="<?= WEB_ROOT; ?>spring-cleaning.php">Spring Cleaning</a></li>
                                <li><a href="<?= WEB_ROOT; ?>pressure-washing.php">Pressure Washing</a></li>
                            </ul>
                        </li>
                        <li<?= isActivePage('gallery', $currentPage, $currentUri) ? ' class="active"' : ''; ?>><a href="<?= WEB_ROOT; ?>gallery">Gallery</a></li>
                        <li<?= isActivePage('contact-us', $currentPage, $currentUri) ? ' class="active"' : ''; ?>><a href="<?= WEB_ROOT; ?>contact-us">Contact Us</a></li>
                        <li<?= isActivePage('terms', $currentPage, $currentUri) ? ' class="active"' : ''; ?>><a href="<?= WEB_ROOT; ?>terms">Terms & Conditions</a></li>
                        <li<?= isActivePage('booking', $currentPage, $currentUri) ? ' class="active"' : ''; ?>><a href="<?= WEB_ROOT; ?>Booking">Booking</a></li>
                    </ul>
                </div>
               
            </div>
        </div>
    </div>
</div>