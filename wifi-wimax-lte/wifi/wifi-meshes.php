<?php
require_once '../../includes/config.php';
$title = "Wi-Fi Meshes";
$author ;
//$author = "Keith Amoah";
if(!isset($date))
{
	$date = '26/11/2014';
}

$keywords;
$codeGenerator = "Dreamweaver";
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
<style type="text/css">
.Swindon-WiFi
{
	width:350px;
	height:300px;
	Background-color:transparent;
}
</style>
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

		<?php require_once "../../includes/header.php";
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
		<h1>Wi-Fi,WiMAX &amp; LTE Learning Aid : Wi-Fi Meshes</h1>
		<?php /*** Optional header - only applicable when more than one article one page */ ?>
	</header>
	<a href="wifi-topics.php">
		Wi-Fi
	</a>
	> Wi-Fi Meshes
	</p>
	<article>
		<header>
			<h1>Wi-Fi Meshes</h1>
		</header>
		<p>My local Borough Council of Swindon in  Wiltshire has teamed up with a digital technology firm aQovia to set up a  company called Digital City UK, to install a wireless (
			<a href="http://www.ispreview.co.uk/broadband_wireless.php">
				Wi-Fi
			</a>
			) broadband mesh of 1,400 access points covering the whole  borough with internet access to 186,000 citizens. </p>
		<p>The pilot for this project was in the town of Highworth. Unfortunately,  this project was suspended in March 2011. </p>
		<p> I did try to  contact Mr Riki Hunt the director of Digital City on his choice of technology.  I personally tested the system in Highworth before its suspension. &nbsp;I was not able to hold a connection as I  walked around Highworth and I did not get positive feedback from the businesses  in the High Street that I interviewed, Brooks Caf&eacute; and the Kebria Tandoori  Restaurant. &nbsp;The local inhabitants  interviewed were also disparaging of the &ldquo;unreliable internet service that was  always losing connection&rdquo;. </p>
		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" class="Swindon-WiFi left">
			<param name="movie" value="/video/wifi-wimax-lte/wifi/swindon-wifi.swf" />
			<param name="quality" value="high" />
			<param name="play" value="true" />
			<param name="loop" value="true" />
			<param name="wmode" value="window" />
			<param name="scale" value="showall" />
			<param name="menu" value="true" />
			<param name="devicefont" value="false" />
			<param name="salign" value="" />
			<param name="allowScriptAccess" value="sameDomain" />
			<!--[if !IE]>-->
			<object type="application/x-shockwave-flash" data="/video/wifi-wimax-lte/wifi/swindon-wifi.swf" class="Swindon-WiFi left">
				<param name="movie" value="/video/wifi-wimax-lte/wifi/swindon-wifi.swf" />
				<param name="quality" value="high" />
				<param name="play" value="true" />
				<param name="loop" value="true" />
				<param name="wmode" value="window" />
				<param name="scale" value="showall" />
				<param name="menu" value="true" />
				<param name="devicefont" value="false" />
				<param name="salign" value="" />
				<param name="allowScriptAccess" value="sameDomain" />
				<!--<![endif]-->
				<a href="http://www.adobe.com/go/getflash">
					<img src="/imgs/adobe-player-download.png" alt="Get Adobe Flash player" />
				</a>
				<!--[if !IE]>-->
			</object>
			<!--<![endif]-->
		</object>

		<p><em>&ldquo;Swindon Borough Council plans a blanket Wi-Fi mesh covering the town of Highworth to support its 186,000 residents. The plan is to  place 1,400 access points around the town .</em></p>
		<p><em>This is Highworth, the location for the pilot scheme for this project between Swindon Borough Council and a private company. The aim is to assess the viability of blanket wi-Fi coverage. Behind me, is one of the many access points around the town which provide internet access for residents of Highworth.&rdquo;</em></p>
		</em>
		<div class="clearthis"></div>
		<p id="subTopicNav">
			<a href="/wifi-wimax-lte/wifi/introduction.php">
				Introduction
			</a>
			<a href="/wifi-wimax-lte/wifi/wifi.php">
				Wi-Fi
			</a>
			<a href="/wifi-wimax-lte/wifi/modulation-and-performance.php" >
				Modulation and Performance
			</a>
			<a href="/wifi-wimax-lte/wifi/security.php" >
				Security
			</a>
			<a href="/wifi-wimax-lte/wifi/wifi-meshes.php">
				Wi-Fi Meshes
			</a>
		</p>

		<footer>
			<?php // Author and date of work ?>
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
	<?php
  	require_once '../../includes/footer.php';
  ?>
</div>
</body>
</html>
