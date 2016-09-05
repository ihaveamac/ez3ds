<?php
require_once("list/hax_exploits.php");
require_once("list/info.php");
require_once("list/to_do.php");
// require_once("list/to_do_homebrew.php");

$to_do_homebrew = array(
  "starter pack" => array(
    "desc" => "Download the latest Homebrew Starter Kit.",
    "link" => "https://smealum.github.io/ninjhax2/starter.zip",
    "link-desc" => "Homebrew Starter Kit"
  ),
  "extract starter pack" => array(
    "desc" => "Copy <code>boot.3dsx</code> and <code>3ds</code> to the root of your 3DS SD card."
  ),
  "enter hbl browser" => array(
    "desc" => "Use the Internet Browser (or other exploit) to use the Homebrew Launcher.",
    "link" => "https://yls8.mtheall.com/3dsbrowserhax.php",
    "link-desc" => "Nintendo 3DS web-browser exploits"
  ),
  "enter hbl no browser" => array(
    "desc" => "Use one of the exploits to use the Homebrew Launcher."
  ),
  "install secondary" => array(
    "desc" => "<i>Recommended</i> - Install a secondary entrypoint. This is especially important if using browserhax, due to the version check and general instability. Note the date-time bypass (setting the date back to get around the version check) has been fixed since 10.7.0-32."
  )
);

// TODO: maybe check for impossible versions (e.g. 4.7.0-33)

$final_info = array();
$final_to_do = array();
$final_to_do_homebrew = array();
$final_exploits = array();

$p_model = $_GET["model"];
$p_major = $_GET["major"];
$p_minor = $_GET["minor"];
$p_revision = $_GET["revision"];
$p_nver = $_GET["nver"];
$p_region = $_GET["region"];

// prevent impossible values that aren't normally selectable
if (($p_model != "New" && $p_model != "Old") ||
    ($p_major < 1 || $p_major > 11) ||
    ($p_minor < 0 || $p_minor > 9) ||
    ($p_revision != 0) ||
    ($p_nver < 0 || $p_nver > 33) ||
    ($p_region != "U" && $p_region != "E" && $p_region != "J")) {
  echo 'you shouldn\'t see this page - if you do, create an issue on <a href="https://github.com/ihaveamac/ez3ds">GitHub</a>! include what options you picked.<br><a href="model.php">Start over</a>';
  die; // no u
}

// stupid shit
if($p_minor==6&&$p_revision==0&&$p_major==3){header(hex2bin("4C6F636174696F6E3A2068747470733A2F2F68656E6B616B752E78797A"));die;}
if($p_revision==0&&$p_major==5&&$p_minor==5){header(hex2bin("4C6F636174696F6E3A20687474703A2F2F6C6F616469696E652E6F7668"));die;}
if($p_minor==6&&$p_major==6&&$p_revision==0){header(hex2bin("4C6F636174696F6E3A20687474703A2F2F776F6C6F6C6F2E6E65742F6366773464756D6D6965732F"));die;}

// special check for 8.1.0-0J
if ($p_major == 8 && $p_minor == 1 && $p_nver == 0 && $p_model == "New" && $p_region == "J") {
  array_push($final_info, "new jpn 81");
  array_push($final_to_do, "new jpn 81 update", "hbl browser", "ctrtransfer", "install a9lh");
// special check for 2.1.0-4
} elseif ($p_major == 2 && $p_minor == 1 && $p_nver == 4) {
  array_push($final_info, "start on 21");
  array_push($final_to_do, "start on 21 install");
} else {
  // check if an actual browser is installed
  $has_browser = true;
  if ($p_nver < 26) { // at this point game card updates won't install dummy browser
    if (($p_major == 9 && $p_minor == 9) || ($p_major > 9)) { // check for 9.9 and nver below 26
      array_push($final_info, "dummy browser");
      $has_browser = false;
    } elseif ($p_nver < 2) {
      array_push($final_info, "no browser");
      $has_browser = false;
    } else {
      array_push($final_info, "browser");
    }
  } else {
    array_push($final_info, "browser");
  }

  if ($p_major == 11) {
    array_push($final_info, "11");
    array_push($final_to_do, "fw downgrade");
  }

  if (($p_major > 9 || ($p_major == 9 && $p_minor > 2 ))) {
    if ($has_browser) {
      array_push($final_to_do, "hbl browser downgrade");
    } else {
      array_push($final_to_do, "hbl no browser downgrade");
    }
  } else {
    if ($p_major == 9) {
      if ($has_browser) {
        array_push($final_to_do, "hbl browser");
      } else {
        array_push($final_to_do, "hbl no browser");
      }
    } else {
      if ($p_major < 4) {
        if ($has_browser) {
          array_push($final_to_do, "4x to 8x update");
        } else {
          array_push($final_to_do, "4x or 6x update");
        }
      }
      if ($has_browser) {
        array_push($final_to_do, "d9 browser");
      } else {
        if ($p_major == 5) {
          array_push($final_to_do, "6x update");
        }
        if ($p_major <= 6) {
          array_push($final_to_do, "d9 no browser");
        } else {
          array_push($final_to_do, "90 to 107 update");
          array_push($final_to_do, "hbl no browser downgrade");
        }
      }
    }
  }
  array_push($final_to_do, "ctrtransfer", "install a9lh");

  // SmileBASIC USA lowest: 10.1.0-27U
  // SmileBASIC JPN lowest: 9.2.0-20J?
  // PSMD USA/JPN Lowest: 9.9
  // PSMD EUR Lowest: 10.2
  if ($p_major >= 9) {
    if ($has_browser) {
      array_push($final_exploits, "browserhax");
    }
    if ($p_major != 11) {
      array_push($final_exploits, "ninjhax");
    }
    array_push($final_exploits, "freakyhax", "menuhax", "oot3dhax", "(v*)hax", "humblehax", "basehaxx", "stickerhax");
    if ($p_region == "J") {
      if (($p_major > 9 || ($p_major == 9 && $p_minor >= 2 ))) {
        array_push($final_exploits, "BASICSploit", "smilehax");
      }
      if (($p_major > 9 || ($p_major == 9 && $p_minor >= 9 ))) {
        array_push($final_exploits, "supermysterychunkhax");
      }
    } elseif ($p_region == "U") {
      if (($p_major > 10 || ($p_major == 10 && $p_minor >= 1 ))) {
        array_push($final_exploits, "BASICSploit", "smilehax");
      }
      if (($p_major > 9 || ($p_major == 9 && $p_minor >= 9 ))) {
        array_push($final_exploits, "supermysterychunkhax");
      }
    } elseif ($p_region == "E") {
      if (($p_major > 10 || ($p_major == 10 && $p_minor >= 2 ))) {
        array_push($final_exploits, "supermysterychunkhax");
      }
    }
    if ($p_model == "New") {
      array_push($final_exploits, "smashbroshax");
    }
  }

  if (($p_major > 9 || ($p_major == 9 && $p_minor > 2 ))) {
    array_push($final_to_do_homebrew, "starter pack", "extract starter pack");
    if ($has_browser) {
      array_push($final_to_do_homebrew, "enter hbl browser");
    } else {
      array_push($final_to_do_homebrew, "enter hbl no browser");
    }
  }
}

