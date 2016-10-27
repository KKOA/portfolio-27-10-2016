<?php
require_once '../../includes/config.php';
require_once '../../includes/helper.php';
require_once '../../includes/figureHelperV2.php';



$title = "LTE Test";
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
<?php /*
 ********************** Scripts ***********************************
 */ ?>


<script type="text/javascript" src="/scripts/vendors/jquery-1.11.1.js"></script>

<?php //JQuery Library ?>
<script type="text/javascript">
var currentUrl = <?php echo json_encode($_SERVER['REQUEST_URI']); ?>;
</script>
<script type="text/javascript" src="/scripts/customV3.js"></script>

</script>

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
		<p><a href="lte-topics.php">LTE</a> > LTE test</p>

		<article>
			<header>
				<h1>LTE Tests</h1>
			</header>
			<h2>3G Tests : Test 1</h2>
			<p> See if I could maintain Skype conversion over 3G network while travelling 30mph between Swindon and Highworth.</p>
			<p>For this test I use following equipment:</p>
			<ul>
				<li> a Sony VAIO Vgn-FZ21M Laptop with Skype Account</li>
				<li> a <a  title ="View O2 3G dongle" href="/imgs/wifi-wimax-lte/lte/O2-dongle.jpg">O2 3G dongle</a> </li>
			</ul>

			<?php //Need to use figure Helper function ?>
			<p>Below is map of route I took to Highworth.</p>
			<?php echo addImage
			(
				array(),'Fig 14: My Route from Swindon to Highworth.',
				array('id'=>'Skype_Swindon_Highworth',
				'src'=>'/imgs/wifi-wimax-lte/lte/Skype-Swindon-to-Highworth.jpg',
				'alt'=>'My journey Sparcells swindon to highworh')
			); ?>
			<?php // Need to use figure Helper function ?>
			<h3>Outcome</h3>
			<p> I was unable to maintain Skype conversion for duration of Journey. This is due lack O2 of 3G coverage in the area as shown by the map.</p>

			<?php echo addImage
			(
				array(),'Fig 15:O2 coverage in the area.',
				array(
				'id'=>'O2Coverage',
				'src'=>'/imgs/wifi-wimax-lte/lte/O2-coverage.jpg',
				'alt'=>'O2 coverage area between high worth and Swindon. ')
			); ?>
			<?php // Need to use figure Helper function ?>
			<h2>3G Tests : Test 2</h2>
			<p>In this test, I checked to see what were some of the achievable downlink and uplink speeds for mobile broad at various locations using:</p>
			<ul>
				<li> a Sony VAIO Vgn-FZ21M Laptop with Skype Account</li>
				<li> a <a title ="View O2 3G dongle" href="/imgs/wifi-wimax-lte/lte/O2-dongle.jpg">O2 3G dongle</a> </li>
				<li><a href="http://www.broadbandgenie.co.uk/broadband/tools/speedtest" title="link to BroadbandGenie's BroadBand Speed Test" target="_blank">BroadbandGenie's BroadBand Speed Test</a></li>
			</ul>
			The locations I tested a stated below:
			<ol>
				<li>Sparcells Drive, Sparcells, Swindon, Wiltshire</li>
				<li>Beside O2 mast, Marshall Road,Swindon, Wiltshire</li>
				<li>Stewart Road,Charminster,Bournemouth, Dorset</li>
				<li>Bournemouth University's student car park, Fern Barrow, Poole, Dorset</li>
			</ol>
			<h3>Result</h3>

			<p>The distance between the Sparcells Drive &amp; Marshall Road is about 0.5 miles. There is a small difference by about 0.02 difference in upload speed and about a 1.08 difference for download speed.</p>

			<?php echo addImage
			(
				array(),
				'Fig 16 & Fig17 : Results on Sparcell Drive <strong>(left)</strong>,Swindon and Beside the O2 mast on Marshall Road,Swindon <strong>(right)</strong>',
				array
				(
					array
					(
					'id'=>'UnderO2MastSwindon',
					'src'=>'/imgs/wifi-wimax-lte/lte/home-mobile-broad-speeds-test.jpg',
					'alt'=>'Upload and Download speed rates in Sparcells,Swindon'
					),
					array
					(
					'id'=>'home-mobile-broad-speeds-Test',
					'src'=>'/imgs/wifi-wimax-lte/lte/Swindon-O2-mast-mobile-broad-speeds-test.jpg',
					'alt'=>'Upload and Downnload speed rates in Beside an 02 mast,Swindon'
					)
				)
			); ?>

			<p>I was unable to receive a signal from <strong>Stewart Road</strong>. This is despite the fact that I was within what 02 calls "Good Indoors and outdoor coverage". The test site was about 0.6 miles from nearest O2 3G Mast.</p>


				   <?php echo addImage
					(
						array(),
						'<strong>Fig 18</strong> : shows the result from Broadband Genie in <strong>Bournemouth University\'s student car park</strong>. Hover left image for more information',
						array
						(
							array('id'=>'02-coverage-bournemouth',
							'src'=>'/imgs/wifi-wimax-lte/lte/02-coverage-bournemouth.gif',
							'usemap'=>'#planetmap',
							'alt'=>'O2 Coverage at Bournemouth University'
							),
							array('id'=>'bournemouth-university-results',
							'src'=>'/imgs/wifi-wimax-lte/lte/bournemouth-university-results.jpg',
							'alt'=>'Upload and Downloads speeds at Bournemouth University from Broadband Genie'
							)

						)
					);

				   echo generatemap
				   (
					   'planetmap',
					   array
					   (
							array('shape'=>'circle','coords'=>'25,39,12','title'=>'02 GSM mast'),
							array('shape'=>'circle','coords'=>'110,122,13','title'=>'Bournemouth University\'s Car Park where the test was conducted'),							array('shape'=>'circle','coords'=>'234,149,12','title'=>'02 3G mast'),
							array('shape'=>'poly', 'coords'=>'0,0,85,0,70,28,62,42,42,56,0,76', 'title'=>'Good outdoors coverage area'),
							array('shape'=>'rect', 'coords'=>'0,0,312,197', 'title'=>'Good Indoor &amp; Outdoor coverage')
					   )
				   );

				   ?>

			<p> A useful link for viewing mobile broadband in area is site called <a href="http://top10.com/mobilephones/streetstats/#filters=3g%2Cbh12+5bb%2Cdownload%2C0%2C0%2C3g" target="_blank">
             Top Ten.com</a> Enter location and the web page returns back download and uploads speed from different companies in the location. </p>

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

	//Need to still this footer

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
<script type="text/javascript">


$(document).ready(function()
{

	articleWidth = $('article').width();
	//alert (articleWidth);

	//setFigcaptionWidth();

});
$( window ).resize(function()
{
	articleWidth = $('article').width();
	console.log(articleWidth);
	//setFigcaptionWidth();
});

</script>
</body>
</html>
