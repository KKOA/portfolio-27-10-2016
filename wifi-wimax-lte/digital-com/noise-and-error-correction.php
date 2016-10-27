<?php
require_once '../../includes/config.php';
require_once '../../includes/tableHelper.php';
require_once '../../includes/figureHelperV2.php';


$title = "Noise and Error Correction";
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

#principles-of-digital-com, #principles-of-digital-com2
{
	width:900px;
	height:605px;
}
.noise
{
	width:329px;
	height:232px;
}

.burstError
{
	width:600px;
	height:320px;
	background-color:transparent;
}

.interleaving
{
	width:567px;
	height:480px;
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
		<p><a href="/wifi-wimax-lte/digital-com/digital-com-topics.php">Digital Communication</a> > Noise and Error Correction</p>


		<article>
			<header>
				<h1>Noise and Error Correction</h1>
			</header>
			<h2>Gaussian noise</h2>
			<p>The bane of all communication  engineers is noise. Without noise, engineers could modulate at ever higher and  higher QAM achieving eventually, an infinite number of bits per symbol. However  with noise, it is impossible for the decoder to discriminate between minor  changes in phase and amplitude.</p>
			<figure>
			<img id="noise" src="/imgs/wifi-wimax-lte/digital-com/noise.jpg" alt="The affect of Noise on a signal" width="329" height="232" />
						 <figcaption>Fig 8: The affect of Noise on a signal</figcaption>
						 </figure>
						 <p>Gaussian noise is noise which has  a probability density of a normal distribution. &nbsp;White Gaussian noise is present at all  frequencies at equal power amplitude.</p>
			<h2>Error Detection and correction</h2>

			<p>The challenge of transmitting  data is that the channel is subject to noise and interference so the data may  get corrupted while it is being transmitted. </p>

			<p>In order to detect errors, the source encoder may transfer extra bits of  data so that the decoder can use probability to work out what the correct data  is. In the example below, triplets are sent.</p>

			$table,$thead,$tbody,$caption=""
			<?php
			echo createTable
			(
				array(),
				array('Triplet received','Interpreted as'),
				array(
					array("000","0 (error free)"),
					array("001","0"),
					array("010","0"),
					array("011","1"),
					array("100","0"),
					array("101","1"),
					array("110","1"),
					array("111","1 (error free)")
				),
				'Table 1: A simplistic example of FEC'
			);
			?>


			<?php // Video or image missing here ?>
			<p>Obviously, this is quite wasteful  of bandwidth and there is no actual guarantee that 010 is 0. It only has a 67%  probability that it is zero.&nbsp;  Alternatively, the receiver can ask for the data to be retransmitted to  have further confirmation of the actual values.</p> However there is problem to this in form a burst error.
			<h3> Burst Error </h3>
			A burst error is a string of corrupt data, measured as the length between — and including — the first and last error signals.

			<?php // Need recreate video ?>
			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" class="burstError">
				<param name="movie" value="/video/wifi-wimax-lte/digital-com/burstError.swf" />
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
				<object type="application/x-shockwave-flash" data="/video/wifi-wimax-lte/digital-com/burstError.swf" class="burstError">
					<param name="movie" value="/video/wifi-wimax-lte/digital-com/burstError.swf" />
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
			Illustrates the problem burst error causes.


			<p>In case of simplistic example of FEC, if two bits out the three use transmit used transmit a symbol are corrupted, this will lead to the channel decoder interpreting it, wrong. A solution is to also use interleaving.</p>

			<h3>Interleaving</h3>
			<p>Interleaving is the reordering of data that is to be transmitted so that consecutive bytes of data are distributed over a larger sequence of data to reduce the effect of burst errors. The use of interleaving greatly increases the ability of error protection codes to correct for burst errors. Many of the error protection coding processes can correct for small numbers of errors, but cannot correct for errors that occur in groups.</p>

			<?php //video here - Need fix audio?>

			<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" class="interleaving">
              <param name="movie" value="/video/wifi-wimax-lte/digital-com/interleaving.swf" />
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
              <object type="application/x-shockwave-flash" data="/video/wifi-wimax-lte/digital-com/interleaving.swf" class="interleaving" >
                <param name="movie" value="/video/wifi-wimax-lte/digital-com/interleaving.swf" />
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
               <a href="http://www.adobe.com/go/getflash"> <img src="/imgs/adobe-player-download.png" alt="Get Adobe Flash player" /> </a>

                <!--[if !IE]>-->
             </object>
              <!--<![endif]-->
            </object>
			Interleaving in Action


			<p id="subTopicNav">
				<a href="/wifi-wimax-lte/digital-com/principles-of-digital-communication.php">Principles of Digital Communication</a>
				<a href="/wifi-wimax-lte/digital-com/modulation.php">Modulation</a>
				<a href="/wifi-wimax-lte/digital-com/multiplexing.php" >Multiplexing</a>
				<a href="/wifi-wimax-lte/digital-com/noise-and-error-correction.php">Noise and Error Correction</a>
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
