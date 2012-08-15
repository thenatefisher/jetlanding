<?php require("header.php"); ?>

<script>

  $(function() {

  });

  var features = ['edit', 'deck', 'leads', 'retail', 'track'];
  var currentFeature = 0;
  var rotateTime = 5500;
  var featureTimeout = setTimeout('rotate()', rotateTime);
      
  function rotate() {
    
    clearTimeout(featureTimeout);
    
    currentFeature = (currentFeature == (features.length - 1)) ? 0 : currentFeature + 1;

    $(".screenshot").append("<img src='img/feature/feature_" + features[currentFeature] + ".png' style='display: none; position:absolute'>");
    $(".screenshot img:first-child").fadeOut('slow', function() { $(".screenshot img:first-child").remove(); });
    $(".screenshot img:last-child").fadeIn('slow');
    
    featureTimeout = setTimeout('rotate()', rotateTime);
    
  }
  
</script>

<div class="row-fluid">
  <div class="span12">

      <div class="alt-hero">
      
        <h1>Sell More Aircraft, Easier.</h1>
        <div class="span2"></div>
        <div class="span8">
        <h3> <span class="jetdeck_color">JetDeck</span> is technology for Aircraft Sales 
        Professionals to act faster, work in teams and close 
        more deals. <a href="http://app.jetdeck.co" class="btn btn-primary"> <strong> <i class="icon-hand-right icon-white"></i> Try It Now! </strong> </a></h3>
        </div> 
        
      </div>

      <div class="screenshot" style="height: 355px">
        <img src="img/feature/feature_retail.png" style="position:absolute;">
      </div>
      
      <div style="display: none;" class="span12 feature-section">
        <h1>How does JetDeck work?</h1>
        <h2>Your off-market aircraft <i class="icon-plus"></i> <img src="img/logo_black_emblem.png" style="width: 50px;"/> <i class="icon-hand-right"></i> a short link you can share.</h2>
      <div>
            
  </div>
</div>


<?php require("footer.php"); ?>
