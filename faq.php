<?php
$title = "ez3ds - Frequently Asked Questions";
include_once("_header.php");
?>
<div class="container">
  <h1 class="page-header">Frequently Asked Questions</h1>
  <p>Be sure to also check out the <a href="https://www.reddit.com/r/3dshacks/wiki/faq" target="_blank">/r/3dshacks FAQ</a>!</p>
  <p>Got more questions to add? <a href="https://github.com/ihaveamac/ez3ds" target="_blank">Submit an issue or pull request at GitHub</a>!</p>

  <hr id="safe">
  <h3>Is Homebrew/Custom Firmware safe? <small><a href="#safe">#safe</a></small></h3>
  <p><b>In short: Make sure all the tools are up to date, don't skip steps, and your system has a low chance of bricking.</b></p>
  <p>There always comes a risk when hacking video game consoles. A mistake anywhere in the process may end up forcing you to update (which may hinder your ability to hack your console), or worse, brick, so it is important to pay close attention to every step and make sure to not miss anything. There is always risk of damage to your console involved when it comes to console hacking, but being vigilant will lower the chances a lot.</p>
  <p>That being said, most of the tools used for hacking (homebrew, downgrading, etc) have been tested extensively by various other people, and thousands of others have successfully been able to downgrade and set up custom firmware on their systems. As long as you follow steps exactly as written, the chance of a brick is next to nothing.</p>
  <p>Some of the tools used perform checks (usually hashes) before doing anything, which greatly reduces the chance of an accidental brick. For example:</p>
  <ul>
    <li>sysDowngrader checks for the existence of every file in a downgrade pack, as well as the hash to verify none are corrupt.</li>
    <li>Decrypt9WIP creates a hash of every NAND dump created, and checks the hash of the ctrtransfer image before it injects it into SysNAND.</li>
    <li>SafeA9LHInstaller checks for the existence of every file used for installing arm9loaderhax, as well as the file hashes.</li>
    <li>Hourglass9 verifies the NAND dump before it restores it to SysNAND.</li>
  </ul>
  <p>A few things you can do to make sure everything goes smoothly:</p>
  <ul>
    <li>
      If you need to downgrade to 9.2.0-20: it is suggested that you format first, if you can. This is because there exists an unknown issue that causes soft-bricks <i>after</i> the downgrade, forcing you to update to the latest version with recovery mode. It's unknown what causes it, or how to tell if it will happen.<br>
      For more information, see these two issues on GitHub: <a href="https://github.com/Plailect/sysDowngrader/issues/1" target="_blank">Plailect/sysDowngrader#1</a>, <a href="https://github.com/Plailect/PlaiSysUpdater/issues/8" target="_blank">Plailect/PlaiSysUpdater#8</a></li>
    <li>Make sure you're using the <b>latest</b> version of every tool (<a href="https://github.com/Plailect/sysDowngrader" target="_blank">sysDowngrader</a>, <a href="https://github.com/d0k3/Decrypt9WIP" target="_blank">Decrypt9WIP</a>, <a href="https://github.com/AuroraWright/SafeA9LHInstaller" target="_blank">SafeA9LHInstaller</a>, <a href="https://github.com/d0k3/Hourglass9" target="_blank">Hourglass9</a>) before continuing. Several accidents and bricks happen to users using older versions without realizing!</li>
    <li>Don't skip copying the files ending in <code>.sha</code>, they help in verifying the file they are named as (e.g. <code>NANDmin.bin</code> and <code>NANDmin.bin.sha</code>).</li>
    <li>Keep your console plugged in and the battery charged, to prevent it from dying in the middle of a critical process.</li>
  </ul>

  <hr id="eshop-games">
  <h3>How can I use the eShop and play games online without updating? <small><a href="#eshop-games">#eshop-games</a></small></h3>
  <p>If you're using custom firmware: usually it's safe to update anyway. If you need to stay behind for some reason (for example, relying on BootNTR that doesn't work on latest version), you can use the same steps below.</p>
  <p>You can use <a href="https://github.com/yellows8/ctr-httpwn" target="_blank">ctr-httpwn</a> with access to homebrew. This is included in the Homebrew Starter Kit, and only works on 9.6 or higher, though some versions may not work as expected. EUR eShop only works on 10.5 or higher.</p>
  <p>Use the Homebrew Launcher, then run ctr-httpwn and read the text on the top screen. Once done, you can exit *hax (press START then X at the Homebrew Launcher), and then use the eShop or play online games.</p>
  <p>If the system is below 10.0, eShop through HANS must be used. The "eshop" icon at Homebrew Launcher (from the starter kit) works fine.</p>

  <hr id="systransfer">
  <h3>Is System Transfer safe to use with a system that has Custom Firmware? <small><a href="#systransfer">#systransfer</a></small></h3>
  <p>System Transfer can be used safely if one or both systems have CFW. Illegitimate tickets (homebrew CIAs, dumped + converted game cards, etc.) are not moved in a transfer, but the titles and their saves are not deleted.</p>
  <p>If you are moving to New 3DS from Old 3DS, you should use "PC-Based Transfer", as it's the fastest method. The other options wirelessly copy files, including ones outside the <code>Nintendo 3DS</code> folder, which might not be wanted (as CFW files and others might conflict with those on the target system's SD card). Note you cannot transfer from New 3DS to Old 3DS without calling Nintendo to reverse a transfer.</p>

  <hr id="banrisk">
  <h3>Will Nintendo "ban" me for using Homebrew or Custom Firmware? <small><a href="#banrisk">#banrisk</a></small></h3>
  <p>It is against the <abbr title="System Settings &rarr; Internet Settings &rarr; Other Information &rarr; User Agreement">user agreement</abbr> to use unauthorized software or modifications on the 3DS; doing so risks a ban from Nintendo's online services. That being said, Nintendo has never banned any user from its online services on any system purely for using homebrew or CFW. The chances of this happening randomly are very slim.</p>
  <p>There are two known exceptions to this. First is cheating online, either through save edits or "cheat codes". Nintendo does ban users (temporarily or permanently) for players that have an unfair advantage online through the use of cheats. Second is the use of "public headers" on certain 3DS flash carts.</p>
</div>
<?php include_once("_footer.php"); ?>
