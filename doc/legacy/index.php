<?php require("header.php"); ?>

<script>

var features = ['retail', 'stats', 'deck', 'spec'];
var currentFeature = 0;
var featureRotateTime = 5500;
var featureTimeout = setTimeout('imageRotate()', featureRotateTime);

$(function() { 

  // show first image
  imageRotate(); 

  // setup buttons
  $("#invite-cta").click(showInviteRequestField);
  $("#invite-submit").click(showInviteSurvey);
  $(".signup-survey button").click(showInviteConfirmation);

  // mailcheck
  $("input[name='email']").on('blur', function() {
    $(this).mailcheck({
    
      topLevelDomains: ["com", "net", "org", "aero"],

      // when there is a suggestion...
      suggested: function(element, suggestion) {
      
        // if entry is available and passes simple regex
        if (validated()) {
        
          // show suggestions
          var suggestion_msg;
          suggestion_msg = "Did you mean ";
          suggestion_msg += "<a href='#' id='mailcheck-suggestion'>" + suggestion.full + "</a>?";

          $("#send-error").removeClass("error");
          $("#send-error").html(suggestion_msg);
          $("#send-error").slideDown(200);          
        
        }
        
      }
      
    });
    
  });

  // handle mailcheck suggestion link click
  $("body").on("click", "#mailcheck-suggestion", function() {
     
      // set the email field to the suggestion
      var suggestion = $(this).html();
      $("input[name='email']").val(suggestion);
    
      // hide suggestion message
      $("#send-error").slideUp(200);

  });  
  
});


function showInviteConfirmation() {

  $(".signup-survey").fadeOut(200, function(){
    $(".signup-confirmation").fadeIn(300);
  });

  $("#hero-headline").fadeOut(200, function(){
    $("#hero-headline h1").html("Thanks!");
    $("#hero-headline").fadeIn(300);
  });    

}

function showInviteSurvey() {

  if (validated()) {

    $(".signup-form").fadeOut(200, function(){
      $(".signup-survey").fadeIn(300);
    });

    $("#hero-headline").fadeOut(200, function(){
      $("#hero-headline h1").html("You're on the List!");
      $("#hero-headline").fadeIn(300);
    });      

  } else {

    $("#send-error").addClass("error");
    $("#send-error").html("Sorry, we can't send to the address you entered.");
    $("#send-error").slideDown(200);

  }

}

function showInviteRequestField() {

  $(".signup-intro").fadeOut(200, function(){
    $(".signup-form").fadeIn(300);
  });

  $("#hero-headline").fadeOut(200, function(){
    $("#hero-headline h1").html("Signup for an invite and be the first to try JetDeck");
    $("#hero-headline").fadeIn(300);
  });    

}

function validated() {

  var email = $("input[name='email']").val();

  if (email == "") return false;

  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;   

  return re.test(email);

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

    <div class="alt-hero masthead">

      <div class="row-fluid">

        <div id="hero-headline">

          <h1>Still sending specs as email attachments?</h1>

        </div>        

        <div class="span2 signup-intro"></div>

        <div class="span8 signup-intro">

          <div class="span7 invite-request-cta">
            <h3>JetDeck converts your specs into links that open on smartphones and can be tracked in real time.</h3>
          </div>

          <div class="span4 invite-request-cta">
            <a class="btn" id="invite-cta"> Get an Invite! </a>
            <br>
            <div class="clearfix" style="height: 5px;"></div>
            <span style="color: #ddd">Or</span> <a style="clear: both; color: white;" href="#">  Watch the Video  <i class=" icon-play-circle icon-white"></i></a>
          </div>
        </div> 

      </div> 

      <div class="row-fluid hide signup-form">

        <div class="span2"></div>

        <div class="span8">

          <div id="invite-submit-input" class="span9">
            <input type="text" name="email" placeholder="Email" class="span12" id="email">
            <div class="hide" id="send-error" style="margin-top: 5px; text-align: right"></div>
          </div>

          <button id="invite-submit" class="btn btn-primary span3" 
          onclick="return false" data-loading-text="Submitting...">Submit</button>

        </div>

      </div>	

      <div class="signup-survey hide">

        <div class="span1"></div>
        <div class="span10"><h3>Now that you're in line to try JetDeck, which feature are you most interested in? </h3></div>

        <div class="clearfix"></div><br><br>

        <div class="span2"></div>
        <div class="span8">

          <div class="row">

            <button class="btn btn-primary span4" style="text-shadow: none; font-weight: bold; font-size: 14px; margin-left: -15px; line-height: 25px" onclick="return false">
              Customer Activity Data Plots</button>

            <button class="btn btn-primary span4" style="text-shadow: none; font-weight: bold; font-size: 14px; line-height: 25px" onclick="return false">
              A CRM that Understands Aircraft Brokerage</button>

            <button class="btn btn-primary span4" style="text-shadow: none; font-weight: bold; font-size: 14px; line-height: 25px" onclick="return false">
              Spec Sheets that Look Great on Smartphones</button>

          </div>
        </div> 

      </div>  

      <div class="signup-confirmation hide">
          <div class="span2"></div>
          <div class="span8">        
          <h3>We'll let you know as soon as space is available in the trial. In the meantime,   
            <a href="#" style="color: white;">tweet about JetDeck</a> or email this signup to <a href="#" style="color: white;">a colleague</a>. </h3>
          </div>
      </div>  

    </div>	<!-- alt-hero masthead -->

  </div>  <!-- span12 -->

</div> <!-- row fluid -->

<div class="screenshot"> 
  <img src="img/rotator/browser.png" id="browser-chrome" style="position:absolute;">
  <img src="img/rotator/retail.png" class="rotate">
  <img src="img/rotator/shadow.png" style="position:absolute;">
</div>

</div> <!-- in header -->
</div> <!-- in header -->

<!-- image preloaders -->
<img class='hide' src='img/rotator/spec.png'/>
<img class='hide' src='img/rotator/deck.png'/>
<img class='hide' src='img/rotator/retail.png'/>
<img class='hide' src='img/rotator/stats.png'/>

<?php require("footer.php"); ?>