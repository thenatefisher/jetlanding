<?php

  include 'sendgrid/SendGrid_loader.php';
  $sendgrid = new SendGrid('jetdeck', 'SendGrid1');

  // Sanitize name and email field
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  
  // create url
  $url = urlencode("http://www.jetdeck.co/specs/4425542.php?name=$name");
  
  // create message 
  if ($name && $url && validEmail($email)) {
  
    $message = file_get_contents("http://localhost/email.php?url=$url&name=$name&key=892y4uvn298n24gg2");
  
    // save user to mailing list
  
  
    // send email via sendgrid
    if ($message) {
    
      $mail = new SendGrid\Mail();
      $mail->setTo($email)
           ->setFrom('demo_noreply@jetdeck.co')
           ->setSubject('2013 Gulfstream G650 SN: 6023')
           ->addCategory("demo_1")
           ->setHtml($message);
           
      $sendgrid->smtp->send($mail);
      
      if ($sendgrid) { echo "ok"; }
      else { echo "error"; }
      
    }
    
  } else { echo "error"; }


function validEmail($email)
{
   $isValid = true;
   $atIndex = strrpos($email, "@");
   if (is_bool($atIndex) && !$atIndex)
   {
      $isValid = false;
   }
   else
   {
      $domain = substr($email, $atIndex+1);
      $local = substr($email, 0, $atIndex);
      $localLen = strlen($local);
      $domainLen = strlen($domain);
      if ($localLen < 1 || $localLen > 64)
      {
         // local part length exceeded
         $isValid = false;
      }
      else if ($domainLen < 1 || $domainLen > 255)
      {
         // domain part length exceeded
         $isValid = false;
      }
      else if ($local[0] == '.' || $local[$localLen-1] == '.')
      {
         // local part starts or ends with '.'
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $local))
      {
         // local part has two consecutive dots
         $isValid = false;
      }
      else if (!preg_match('/^[A-Za-z0-9\\-\\.]+$/', $domain))
      {
         // character not valid in domain part
         $isValid = false;
      }
      else if (preg_match('/\\.\\./', $domain))
      {
         // domain part has two consecutive dots
         $isValid = false;
      }
      else if
(!preg_match('/^(\\\\.|[A-Za-z0-9!#%&`_=\\/$\'*+?^{}|~.-])+$/',
                 str_replace("\\\\","",$local)))
      {
         // character not valid in local part unless 
         // local part is quoted
         if (!preg_match('/^"(\\\\"|[^"])+"$/',
             str_replace("\\\\","",$local)))
         {
            $isValid = false;
         }
      }
      if ($isValid && !(checkdnsrr($domain,"MX") || 
 ↪checkdnsrr($domain,"A")))
      {
         // domain not found in DNS
         $isValid = false;
      }
   }
   return $isValid;
}
