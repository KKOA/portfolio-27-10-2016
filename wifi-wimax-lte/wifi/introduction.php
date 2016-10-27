<?php
require_once '../../includes/config.php';
require_once '../../includes/figureHelperV2.php';
require_once '../../includes/tableHelper.php';
/** Page need to seperate to much content for mobile device. **/



$title = "Introduction to  Wi-Fi";
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
<p><a href="wifi-topics.php">Wi-Fi</a> > Introduction</p>

<article>
<header>
	<h1>Introduction</h1>
</header>
<h2> Background</h2>

<?php echo addImage(
	array("class"=>"right"),
	'Fig 1: Illustrating Wireless LAN netowrks)',
	array(
		'id'=>'wireless-lan',
		'src'=>'/imgs/wifi-wimax-lte/wifi/multipoint.gif',
		'alt'=>'Illustrating a Wireless LAN netowrk'
	)
);
?>

<p>Wi-Fi is the name given to short-range wireless broadband technology. In Europe, the
	maximum power of the transmitter is limited to 100mW in 2.4 and 5 GHz bands.</p>
<p> The IEEE 802.11 standard defines the standards for Wireless Local Area Networks. </p>
<p>Wi-Fi is the commercial name for this class of systems. The Wi-Fi Alliance is an
	industry-led, not-for-profit organization which has the goal of driving the adoption of a
	single worldwide standard for high-speed wireless local area networking. </p>

<?php // section article ?>
<h2> History</h2>
<p>In 1985, the Federal Communications Committee (FCC) opened up the frequency 900Hz, 2.4
	and 5.8HHz for use without a government licence. These frequencies were known as the
	&quot;garbage bands&quot; as they were used for things other than just communications i.e. Microwave
	ovens etc.</p>
<p>In 1988, the company NCR wanted to use the unlicensed band to link its cash registers
	together. They approached the IEEE about creating a standard similar to 802.3. A new group
	802.11 was set up. In 1997, the first basic specification was agreed on and it allowed transfer
	speeds of 2mbits. Two variants of the standard, 802.11a and 802.11b, were ratified in
	December 1999 and January 2000 respectively.</p>
<p>Today, the latest standard is 802.11n which, when using 40 MHz of bandwidth with 4 spacial
	streams, allows for speeds up to 600 Mbits-1</p>
<h3>Fixed Access</h3>

<?php
$tableHeader = array
(
'Wi-Fi<br>Standard','Frequency<br>(GHZ)','Bandwidth<br>(MHZ)','Speed<br>(Mbits <sup>-1</sup>)'
);
$tableData = array
(
  array('802.11a','5','20','Up to 54'),
  array('802.11b','2.4','20','Up to 11'),
  array('802.11g','2.4','20','Up to 54'),
  array('802.11n','2.4 or 5','20 or 40','Up to 600')
);
$table = array('id'=>'Wi-Fi-table');

echo createTable($table,$tableHeader,$tableData,'Table 1 802.11 details');
?>
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
