<?php
require_once '../../includes/config.php';
require_once "../../includes/figureHelperV2.php";

/** Page need to seperate to much content for mobile device. **/


$title = " Wi-Fi";
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

#ima
{
	width: 741px;
	height: 356px;
}
.signal-attunention
{
	width:550px;
	height:450px;
	background-color:transparent;
	vertical-align:top;
}

/*object.2-4ghz-vs-5ghz-demo*/
.two-point-four-ghz-vs-5ghz-demo
{
	width:660px;
	height:610px;
	background-color:transparent;
	vertical-align:top;
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
		> Wi-Fi</p>
	<article>
		<header>
			<h1>Wi-Fi</h1>
		</header>
		<?php /*
Note
Page too long need split up at Modulation & performance

Provide flash alternative for video.

*/
?>
		<h2>Simple Installation</h2>
		Wireless LAN comprises of
		<ul>
			<li>Wireless Access Points</li>
			<li> Wireless Clients</li>
		</ul>
		<p> In the UK, Ofcom limits the maximum equivalent isotropically radiated power (EIRP)from a 2.4GHz Access Point to 100mW.
			This gives a range in free air of about 100 metres within a building. With walls and furnishings, this is considerably less.
			Therefore, single wireless access points are really designed to provide coverage to a small area. In a domestic dwelling, normally the access point is also a router. The
			range of this access point can be extended by using repeaters near the edge of the range of the primary access point/router. </p>
		Wireless Networks can be configured as
		<ul>
			<li>Independent Basic Service Set (often referred to as adhoc , peer to peer relationship)</li>
			<li>Basic Service Set (often referred to as infrastructure, all wireless clients attach to a
				wireless access point that is broadcasting a SID )</li>
			<li>Extended Service Set. ( this is where multiple APs share the same SID ) Clients are
				able to move seamlessly from one AP to another. Multiple Wireless APs are used
				where larger coverage or resilience is required.</li>
		</ul>
		<?php
				echo addImage(
					array(),
					'Fig 2:Wireless LAN configurations BSS, ESS and IBSS',
					array
					(
						'id'=>'bss-ess-ibss',
						'src'=>'/imgs/wifi-wimax-lte/wifi/wireless-lan-config.png',
						'alt'=>'Wireless LAN configurations BSS, ESS and IBSS,BSS ESS IBSS'
					)
				);

			?>
		<h2>Shared the Medium</h2>
		<p>Wireless is a shared medium so an algorithm called Carrier Sense Multiple Access
			with Collision Avoidance (CSMA/CA) is required. This means that wireless
			stations all listen and if all is quiet, back-off for a further random time before
			transmitting data.</p>
		<?php
				echo addImage(
					array(),
					'Fig 3: Showing the inter-frame space',
					array
					(
						'id'=>'inter-frame-space',
						'src'=>'/imgs/wifi-wimax-lte/wifi/inter-frame-space.jpg',
						'alt'=>'Showing the inter-frame space'
					)
				);
			?>
		<h2>Spectrum</h2>
		<p>Wi-Fi can operate in 2.4GHz and 5GHz. As stated before, it is anunlicensed spectrum.</p>
		<p>In Europe, there are 13 overlapping channels in the 2.4 GHz band starting from
			Channel 1 at 2.412GHz in 5MHz stepping up to Channel 13 at 2472Ghz.<br/>
			(America only uses channels 1-&gt;11).</p>
		<p>In the UK, the 2.4 GHz Spectrum is more widely used domestically than the 5
			GHz spectrum <br/>
			(see figures 4 &amp; 5). </p>
		<p>In the 5 GHz band, Europe uses Channels 36, (5.180GHz), 40(5.200 GHz), 44, 48, 52, 56, 64(5.320GHz), 100(5.500GHz), 104, 116, 120, 124, 128, 132, 136(5.680GHz).</p>
		<p>This example show channels 36 and 40 being used (40MHz)</p>
		<?php
			// Need change id,alt and caption for images
			echo addImage(
				array(),
				'Fig 4: Showing 2.4 GHz band with APs using 20 MHz bandwidth
				(left) Fig 5: Showing the 5GHz bandwidth 40 MHz band with AP using channels 36+40 (right)',
				array(
					array
					(
						'id'=>'ima',
						'src'=>'/imgs/wifi-wimax-lte/wifi/2.4ghz.jpg',
						'alt'=>'Showing 2.4 GHz band with APs using 20 MHz bandwidth'
					),
					array
					(
						'id'=>'ima2',
						'src'=>'/imgs/wifi-wimax-lte/wifi/5ghz.jpg',
						'alt'=>'Showing the 5GHz bandwidth 40 MHz band with AP using channels 36+40'
					)
				)
			);


		?>
		<figure>
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" class="signal-attunention">
				<param name="movie" value="/video/wifi-wimax-lte/wifi/signal-attunention.swf" />
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
				<object type="application/x-shockwave-flash" data="/video/wifi-wimax-lte/wifi/signal-attunention.swf" class="signal-attunention">
					<param name="movie" value="/video/wifi-wimax-lte/wifi/signal-attunention.swf" />
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


			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  class="two-point-four-ghz-vs-5ghz-demo" >
				<param name="movie" value="/video/wifi-wimax-lte/wifi/2.4ghz-vs-5ghz-demo.swf" />
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
				<object type="application/x-shockwave-flash" data="/video/wifi-wimax-lte/wifi/2.4ghz-vs-5ghz-demo.swf" class="two-point-four-ghz-vs-5ghz-demo">
					<param name="movie" value="/video/wifi-wimax-lte/wifi/2.4ghz-vs-5ghz-demo.swf" />
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

			<figcaption>The above videos illustrated some reason why very few people using 5GHz compare to 2.4 GHz.</Figcaption>
		</figure>
		<p> The fields to pay attention to are the <strong>Received Signal Strength Indicator (RSSI)</strong> and link speed, highlighted in red. The RSSI is a measurement of the power present in a received radio signal. When RSSI fall below predefined value, device trying to connect to the network will try to find another connection was higher RSSI. The device will only change connection if finds connection with higher RSSI is found. This predefined value is normally determined by manufacturer of device.</p>
		<a href="#" title="View details on experiment">
			Full details of my experiment
		</a>
		<p id="subTopicNav">
		<a href="/wifi-wimax-lte/wifi/introduction.php">Introduction</a>
		<a href="/wifi-wimax-lte/wifi/wifi.php">Wi-Fi</a>
		<a href="/wifi-wimax-lte/wifi/modulation-and-performance.php" >Modulation and Performance</a>
		<a href="/wifi-wimax-lte/wifi/security.php" >Security</a>
		<a href="/wifi-wimax-lte/wifi/wifi-meshes.php">Wi-Fi Meshes</a>
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
