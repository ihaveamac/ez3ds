<?php
$title = "%index%";
include_once("_header.php");
?>
<!-- Modal -->
<div class="modal fade" id="hblpreview" tabindex="-1" role="dialog" aria-labelledby="hblpreview">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="modaltitle">Homebrew Launcher Preview</h4>
      </div>
      <div class="modal-body">
        <div id="hblpreview-img" class="center">
          <img class="pixelated" src="img/hblpreview.png">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="jumbotron">
  <div class="container">
    <h1><span id="three">3</span>DS hacks</h1>
    <p>The all in 1 home for 3DS hacking!</p>
    <p>
      <div class="btn-group">
        <a class="btn btn-custom btn-lg" href="model.php" role="button">Start hax</a>
        <a class="btn btn-primary btn-lg" href="/faq/" role="button">FAQ</a>
        <div class="btn-group">
          <button type="button" class="btn btn-success btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Follow up <span class="caret"></span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="followup_homebrew.php">Homebrew</a></li>
            <li class="disabled"><a href="followup_cfw">Custom Firmware (Coming soon!)</a></li>
          </ul>
        </div>
		<a class="btn btn-primary btn-lg" href="/forums/" role="button">Forums</a>
		<a class="btn btn-custom btn-lg" href="/blog/" role="button">Blog</a>
      </div>
    </p>
  </div>
</div>
<div class="container list-margin">
  <h2>What is Homebrew?</h2>
  <!-- template used from https://github.com/RedInquisitive/Screenshot-Tool/tree/master/templates -->
  <a href="#" data-toggle="modal" data-target="#hblpreview"><img id="hb-demo" class="pull-right" src="img/new3dsxl-hb.png"></a>
  <p><b><a href="https://en.wikipedia.org/wiki/List_of_homebrew_video_games" target="_blank">Homebrew</a></b> usually refers to software that is not authorized by Nintendo. It allows you to run homebrew games, tools like save editing and backup, and emulators for various older systems.</p>
  <p>In most cases, running homebrew on your console is 100% free using just the Internet Browser. There are also various other exploits in commercial games to get homebrew running.</p>

  <h2>What is Custom Firmware?</h2>
  <p><b>Custom Firmware</b> ("CFW") enables you to use more advanced hacks that userland homebrew can't easily do. For instance, signature patches let you install unsigned titles that appear right on your HOME Menu.</p>
  <p>CFW can be easily set up on any console that is on 9.2.0-20 or lower. Other versions can be downgraded, most for free or with just an exploit game.</p>

  <h2>Why should I hack my console?</h2>
  <p>With Homebrew access, you can:</p>
  <ul>
    <li>Play many out of region game cards with Region free Launcher or HANS</li>
    <li>Customize your HOME Menu with custom <a href="https://3dsthem.es" target="_blank">themes</a> and <a href="https://badges.3dsthem.es" target="_blank">badges</a></li>
    <li>Use "ROM hacks" for games that you own and take gameplay screenshots with HANS</li>
    <li><a href="https://gbatemp.net/threads/release-jks-savemanager-homebrew-cia-save-manager.413143/" target="_blank">Backup, edit, and restore</a> saves for many games</li>
    <li>Play games for older systems with various emulators, using RetroArch or other standalone emulators. (Works best with a New Nintendo 3DS)</li>
    <li>Continue being able to use Nintendo eShop and online gameplay without updating to the latest system version</li>
  </ul>
  <p>With using Custom Firmware, you can use everything listed above, in addition to:</p>
  <ul>
    <li>Install homebrew titles to your system, and have them appear on your HOME Menu</li>
    <li>Dump your game cards to a format you can install, and play them without needing the card</li>
    <li>New 3DS only: stream live gameplay to your PC wirelessly with NTR CFW</li>
    <li>Play all games from any region easily, including ones Region free Launcher/HANS can't run</li>
    <li>Run many old Nintendo DS flash carts that were blocked long ago or never worked on Nintendo 3DS</li>
    <li>Run custom firmware safely and reliably from boot with arm9loaderhax</li>
    <li>Safely update to the latest system version without fear of losing access to homebrew</li>
  </ul>

  <h2>How do I get these hacks?</h2>
  <p>Visit this website on your PC (if you aren't using one already), and click the "Start hax" button to begin the process.</p>
  <p class="text-danger">Unless otherwise specified, you should not update your system, as you might hinder or remove your ability to run Homebrew or CFW on your device!</p>

  <h2>Support</h2>
  <p>For issues with this website, <a href="https://github.com/ihaveamac/ez3ds/issues" target="_blank">create a new issue on GitHub</a>.</p>
  <p>For issues/assistance with other things (using entry points, etc.), come join us on the <a href="https://gate.omicron.pw">#3dshacks</a> IRC channel on Rizon or <a href="https://discord.gg/MWxPgEp" target="_blank">3DS Hacking</a> Discord.</p>
  <p>Be sure to also check out the <a href="/faq/">Frequently Asked Questions</a>.</p>
</div>
<?php include_once("_footer.php"); ?>
