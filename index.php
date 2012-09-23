<?php require("header.php"); ?>
<script>

  var features = ['retail', 'stats', 'deck', 'spec'];
  var currentFeature = 0;
  var featureRotateTime = 5500;
  var headlineRotateTime = 3500;
  var featureTimeout = setTimeout('imageRotate()', featureRotateTime);
  var headlineTimeout = setTimeout('headlineRotate()', headlineRotateTime);  
  
  $(function() {


    $("#demo-cta").click(function() {
      $("#signup-subheader h3").hide();
      $("#demo").show();
      $("#demo-submit").button("reset");
      $(".screenshot").css("margin", "35px auto");
    });
    
    $("#demo-submit").click(function() {
    
      // clear error messages
      $(".error-msg").hide();
      
      // get form values
      var email = $("input[name='email']").val();
      var name = $("input[name='name']").val();
    
      // validation
      if (!validated()) {
      
        $("#validation-error").show();
        
      } else {
      
        // show loading message and disabled button
        $("#demo-submit").button("loading");
          
        // attempt send
        $.ajax({
          type: "POST",
          url: "send.php",
          data: {email: email, name: name}, 
          timeout: 3000,
          dataType: "text",
          error: function() {
          
              // show error message
              $("#send-error").show();
              $("#demo-submit").hide(); 
                       
          },
          success: function(data) {
        
            $("#demo-submit").button("reset");
          
            if (data == "ok") {
            
              // show success message
              $("#demo").hide();
              $("#confirmation, #confirmation h3").show();
              $(".screenshot").css("margin", "35px auto");
              
            } else {
            
              // show error message
              $("#send-error").show();
              $("#demo-submit").hide();
              
            }
            
          }
            
        }); // end $.post()
        
      } // end validation
      
    }); // end submit button click
    

    $(".text-rotate:first").show();
    
  });
      
  function validated() {
  
    var email = $("input[name='email']").val();
    var name = $("input[name='name']").val();
    
    if (email == "" || name == "") return false;
    
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;   
     
    return re.test(email);
    
  }
  
  function headlineRotate() {
  
    clearTimeout(headlineTimeout); 
    
    currentHeadline = $(".text-rotate:visible");
    
    if (currentHeadline.next().length > 0) {
      currentHeadline.next().fadeIn();
    } else {
      $(".text-rotate:first").fadeIn();
    }
    currentHeadline.fadeOut();
    
    headlineTimeout = setTimeout('headlineRotate()', headlineRotateTime);
    
  }    
      
  function imageRotate() {
    
    clearTimeout(featureTimeout);
    
    currentFeature = (currentFeature == (features.length - 1)) ? 0 : currentFeature + 1;

    $("#browser-chrome").after("<img class='rotate' src='img/rotator/" + features[currentFeature] + ".png' style='display: none; position:absolute'>");
    $(".rotate:last").fadeOut('slow', function() { $(this).remove(); });
    $(".rotate:first").fadeIn('slow');
    
    featureTimeout = setTimeout('imageRotate()', featureRotateTime);
    
  }
  
</script>

