<?php
$title = "ez3ds - Pick system model";
include_once("_header.php");
?>
<!-- images from https://github.com/Plailect/Guide/wiki/Device-Info -->
<div class="container">
  <h1 class="page-header">Pick system model</h1>

  <!-- this sucks, but what is even a better way -->
  <div class="visible-xs-block center"><h2>Old 3DS</h2></div>
  <div class="hidden-xs"><h2>Old 3DS</h2></div>
  <div class="row">
    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4 console">
      <a class="btn btn-default" href="fw.php?lv=1" role="button">
        <p><img class="console" src="img/old3ds.png"></p>
        Nintendo 3DS
      </a>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4 console">
      <a class="btn btn-default" href="fw.php?lv=2" role="button">
        <p><img class="console" src="img/old3dsxl.png"></p>
        Nintendo 3DS XL
      </a>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-4 col-xl-4 console">
      <a class="btn btn-default" href="fw.php?lv=3" role="button">
        <p><img class="console" src="img/2ds.png"></p>
        Nintendo 2DS
      </a>
    </div>
  </div>

  <div class="visible-xs-block center"><h2>New 3DS</h2></div>
  <div class="hidden-xs"><h2>New 3DS</h2></div>
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-6 col-xl-6 console">
      <a class="btn btn-default" href="fw.php?lv=4" role="button">
        <p><img class="console" src="img/new3ds.png"></p>
        New Nintendo 3DS
      </a>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-xl-6 console">
      <a class="btn btn-default" href="fw.php?lv=4" role="button">
        <p><img class="console" src="img/new3dsxl.png"></p>
        New Nintendo 3DS XL
      </a>
    </div>
  </div>
</div> <!-- .container -->
<?php include_once("_footer.php"); ?>
