<?php
require_once("list/hax_exploits.php");
require_once("list/info.php");
require_once("list/to_do.php");

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
    "desc" => "Use the Internet Browser (or other exploit) to use the Homebrew Launcher.<br>The QR code can be scanned at the HOME Menu by pressing L+R for the Camera.<br>If the exploit is unstable, try resetting the browser data first.",
    "image" => "https://yls8.mtheall.com/3dsbrowserhax_auto_qrcode.png",
    "link" => "https://yls8.mtheall.com/3dsbrowserhax.php",
    "link-desc" => "Nintendo 3DS web-browser exploits"
  ),
  "enter hbl no browser" => array(
    "desc" => "Use one of the exploits below to use the Homebrew Launcher."
  ),
  "install secondary" => array(
    "desc" => "<i>Recommended</i> - Install a secondary entrypoint. This is especially important if using browserhax, due to the version check and general instability. Note the date-time bypass (setting the date back to get around the version check) has been fixed since 10.7.0-32."
  )
);

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
    ($p_nver < 0 || $p_nver > 34) ||
    ($p_region != "U" && $p_region != "E" && $p_region != "J")) {
  header("Location: model?bad");
  die; // no u
}

// stupid shit
if($p_minor==6&&$p_revision==0&&$p_major==3){header(hex2bin("4C6F636174696F6E3A2068747470733A2F2F68656E6B616B752E78797A"));die;}
if($p_revision==0&&$p_major==5&&$p_minor==5){header(hex2bin("4C6F636174696F6E3A20687474703A2F2F6C6F616469696E652E6F7668"));die;}
if($p_minor==6&&$p_major==6&&$p_revision==0){header(hex2bin("4C6F636174696F6E3A20687474703A2F2F776F6C6F6C6F2E6E65742F6366773464756D6D6965732F"));die;}

