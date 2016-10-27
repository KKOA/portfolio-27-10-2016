<?php
require_once '../../includes/config.php';
$title = "Principles of Digital Communication";
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
.digital-coms
{
	width:900px;
	height:605px;
	background-color:transparent;
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
		<h1>Wi-Fi,WiMAX &amp; LTE Learning Aid : Digital Communication</h1>
		<?php /*** Optional header - only applicable when more than one article one page */ ?>
	</header>
	<p><a href="/wifi-wimax-lte/digital-com/digital-com-topics.php">Digital Communication</a> > Principles of Digital Communication</p>

	<article>
		<header>
			<h1>Principles of Digital Communication</h1>
		</header>
		<p> This animation illustrates the fundamental process  in a digital communication system in a perfect world.</p>
		<p>Here, two people communicate with each other via a digital telephone. </p>
		<p>The Source Encoder converts the input waveform into bits. The animation shows one method of source encoding.
			Not all inputs  for digital communication system are waveforms. For text, the input is already in symbol format.</p>
		<p>The Channel Encoder converts the output of the source encoder into an appropriate format for the  channel.</p>
		<p>In this instance, Binary Phase Shift  Key is used as the modulation technique. </p>
		<p>However in the real world the channel is  affected by noise and interference. This leads to possible errors at the channel decoder end. </p>
		<p>The reverse process is used to convert channel output back into original input of the system.  The output is an approximation to the input. This is because of distortion in the system. E.g. Convert back from finite set of symbols back into infinite sequence. </p>

			<?php // Need to shrink dimensions. ?>
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" class="digital-coms" id="Digital_Comms.swf">
				<param name="movie" value="/video/wifi-wimax-lte/digital-com/principles-of-digital-com.swf" />
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
				<object type="application/x-shockwave-flash" data="/video/wifi-wimax-lte/digital-com/principles-of-digital-com.swf" class="digital-coms">
					<param name="movie" value="/video/wifi-wimax-lte/digital-com/principles-of-digital-com.swf" />
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
						<br />
						<img src="/imgs/adobe-player-download.png" alt="Get Adobe Flash player" />
					</a>
					<!--[if !IE]>-->
				</object>
				<!--<![endif]-->
			</object>
			Overview of the core principles of Digital Communication


		<p id="subTopicNav">
				<a href="/wifi-wimax-lte/digital-com/principles-of-digital-communication.php">Principles of Digital Communication</a>
				<a href="/wifi-wimax-lte/digital-com/modulation.php">Modulation</a>
				<a href="/wifi-wimax-lte/digital-com/multiplexing.php" >Multiplexing</a>
				<a href="/wifi-wimax-lte/digital-com/noise-and-error-correction.php">Noise &amp; Error Correction</a>
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
