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
                        <li<?= isActivePage('services', $currentPage, $currentUri) ? ' class="active"' : ''; ?>><a href="<?= WEB_ROOT; ?>services">Services</a></li>
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