<?php
$hax_exploits = array(
  "browserhax" => array(
    "title" => "Internet Browser",
    "url" => "https://yls8.mtheall.com/3dsbrowserhax.php",
    "primary" => true,
    "other" => "Works up to 11.0.0-33.",
    "icon" => "img/game/browser.png"
  ),
  "menuhax" => array(
    "title" => "HOME Menu",
    "url" => "https://github.com/yellows8/3ds_homemenuhax/releases",
    "primary" => false,
    "other" => "Works up to 11.0.0-33.",
    "icon" => "img/game/homemenu.png"
  ),
  "ninjhax" => array(
    "title" => "Cubic Ninja",
    "url" => "https://smealum.github.io/ninjhax2/",
    "primary" => true,
    "other" => "Does not work properly on 11.0.0-33 as of yet.",
    "icon" => "img/game/cubicninja.png"
  ),
  "freakyhax" => array(
    "title" => "Freakyforms Deluxe: Your Creations, Alive!",
    "url" => "https://plutooo.github.io/freakyhax/",
    "primary" => true,
    "other" => "",
    "icon" => "img/game/ffdeluxe.png"
  ),
  "BASICSploit" => array(
    "title" => "SmileBASIC",
    "url" => "http://mrnbayoh.github.io/basicsploit/",
    "primary" => true,
    "other" => "Supports USA 3.2.1. Fixed since 3.3.2.",
    "icon" => "img/game/smilebasic.png"
  ),
  "smilehax" => array(
    "title" => "SmileBASIC",
    "url" => "https://plutooo.github.io/smilehax/",
    "primary" => true,
    "other" => "Supports USA 3.3.1 and JPN 3.0.0. Fixed since 3.3.2.",
    "icon" => "img/game/smilebasic.png"
  ),
  "oot3dhax" => array(
    "title" => "The Legend of Zelda: Ocarina of Time 3D",
    "url" => "https://github.com/yellows8/oot3dhax",
    "primary" => false,
    "other" => "Requires alternate entry point (any system if game card) or Powersaves/save device for installation. Systems on stock 11.0.0-33 can't use the installer as of yet.",
    "icon" => "img/game/oot3d.png"
  ),
  "smashbroshax" => array(
    "title" => "Super Smash Bros. for Nintendo 3DS",
    "url" => "https://gbatemp.net/threads/tutorial-using-smashhax-with-linux.397194/",
    "primary" => true,
    "other" => "Fixed since 1.1.3. Demo does not work. Without update data installed, game cards with anything but 1.0.0 and 1.0.1 do not work properly.",
    "icon" => "img/game/smashbros.png"
  ),
  "supermysterychunkhax" => array(
    "title" => "Pokémon Super Mystery Dungeon",
    "url" => "http://smd.salthax.org/",
    "primary" => false,
    "other" => "Requires alternate entry point (any system if game card) for installation.",
    "icon" => "img/game/psmd.png"
  ),
  "(v*)hax" => array(
    "title" => "VVVVVV",
    "url" => "https://vvvvvv.salthax.org/",
    "primary" => false,
    "other" => "Not for sale on eShop at the moment. Requires alternate entry point (same system) for installation.",
    "icon" => "img/game/vvvvvv.png"
  ),
  "humblehax" => array(
    "title" => "Citizens of Earth",
    "url" => "https://citizens.salthax.org/",
    "primary" => false,
    "other" => "Requires alternate entry point (same system) for installation.",
    "icon" => "img/game/coearth.png"
  ),
  "basehaxx" => array(
    "title" => "Pokémon Omega Ruby and Alpha Sapphire",
    "url" => "http://mrnbayoh.github.io/basehaxx/",
    "primary" => false,
    "other" => "Only works with 1.0 and 1.4. Requires alternate entry point (any system if game card) for installation.",
    "icon" => "img/game/pkmnoras.png"
  ),
  "stickerhax" => array(
    "title" => "Paper Mario: Sticker Star",
    "url" => "https://github.com/yellows8/stickerhax",
    "primary" => false,
    "other" => "Requires alternate entry point (any system if game card) for installation.",
    "icon" => "img/game/pmss.png"
  ),
);

$info = array(
  "dummy browser" => "<b>Dummy browser installed</b> - This system was on 9.8.0-25 or lower, and updated with a game card containing 9.9.0 or higher, therefore a dummy browser was installed, replacing any previous ones. A game-based exploit is required.",
  "no browser" => "<b>No browser installed</b> - This system is or was on 1.0.0-0 or 1.1.0-1, and updated with a game card (if not 1.x), therefore has no browser. Another exploit is required.",
  "browser" => "<b>Browser installed</b> - This system has a browser, so one of the browser-based exploits should work fine. Note that browser exploits are not fully stable and might require a few tries to get working.",
  "new jpn 81" => "<b>New 3DS JPN 8.1</b> - This appears to be a New 3DS system with 8.1.0-0J. This system needs to be updated to 9.2.0 first. (The final result will be 9.1.0-20J, this is perfectly normal.)",
  "start on 21" => "<b>Start on 2.1.0-4</b> - This system is already on 2.1.0-4, so arm9loaderhax can be installed right away, then updated to 9.2.0-20 via ctrtransfer.",
  "11" => "<b>11.0.0</b> - This system is on 11.0.0 or higher, which currently can't be downgraded with software only. If this console is to be downgraded, a hardware mod, or DSiware + another 3DS system with custom firmware, is required to downgrade the firmware.",
);

