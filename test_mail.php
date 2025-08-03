<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once __DIR__ . '/include/configweb.php';


if (isset($_POST['sendmessage'])) {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    
    // Email validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $msg = "<p style='color:red; text-align: center;'>Invalid email format.</p>";
    } else {
        $phone = htmlspecialchars($_POST['phone']);
        $location = htmlspecialchars($_POST['location']);
        $post_code = htmlspecialchars($_POST['post_code']);
        $preferred_date = htmlspecialchars($_POST['preferred_date']);
        $cleaning_supplies = htmlspecialchars($_POST['cleaning-supplies']);
        $Enter_other_details = htmlspecialchars($_POST['Enter_other_details']);
        $cleaning_supplies1 = htmlspecialchars($_POST['cleaning-supplies1']);
        $Enter_other_details1 = htmlspecialchars($_POST['Enter_other_details1']);
        $cleaning_frequency = htmlspecialchars($_POST['cleaning-frequency']);
        $message = htmlspecialchars($_POST['message']);

        // Email information
        $to = getEmailAddress();
        $subject = "ESTIMATION FORM EDGE2EDGE CLEANING";

        // Email content
        $content = "<b>Name: </b>$name<br />";
        // ... (rest of your content)

        // Additional headers
        $headers = "From: $name <$email>\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        // Send the email
        if (mail($to, $subject, $content, $headers)) {
            $msg = "<p style='color:green; text-align: center;'>Thanks for contacting us! We will be in touch with you shortly.</p>";
        } else {
            $msg = "<p style='color:red; text-align: center;'>Problem sending mail. Please try again later.</p>";
        }
    }
}