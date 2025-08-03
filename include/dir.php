<?php
// Prevent multiple inclusions
if (defined('DIR_CONFIG_LOADED')) {
    return;
}
define('DIR_CONFIG_LOADED', true);

// Define the document root
$docRoot = $_SERVER['DOCUMENT_ROOT'];

// Auto-detect environment and set appropriate URLs
$isLocalhost = (
    $_SERVER['HTTP_HOST'] === 'localhost' || 
    $_SERVER['HTTP_HOST'] === '127.0.0.1' || 
    strpos($_SERVER['HTTP_HOST'], 'localhost:') === 0 ||
    strpos($_SERVER['HTTP_HOST'], '127.0.0.1:') === 0
);

if ($isLocalhost) {
    // Localhost configuration
    $webRoot = "http://localhost/edging/";
    $emailDomain = "test@localhost.com"; // Test email for localhost
} else {
    // Live server configuration
    $webRoot = "https://www.edge2edgecleaning.com.au/";
    $emailDomain = "info@edge2edgecleaning.com.au"; // Live email
}

// Define the server root (optional, if needed)
$srvRoot = str_replace('include/dir.php', '', __FILE__);

// Define constants for global use
define('WEB_ROOT', $webRoot);
define('SRV_ROOT', $srvRoot);
define('IS_LOCALHOST', $isLocalhost);
define('EMAIL_ADDRESS', $emailDomain);

// Function to get the correct URL for any page
if (!function_exists('getUrl')) {
    function getUrl($page = '') {
        return WEB_ROOT . ltrim($page, '/');
    }
}

// Function to get the correct email address
if (!function_exists('getEmailAddress')) {
    function getEmailAddress() {
        return EMAIL_ADDRESS;
    }
}
?>