$to_do = array(
  "4x or 6x update" => array(
    "desc" => "Update this system to a version between 4.1 - 4.5, or 6.0 - 6.3, using a game card.",
    "link" => "https://github.com/Plailect/Guide/wiki/Cart-Update",
    "link-desc" => "Cart Update"
  ),
  "4x to 8x update" => array(
    "desc" => "Update this system to a version between 4.1 - 8.1 using a game card.",
    "link" => "https://github.com/Plailect/Guide/wiki/Cart-Update",
    "link-desc" => "Cart Update"
  ),
  "6x update" => array(
    "desc" => "Update this system to a version between 6.0 - 6.3, using a game card.",
    "link" => "https://github.com/Plailect/Guide/wiki/Cart-Update",
    "link-desc" => "Cart Update"
  ),
  "90 to 107 update" => array(
    "desc" => "Update this system to a version between 9.0 - 10.7 using a game card. Note that updating to 9.9+ from 9.8 or lower will remove any installed browser!",
    "link" => "https://github.com/Plailect/Guide/wiki/Cart-Update",
    "link-desc" => "Cart Update"
  ),
  "fw downgrade" => array(
    "desc" => "Downgrade firmware from 11.0.0 to 10.4.0. This won't change the version shown in System Settings, but will enable downgrading further to 9.2.0.",
    "link" => "https://github.com/Plailect/Guide/wiki/Firmware-Downgrade",
    "link-desc" => "Firmware Downgrade"
  ),
  "new jpn 81 update" => array(
    "desc" => "Update the system to 9.2.0 using the NTR CFW and Cubic Ninja method.",
    "link" => "https://github.com/Plailect/Guide/wiki/NTR-and-Cubic-Ninja",
    "link-desc" => "NTR and Cubic Ninja"
  ),
  "start on 21 install" => array(
    "desc" => "Use the 9.2.0 ctrtransfer method.",
    "link" => "https://github.com/Plailect/Guide/wiki/9.2.0-ctrtransfer",
    "link-desc" => "9.2.0 ctrtransfer"
  ),
  "hbl browser" => array(
    "desc" => "Enter the Homebrew Launcher, using the Internet Browser.",
    "link" => "https://github.com/Plailect/Guide/wiki/Homebrew-Launcher-(Browser)",
    "link-desc" => "Homebrew Launcher (Browser)"
  ),
  "hbl no browser" => array(
    "desc" => "Enter the Homebrew Launcher, using one of the game-based exploits.",
    "link" => "https://github.com/Plailect/Guide/wiki/Homebrew-Launcher-(No-Browser)",
    "link-desc" => "Homebrew Launcher (No Browser)"
  ),
  "hbl browser downgrade" => array(
    "desc" => "Enter the Homebrew Launcher, using the Internet Browser, and downgrade to 9.2.0.",
    "link" => "https://github.com/Plailect/Guide/wiki/Homebrew-Launcher-(Browser)",
    "link-desc" => "Homebrew Launcher (Browser)"
  ),
  "hbl no browser downgrade" => array(
    "desc" => "Enter the Homebrew Launcher, using one of the game-based exploits, and downgrade to 9.2.0.",
    "link" => "https://github.com/Plailect/Guide/wiki/Homebrew-Launcher-(No-Browser)",
    "link-desc" => "Homebrew Launcher (No Browser)"
  ),
  "d9 browser" => array(
    "desc" => "Enter Decrypt9, using the Internet Browser.",
    "link" => "https://github.com/Plailect/Guide/wiki/Decrypt9-(Browser)",
    "link-desc" => "Decrypt9 (Browser)"
  ),
  "d9 no browser" => array(
    "desc" => "Enter Decrypt9, using the Nintendo DS Profile exploit.",
    "link" => "https://github.com/Plailect/Guide/wiki/Decrypt9-(MSET)",
    "link-desc" => "Decrypt9 (MSET)"
  ),
  "ctrtransfer" => array(
    "desc" => "Use the 2.1.0 ctrtransfer method.",
    "link" => "https://github.com/Plailect/Guide/wiki/Part-2-(2.1.0-ctrtransfer)",
    "link-desc" => "Part 2 (2.1.0 ctrtransfer)"
  ),
  "install a9lh" => array(
    "desc" => "Install arm9loaderhax.",
    "link" => "https://github.com/Plailect/Guide/wiki/Part-3-(arm9loaderhax)",
    "link-desc" => "Part 3 (arm9loaderhax)"
  ),
);

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

$p_model = $_POST["model"];
$p_major = $_POST["major"];
$p_minor = $_POST["minor"];
$p_revision = $_POST["revision"];
$p_nver = $_POST["nver"];
$p_region = $_POST["region"];

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

  if ($p_major >= 9) {
    if ($has_browser) {
      array_push($final_exploits, "browserhax");
    }
    if ($p_major != 11) {
      array_push($final_exploits, "ninjhax");
    }
    array_push($final_exploits, "freakyhax", "menuhax", "oot3dhax", "supermysterychunkhax", "(v*)hax", "humblehax", "basehaxx", "stickerhax");
    if ($p_region != "E") {
      array_push($final_exploits, "BASICSploit", "smilehax");
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
        <img class="title-icon" src="<?=$value["icon"]?>">
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
