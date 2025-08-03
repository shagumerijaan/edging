<?php
include('include/config.php');
require_once __DIR__ . '/include/configweb.php';
$dat=date('Y-m-d');
header("Content-Type: application/xml; charset=utf-8");
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">' . PHP_EOL;
$domain=WEB_ROOT;
echo "<url><loc>$domain</loc>
   <lastmod>".$dat."</lastmod>
   <changefreq>weekly</changefreq>
   <priority>1</priority></url>";
   
echo "</urlset>";
?>