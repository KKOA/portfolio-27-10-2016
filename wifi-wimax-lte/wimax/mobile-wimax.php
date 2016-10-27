<?php
require_once '../../includes/config.php';
require_once '../../includes/figureHelperV2.php';



$title = "Mobile WiMAX";
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
/*
figure
{
	border:1px solid #9C0;
	padding:5px;
	box-sizing:border-box;
	displaY:inline-block;
	/*overflow: hidden;
	margin: 0 20px 20px 0;*/
/*}

figure img
	{
		display:block;
		border:1px solid #000;
	}

figure figcaption
{
	border:1px solid #00F;
	text-align:center;
	font-weight:bold;
	color:#fff;
	background:#333;
	padding:5px;
}
*/
/*figcaption {
  position: absolute;
  background: black;
  background: rgba(0,0,0,0.75);
  color: white;
  padding: 10px 20px;
  opacity: 0;
  -webkit-transition: all 0.6s ease;
  -moz-transition:    all 0.6s ease;
  -o-transition:      all 0.6s ease;
}
figure:hover figcaption {
  opacity: 1;
}
figure:before {
  content: "?";
  position: absolute;
  font-weight: 800;
  background: black;
  background: rgba(255,255,255,0.75);
  text-shadow: 0 0 5px white;
  color: black;
  width: 24px;
  height: 24px;
  -webkit-border-radius: 12px;
  -moz-border-radius:    12px;
  border-radius:         12px;
  text-align: center;
  font-size: 14px;
  line-height: 24px;
  -moz-transition: all 0.6s ease;
  opacity: 0.75;
}
figure:hover:before {
  opacity: 0;
}*/

#Intel-Centrio-Advanced-N-PlusWiMAX-6250
{
	width:340px;
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
		<h1>Wi-Fi,WiMAX &amp; LTE Learning Aid : Mobile WiMAX</h1>
		<?php /*** Optional header - only applicable when more than one article one page */ ?>
	</header>
	<p><a href="wimax-topics.php">
		WiMAX
	</a>
	> Mobile WiMAX
	</p>
	<article>
		<header>
			<h1>Mobile WiMAX</h1>
		</header>
		<p>IEEE 802.16e is the standard for mobile WiMAX. In practice, it is significantly different from Fixed WiMAX. Whereas the range from a Base station to a Subscriber unit could be up to 50Km,  mobile subscriber units in a laptop or small mobile device are far less  powerful and require Base stations every 3-5Km.</p>
		<p>It also requires greater technology  in the Base Stations to allow for handover between cells. The modulation technique is also likely to be asymmetric with higher down link speeds than  uplinks.</p>
		<h2>Cost of Mobile Coverage</h2>
		<p>Due to the  number of base stations required and their added complexity, the cost of providing mobile WiMAX is much higher than providing fixed WiMAX.</p>
		<?php echo addImage
		(
			array(),
			'Fig 8: Show the cost of Fixed vs Mobile WiMAX',
			array
			(
				'id'=>"cost-fixed-vs-mobile-wimax",
				 'src'=>'/imgs/wifi-wimax-lte/wimax/cost-of-wimax.jpg',
				 'alt'=>'WiMAX in the UK'
			)
		);
		?>
		<h3>UK Mobile WiMAX</h3>
		<p>I could not find any evidence from  any of UK WiMAX service providers of Mobile Coverage. Though Nomadic coverage within a Cell was supported no true Mobile coverage was found.</p>
		<h2>Market &amp; Competition</h2>
		<p>Whereas Fixed WiMAX competes with DSL  Broadband suppliers, Mobile WiMAX competes with 3G HSDPA in Mobile  Telecommunications Market which has very large players (i.e. Vodafone, O2,  T-Mobile).</p>
		<br/>
		<h2>Mobile Terminal Equipment</h2>
		<p>A brief survey in the UK market for  Laptops with WiMAX built in showed very few devices available. Intel, a major  backer of WiMAX has developed combined Wireless Wi-Fi-n and WiMAX cards (Note:  WiMAX and Wi-Fi cannot be used simultaneously)</p>
		<?php
		echo addImage
		(
			array(),
			'Fig 9: Picture of Intel Centrio Advanced-N +WiMAX 6250',
			array
			(
				'id'=>"Intel-Centrio-Advanced-N-PlusWiMAX-6250",
				 'src'=>'/imgs/wifi-wimax-lte/wimax/intel-wimax-chip.jpg',
				 'alt'=>'Picture of Intel Centrio Advanced-N +WiMAX 6250'
			)
		);
		?>

		<p>The situation is different in the  USA. The American Amazon web site advertises mobile WiMAX devices.</p>
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
