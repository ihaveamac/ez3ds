<?php
$title = "ez3ds - Follow up: Homebrew";
include_once("_header.php");
?>
<div class="container list-margin">
  <h1 class="page-header">Follow up: Homebrew</h1>

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">eShop / Games</h3>
        </div>
        <div class="list-group">
          <a href="#online-no-update" class="list-group-item">Go online without updating</a>
          <a href="#oor-no-update" class="list-group-item">Play out-of-region games and bypass card updates</a>
        </div>
      </div>
    </div>

    <div class="col-md-9">
      <p>This page lists possible things to do after setting up Homebrew.</p>
      <p>This page still a work in progress; information could be out of date or missing.</p>
      <p>Suggestions should be <a href="https://github.com/ihaveamac/ez3ds/issues" target="_blank">created as issues on GitHub</a>.</p>

      <hr id="online-no-update">
      <h3>Using eShop and online games without updating to the latest version</h3>
      <div class="alert alert-danger">This does not work when menuhax is installed on versions 10.6, 10.7, or 11.0. A different exploit is required.</div>
      <p>You can use <b>ctr-httpwn</b> to access <u>Nintendo eShop</u> and <u>play games online</u> without updating to the latest version.</p>
      <p>There are a few limitations with this method:</p>
      <ul>
        <li>This will only work on 9.6.0-24 or later (lower versions are recommended to downgrade for CFW). Lower versions will throw an error relating to unsupported HTTP sysmodule.</li>
        <li>eShop does not work below 10.4.0-29E on EUR systems.</li>
        <li>This does not work with extended memory games on Old 3DS, for example Super Smash Bros. and Monster Hunter.</li>
      </ul>
      <h4>Requirements</h4>
      <ul>
        <li><a href="https://github.com/yellows8/ctr-httpwn/releases" target="_blank">ctr-httpwn latest release</a>.</li>
        <li>Homebrew exploit (excluding menuhax for 10.6, 10.7, or 11.0)</li>
        <li><a href="https://smealum.github.io/ninjhax2/starter.zip">Homebrew Starter Kit</a> set up (<code>3ds</code> folder and <code>boot.3dsx</code> at root)</li>
        <li><i>If below 10.0.0-27:</i> HANS (available in the Homebrew Starter Kit).</li>
      </ul>
      <h4>Set up</h4>
      <ol>
      	<li>Copy <code>ctr-httpwn</code> from the <code>3ds</code> folder of ctr-httpwn to the <code>3ds</code> folder on your 3DS SD card.</li>
        <li><i>If below 10.0.0-27:</i> Copy <code>hans</code>, <code>eshop.smdh</code>, and <code>eshop.xml</code> from the <code>3ds</code> of the Homebrew Starter Kit to the <code>3ds</code> folder on your SD card.</li>
      </ol>
      <h4>Usage</h4>
      <ol>
      	<li>Use the Homebrew exploit of your choice.</li>
      	<li>
          <p>Find ctr-httpwn in the list of Homebrew applications.</p>
          <p><img src="img/hbmenu-httpwn.png" alt="ctr-httpwn in Homebrew Launcher" class="pixelated hbmenu-list-item"></p>
        </li>
        <li>Run ctr-httpwn. Read the displayed text and answer if prompted.</li>
        <li>Once finished, press START to exit.</li>
        <ul>
          <li>If the eShop is to be used below 10.0.0-27, skip to the next section.</li>
        </ul>
      	<li>At the Homebrew Launcher, press START to bring up the "Reboot" menu.</li>
        <li>Press X to exit without rebooting.</li>
        <ul>
          <li>If this option does not exist, you need to update your Homebrew Launcher (<code>boot.3dsx</code>), or the payload for your entrypoint.</li>
        </ul>
        <li>Use the eShop and/or play a game online. ctr-httpwn lasts until you reboot.</li>
      </ol>
      <h5>eShop usage below 10.0.0-27</h5>
      <ol>
      	<li>
          <p>Find eShop in the list of Homebrew applications.</p>
          <p><img src="img/hbmenu-eshop.png" alt="ctr-httpwn in Homebrew Launcher" class="pixelated hbmenu-list-item"></p>
        </li>
        <li>Run eShop, and wait for the application to start.</li>
        <li>Use the eShop as normal.</li>
        <li>Once finished, return to the Homebrew Launcher by pressing L + R + B + Down on the D-Pad until the bottom screen colors change.</li>
      </ol>

      <hr id="oor-no-update">
      <h3>Play games of other regions and avoid forced card updates</h3>
      <p>You can play games intended for other regions, and avoiding updates on game cards, using Region free launcher or HANS.</p>
      <p>There are a few limitations with this method:</p>
      <ul>
        <li>Most games will only work with 9.6.0-X or later (lower versions are recommended to downgrade for CFW). Games containing 11.0.0-X or later may not work below that version.</li>
        <li>Game updates are not used with HANS at this time. Game updates for out-of-region games can't be installed with just Homebrew access.</li>
        <li>Some out of region games have issues being played on the wrong region console. HANS can fix this for many games.</li>
        <li>HANS does not work with extended memory games on Old 3DS, for example Super Smash Bros. and Monster Hunter.</li>
      </ul>
      <h4>Requirements</h4>
      <ul>
        <li>Homebrew exploit (excluding menuhax for 10.6, 10.7, or 11.0)</li>
        <li><a href="https://smealum.github.io/ninjhax2/starter.zip">Homebrew Starter Kit</a> set up (<code>3ds</code> folder and <code>boot.3dsx</code> at root)</li>
      </ul>
      <h4>Usage (HANS)</h4>
      <ol>
      	<li>Use the Homebrew exploit of your choice.</li>
      	<li>
          <p>Find HANS in the list of Homebrew applications.</p>
          <p><img src="img/hbmenu-hans.png" alt="HANS in Homebrew Launcher" class="pixelated hbmenu-list-item"></p>
        </li>
        <li>Run HANS, and pick your game card.</li>
        <li>Read the top screen for settings and bottom for descriptions.</li>
        <ul>
          <li><b>Region</b>: Region to emulate. The game thinks your console is the selected region.</li>
          <li><b>Language</b>: Language to emulate. The game will play in the selected language if available.</li>
          <li><b>FW Version Spoof</b>: Spoof the console version. Usually better to use ctr-httpwn first instead, if required.</li>
          <li><b>N3DS CPU clock</b>: Clock speed to use on New 3DS.</li>
          <li><b>Code -> SD</b>: Use code from the SD card instead of the code from the game's files. Useful for ROM hacks.</li>
          <li><b>Romfs -> SD</b>: Use RomFS from the SD card instead of the code from the game's files. Useful for ROM hacks.</li>
          <li><b>Save configuration</b>: Save the selected settings for future use. Hold L when choosing a title with HANS to show the settings again.</li>
        </ul>
        <li>Press START or choose "OK" to start the game.</li>
        <li>Once done, return to the Homebrew Launcher by pressing L + R + B + Down on the D-Pad until the bottom screen colors change.</li>
      </ol>
      <h4>Usage (Region free launcher)</h4>
      <ol>
      	<li>Use the Homebrew exploit of your choice.</li>
      	<li>
          <p>Find Region free launcher in the list of Homebrew applications.</p>
          <p><img src="img/hbmenu-rflauncher.png" alt="Region free launcher in Homebrew Launcher" class="pixelated hbmenu-list-item"></p>
        </li>
        <li>Run Region free launcher, and make sure your game card appears.</li>
        <li>Press A to start the game.</li>
        <li>Reboot the system when done. Pressing HOME will freeze the system if the game is out-of-region.</li>
      </ol>
    </div>
  </div>

</div>
<?php include_once("_footer.php"); ?>
