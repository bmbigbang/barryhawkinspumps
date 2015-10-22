<!DOCTYPE html
  PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html40/strict.dtd">
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <META NAME="description" CONTENT="Official Stuart & Turner pumps service provider (engineer). We provide replacements, spares, repairs, maintenance and installation for a wide range of Stuart & Turner pumps.">
<META NAME="keywords" CONTENT="stuart turner pumps, stuart turner, stuart turner services, stuart turner pump services, stuart turner shower pump, stuart turner pump repairs, stuart turner showermate, stuart turner monsoon, monsoon pump repair, stuart turner pump leakage, stuart turner repairs, showermate repairs,monsoon repairs,stuart turner engineer">
<META NAME="author" CONTENT="Ardavan Shafiee">
<META NAME="language" CONTENT="English">
<META NAME="revisit-after" CONTENT="60">
<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "g.hawkins1@btinternet.com";
    $email_subject = "Enquiry from Barryhawkinspumps.co.uk";
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telefon']; // not required
    $comments = $_POST['message']; // required
     
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<link rel="stylesheet" type="text/css" media="all" href="main.css"><link rel="stylesheet" type="text/css" media="all" href="colorschemes/colorscheme2/colorscheme.css"><link rel="stylesheet" type="text/css" media="all" href="style.css">
<div id="sub_container3"><div class="content" id="content_container2"><h1 style="font-size: 26px; font-weight: bold; font-style: italic;">Thank you for your Enquiry</h1>
           <p>We will contact you as soon as possible</p>
           <p>&nbsp;</p>
           <p ><a href="http://www.barryhawkinspumps.co.uk/index.html" title="Home" target="_parent" style="color: #4ebaff">Click here to continue browsing. </a></p></div></div>
 
<?php
}
?>