// check for invalid versions
// if there's a better way to do this, tell me
if (($p_major == 1 && $p_minor == 0 && $p_nver > 0) ||   // 1.0.0-0
    ($p_major == 1 && $p_minor == 1 && $p_nver > 1) ||   // 1.1.0-1
    ($p_major == 1 && $p_minor > 1) ||
    ($p_major == 2 && $p_minor == 0 && $p_nver > 2) ||   // 2.0.0-2
    ($p_major == 2 && $p_minor == 1 && $p_nver > 4) ||   // 2.1.0-3
    ($p_major == 2 && $p_minor == 2 && $p_nver > 4) ||   // 2.2.0-4
    ($p_major == 2 && $p_minor > 2) ||
    ($p_major == 3 && $p_minor == 0 && $p_nver > 6) ||   // 3.0.0-6
    ($p_major == 3 && $p_minor > 0) ||
    ($p_major == 4 && $p_minor == 0 && $p_nver > 7) ||   // 4.0.0-7
    ($p_major == 4 && $p_minor == 1 && $p_nver > 8) ||   // 4.1.0-8
    ($p_major == 4 && $p_minor == 2 && $p_nver > 9) ||   // 4.2.0-9
    ($p_major == 4 && $p_minor == 3 && $p_nver > 10) ||  // 4.3.0-10
    ($p_major == 4 && $p_minor == 4 && $p_nver > 10) ||  // 4.4.0-10
    ($p_major == 4 && $p_minor == 5 && $p_nver > 10) ||  // 4.5.0-10
    ($p_major == 4 && $p_minor > 5) ||
    ($p_major == 5 && $p_minor == 0 && $p_nver > 11) ||  // 5.0.0-11
    ($p_major == 5 && $p_minor == 1 && $p_nver > 11) ||  // 5.1.0-11
    ($p_major == 5 && $p_minor > 1) ||
    ($p_major == 6 && $p_minor == 0 && $p_nver > 12) ||  // 6.0.0-12
    ($p_major == 6 && $p_minor == 1 && $p_nver > 12) ||  // 6.1.0-12
    ($p_major == 6 && $p_minor == 2 && $p_nver > 12) ||  // 6.2.0-12
    ($p_major == 6 && $p_minor == 3 && $p_nver > 12) ||  // 6.3.0-12
    ($p_major == 6 && $p_minor > 3) ||
    ($p_major == 7 && $p_minor == 0 && $p_nver > 13) ||  // 7.0.0-13
    ($p_major == 7 && $p_minor == 1 && $p_nver > 16) ||  // 7.1.0-16
    ($p_major == 7 && $p_minor == 2 && $p_nver > 17) ||  // 7.2.0-17
    ($p_major == 7 && $p_minor > 2) ||
    ($p_major == 8 && $p_minor == 0 && $p_nver > 18) ||  // 8.0.0-18
    ($p_major == 8 && $p_minor == 1 && $p_nver > 19) ||  // 8.1.0-19
    ($p_major == 8 && $p_minor > 1) ||
    ($p_major == 9 && $p_minor == 0 && $p_nver > 20) ||  // 9.0.0-20
    ($p_major == 9 && $p_minor == 1 && $p_nver > 20) ||  // 9.1.0-20
    ($p_major == 9 && $p_minor == 2 && $p_nver > 20) ||  // 9.2.0-20
    ($p_major == 9 && $p_minor == 3 && $p_nver > 21) ||  // 9.3.0-21
    ($p_major == 9 && $p_minor == 4 && $p_nver > 21) ||  // 9.4.0-21
    ($p_major == 9 && $p_minor == 5 && $p_nver > 23) ||  // 9.5.0-23
    ($p_major == 9 && $p_minor == 6 && $p_nver > 24) ||  // 9.6.0-24
    ($p_major == 9 && $p_minor == 7 && $p_nver > 25) ||  // 9.7.0-25
    ($p_major == 9 && $p_minor == 8 && $p_nver > 25) ||  // 9.8.0-25
    ($p_major == 9 && $p_minor == 9 && $p_nver > 26) ||  // 9.9.0-26
    ($p_major == 9 && $p_minor > 9) || // this one is probably not necessary
    ($p_major == 10 && $p_minor == 0 && $p_nver > 27) || // 10.0.0-27
    ($p_major == 10 && $p_minor == 1 && $p_nver > 27) || // 10.1.0-17
    ($p_major == 10 && $p_minor == 2 && $p_nver > 28) || // 10.2.0-28
    ($p_major == 10 && $p_minor == 3 && $p_nver > 28) || // 10.3.0-28
    ($p_major == 10 && $p_minor == 4 && $p_nver > 29) || // 10.4.0-29
    ($p_major == 10 && $p_minor == 5 && $p_nver > 30) || // 10.5.0-30
    ($p_major == 10 && $p_minor == 6 && $p_nver > 31) || // 10.6.0-31
    ($p_major == 10 && $p_minor == 7 && $p_nver > 32) || // 10.7.0-32
    ($p_major == 10 && $p_minor > 7) ||
    ($p_major == 11 && $p_minor == 0 && $p_nver > 33) || // 11.0.0-33
    ($p_major == 11 && $p_minor == 1 && $p_nver > 34) || // 11.1.0-34
    ($p_major == 11 && $p_minor > 1)) {
  header("Location: model?bad");
  die; // no u
}

