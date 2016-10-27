<?php
require_once '../../includes/config.php';
$title = "Modulation";
require_once '../../includes/figureHelperV2.php';

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

<!--<link rel="stylesheet" href="../styles/Comparison2.css" type="text/css" media="screen" />-->

<link rel="stylesheet"	type="text/css"	href="/styles/dev/css/templateV7.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<?php //See http://fortawesome.github.io/Font-Awesome/icons/ more details on css icons ?>

<style type="text/css">

	#principles-of-digital-com, #principles-of-digital-com2
	{
		width:900px;
		height:605px;
	}

	.bold
	{
		font-weight:bold;
		color:#625648;
		/*795246*/
	}

	#ask-fsk-psk
	{
		width:350;
		height:350px;
	}

	#qam-32-16
	{
		width:400px;
		height:210px;
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
		<p><a href="/wifi-wimax-lte/digital-com/digital-com-topics.php">Digital Communication</a> > Modulation</p>

		<article>
			<header>
				<h1>Modulation</h1>
			</header>
			<p> Modulation is the process of converting information so that is can be successfully sent through a medium.
				The carrier is responsible for transporting the information from one end to the other end.</p>
			<p>The carrier transmits symbols and not information. The symbol is a unit of transmission energy that represents  one or more bits. Bits is a unit of information.</p>
			<p>There are several basic modulation types:</p>
			<ul>
				<li>Amplitude shift keying (ASK) &amp; Amplitude Modulation (AM)</li>
				<li>Frequency shift keying (FSK) &amp; Frequency Modulation (FM)</li>
				<li>Phase-shift keying (PSK) &amp; Phase Modulation (PM) </li>
			</ul>
			<h2> ASK &amp; AM</h2>
			<p>Both varing the amplitude to represent 1 and 0s. The key difference between is context in which they are used in. ASK is used for digital communication and AM is used for anlogue communications.</p>
			<h2> FSK &amp; FM</h2>
			<p>In FSK and FM varies the frequency to represent 1 and 0s. Like the ASK &amp; AM, the only difference be is context in which they are used in. FSK is used for digital communication and FM is used for anlogue communications. </p>
			<h2>PSK &amp; PM</h2>
			<p>Both alter the carrier phase to represent 1 and 0s. However, PSK is used for digital communication while the other is used for anlogue communications.</p>
			<p>Below are some of PSK types:</p>
			<ul>
				<li>Binary Phase Shift Key(BPSK)</li>
				<li>Quadriture Phase Shift Key(QPSK)</li>
				<li>8PSK</li>
			</ul>
			<h3>BPSK</h3>
			<p>BSPK alter the carrier phase by +/- 180to represent a one bit symbol (0 or  1).</p>

			<h3>QPSK</h3>
			<p>Unlike ,BPSK this can reprent two bits per symbol(00,01,10,11) by modifying the carrier by +0, +90, +180, +270.</p>

			<h3>8PSK</h3>
			<p>8PSK can further improve on QSPK by represent three bit bits per symbol(000,001,010,011,100,101,110,111) by carrier shifts of +0, +45, +90,+135,+180,  +225, +270,+315.</p>

			<div class="note folded-rightbottom shadow">
				<header>Note</header>
				<div class="noteBody">
					<p>The more granular the  angle shift, the more data that can be sent per symbol. However, the channel  decoder finds it more difficult to discriminate especially when there is noise  on the channel. </p>
				</div>
			</div>
			<section>

			<h2>ASK VS FSK VS PSK</h2>
			<?php
					echo addImage
					(
						array(),'Fig 1: Demonstrates how <span class="bold">ASK, FSK &amp; PSK</span> represents <Strong>0010110010</Strong> ',
						array(
						'id'=>'ask-fsk-psk',
						'src'=>'/imgs/wifi-wimax-lte/digital-com/ask-fsk-psk.jpg',
						'alt'=>'How ASK,FSK and PSK would reperesent 0010110010')
					);
				?>
			<p> Take this example, we wish transmit 0010110010 across the channel. How does each of shift key represent this?</p>
			<p> ASK increases the amplitude peaks and troughs over a given period of time.</p>
			<p>FSK increase of the frequency of peaks and troughs over the same given period of time.</p>
			<p>PSK alter phase of wave over the same given period of time </p>
			</section>


			<h2>Quadriture Amplitude Modulation (QAM)</h2>
			<p>In QAM, two physical properties of  the wave are varied, amplitude and phase. It can be considered as a mixture of  amplitude and phase modulation.
				The goal is to achieve ever higher spectral  efficiency. 16QAM delivers 4 bits per symbol, 64QAM delivers 6 bits per symbol  and 256QAM would deliver 8 bits per symbol.</p>
			<p>There are other types.</p>

			<?php
			echo addImage
					(
						array(),' Fig 2: 32 &amp; 64 QAM',
						array(
						'id'=>'qam-32-16',
						'src'=>'/imgs/wifi-wimax-lte/digital-com/qam-32-16.jpg',
						'alt'=>'Image of 32 AND 64 Quadrature amplitude modulation')
					);
			?>
			<p id="subTopicNav">
				<a href="/wifi-wimax-lte/digital-com/principles-of-digital-communication.php">Principles of Digital Communication</a>
				<a href="/wifi-wimax-lte/digital-com/modulation.php">Modulation</a>
				<a href="/wifi-wimax-lte/digital-com/multiplexing.php" >Multiplexing</a>
				<a href="/wifi-wimax-lte/digital-com/noise-and-error-correction.php">Noise &amp; Error Correction</a>
			</p>
			<footer>
				<?php // Author and date of work 	?>
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
