<?php


?>
<ul id="topLevel">
  <li><a href="<?php echo $wifiWimaxLte ;?>">Home</a></li>

  <?php
  /******************** Digital Communication *****************************************/
  ?>

  <li><a href="<?php echo $digtalFolder; ?>digital-com-topics.php">Digital Com</a>
    <ul class="subNav">
      <li><a href="<?php echo $digtalFolder; ?>digital-com-topics.php">See Digital Com Topics</a></li>
      <li><a href="<?php echo $digtalFolder; ?>principles-of-digital-communication.php">Principles of Digital Communication</a></li>
      <li><a href="<?php echo $digtalFolder; ?>modulation.php">Modulation</a></li>
      <li><a href="<?php echo $digtalFolder; ?>multiplexing.php">Multiplexing</a></li>
      <li><a href="<?php echo $digtalFolder; ?>noise-and-error-correction.php">Noise and Error Correction</a></li>
    </ul>
  </li>
  <?php
  /******************** WI-Fi *****************************************/
  ?>
  <li><a href="<?php echo $wifiFolder; ?>wifi-topics.php">Wi-FI</a>
    <ul class="subNav">
      <li><a href="<?php echo $wifiFolder; ?>wifi-topics.php">See Wi-Fi Topics</a></li>
	  <li><a href="<?php echo $wifiFolder; ?>introduction.php">Introduction</a></li>
      <li><a href="<?php echo $wifiFolder; ?>wifi.php">Wi-Fi</a></li>
	  <li><a href="<?php echo $wifiFolder; ?>modulation-and-performance.php">Modulation &amp; Performance</a></li>
	  <li><a href="<?php echo $wifiFolder; ?>security.php">Security</a></li>
      <li><a href="<?php echo $wifiFolder; ?>wifi-meshes.php">Wi-Fi Meshes</a></li>
    </ul>
  </li>

  <?php
  /******************** WiMAX *****************************************/
  ?>

  <li><a href="<?php echo $wimaxFolder; ?>wimax-topics.php">WiMAX</a>
    <ul class="subNav">
      <li><a href="<?php echo $wimaxFolder; ?>wimax-topics.php">See WiMAX Topics</a></li>
      <li><a href="<?php echo $wimaxFolder; ?>wimax.php">WiMAX</a></li>
      <li><a href="<?php echo $wimaxFolder; ?>mobile-wimax.php">Mobile WiMAX</a></li>
      <li><a href="<?php echo $wimaxFolder; ?>future-wimax.php">Future WiMAX</a></li>
    </ul>

  </li>

  <?php
  /******************** LTE *****************************************/
  ?>

  <li><a href="<?php echo $lteFolder; ?>lte-topics.php">LTE</a>
    <ul class="subNav">
      <li><a href="<?php echo $lteFolder; ?>lte-topics.php">See LTE Topics</a></li>
      <li><a href="<?php echo $lteFolder; ?>lte-history.php">LTE History</a></li>
      <li><a href="<?php echo $lteFolder; ?>lte.php">LTE</a></li>
      <li><a href="<?php echo $lteFolder; ?>lte-advanced.php">LTE Advanced</a></li>
	  <li><a href="<?php echo $lteFolder; ?>implementation-of-lte-and-4g.php">Implementation of LTE and 4G</a></li>
      <li><a href="<?php echo $lteFolder; ?>lte-test.php">LTE Tests</a></li>
	  <li><a href="<?php echo $lteFolder; ?>lte-conclusion.php">LTE Conclusion</a></li>
    </ul>
  </li>

  <li><a href="<?php echo $summaryFolder; ?>summary-topics.php">Summary</a>
  	<ul class="subNav">
		<li><a href="<?php echo $summaryFolder; ?>summary-topics.php">See summary topics</a></li>
		<li><a href="<?php echo $summaryFolder; ?>wifi-vs-wimax-vs-lte.php">Wi-Fi vs WiMAX vs LTE</a></li>
		<li><a href="<?php echo $summaryFolder; ?>reports.php">Reports</a></li>
	</ul>

  </li>

  <?php
  /******************** Support *****************************************/



  ?>

  <li><a href="<?php echo $supportFolder; ?>support-topics.php">Support</a>
    <ul class="subNav">
    <li><a href="<?php echo $supportFolder; ?>support-topics.php">See support topics</a></li>
    <li><a href="<?php echo $supportFolder; ?>contact.php">Contact</a></li>
    <li><a href="<?php echo $supportFolder; ?>faqs.php">FAQs</a></li>
    <li><a href="<?php echo $supportFolder; ?>abbreviations.php">Abbreviations</a></li>
    </ul>
  </li>
  <li><a href="<?php echo $quizFolder ?>quiz.php">Quiz</a></li>
</ul>
