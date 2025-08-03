        <link rel="stylesheet" href="<?=$webRoot;?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?=$webRoot;?>assets/css/font-awesome.min.css" />
        <link rel="stylesheet" href="<?=$webRoot;?>assets/css/owl.carousel.css" />
        <link rel="stylesheet" href="<?=$webRoot;?>assets/css/magnific-popup.css" />
        <link rel="stylesheet" href="<?=$webRoot;?>assets/css/slicknav.min.css" />
        <link rel="stylesheet" href="<?=$webRoot;?>assets/css/animate.css" />
        <link rel="stylesheet" href="<?=$webRoot;?>assets/css/style.css" />
        <link rel="stylesheet" href="<?=$webRoot;?>assets/css/responsive.css" />
         <link rel="stylesheet" href="<?=$webRoot;?>assets/css/summary.css" />
        <link rel="stylesheet" href="<?=$webRoot;?>assets/css/color/default-color.css" />
        <link rel="stylesheet" href="<?=$webRoot;?>assets/dist/color-switcher.css" />
        
        <!-- Modern Website Redesign - Global Styles -->
        <link rel="stylesheet" href="<?=$webRoot;?>assets/css/modern-redesign.css" />
        
        <link rel="icon" type="image/png" href="<?=$webRoot;?>assets/img/favicon.png" />
        
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    

		<?php
    // dir.php should already be included by the main page
    if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $services = $_POST['services'];
    $location = $_POST['location'];
    $message = $_POST['message'];
    
    require('phpmailer/class.phpmailer.php');
    $mail = new PHPMailer();
    $subject = "CONTACT FORM";
    $content = "<b>Name : $name</b>";
    $content .= "<br />";
    $content .= "<b>Email : $email</b>";
    $content .= "<br />";
    $content .= "<b>Phone : $phone</b>";
    $content .= "<br />";
    $content .= "<b>Services : $services</b>";
    $content .= "<br />";
    $content .= "<b>Location :  $location</b>";
    $content .= "<br />";
    $content .= "<b>Message : $message</b>";
    
   $mail->IsSMTP();
    $mail->SMTPDebug = 0;
    $mail->SMTPAuth = TRUE;
    $mail->SMTPSecure = "SSL/TLS";
    $mail->Port     = 995;  
    $mail->Username = getEmailAddress();
    $mail->Password = "@Sukhkaran1993";
    $mail->Host     = "pop.hostinger.com";
    $mail->Mailer   = "pop";
   
    $mail->AddAddress(getEmailAddress(), "Edge 2 Edge Cleaning");
    $mail->Subject = $subject;
    $mail->WordWrap   = 80;
    $mail->MsgHTML($content);
    $mail->IsHTML(true);
    
    // Set the "From" address to the client's email address
$mail->SetFrom($email, $name, $services); // $email is the client's email address, $name is the client's name

// Add a "Reply-To" header with your own email address to receive responses



    
    if(!$mail->Send()){ 
    	$msg= "Problem on sending mail";
    }else{ 
        $msg = "<p style='color:green; text-align: center;'>Thanks for contacting us! We will be in touch with you shortly.</p>";
    }
    }
    ?>
    
    
   