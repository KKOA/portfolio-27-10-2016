<?php

require_once '../../includes/config.php';

$title = "Abbreviations";
$author ;
//$author = "Keith Amoah";
if(!isset($date))
{
	$date = '26/11/2014';
}

$keywords;
$codeGenerator = "Dreamweaver";

$Abbreviations = array
(
"3GPP","AAS","AMPS","CSMA/CA","Digital Com","E-UTRAN",
"EDGE","EIRP","EPC","ETSI","FBWA",
"FCC","FDD","FDM","FDMA","GPRS",
"GSM","HSDPA","IMT","J_TACS","LOS",
"LTE","MIMO","MME","NLOS","NMT",
"OFDM","OFDMA","PEAP","QoS",
"BES","ertPS","nrtPS","rtPS","UGS",
 "SAE","SC-FDMA","SSID","SOFDMA","TACS",
 "TDD","TDMA","TKIP","UMTS","WEP",
 "WiSM","WiMAX","WEP",
);

$Full_Name = array
(

"3rd Generation Partnership Project","Adaptive Antenna System","Analogue Mobile Phone System","Carrier Sense Multiple Access with Collision Avoidance","Digital Communication","Universal Terrestrial Radio Access Network ",
"Enhanced Data rates for GSM Evolution","Equivalent Isotropically Radiated Power","Evolved Packet Core","European Technical Standards Institute","Fixed Broadband Wireless Access",
"Federal Communications Committee","Frequency Division Duplex"," Frequency Division Multiplexing","Frequency Division Multiple Access","General Packet Radio Service",
"Global System for Mobile communication"," High Speed Downlink Data Access","International Mobile Telecommunication","Japanese Total Access Communication System","Line Of Sight",
"Long Term Evolution","Multiple In Multiple Out","Mobility Management Entity","Non-Line of Sight","Nordic Mobile Telephone",
"Orthogonal Frequency Multiplexing","Orthogonal Frequency Division Multiple Access","Protected Extensible Authentication Protocol","Quality of Service",
"Best Effort Services","extended real-time Polling Service","non-real-time Polling Services","real-time Polling Services","Unsolicited Grant Services",
"System Architecture Evolution","Single Carrier Frequency Division Multiple Access","Service Set Identifier","Orthogonal Frequency Division Multiple Access","Total Access Communication System",
"Time Division Duplex","Time Division Multiplexing Access","Temporal Key Integrity Protocol","Universal Mobile Telecommunication System","Wired Equivalent Privacy",
"Wireless Service Module","Worldwide Interoperability for Microwave Access","Wi-Fi Protected Access",
);

$rowStyle;
$counter = 0;


?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title><?php echo $title; ?></title>
<meta name="Author" content="<?php echo $author = (isset($author))? $author : ""; ?>"/>
<meta name="keywords" content="<?php echo $keywords = (isset($keywords))? $keywords : ""; ?>"/>
<meta name="generator" content="<?php echo $codeGenerator = (isset($codeGenerator))? $codeGenerator : ""; ?>"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php
/*
 ********************** Stylesheets ***********************************
 */
?>
<link rel="stylesheet"	type="text/css"	href="/styles/vendors/normalize.css">
<?php //css reset ?>

<link rel="stylesheet"	type="text/css"	href="/styles/dev/css/templateV7.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<?php //See http://fortawesome.github.io/Font-Awesome/icons/ more details on css icons ?>

<?php /*
 ********************** Scripts ***********************************
 */ ?>
<script type="text/javascript" src="/scripts/vendors/jquery-1.11.1.js"></script>
<?php //JQuery Library ?>
<script type="text/javascript">
var currentUrl = <?php echo json_encode($_SERVER['REQUEST_URI']); ?>;
</script>
<script type="text/javascript" src="/scripts/customV3.js"></script>
</head>

<body>
<div id="wrapper">
	<?php
   /*
****************** Page Header *******************
*/ ?>
	<header id="pageHeader">

		<?php
			require_once "../../includes/header.php";
		/*
****************** Main Navigation *******************
*/ ?>
		<nav>
			<div id="bar">
				<div class="navButton">
					<h2>Menu<span class="fa fa-bars"></span><span class="fa fa-times-circle"></span></h2>
				</div>

			</div>
			<?php require_once "../../includes/nav.php" ?>
			<div class="clearthis"></div>
		</nav>
	</header>
	<!-- End of Navigation Menu  -->
	<?php /*
  ****************** Main Content *******************
  */ ?>
	<!-- Start of Main Content Area -->
	<main>
		<header>
			<h1>Wi-Fi,WiMAX &amp; LTE Learning Aid : Support</h1>
			<?php /*** Optional header - only applicable when more than one article one page */ ?>
		</header>
		<p>
			<a href="support-topics.php">Support</a>
			> Abbreviations</p>
		<article>
			<header>
				<h1>Abbreviations</h1>
			</header>
			<p>Below is complete of list of all the abbreviations and the full name equivalents that relate to Wi-Fi,WiMAX and LTE E-Learning Aid Site.</p>



			<div id="tableContainer" class="tableContainer"><!--  Start of tableContainer -->
					<table class="scrollTable" id="scrollTable">
			<!-- Start of ScrollTable -->
			<thead class="fixedHeader">
				<tr>
					<th>Abbreviations</th>
					<th>Full Name</th>
				</tr>
			</thead>
			<tbody class="scrollContent" id="scrollContent">
				<?php
			  for(; $counter < count($Abbreviations); $counter++)
			  {
				if(($counter%2)==0) // Apply different to tr depedending on whether on even or odd.
				{
					$rowStyle = 'evenRow';
				}
				else
				{
					$rowStyle = 'oddRow';
				}
				?>
				<tr class='<?php echo "$rowStyle"; ?>'>
					<td class='Left_Coloumn'><?php echo $Abbreviations[$counter]; ?></td>
					<td class='Right_Coloumn'><?php echo $Full_Name[$counter]; ?></td>
				</tr>
				<?php
			  }?>
			</tbody>
		</table>
			</div>
			<p id="subTopicNav">
				<a href="contact.php">Contact</a>
				<a href="faqs.php">FAQS</a>
				<a href="abbreviations.php" class="current">Abbreviations</a>
			</p>
			<footer>
				<?php // Author and date of work

	//Need to still this footer

	?>
				<p>Created by
					<a title="" class="author" href="#">
						Keith Amoah
					</a>
					, May 2011</p>
			</footer>
		</article>
		<div id="bottom">
			<a title="Navigate to top of the current page" href="#Top">
				<span class="fa fa-arrow-circle-up"></span>To the Top <span class="fa fa-arrow-circle-up"></span>
			</a>
		</div>
	</main>
	<?php /*
  ****************** PageFooter *******************
  */ ?>
	<footer id="pageFooter">
		<ul id="pageFooterNav">
			<li>
				<a href="/wifi-wimax-lte/">
					Home<span class="fa fa-home"></span>
				</a>
			</li>
			<li>
				<a href="/wifi-wimax-lte/support/contact.php">
					Contact<span class="fa fa-envelope"></span>
				</a>
			</li>
		</ul>
		<div id="copyright">&#169;XXXX - YYYY Kwamina &#38; Co </div>
	</footer>
</div>
</body>
</html>
