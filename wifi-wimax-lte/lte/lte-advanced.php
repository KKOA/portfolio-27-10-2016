<?php
 require_once '../../includes/config.php';
 require_once "../../includes/figureHelperV2.php" ;


$title = "LTE Advanced";
$author ;
//$author = "Keith Amoah";
if(!isset($date))
{
	$date = '26/11/2014';
}

$keywords;
$codeGenerator = "Dreamweaver";
$figCounter = 0;
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
			<h1>Wi-Fi,WiMAX &amp; LTE Learning Aid : LTE</h1>
			<?php /*** Optional header - only applicable when more than one article one page */ ?>
		</header>
		<p><a href="lte-topics.php">LTE</a> > LTE Advanced</p>

		<article>
			<header>
				<h1>LTE Adavanced</h1>
			</header>
			<p>Even though LTE is a high  speed data network it does not meet the standards set by IMT-Advanced for 4G  technology. </p>
			<p>Development 10 from 3GPP, a  project known as Long-Term-Evolution-Advanced (LTE-Advanced) is designed to be  4G technology meeting IMT-Advanced requirements.<br />
				&nbsp;<br />
				The 3GPP LTE-Advanced  will</p>
			<ul>
				<li>Enhanced  Data rates &ndash;
					<ul>
						<li>&nbsp;peak data rates of 1Gbs-1 downlink  and 500mbs-1 low mobility </li>
						<li>and  100Mbs-1 high mobility&nbsp; </li>
					</ul>
				</li>
				<li>LTE  Advanced should be able to aggregate non contiguous carriers ( a bandwidth of  100MHz is likely to be required to achieve 1Gbs-1 downlink, this  spectrum may not be found contiguously)</li>
				<li>High  order spatial multiplexing (MIMO) up to eight transmit aerials and for receive  aerials at the enodeB</li>
				<li>Coordinated  MIMO schemes involving multiple cells to improve overall spectral efficiency.</li>
				<li>The  use of relays nodes to improve data rates to edge of cell users</li>
				<li>Backwards  compatibility, mobility between LTE-Advanced, LTE, GSM/EDGE, HSPA and CDMA200.</li>
			</ul>

			<?php
			echo addImage
		  (
		  	array(),
			'Fig '.++$figCounter.': Screen Shot of LTE-Advanced System Architecture video. Click link below for external video. <a href="http://www.mastertelecomfaster.com/lte10/overview.php" target="_blank">http://www.mastertelecomfaster.com/lte10/overview.php</a>',
			array
			(
				'id'=>'lte-adv-archeticture',
				 'src'=>'/imgs/wifi-wimax-lte/lte/lte-adv-archeticture.jpg',
				 'alt'=>'Screen Shot of LTE-Advanced System Architecture video'
			)
		  );

		?>


			<p id="subTopicNav">
			<a href="/wifi-wimax-lte/lte/lte-history.php">
				LTE History
			</a>
			<a href="/wifi-wimax-lte/lte/lte.php">
				LTE
			</a>
			<a href="/wifi-wimax-lte/lte/lte-advanced.php" >
				LTE Advanced
			</a>
			<a href="/wifi-wimax-lte/lte/implementation-of-lte-and-4g.php" >
				Implementation of LTE and 4G
			</a>
			<a href="/wifi-wimax-lte/lte/lte-test.php">
				LTE Tests
			</a>
			<a href="/wifi-wimax-lte/lte/lte-conclusion.php">
				LTE Conclusion
			</a>
		</p>
			<footer>
				<?php // Author and date of work

	?>
				<p>Created by <a title="" class="author" href="#">Keith Amoah</a>, May 2011</p>
			</footer>
		</article>
		<div id="bottom"><a title="Navigate to top of the current page" href="#Top"><span class="fa fa-arrow-circle-up"></span>To the Top <span class="fa fa-arrow-circle-up"></span></a></div>
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
