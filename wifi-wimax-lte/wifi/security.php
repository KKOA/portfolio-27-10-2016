<?php
require_once '../../includes/config.php';
require_once '../../includes/figureHelperV2.php';
/** Page need to seperate to much content for mobile device. **/


$title = " Wi-Fi Security";
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


#Security-Schemes-and-level-of-protection,
#retirement-wep-wpa,
#enterprise-wireless-lan,
#Enterprise-Security
{
	width:475px;
	height:200px;
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

		<?php
			require_once "../../includes/header.php";
		/*
****************** Main Navigation *******************
*/ ?>
		<nav>
			<div id="bar">
				<?php // h1 cannot be child element of button ?>
				<div class="navButton">
					<h2>Menu<span class="fa fa-bars"></span><span class="fa fa-times-circle"></span></h2>
				</div>
			</div>
			<?php require_once "../../includes/nav.php" ?>
			<div class="clearthis"></div>
		</nav>
	</header>
	<?php /*
  ****************** Main Content *******************
  */ ?>
	<!-- Start of Main Content Area -->
	<main>
	<header>
		<h1>Wi-Fi,WiMAX &amp; LTE Learning Aid : Wi-Fi</h1>
		<?php /*** Optional header - only applicable when more than one article one page */ ?>
	</header>
	<p>
		<a href="wifi-topics.php">
			Wi-Fi
		</a>
		> Security</p>
	<article>
		<header>
			<h1>Wi-Fi Continued</h1>
		</header>
		<h2>Security</h2>
		<p>There are several steps that can be taken to improve the security of wireless LAN.</p>
		<ol>
			<li>Access List of allowed clients ( based MAC address wireless clients)</li>
			<li> Suppress the broadcasting of the Wireless APs SID</li>
			<li> Reduction of Transmit Power (this reduces the range of coverage by AP)</li>
			<li>Encryption</li>
		</ol>
		<p>Encrypting the communication stream is the main security measure in wireless LANs. In
			a small wireless network, identical encryption keys are typed in to Wireless Access Point
			and the user end equipment.</p>
		<p> Wired Equivalent Privacy (WEP) was the security scheme that was introduced with the
			original 802.11 standard in 1999. 64-WEP relies on a 40 bit key concatenated with 24 bit
			initialisation vector to create 64bits. This is passed through an RC4 encrypting algorithm
			to generate a traffic key. This traffic key is then &quot;exclusively or&quot; with the bit stream to
			create an encrypted stream.</p>
		<p> Unfortunately, WEP had some flaws and can now be compromised so Wi-Fi Protected
			Access (WPA) was developed. This also used RC4 encryption algorithm so could be
			deployed with most existing Wi-Fi equipment with a firmware upgrade. WPA introduced
			temporal Key Integrity Protocol (TKIP) which mixes the Key with the initialisation vector
			rather than just carrying out concatenation as is the case in WEP.</p>
		<p> WPA2, which is more secure than WPA, uses a more secure encryption algorithm AES.</p>
		<?php echo addImage
			(array(),
			'Fig 8: Domestic Security',
			array
				(
					'id'=>'Security-Schemes-and-level-of-protection',
					'src'=>'/imgs/wifi-wimax-lte/wifi/domestic-security.jpg',
					'alt'=>'Security Schemes and level of protection'
				)
			);
		?>
		<p>The Wi-Fi Alliance which certifies new wireless equipment only wishes to support WPA2
			from 2013. This means if your Wireless Access Point goes faulty and you have to replace it will only support wpa2.<br />
			If your wireless clients do not support this, they will have to be replaced also.</p>
		<?php echo addImage
			(array(),
			'Fig 9: Retirements of WEP and WPA',
			array
				(
					'id'=>'retirement-wep-wpa',
					'src'=>'/imgs/wifi-wimax-lte/wifi/retirement-wep-wpa.jpg',
					'alt'=>'Expected retirement date of WEP &amp; WPA'
				)
			);
		?>

		<h2>Enterprise Installation</h2>
		<p>Even with high gain antennae the  range of wireless AP is limited. In order to cover large factory floors and to  provide resilience a large number of APs are required.</p>
		<p>By way of example, Cisco has a scheme  of Controller based wireless LANs which used Wireless Service Module (WiSM) to  control light weight wireless access points.
			Each light weight wireless access  point is connected to two WiSM (see figure below). The wireless access points  are installed with a 40% overlap.
			If a wireless access point fails, the WiSM  boosts the transmitting power of the surrounding wireless access points to maintain  coverage.
			Failures can be mathematically modelled to ensure the building always  has adequate coverage.</p>

		<?php echo addImage
			(array(),
			'Fig 10: Enterprise Wireless LAN',
			array
				(
					'id'=>'enterprise-wireless-lan',
					'src'=>'/imgs/wifi-wimax-lte/wifi/enterprise-wireless-lan.jpg',
					'alt'=>'Enterprise Wireless LAN'
				)
			);
		?>
		<h3>Security</h3>
		<p>In larger organisations, RADIUS  servers with Protected  Extensible Authentication Protocol (PEAP) are used to authenticate Wireless
			Clients and to pass  keys through tunnels between Wireless Access Point and Clients.</p>
		<?php echo addImage
			(array(),
			'Fig 11: Enterprise Security',
			array
				(
					'id'=>'Enterprise-Security',
					'src'=>'/imgs/wifi-wimax-lte/wifi/enterprise-security.jpg',
					'alt'=>'Enterprise Security'
				)
			);
		?>

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
	<?php
  	require_once '../../includes/footer.php';
  ?>
</div>
</body>
</html>
