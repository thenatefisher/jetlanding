<?php 

  if ($_SERVER['REMOTE_ADDR'] == $_SERVER['SERVER_ADDR']
    && $_REQUEST['key'] == '892y4uvn298n24gg2') {
  
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body style="text-align: left; width: 400px; font-family: Verdana, Verdana, Geneva, sans-serif, Arial; color: #333344; font-size: 18px;">

	<p>Hello <?= $_REQUEST['name']; ?>,</p>

	<p>I have prepared an aircraft spec for you. </p>

	<a style="text-decoration: none" href="<?= $_REQUEST['url']; ?>">
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

<?php }
