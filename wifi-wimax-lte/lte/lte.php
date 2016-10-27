<?php
require_once '../../includes/config.php';
require_once '../../includes/figureHelperV2.php';


$title = "LTE";
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
	#intro
	{

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
			<h1>Wi-Fi,WiMAX &amp; LTE Learning Aid : LTE</h1>
			<?php /*** Optional header - only applicable when more than one article one page */ ?>
		</header>
		<p><a href="lte-topics.php">LTE</a> > LTE </p>

		<article>
			<header>
				<h1>Long-Term-Evolution</h1>
			</header>
			<h2>LTE Introduction</h2>
        <p>The Long-Term-Evolution (LTE) project  was started in November 2004 by 3GPP to develop a standard for the next  generation cellular mobile technology. The first version of LTE is documented  in Release 8 of the 3GPP Specifications.</p>
        <p>The LTE stated requirements   included</p>
        <ul>
          <li>Increased  user data rates &ndash; <em>100Mbps-1  downlink, 50Mbits-1 uplink</em></li>
          <li>Reduced  connection time and plane latency &ndash; <em>&lt;100ms  connection time, &lt;10ms two way radio round trip.</em></li>
          <li>Lower  cost per bit through spectral efficiency</li>
          <li>Simplified  network architecture</li>
          <li>Greater  flexibility in use of spectrum</li>
          <li>Seamless  mobility &ndash; <em>sustained connections at  speeds up 350km/h (for high speed trains)</em></li>
          <li>Reasonable  power consumption for user equipment.</li>
        </ul>
        <p>LTE which involves the  evolution of the Universal Terrestrial Radio Access Network (E-UTRAN) has been  accompanied by a parallel 3GPP project called System Architecture Evolution  (SAE) an all new IP packet based network known as Evolved Packet Core (EPC).  Together LTE and SAE are referred to as the Evolved Packet System (EPS).  However, in literature depending on the context, long term evolution LTE is  often used to apply to both the LTE and SAE.</p>
        <p>Another misnomer is that  LTE is often referred to by suppliers, consumers and in the news as a 4th Generation (4G) systems. However LTE does not meet the International Mobile  Telecommunication &ndash; Advanced (IMT-Advanced) specifications for 4G technologies.  LTE-Advanced, is aimed to meet these standards.</p>
        <p>LTE has been developed as  an evolution of existing 3G technologies. This allows for a simplified, less  expensive upgrade from the existing network technology. </p>
        <h2>LTE and SAE</h2>
        <p>LTE and SAE were developed to support packet switched services rather than circuit
          switched services as was the case in the earlier models on cellular networks. This trend to
          focus on data rather than voice started with 3G. LTE and SAE is entirely Internet Protocol
          based. In contrast to GSM and 3G where the User Equipment (UE) was allocated
          temporarily an IP address for data transmissions, in LTE the UE is permanently allocated
          an IP address. (In GSM and 3G the UE could be reached over circuit switched network).
          In LTE, without an IP address the UE cannot be reached.</p>
        <p>At High level, LTE the Evolved Universal Terrestrial Radio Access Network (EUTRAN)
          consists of evolved NodeB (eNB) or base station whereas the evolved packed
          network consists of several logical nodes.</p>
        <ul>
          <li>PDN-Gateway (P-GW). The Packet Data Network Gateway is responsible
            for IP address allocation for the User Equipment (UE) as well as the Quality
            of Service (QoS) enforcement.</li>
          <li>Serving Gateway (S-GW). All user packets are transferred via the serving
            gateway. It serves as the anchor for bearers as users move from eNodeB to
            eNodeB ( i.e. Base Station to Base Station)</li>
          <li>Mobility Management Entity (MME).</li>
        </ul>
        <h2>LTE Quality of Service</h2>
        <p>LTE is implemented on IP based network. The importance for Quality of Service (QoS)
          when sharing resources between critical and non-critical data transfer is very high.
          Applications like VoIP do not tolerate delayed packets where application like email
          would be perfectly happy with a best effort service.</p>
        <p> Development 8 offers a classed based QoS concept for delivering real time and non-real time
          traffic, with current and future QoS in mind. A network initiated QoS system is
          implemented offering control based on Guaranteed Bit Rate (GBG) and Non-Guaranteed
          Bit Rate (Non-GBG) . </p>
        <h2>LTE Radio Architecture</h2>

		<?php

		echo addImage
		  (
		  	array(),
			'Fig '.++$figCounter.': Screen Shot of LTE System Architecture video. <br>Click link below for external video
		<a href="http://www.mastertelecomfaster.com/lte/overview.php" target="_blank" >http://www.mastertelecomfaster.com/lte/overview.php</a>',
			array
			(
				'id'=>'lte-archeticture',
				 'src'=>'/imgs/wifi-wimax-lte/lte/lte-archeticture.jpg',
				 'alt'=>'Screen Shot of LTE System Architecture video'
			)
		  );

		?>


		<!--<figure>
				<?php  /*
		  addImage2("/imgs/wifi-wimax-lte/lte/lte-archeticture.jpg",
		  "lte-archeticture",
		  "Screen Shot of LTE System Architecture video","");
		  */?>

		<figcaption>Fig <?php //echo ++$figCounter ?> : Screen Shot of LTE System Architecture video. <br>Click link below for external video
		<a href="http://www.mastertelecomfaster.com/lte/overview.php" target="_blank" >http://www.mastertelecomfaster.com/lte/overview.php</a>
		</figcaption>
		</figure>-->

        <h3>Downlink and OFDM</h3>


		<?php

		echo addImage
		  (
		  	array(),
			'Fig '.++$figCounter.': Showing OFDMA SC-FDMA',
			array
			(
				'id'=>'ofdma-sc-fdma',
				 'src'=>'/imgs/wifi-wimax-lte/lte/ofdma-sc-fdma.jpg',
				 'alt'=>'Showing OFDMA SC-FDMA'
			)
		  );

		?>

        <p>New Radio Spectrum cannot be invented only used more  efficiently. On the downlink LTE uses Orthogonal Frequency Division Multiple  Access (OFDMA). This is a variant of Orthogonal Frequency Multiplexing (OFDM).  In OFDM carriers are made orthogonal by the use of a Fourier Transform. This  allows for a large number of closely spaced orthogonal carriers that can be  transmitted in parallel. </p>
        <p>Each subcarrier is modulated using QSPK, 16QAM or  64QAM (providing 2, 4 and 6 bits per symbol). Link adaptation is used to  determine data rate or error probabilities by adapting modulation and channel  coding schemes to current channel conditions. &nbsp;</p>
        <p>OFDMA is more efficient than Wideband Code Division  Multiple Access (WCMA) used in UMTS 3G. The European Telecommunications Standards  Institute (ETSI) first looked at OFDM for GSM back in the late 1980s however, the  processing power required to perform the many Fast Fourier Transforms (FFT)  operations at was too expensive.&nbsp; In 1998  the 3GPP seriously considered OFDMA for 3G UMTS but the decision went in favour  of WCDMA. Today, cheap computing power has made OFDMA viable .</p>

        <h3>Uplink and SC-FDMA</h3>


        <p>One of the main  disadvantages of OFDMA is the high Peak Power to Average ratio of the signal.  This&nbsp;&nbsp; requires powerful amplifiers for  the sending device making it unsuitable for user equipment. This led the 3GPP  to choose Single Carrier Frequency Division Multiple Access (SC-FDMA) for the  uplink. Having an efficient (energy) transmission scheme ensures that the  mobile devices with little power available are both efficient and cost  effective.</p>
        <p> Release 8 offers a classed based QoS concept for delivering real time and non-real time
          traffic, with current and future QoS in mind. A network initiated QoS system is
          implemented offering control based on Guaranteed Bit Rate (GBG) and Non-Guaranteed
          Bit Rate (Non-GBG) . </p>
        <h3>MIMO</h3>
        <p>To increase throughput,  LTE uses spatial multiplexing, a technology that uses two multi-antenna  transmissions: Transmit Diversity and Multi-stream Transmission. At both network  and user level, Multi-stream Transmission uses multiple antennas in order to  provide increased peak data rate. This is achieved by simultaneous  transmissions over a single radio link. Multilayer antenna solutions also  generate High peak rates, for example 2x2 or 4x4 multiple in multiple out  (MIMO). Extended coverage is achievable by beam forming.&nbsp;</p>

        <h3>Multi User scheduling</h3>
        <p>The eNodeB is responsible  for managing the resources for both the uplink and down link channels. The  objective is to fulfil the expectations of many users while meeting the QoS  requirements of their applications.<br />
          Two extremes of  scheduling are opportunistic scheduling and fair scheduling. Opportunistic  scheduling attempts to maximise the data transferred by the entire network  whereas fair scheduling pays more attention to the latency for each user rather  than total data achieved through the network.      </p>


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
</body>
</html>
