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
  
    $message = message($name, $url);
  
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

function message($name, $url) {

$message = <<<EOD
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">

  <body style="text-align: left; width: 400px; font-family: Verdana, Verdana, Geneva, sans-serif, Arial; color: #333344; font-size: 18px;">

	  <p>Hello $name,</p>

	  <p>I have prepared an aircraft spec for you. </p>

	  <a style="text-decoration: none" href="$url">
	  <div style="margin: 30px 25px; text-align: center; color: #EDEDED; border-radius: 6px; border: 1px solid #9999CC; background: #55A; vertical-align: center">
	  <div style="padding: 10px">
		  <h4 style="margin: 0px;">Click Here to View The</h4>
		  <h1 style="margin: 10px auto; color: #FFFFFF">2013 Gulfstream G650</h1>
	  </div>
	  </div>
	  </a>


	  <p>You may reach me by replying to this message or calling 
	  <strong><a style="text-decoration: none; color: #5555AA" href="tel:(555) 555-5555">(555) 555-5555</a></strong>.</p><br>



      <br>Thank You, 
      <br><br>Richard Walters
      <br>Your Brokerage Company

    
	  <br><br>
	  <p style="font-size: 10px;">
	  Powered by <a href="http://www.jetdeck.co" style="text-decoration: none; color: #666699">JetDeck</a>
	  <br>If you no longer wish to receive emails from this person, 
	  you may <a href="mailto:your@email.com" style="text-decoration: none; color: #666699">notify the sender</a>.
	  </p>

  </body>

  </html>
EOD;

return $message;

}
