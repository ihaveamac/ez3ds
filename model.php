<?php
$title = "ez3ds - Pick system model";
include_once("_header.php");
?>
<!-- images from https://github.com/Plailect/Guide/wiki/Device-Info -->
<div class="container">
  <h1>Pick system model</h1>
  <p>Click your model!<p>

  <!-- this sucks, but what is even a better way -->
  <div class="visible-xs-block"><h2>Old 3DS</h2></div>
  <div class="hidden-xs"><h2>Old 3DS</h2></div>
  <a href="old.php">
    <div class="row">
      <div class="col-sm-3 col-md-2 console">
        <span class="helper"></span>
        <img class="console" src="img/old3ds.jpg">
      </div>
      <div class="col-sm-3 col-md-2 console">
        <span class="helper"></span>
        <img class="console" src="img/old3dsxl.jpg">
      </div>
      <div class="col-sm-3 col-md-2 console">
        <span class="helper"></span>
        <img class="console" src="img/2ds.jpg">
      </div>
    </div>
  </a>

  <div class="visible-xs-inline-block"><h2>New 3DS</h2></div>
  <div class="hidden-xs"><h2>New 3DS</h2></div>
  <a href="new.php">
    <div class="row">
      <div class="col-sm-3 col-md-2 console">
        <span class="helper"></span>
        <img class="console" src="img/new3ds.jpg">
      </div>
      <div class="col-sm-3 col-md-2 console">
        <span class="helper"></span>
        <img class="console" src="img/new3dsxl.jpg">
      </div>
    </div>
  </a>
</div> <!-- .container -->
<?php include_once("_footer.php"); ?>
