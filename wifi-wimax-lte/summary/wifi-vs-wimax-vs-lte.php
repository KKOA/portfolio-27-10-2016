<?php
require_once '../../includes/config.php';
require_once '../../includes/helper.php';
require_once '../../includes/figureHelperV2.php';


$currentPageurl = $_SERVER['REQUEST_URI'];
$title = "Summary : Wi-Fi vs WiMAX";
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
			<h1>Wi-Fi,WiMAX &amp; LTE Learning Aid : Summary</h1>
			<?php /*** Optional header - only applicable when more than one article one page */ ?>
		</header>
		<p>
			<a href="summary-topics.php">Summary</a>
			> Wi-fi vs WiMAX vs LTE</p>
		<article>
			<header>
				<h1>Wi-Fi vs WiMAX vs LTE</h1>
			</header>

			<section style="overflow:auto;">
				<?php
					echo addImage
					(
						array('style'=>'float:right;' ),'WiFi vs WiMAX',
						array(
						'id'=>'wifi-vs-wimax',
						'src'=>'/imgs/wifi-wimax-lte/summary/wifi-wimax.jpg',
						'alt'=>'WiFi vs WiMAX. ')
					);
				?>
				<h2>Wi-Fi vs WiMAX</h2>

				<p>In general Wi-Fi and WiMAX complement  each other rather than compete against each other.</p>
				<p>Wi-Fi has been one of the great  successes of the computer industry. Wi-Fi operates in the unlicensed band and  is designed to provide wireless access to a small area. The technology can  operate with other Wi-Fi networks competing for the same bandwidth.</p>
					<p>Though WiMAX can work in the  unlicensed spectrum nearly all operators prefer to provide services from the  licensed spectrum where they are guaranteed to be the only company using that  bandwidth. Fixed WiMAX is positioned to  compete against ADSL broadband providers. This is particularly true in rural  areas and developing countries. It is  said that WiMAX broadband service was the first to recover after the Asian  Tsunami in Indonesia.</p>
				<p>Where WiMAX and Wi-Fi do compete is  in Wi-Fi meshes. Widespread Wi-Fi meshes  on the whole have been unsuccessful Swindon Project being one example. The Swindon Wi-Fi mesh project has been put  on hold whereas the Teesdale WiMAX project is forging ahead.</p>
				<!--<div class="clearthis"></div>-->
			</section>
			<section>
				<h2>WiMAX vs LTE</h2>
				<?php
					echo addImage
					(
						array('class'=>'right'),'WiFi vs WiMAX',
						array(
						'id'=>'wimax-vs-lte',
						'src'=>'/imgs/wifi-wimax-lte/summary/wimax-lte.png',
						'alt'=>'WiMAX vs LTE Symbol')
					);
				?>

				<p>The fundamental differences between  the 2 technologies arise from the fact that they come from very distinct  business quarters, each driven by different and sometimes opposing priorities.</p>

				<p>WiMAX is essentially driven by the  Computer Industry with companies like Intel being big backers.
				It is based on  the requirements for computers and is therefore architect for PCs. The fact  that it has shrank in size to make it portable has been an added, secondary  consideration. </p>

				<p>LTE, on the other hand, has emerged  from the Telecommunications Community. To all intents and purposes, it is a  telephone for making calls.However, it has also evolved becoming more and more  versatile in its uses.The convergence between the two has been coincidental  with WiMAX end user devices becoming more &ldquo;mobile&rdquo; and LTE phones (e.g.  I-phone) becoming &ldquo;smarter&rdquo;.</p>

				<p>In the WiMAX business approach, goods  are sold and services are subsidised while the LTE business approach does  precisely the opposite.Goods like the PC, laptops etc have to be purchased  whereas the services like Google are subsidised through advertising revenue. </p>

				<p>In the Telecommunications sector  however, it is the cost of the hardware that gets subsidised. As a result, the  telephones and handsets themselves cost very little and even upgrades are  available for next to nothing.
				It is the services and subscription contracts  that generate the income and &ldquo;talk time&rdquo; is paid for by the minute.</p>

				<p>Another difference lies in the nature  of the architectures which are poles apart. In the Telecommunications  architecture, the Value Added Services are crucially important. They have to be  secure, customer care and support services matter and reliability is of the  utmost importance. In contrast, the WiMAX architecture is based on IP and is  relatively flat. There are no fiddly servers and the customers remain largely  unknown. The concern has to be about the BIT PIPE and even then, it only has to  be a &ldquo;best effort&rdquo; pipe.These differences mean that the  competing technologies have different potentials and advantages in different  market scenarios.&nbsp;&nbsp;&nbsp; </p>
			</section>
			<p id="subTopicNav"><a class="current">Wi-Fi vs WiMAX vs LTE</a> <a href="reports.php">Reports</a></p>
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
  		require_once '../../includes/footer.php'
  	?>
</div>
</body>
</html>
