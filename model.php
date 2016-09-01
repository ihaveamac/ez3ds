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
  <div class="row">
    <div class="col-sm-3 col-md-3 col-xl-2 console">
      <a class="btn btn-default" href="old.php" role="button">
        <p><img class="console" src="img/old3ds.jpg"></p>
        Nintendo 3DS
      </a>
    </div>
    <div class="col-sm-3 col-md-3 col-xl-2 console">
      <a class="btn btn-default" href="old.php" role="button">
        <p><img class="console" src="img/old3dsxl.jpg"></p>
        Nintendo 3DS XL
      </a>
    </div>
    <div class="col-sm-3 col-md-3 col-xl-2 console">
      <a class="btn btn-default" href="old.php" role="button">
        <p><img class="console" src="img/2ds.jpg"></p>
        Nintendo 2DS
      </a>
    </div>
  </div>

  <div class="visible-xs-inline-block"><h2>New 3DS</h2></div>
  <div class="hidden-xs"><h2>New 3DS</h2></div>
  <div class="row">
    <div class="col-sm-3 col-md-3 col-xl-2 console">
      <a class="btn btn-default" href="new.php" role="button">
        <p><img class="console" src="img/new3ds.jpg"></p>
        New Nintendo 3DS
      </a>
    </div>
    <div class="col-sm-3 col-md-3 col-xl-2 console">
      <a class="btn btn-default" href="new.php" role="button">
        <p><img class="console" src="img/new3dsxl.jpg"></p>
        New Nintendo 3DS XL
      </a>
    </div>
  </div>
</div> <!-- .container -->
<?php include_once("_footer.php"); ?>