<div class="row-fluid">
  <div class="span12">

      <div class="alt-hero">
      
        <div id="hero-headline">
        
          <h1 id="headline-rotate">Sell More Aircraft,</h1>
          
          <div id="rotate-group">
            <span class="text-rotate">&nbsp;Easier.</span>
            <span class="text-rotate">&nbsp;Faster.</span>
            <span class="text-rotate">&nbsp;Smarter.</span>
          </div>
          
        </div>
        
        <div class="row-fluid">
        <div class="span2"></div>
        <div class="span8" id="signup-subheader">
          <h3> <span class="jetdeck_word">JetDeck</span> is technology for Aircraft Sales 
          Professionals to act faster, work in teams and close 
          more deals. <button class="btn btn-primary btn-large" id="demo-cta" style="margin-top: -5px"> <strong> <i class="icon-hand-right icon-white"></i> Try a Demo Now! </strong> </button></h3>
          
          <div id="demo" style="display: none">
          
              <h3>Sending an aircraft presentation can be this easy!</h3>  
              
              <h3>&nbsp;</h3>       
               
              <div class="span12 alert alert-error hide error-msg" style="display: none" id="validation-error">Please enter a name and valid email address.</div>
              
              <div class="span12 alert alert-warning hide error-msg" style="display: none" id="send-error">Sorry, we can't send to the address you entered. Try another recipient or  <br>
              
              <strong><a href="signup.php">Sign Up for The Real Thing!</a></strong></div>               
              
              <input type="text" name="name" style="width: 90%;" placeholder="Name">
              <input type="text" name="email" style="width: 90%;" placeholder="Email">
              
              <button id="demo-submit" 
                      style="width: 92%;"
                      class="btn btn-primary btn-large" 
                      onclick="return false" 
                      data-loading-text="Sending Spec...">
                      
              <i class="icon-envelope-alt icon-large"></i> 
              <strong> Send a Spec!</strong>
              
              </button>
              
          </div>	

          <div id="confirmation" style="display: none">
              <h3>Thanks! Now check your email on a desktop PC, mobile or tablet device to see how your customers will experience your aircraft. Like what you see? <a href="/signup.php" style="margin: 5px;"> <strong> Sign Up! </strong> </a> </h3>
          </div>	
                    			
        </div> 
        
      </div>
      </div>
      
      <div class="screenshot"> 
        <img src="img/rotator/browser.png" id="browser-chrome" style="position:absolute;">
	      <img src="img/rotator/retail.png" class="rotate">
	      <img src="img/rotator/shadow.png" style="position:absolute;">
      </div>
      
      <a name="features"></a>
      <div class="row-fluid clearfix">
      <div class="span12 section-heading">

      <h1>Features. <small>For Working Smarter.</small> </h1>
      </div>
      </div>
                
      <div class="row-fluid clearfix">
      
          <div class="feature-well span12">
          
            <div class="feature-sep span12" style="margin-left: 0px; padding-top: 30px">
              <div class="span6">
                <img src="/img/feature/spec.png" style="margin-top: 0px; margin-left: 30px;">
              </div>                
              <div class="span6" style="padding: 0px 30px; text-align: right;">
                <h1>Beautiful, Personalized Presentation. Little Effort.</h1>
                <h3><br></h3>
                <h3>
                Stop struggling with software or handling bulky hi-res photos over email. JetDeck delivers interactive, professional-looking specs, customized to each lead. </h3>
              </div>
            </div>  
            
            <div class="feature-sep span12" style="margin-left: 0px; padding: 30px">
              <div class="span6">
                <h1>React to Leads Faster</h1>
                <h3><br></h3>
                <h3>
                Send aircraft presentations with just a few clicks, from anywhere. Being more responsive means closing more deals.</h3>
              </div>
              <div class="span6">
                <img src="/img/feature/send.png" class="pull-right" style="border-radius: 6px 6px 0 0">
              </div>            
            </div>
                        
            <div class="feature-sep span12" style="margin-left: 0px; padding: 30px">
              <div class="span6">
                <img src="/img/feature/taglines.png" style="border-radius: 6px 6px 0 0">
              </div>                
              <div class="span6" style="text-align: right;">
                <h1>Tailor Specs To Each Customer's Wants</h1>
                <h3><br></h3>
                <h3>
                Easily modify the headlines and personal messages for each lead. JetDeck will save time and increase the quality of your customer interaction.
                </h3>
              </div>
            </div>     
            
            <div class="feature-cta-sep span12" style="margin: 0px">
     
              <h2>Ready to Start Selling More Aircraft with JetDeck? <a href="/signup.php" class="btn btn-success btn-large"> <strong> Get an Invite! </strong> </a><h2>

            </div>
                        
            <div class="feature-sep span12" style="margin-left: 0px; padding: 30px;">
              <div class="span6" >
                <h1>Stay Organized, Find More Deals</h1>
                <h3><br></h3>
                <h3>JetDeck provides a clear picture of what aircraft are available and who is most interested. </h3>
              </div>
              <div class="span6">
                <img src="/img/feature/deck.png" class="pull-right" style="border-radius: 6px 6px 0 0">
              </div>            
            </div>  
            
            <div class="span12" style="margin-left: 0px; padding-top: 30px;">
              <div class="span6" id="mobile-feature">
                <img src="/img/feature/mobile.png">
              </div>                
              <div class="span6" style="padding: 0px 30px; text-align: right;">
                <h1>Optimized For Today's Mobile Customers</h1>
                <h3><br></h3>
                <h3>
                Over half of your customers are already reading email on 
                mobile devices. JetDeck automatically makes your aircraft look great on
                PCs, smart phones and tablets.</h3>
              </div>
            </div>                           
          
          </div>
          
      </div>                        
      
      <a name="pricing"></a>
      <div class="row-fluid clearfix" style="margin-top: 80px">
      <div class="span12 section-heading">
      <h1>Simple. <small> Predictable Pricing. </small> </h1>
      </div>
      </div>
      <div class="row-fluid clearfix pricing">
      
          <div class="feature-well span12">
          
              <div class="alert" style="padding: 30px; font-size: 14px; border-radius: 3px 3px 0 0; line-height: 22px"><strong>JetDeck is currently in beta testing </strong> and finalizing some of the features shown here. While we're preparing to deliver an amazing user experience for aircraft brokers and their customers, <strong><a href="/signup.php">get on the invite list</a></strong> for introductory offers and early access! </div>
              
              <div class="span12" style="padding: 10px 30px; margin-left: 0px">
                                          
               <div class="span3" style="margin-top: 20px;">
               <table class="table table-hover table-bordered">
                <thead>
                  <tr style="background: grey; color: white;">
                    <th><h1>Individual</h1></th>
                  </tr>                 
                </thead>
                <tbody>
                  <tr>
                    <td><h2>Single User</h2></td>
                  </tr>   
                  <tr>
                    <td><h2>Unlimited Aircraft</h2></td>
                  </tr>     
                  <tr>
                    <td><h2>Email Support</h2></td>
                  </tr>  
                  <tr>
                    <td><h2>Secure Access</h2></td>
                  </tr>  
                  <tr>
                    <td><button class="btn btn disabled"><h1>$45 <small>/ month</small></h1></button></td>
                  </tr>                                                 
                </tbody>
              </table>
              </div>
              
              <div class="span3">
               <table class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th style="background: #5BB75B; color: white;">
                    
                    <h1>Team</h1>
                    
                    </th>
                  </tr>                 
                </thead>
                <tbody>
                  <tr>
                    <td><h2>Up To 3 Users</h2></td>
                  </tr>   
                  <tr>
                    <td><h2>Unlimited Aircraft</h2></td>
                  </tr>     
                  <tr>
                    <td><h2>Collaboration Tools</h2></td>
                  </tr>  
                  <tr>
                    <td><h2>Voice Support</h2></td>
                  </tr>
                  <tr>
                    <td><h2>Secure Access</h2></td>
                  </tr>            
                  <tr>
                    <td><button class="btn btn-success disabled btn-large"><h1>$125 <small style="color: #FFF">/ month</small></h1></button></td>
                  </tr>                                           
                </tbody>
              </table>              
              </div>
              
              <div class="span3" style="margin-top: 20px; text-align: center;">
              <table class="table table-hover table-bordered" style="margin-bottom: 5px;">
                <thead>
                  <tr style="background: grey; color: white;">
                    <th><h1>Enterprise</h1></th>
                  </tr>                 
                </thead>
                <tbody>
                  <tr>
                    <td><h2>Up To 10 Users</h2></td>
                  </tr>   
                  <tr>
                    <td><h2>Unlimited Aircraft</h2></td>
                  </tr>     
                  <tr>
                    <td><h2>24 Hr Voice Support</h2></td>
                  </tr>  
                  <tr>
                    <td><h2>Secure Access</h2></td>
                  </tr>   
                  <tr>
                    <td><button class="btn disabled"><h1>$385 <small>/ month</small></h1></button></td>
                  </tr>                                                 
                </tbody>
              </table>  
              <small><a href="mailto:support@jetdeck.co?subject=Tell me about JetDeck for large teams">More than 10 Users?</a></small>
              </div>
                     
              <div class="span3" style="margin-top: 40px; text-align: right;">
                <h2 style="font-weight: bold">Try JetDeck Risk Free</h2>
                <p style="font-size: 20px; line-height: 30px; color: #888"> Every plan includes a free 30-day trial period to make sure it's right for you. <strong>No credit card required!</strong> </p>
              </div>
                       
              </div> <!--span12-->    
          </div> <!--feature-well-->
                     
      </div>    
           
      <br><br><br>
                  
  </div>
</div>

<img class='hide' src='img/rotator/spec.png'/>
<img class='hide' src='img/rotator/deck.png'/>
<img class='hide' src='img/rotator/retail.png'/>
<img class='hide' src='img/rotator/stats.png'/>

<?php require("footer.php"); ?>
