# Localhost Configuration Guide

## Overview
This guide explains the changes made to enable easy switching between localhost and live environment for the Edge2Edge Cleaning website.

## Main Configuration File
**File:** `include/dir.php`

This is the central configuration file that automatically detects the environment:
- **Localhost:** Uses `http://localhost/edging/` and `test@localhost.com`
- **Live:** Uses `https://www.edge2edgecleaning.com.au/` and `info@edge2edgecleaning.com.au`

## How It Works
The system automatically detects if you're running on localhost by checking:
- `localhost`
- `127.0.0.1`
- `localhost:port`
- `127.0.0.1:port`

## Files Modified

### Core Configuration Files
1. `include/dir.php` - Main configuration with auto-detection
2. `include/configweb.php` - Created to include dir.php for all pages

### Updated Files with Dynamic URLs
The following files were updated to use dynamic URLs instead of hardcoded ones:

#### Main Pages
- `index.php`
- `about-us.php`
- `contact-us.php`
- `Booking.php`
- `builders-cleaning.php`
- `domestic-cleaning.php`
- `get-a-quote.php`
- `gallery.php`
- `house-cleaning.php`
- `pressure-washing.php`
- `services.php`
- `spring-cleaning.php`
- `terms.php`
- `window-cleaning.php`

#### Component Files
- `header.php`
- `footer.php`
- `style.php`
- `topbartest.php`

#### Utility Files
- `sitemap.php`
- `test_mail.php`

### Changes Made
1. **Canonical URLs:** Changed from hardcoded to `<?php echo getUrl('page.php'); ?>`
2. **Meta Tags:** Updated og:url, og:image to use dynamic URLs
3. **JSON-LD Schema:** Updated all schema markup URLs to be dynamic
4. **Email Addresses:** Changed from hardcoded to `<?php echo getEmailAddress(); ?>`
5. **Asset URLs:** Updated image and resource URLs to be dynamic

## Functions Available
- `getUrl($page = '')` - Returns the correct URL for any page
- `getEmailAddress()` - Returns the correct email address
- `WEB_ROOT` - Constant with the base URL
- `EMAIL_ADDRESS` - Constant with the email address
- `IS_LOCALHOST` - Boolean constant indicating if running on localhost

## Testing
1. **Localhost:** Access `http://localhost/edging/` - should work with local URLs
2. **Live:** Upload to live server - should automatically use live URLs

## Switching Back to Live (When Testing Complete)

### Step 1: Automatic URL Detection
- The PHP system automatically detects the environment
- When uploaded to live server, it will use live URLs automatically

### Step 2: Re-enable .htaccess Redirects
**CRITICAL:** Before deploying to live server, edit `.htaccess` and uncomment the redirect rules:

```apache
# LIVE PRODUCTION - Uncomment these redirects when deploying to live server
RewriteCond %{HTTP_HOST} !^www\. [NC]
RewriteRule ^(.*)$ http://www.edge2edgecleaning.com.au/$1 [L,R=301]
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://www.edge2edgecleaning.com.au/$1 [L,R=301]
```

### Step 3: Manual Override (if needed)
If you need to force live URLs even on localhost, edit `include/dir.php`:
```php
// Force live environment (comment out auto-detection)
$isLocalhost = false;
```

### Deployment Checklist
- [ ] Uncomment redirect rules in `.htaccess`
- [ ] Test that live site redirects to HTTPS and www
- [ ] Verify all forms send emails to correct address
- [ ] Check that all URLs point to live domain

## Important Notes
1. **WordPress Files:** `locations.php` appears to be WordPress-generated and may need separate handling
2. **Database:** The database configuration in `include/config.php` remains unchanged
3. **Assets:** Make sure all asset files (images, CSS, JS) exist in both environments
4. **Email Testing:** On localhost, emails will be sent to `test@localhost.com`
5. **⚠️ CRITICAL:** The `.htaccess` file contained redirect rules that forced all traffic to the live site - these have been commented out for localhost development

## .htaccess File Changes
The main issue was in the `.htaccess` file which contained these redirect rules:
```apache
RewriteCond %{HTTP_HOST} !^www\. [NC]
RewriteRule ^(.*)$ http://www.edge2edgecleaning.com.au/$1 [L,R=301]

RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://www.edge2edgecleaning.com.au/$1 [L,R=301]
```

These rules have been **commented out** for localhost development and marked with clear instructions for when to uncomment them for live deployment.

## Troubleshooting
- If URLs don't work, check that `include/configweb.php` is being included at the top of the page
- Verify that the web server is running on the expected port
- Check browser console for any 404 errors on assets
- **Fixed:** Function redeclaration errors - `dir.php` now has proper include guards to prevent multiple inclusions

## Files That May Need Manual Updates
- `locations.php` - WordPress/Elementor generated file with many hardcoded URLs
- Any other WordPress-generated static files

This configuration makes it easy to develop locally while ensuring the live site continues to work properly.