// special check for 8.1.0-0J
$downgradable = true; // also applies to 9.2 and lower, though won't show "downgradable" notice then
if ($p_major == 8 && $p_minor == 1 && $p_nver == 0 && $p_model == "New" && $p_region == "J") {
  array_push($final_info, "new jpn 81");
  array_push($final_to_do, "new jpn 81 update", "hbl browser", "ctrtransfer", "install a9lh");
// special check for 2.1.0-4
} elseif ($p_major == 2 && $p_minor == 1 && $p_nver == 4) {
  array_push($final_info, "start on 21");
  array_push($final_to_do, "install a9lh");
} else {
  /*if ($p_major == 11 && $p_minor == 1) {
    array_push($final_info, "hax needs update");
  }*/

  // check if downgradable
  if (($p_major == 11 && $p_minor <= 1) || $p_major == 10 || ($p_major == 9 && $p_minor > 2)) {
    array_push($final_info, "downgradable");
  } elseif (($p_major == 11 && $p_minor > 1) || $p_major > 11) {
    array_push($final_info, "not downgradable");
    $downgradable = false;
  }

  // check if an actual *exploitable* browser is installed
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
    if ($p_nver <= 31) {
      array_push($final_info, "browser");
    } elseif ($p_nver <= 33) {
      array_push($final_info, "browser blocked");
      $has_browser = false;
    } else {
      array_push($final_info, "browser no exploit");
      $has_browser = false;
    }
  }

  if ($p_major == 11 && $p_minor <= 1) {
    array_push($final_info, "11");
    array_push($final_to_do, "fw downgrade 11".$p_minor);
  }

  if (($p_major > 9 || ($p_major == 9 && $p_minor > 2 ))) {
    if ($has_browser) {
      array_push($final_to_do, "hbl browser");
      array_push($final_to_do, "92 downgrade");
    } else {
      array_push($final_to_do, "hbl no browser");
      array_push($final_to_do, "92 downgrade");
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
          array_push($final_to_do, "hbl no browser");
          array_push($final_to_do, "92 downgrade");
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
    if ($p_nver <= 33) {
      if ($has_browser) {
        array_push($final_exploits, "browserhax");
      }
      array_push($final_exploits, "menuhax");
    }
    array_push($final_exploits, "ninjhax", "freakyhax", "oot3dhax", "stickerhax", "steelhax");
    // temporary until they are fixed
    if (!($p_major == 11 && $p_minor >= 1)) {
      array_push($final_exploits, "(v*)hax", "humblehax", "basehaxx");
    }
    if ($p_region == "J") {
      if (($p_major == 11 && $p_minor < 1) || $p_major == 10 || ($p_major == 9 && $p_minor >= 2 )) {
        array_push($final_exploits, "BASICSploit", "smilehax");
      }
      if ($p_major > 9 || ($p_major == 9 && $p_minor >= 9 )) {
        array_push($final_exploits, "supermysterychunkhax");
      }
    } elseif ($p_region == "U") {
      if (($p_major == 11 && $p_minor < 1) || $p_major == 10 || ($p_major == 10 && $p_minor >= 1 )) {
        array_push($final_exploits, "BASICSploit", "smilehax");
      }
      if ($p_major > 9 || ($p_major == 9 && $p_minor >= 9 )) {
        array_push($final_exploits, "supermysterychunkhax");
      }
    } elseif ($p_region == "E") {
      if ($p_major > 10 || ($p_major == 10 && $p_minor >= 2 )) {
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
    array_push($final_to_do_homebrew, "install secondary");
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
<!-- primary and secondary -->
<div class="modal fade" id="exploittypes" tabindex="-1" role="dialog" aria-labelledby="exploittypes">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modaltitle">Primary and Secondary exploits</h4>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="container">
  <h1 class="page-header">Results for <?=$p_model?> 3DS <?=$p_major.".".$p_minor.".".$p_revision."-".$p_nver.$p_region?></h1>
<?php

echo '<div id="info">';
echo '<h2>Information <small><a href="#info">#info</a></small></h2>';
foreach ($final_info as $value) {
  ?>
  <div class="panel panel-<?=$info[$value]["style"]?>">
    <div class="panel-heading">
      <h3 class="panel-title"><?=$info[$value]["title"]?></h3>
    </div>
    <div class="panel-body">
      <?=$info[$value]["desc"]?>
    </div>
  </div>
<?php }

echo '<hr id="todo">';
echo '<h2>What to do <small><a href="#todo">#todo</a></small></h2>';
if ($downgradable) {
  echo '<div id="cfw">';
  echo '<h3>Custom Firmware (recommended) <small><a href="#cfw">#cfw</a></small> </h3>';
  echo "<ol>";
  foreach ($final_to_do as $value) {
    echo '<li><p>'.$to_do[$value]["desc"].'</p>';
    if (!empty($to_do[$value]["image"])) {
      echo '<p><img src="'.$to_do[$value]["image"].'"></p>';
    }
    if (!empty($to_do[$value]["link"])) {
      echo '<p><a class="btn btn-primary btn-sm" href="'.$to_do[$value]["link"].'" role="button" target="_blank">'.$to_do[$value]["link-desc"].' <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></p>';
    }
    echo '</li>';
  }
  echo "</ol>";
}
if (!empty($final_to_do_homebrew)) {
  echo '<div id="homebrew">';
  echo '<h3>Homebrew <small><a href="#homebrew">#homebrew</a></small> </h3>';
  echo "<ol>";
  foreach ($final_to_do_homebrew as $value) {
    echo '<li><p>'.$to_do_homebrew[$value]["desc"].'</p>';
    if (!empty($to_do_homebrew[$value]["image"])) {
      echo '<p><img src="'.$to_do_homebrew[$value]["image"].'" class="pixelated"></p>';
    }
    if (!empty($to_do_homebrew[$value]["link"])) {
      echo '<p><a class="btn btn-primary btn-sm" href="'.$to_do_homebrew[$value]["link"].'" role="button" target="_blank">'.$to_do_homebrew[$value]["link-desc"].' <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></p>';
    }
    echo '</li>';
  }
}
echo "</ol>";

function print_exploit_info($key, $value) {
?>
<li>
  <div class="panel <?=($key == "browserhax")?"panel-primary":"panel-default"?>">
    <div class="panel-body">
      <div class="media">
        <div class="media-left">
          <img class="media-object title-icon pixelated" src="<?=$value["icon"]?>" alt="<?=$key?>">
        </div>
        <div class="media-body">
          <h4 class="media-heading"><?=$key?></h4>
          <?=$value["title"]?>
          <?php if ($value["other"] != "") { ?><br>
          <span class="title-other"><?=$value["other"]?></span>
          <?php } if (!empty($value["url"])) { ?>
          <div class="title-site-btn">
            <a class="btn btn-primary" href="<?=$value["url"]?>" role="button" target="_blank">Go to site <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
          </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</li>
<?php
}

// separating so it can be easily edited
$exploit_diff_popover = "<p><b>Primary</b> exploits do not require extra exploits or hardware to use. The only two things needed are the system and the game.</p>
<b>Secondary</b> exploits can only be set up using a system with Homebrew access (including the same one), or extra hardware like Powersaves or a save device.";

if (!empty($final_exploits)) {
  echo '<hr id="exploitlist">';
  echo '<h2>List of usable exploits <a role="button" tabindex="0" class="btn btn-default" data-toggle="popover" data-trigger="focus" title="Exploit types" data-content="'.$exploit_diff_popover.'">Difference</a> <small><a href="#exploitlist">#exploitlist</a></small></h2>';
  echo '<div id="primary">';
  echo '<h3>Primary <small><a href="#primary">#primary</a></small> </h3>';
  echo '<div class="hax-list row container"><ul class="list-unstyled">';
  foreach ($final_exploits as $value) {
    if ($hax_exploits[$value]["primary"]) {
      print_exploit_info($value, $hax_exploits[$value]);
    }
  }
  echo '</div>';
  echo '<div id="secondary">';
  echo '<h3>Secondary <small><a href="#secondary">#secondary</a></small> </h3>';
  echo '<div class="hax-list row container"><ul class="list-unstyled">';
  foreach ($final_exploits as $value) {
    if (!$hax_exploits[$value]["primary"]) {
      print_exploit_info($value, $hax_exploits[$value]);
    }
  }
  echo '</div>';
}
echo '</div>';
include_once("_footer.php");
