<?php
$info = array(
  "dummy browser" => array(
    "title" => "Dummy browser installed",
    "style" => "warning",
    "desc" => "This system was on 9.8.0-25 or lower, and updated with a game card containing 9.9.0 or higher, therefore a dummy browser was installed, replacing any previous ones. A game-based exploit is required.",
  ),
  "no browser" => array(
    "title" => "No browser installed",
    "style" => "warning",
    "desc" => "This system is or was on 1.0.0-0 or 1.1.0-1, and updated with a game card (if not 1.x), therefore has no browser. Another exploit is required.",
  ),
  "browser" => array(
    "title" => "Exploitable browser installed",
    "style" => "success",
    "desc" => "<p>This system has a browser with a public exploit, so one of the browser-based exploits should work fine.</p>Note that browser exploits are not fully stable and might require a few tries to get working.",
  ),
  "browser no exploit" => array(
    "title" => "Non-exploitable browser installed",
    "style" => "warning",
    "desc" => "This system does not have a browser with a public exploit. A game-based exploit is required.",
  ),
  "browser blocked" => array(
    "title" => "Browser blocked",
    "style" => "warning",
    "desc" => "This system has a blocked browser with no known workaround at this time. A game-based exploit is required.",
  ),
  "hax needs update" => array(
    "title" => "*hax needs updating",
    "style" => "danger",
    "desc" => "This is a recently released version. Homebrew does not work on it yet.",
  ),
  "new jpn 81" => array(
    "title" => "New 3DS JPN 8.1",
    "style" => "info",
    "desc" => "This appears to be a New 3DS system with 8.1.0-0J. This system needs to be updated to 9.2.0 first. (The final result will be 9.1.0-20J, this is perfectly normal.)",
  ),
  "start on 21" => array(
    "title" => "Start on 2.1.0-4",
    "style" => "success",
    "desc" => "This system is already on 2.1.0-4, so arm9loaderhax can be installed right away, then updated to 9.2.0-20.",
  ),
  "11" => array(
    "title" => "11.0.0 / 11.1.0",
    "style" => "warning",
    "desc" => "<p>This system is on 11.0.0 or 11.1.0, which currently can't be downgraded with software only. Only userland homebrew can be used.</p><p>To downgrade, a hardware mod, or DSiware + another 3DS system with custom firmware, is required to downgrade the firmware.</p>For more information, see <a href=\"11.php\" target=\"_blank\">\"I'm on 11.x, what can I do?\"</a>.",
  ),
  "downgradable" => array(
    "title" => "Downgradable",
    "style" => "success",
    "desc" => "This system can be downgraded to 9.2.0-20, allowing for custom firmware to be set up.",
  ),
  "not downgradable" => array(
    "title" => "Not downgradable",
    "style" => "danger",
    "desc" => "This system can not be downgraded to 9.2.0-20 for custom firmware as the current version is too new.",
  ),
  "doesnt exist" => array(
    "title" => "Doesn't exist",
    "style" => "info",
    "desc" => "This firmware doesn't actually exist yet, it is only based on estimations. This will change if and when this update is released.",
  ),
);
