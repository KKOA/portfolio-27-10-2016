<?php
require_once '../../includes/config.php';
require_once '../../includes/figureHelperV2.php';

$title = "Multiplexing";
//$author ;
$author = "Keith Amoah";
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
#tdm
{
	width:416px;
	height:318px;
}

#cdm
{
	width:444px;
	height:292px;
}

#fdm
{
	width:444px;
	height:292px;
}
#fdm-vs-ofdm
{
	width:234px;
	height:64px;
}

#ofdma
{
	width:533px;
	height:153px;
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
		<p><a href="/wifi-wimax-lte/digital-com/digital-com-topics.php">Digital Communication</a> > Multiplexing</p>

		<article>
			<header>
				<h1>Multiplexing</h1>
			</header>

			<h2> Time Division Multiplexing (TDM)</h2>
			<?php
			echo addImage
			(
				array(),'Fig 3: TDM',
				array(
				'id'=>'tdm',
				'src'=>'/imgs/wifi-wimax-lte/digital-com/tdm.jpg',
				'alt'=>'Showing Code Division Multiplexing(TDM)')
			);

			 // Need horizontal eqvialent of this image ?>

			<p>In TDM, the capacity of the channel is higher than what has been allocated to encoder A or B. Each encoder is allocated a time slot in which to transmit. The decoders only accept information in their respective time slots.</p>


			<h2> Code Division Multiplexing (CDM)</h2>
			<?php
			echo addImage
			(
				array(),'Fig 4: CDM',
				array(
				'id'=>'cdm',
				'src'=>'/imgs/wifi-wimax-lte/digital-com/cdm.jpg',
				'alt'=>'Showing Code Division Multiplexing(CDM)')
			);
			 // Need horizontal eqvialent of this image ?>
			<p>In CDM, the  channel again is larger than the service that has been allocated to either  encoder A or B. Each encoder encodes its messages with a code. The receiving  decoders only decode the messages that they have the key for. They treat the  other messages as noise and discard them.</p>


			<h2>Frequency Division Multiplexing (FDM)</h2>

			<?php
			echo addImage
			(
				array(),'Fig 5: FDM',
				array(
				'id'=>'fdm',
				'src'=>'/imgs/wifi-wimax-lte/digital-com/fdm.jpg',
				'alt'=>'How FDM works')
			);


			// Need horizontal eqvialent of this image ?>
			<p>In frequency and Spatial Multiplexing, the allocation of bandwidth to the encoder is more
				than can be handled by one channel. In frequency multiplexing, additional channels are
				added at different frequencies i.e. F1 and F2. The encoder splits its data between the two
				channels and the decoder reassembles the data at the other end.</p>
			<p>In Spatial Multiplexing, additional spatial streams are added to achieve the same effect.</p>
			<p>In noisy or poor signal environments the same information can be sent down both
				channels. This improves the signal to noise ratio. The decoder can compare the messages
				that were sent down both channels and it has a better chance of assembling the data
				correctly.</p>

			<h2>Frequency Division Multiplexing Access (FDMA)</h2>
			The key difference between FDMA and FDM is that source signals come from multiple end users while in FDM, the source is from one end user. Users are dynamically allocated one or more channels.
			<h2>Orthogonal Frequency Division  Multiplexing (OFDM)</h2>
			<?php
			echo addImage
			(
				array(),'Fig 6: Difference between FDM and OFDM',
				array(
				'id'=>'fdm-vs-ofdm',
				'src'=>'/imgs/wifi-wimax-lte/digital-com/fdm-vs-ofdm.jpg',
				'alt'=>'Difference between FDM and OFDM')
			);
			?>

			<p>OFDM is frequency division multiplexing where the total bandwidth has  been divided into sub-carriers which are placed very closely together at ninety  degree phase shift (hence the name orthogonal).</p>

			<h2>Orthogonal Frequency Division  Multiplexing Access(OFDMA)</h2>

			<?php
			echo addImage
			(
				array(),'Fig 7: OFDMA',
				array(
				'id'=>'ofdma',
				'src'=>'/imgs/wifi-wimax-lte/digital-com/ofdma.jpg',
				'alt'=>'How OFDMA works')
			);
			?>

			<p>OFDMA is the process of dividing a radio carrier  channel into several independent sub-carrier channels that are shared between  simultaneous users. The OFDMA system dynamically allocates sub carrier channels  or groups of sub channels to users. The data rates provided to each user  depends on the number of sub carriers that are allocated to that user.</p>
			<p id="subTopicNav">
				<a href="/wifi-wimax-lte/digital-com/principles-of-digital-communication.php">Principles of Digital Communication</a>
				<a href="/wifi-wimax-lte/digital-com/modulation.php">Modulation</a>
				<a href="/wifi-wimax-lte/digital-com/multiplexing.php" >Multiplexing</a>
				<a href="/wifi-wimax-lte/digital-com/noise-and-error-correction.php">Noise &amp; Error Correction</a>
			</p>
			<footer>
				<?php // Author and date of work ?>
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