$title = "ez3ds - Results for ".$p_model." 3DS ".$p_major.".".$p_minor.".".$p_revision."-".$p_nver.$p_region;
include_once("_header.php");
?>
<!-- Modal -->
<div class="modal fade" id="diff" tabindex="-1" role="dialog" aria-labelledby="diff">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modaltitle">Differences between "Homebrew" and "Custom Firmware"</h4>
      </div>
      <div class="modal-body">
        <p>This is placeholder text! Because I suck at writing this.</p>
        <p>If you can see this, and you want to write this, fork this and create a pull request! https://github.com/ihaveamac/ez3ds</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <h1>Results for <?=$p_model?> 3DS <?=$p_major.".".$p_minor.".".$p_revision."-".$p_nver.$p_region?></h1>
<?php

echo "<h2>Information</h2><ul>";
foreach ($final_info as $value) {
  echo "<li>".$info[$value]."</li>";
}
echo "</ul>";

echo "<h2>What to do</h2>";
if (!empty($final_to_do_homebrew)) { // only show header if homebrew steps would be shown too
  // echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#diff">What\'s the difference?</button>';
  echo "<h3>Custom Firmware (recommended)</h3>";
}
echo "<ol>";
foreach ($final_to_do as $value) {
  echo '<li><p>'.$to_do[$value]["desc"].'</p>';
  if (!empty($to_do[$value]["link"])) {
    echo '<p><a class="btn btn-primary" href="'.$to_do[$value]["link"].'" role="button" target="_blank">'.$to_do[$value]["link-desc"].' <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></p>';
  }
echo '</li>';
}
if (!empty($final_to_do_homebrew)) {
  echo "</ol><h3>Homebrew</h3><ol>";
  foreach ($final_to_do_homebrew as $value) {
    echo '<li><p>'.$to_do_homebrew[$value]["desc"].'</p>';
    if (!empty($to_do_homebrew[$value]["link"])) {
      echo '<p><a class="btn btn-primary" href="'.$to_do_homebrew[$value]["link"].'" role="button" target="_blank">'.$to_do_homebrew[$value]["link-desc"].' <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></p>';
    }
    echo '</li>';
  }
}
echo "</ol>";

function print_exploit_info($key, $value) {
?>
  <div class="well well-sm title-well">
    <div class="row">
      <div class="col-xs-3 col-sm-1">
        <img class="title-icon pixelated" src="<?=$value["icon"]?>">
      </div>
      <div class="col-xs-9 col-sm-9">
        <span class="title-hax-name"><?=$key?></span><br>
        <span class="title-name"><?=$value["title"]?></span>
        <?php if ($value["other"] != "") { ?><br>
        <span class="title-other"><?=$value["other"]?></span>
        <?php } ?>
      </div>
      <?php if (!empty($value["url"])) { ?>
      <div class="visible-xs-block col-xs-3"></div>
      <!-- hiding and showing different buttons for different alignment seems ugly -->
      <div class="hidden-xs">
        <div class="col-xs-9 col-sm-2 title-site-btn-normal">
          <a class="btn btn-primary" href="<?=$value["url"]?>" role="button" target="_blank">Go to site <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
        </div>
      </div>
      <div class="visible-xs-block">
        <div class="col-xs-9 col-sm-2 title-site-btn-mobile">
          <a class="btn btn-primary" href="<?=$value["url"]?>" role="button" target="_blank">Go to site <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
<?php
}

if (!empty($final_exploits)) {
  echo "<h2>List of usable exploits</h2>";
  echo "<h3>Primary</h3>";
  foreach ($final_exploits as $value) {
    if ($hax_exploits[$value]["primary"]) {
      print_exploit_info($value, $hax_exploits[$value]);
    }
  }
  echo "<h3>Secondary</h3>";
  foreach ($final_exploits as $value) {
    if (!$hax_exploits[$value]["primary"]) {
      print_exploit_info($value, $hax_exploits[$value]);
    }
  }
}
echo '</div>';
include_once("_footer.php");
