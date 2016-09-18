<?php
$model = ($_GET["lv"] >= 4) ? "New" : "Old";
$title = "ez3ds - ".$model." 3DS - Pick system version";
include_once("_header.php");

$imgs = array("old3ds", "old3dsxl", "2ds", "new3ds", "new3dsxl");
$names = array("Nintendo 3DS", "Nintendo 3DS XL", "Nintendo 2DS", "New Nintendo 3DS", "New Nintendo 3DS XL");
?>
<!-- Modal -->
<div class="modal fade" id="findfw" tabindex="-1" role="dialog" aria-labelledby="findfwbox">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modaltitle">Find system version</h4>
      </div>
      <div class="modal-body">
        <div id="mset-img" class="center">
          <p>Find the <b>System Settings</b> icon on your HOME Menu.</p>
          <p><img id="mset-icn" class="pixelated" src="img/game/mset.png"></p>
          <p>Find the version on the <b>top screen, bottom right corner</b>.<br>For example, 11.0.0-33U.</p>
          <img id="mset-scr" class="pixelated" src="img/mset-scr.png">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="help" tabindex="-1" role="dialog" aria-labelledby="help">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modaltitle">Help</h4>
      </div>
      <div class="modal-body">
        <p>This guide currently only covers USA/EUR/JPN regions.</p>
        <p>If you have a lower firmware and it doesn't appear in the list, make sure you <a href="model.php">chose the correct model</a>.</p>
        If your firmware is somehow not listed, create an issue on <a href="https://github.com/ihaveamac/ez3ds">GitHub</a>. New firmwares will be added soon after their release.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <h1 class="page-header">Pick system version</h1>
  <div class="row" id="row-firmware">
    <div class="col-md-4 col-sm-3 col-xs-12 center">
      <?=$names[$_GET["lv"]-1]?><br>
      <img class="console" src="img/<?=$imgs[$_GET["lv"]-1]?>.png"><br>
      <small>Wrong model? <a class="btn btn-default btn-xs" href="model.php" role="button">Pick again</a></small>
    </div>
    <div class="col-md-4 col-sm-6 col-xs-12 firmware">
      <form class="firmware center" action="checkfw.php" method="get">
        <input type="hidden" value="<?=$model?>" name="model">
        <p>
          <!-- default selected firmware is 11.1.0-34U -->
          <select class="selectpicker show-menu-arrow" data-width="auto" name="major">
            <?php if ($_GET["lv"] <= 1) { ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <?php } if ($_GET["lv"] <= 2) { ?>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <?php } if ($_GET["lv"] <= 3) { ?>
            <option value="6">6</option>
            <option value="7">7</option>
            <?php } if ($_GET["lv"] <= 4) { ?>
            <option value="8">8</option>
            <?php } if ($_GET["lv"] <= 5) { ?>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11" selected="selected">11</option>
            <?php } ?>
          </select>
          .
          <select class="selectpicker show-menu-arrow" data-width="auto" name="minor">
            <option value="0">0</option>
            <option value="1" selected="selected">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
          </select>
          .
          <select class="selectpicker show-menu-arrow" data-width="auto" name="revision">
            <option value="0" selected="selected">0</option>
          </select>
          -
          <select class="selectpicker show-menu-arrow" data-width="auto" name="nver">
            <?php if ($_GET["lv"] <= 1 || $_GET["lv"] == 4) { ?>
            <option value="0">0</option>
            <?php } if ($_GET["lv"] <= 1) { ?>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <?php } if ($_GET["lv"] <= 2) { ?>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <?php } if ($_GET["lv"] <= 3) { ?>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <?php } if ($_GET["lv"] <= 5) { ?>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34" selected="selected">34</option>
            <?php } ?>
          </select>
          <select class="selectpicker show-menu-arrow" data-width="auto" name="region">
            <option value="U" selected="selected">U</option>
            <option value="E">E</option>
            <option value="J">J</option>
          </select>
        </p>
        <p>
          <input class="btn btn-primary" type="submit" value="Submit">
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#findfw">Where?</button>
          <button type="button" class="btn btn-default" data-toggle="modal" data-target="#help">Help</button><br>
        </p>
      </form>
    </div>
  </div>
</div>
<?php include_once("_footer.php"); ?>
