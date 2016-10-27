<?php
require_once '../../includes/config.php';
$title = " The Future of WiMAX";
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

<!--<link rel="stylesheet" href="../styles/Comparison2.css" type="text/css" media="screen" />-->

<link rel="stylesheet"	type="text/css"	href="/styles/dev/css/templateV7.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">


<?php //See http://fortawesome.github.io/Font-Awesome/icons/ more details on css icons ?>
<style type="text/css">
#intro
{
	width:320px;
	height:270px;
	background:#666;
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
		<h1>Wi-Fi,WiMAX &amp; LTE Learning Aid : The Future of WiMAX</h1>
		<?php /*** Optional header - only applicable when more than one article one page */ ?>
	</header>
	<p><a href="wimax-topics.php">
			WiMAX
		</a> > Future WiMAX
	</p>

	<article>
		<header>
			<h1>The Future of WiMAX</h1>
			<h2>Future Standards</h2>
		</header>
		<p>The developing 802.16m standard offers new capabilities and efficiencies  to meet the challenging International Mobile Telecommunications IMT-Advanced  requirements. </p>
		<p>Using 4x2MIMO in an urban microcell with a single 20MHZ channel the  system will support 120Mbits-1 downlink and 60 Mbits-1  uplink.</p>
		<p>The WiMAX Release 2 will incorporate improved latency, spectral  efficiency and capabilities for VoIP. The WiMAX Forum hopes to see WiMAX  release 2 commercially available within the 2011-2012 timeframe.</p>
		<p><em>&nbsp;&ldquo;</em><em>As is evidenced here today, there is  a broad ecosystem ready to deliver WiMAX as the first IMT-Advanced compliant  technology to market,&rdquo; said Ron Resnick, president of the WiMAX Forum. &ldquo;One of  our top priorities is to bring WiMAX Forum Certified Release 2 networks and  devices to market by the end of 2011. Even better, with double digit WiMAX  deployment growth every month, the next release of WiMAX will have an even more  substantial installed base upon which to build.&rdquo;</em></p>
		<p id="subTopicNav">
			<a href="/wifi-wimax-lte/wimax/wimax.php">
				WiMAX
			</a>
			<a href="/wifi-wimax-lte/wimax/mobile-wimax.php">
				Mobile WiMAX
			</a>
			<a href="/wifi-wimax-lte/wimax/future-wimax.php" >
				Future WiMAX
			</a>
		</p>
		<footer>
			<?php // Auhtor and date of work

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
