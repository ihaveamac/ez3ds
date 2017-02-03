<?php
$title = "ez3ds - I'm on 11.2, what can I do?";
include_once("_header.php");
?>
<div class="container">
  <h1 class="page-header">I'm on 11.2, what can I do?</h1>
  <p>Since several people are on 11.2 and don't know what they can do, this page explains the possible actions for a system on <b>stock</b> 11.x. This does not apply to systems with CFW already.</p>

  <hr>
  <h2>Custom Firmware</h2>
  <p>Right now, CFW is hard to obtain on 11.2, due to two reasons:</p>
  <ul>
    <li>The ARM11 kernel exploit "memchunkhax2.1" aka "svchax" has (basically) been patched. This means "legit CIAs" can't be installed on this version.</li>
    <li>Version checks were added for several system titles. This means versions of these titles lower than the hardcoded version can't be installed. This means an extra ARM9 exploit is required to bypass the checks with software. A list of titles can be found <a href="https://gist.github.com/ihaveamac/55045622b4d19abfd156e02166ad2f11" target="_blank">here</a>.</li>
  </ul>
  <p>There are currently two public ways to bypass these protections, both use about the same exploit to <a href="https://plailect.github.io/Guide/nfirm-downgrade" target="_blank">downgrade the NFIRM</a>:</p>
  <ul>
    <li><a href="https://plailect.github.io/Guide/hardmod-downgrade" target="_blank">"Hardmod"</a> - a hardware modification that allows you to dump and restore the system NAND using a computer, which can be used to downgrade the NFIRM partitions.</li>
    <li><a href="https://plailect.github.io/Guide/dsiware-downgrade" target="_blank">DSiWare + System Transfer</a> - uses an exploit in some DSiWare games to gain access to the entire NAND, and downgrade the NFIRM partitions.</li>
  </ul>
  <p>These methods would be unusable in the next update by Nintendo, when an important system title is updated to require the new kernel version in 11.x.</p>
  <p>There is work being put towards exploits on 11.2 and future versions, but this will take a while. Those who desperately want CFW as soon as possible can use the two above methods.</p>

  <hr>
  <h2>Homebrew</h2>
  <p>The oot3dhax exploit works on 11.2, but the exploit can only be installed on a pre-11.x stock system, or with a Powersave device.</p>
</div>
<?php include_once("_footer.php"); ?>
