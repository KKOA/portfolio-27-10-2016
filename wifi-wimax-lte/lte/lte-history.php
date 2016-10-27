<?php

 require_once '../../includes/config.php';
 require_once "../../includes/figureHelperV2.php";
 require_once "../../includes/tableHelper.php";



$title = "LTE History";
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

#edge-modem
{
	width:250px;
	height:auto;
}
#threeg-mast
{
	width:55px;
	height:350px;
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
		<p><a href="lte-topics.php">LTE</a> > LTE History</p>

		<article>
			<header>
				<h1>LTE : History</h1>
			</header>

			<h2>Celluar network</h2>
        <p>The concept of cells was developed by Bell labs of the ISA in 1947. It allowed the
          capacity of the network to be increased substantially by dividing the coverage into
          small cells each with its own base station operating at a different frequency. Given
          that cells will have the same overall throughput capacity, cells in densely
          populated area will be of a reduced size whereas cells in more rural locations
          could span many kilometres.</p>


		  <?php
		  echo addImage
		  (
		  	array(),
			'Fig '.++$figCounter.': Showing how the concept of cells are used to provide coverage area',
			array
			(
				'id'=>'cell-concept',
				 'src'=>'/imgs/wifi-wimax-lte/lte/cell-size.jpg',
				 'alt'=>'Showing how the concept of cells are used to provide coverage area'
			)
		  );
		  ?>

        <h2>First Generations System</h2>

		<p>The first commercial mobile networks were analogue and arrived in the 1980s. These
          developed independently and there was no global standard.</p>

        <ul>
          <li>AMPS &ndash; Analogue Mobile Phone System &ndash; Used in America</li>
          <li> TACS &ndash; Total Access Communication System &ndash; Europe</li>
          <li> NMT &ndash; Nordic Mobile Telephone &ndash; Europe</li>
          <li> J-TACS &ndash; Japanese Total Access Communication System &ndash; Japan &amp; Hong Kong</li>
        </ul>

		<p>One advantage that these analogue systems had over their digital successor GSM was its
          range which made it ideal for sparsely populated areas. </p>
        <h2>Second Generation Systems (2G)</h2>
        <?php
		echo addImage
		  (
		  	array(),'Fig '.++$figCounter.': A 2G Mast',
			array ('id'=>'2g-mast','src'=>'/imgs/wifi-wimax-lte/lte/2g-mast.jpg','alt'=>'A 2G Mast')
		  );

		 echo addImage
		  (
		  	array(),'Fig '.++$figCounter.': An Edge Modem',
			array('id'=>'edge-modem','src'=>'/imgs/wifi-wimax-lte/lte/edge.jpg','alt'=>'An Edge Modem')
		  );

		?>


		<p>Global System for Mobile communication (GSM) was developed collaboratively by
          companies working under the European Technical Standards Institute (ETSI). This was a
          digital, voice connection oriented system which allowed roaming across European
          countries. The first GSM network was launched in 1991 in Finland.</p>
        <p>GSM uses Time Division Multiple Access (TDMA) to divide the carrier frequency into
          slots for individual phones use.</p>

		<p>GSM has become the dominant standard for mobile telecommunications, offered in over
          218 countries worldwide and having a coverage of over 80% of the world, with active
          GSM &ndash; 3GSM subscriptions exceeding 4.5 billion .</p>

		<p>General Packet Radio Service (GPRS) was an enhancement to GSM standard developed
          by the 3rd Generation Partnership Project (3GPP). The class of a GPRS phone determines
          the speed at which data can be transferred. The class refers to the number of timeslotsavailable for transmission of data. The maximum speed GPRS is 48K (for 5 Slots). </p>

		<p>Enhanced Data rates for GSM Evolution (EDGE) achieves higher data throughput by
          using more slots and higher encoding rate (8PSK) (i.e. 3 bits per symbol) giving a
          transmission rate of up to 473Kbits-1. </p>

		<p>Evolved EDGE achieves even higher rates through, among other things, higher order
          modulation (16QAM and 32QAM) rates. Edge like GPRS will reduce its modulation and
          coding scheme according to the quality of the radio signal. </p>

		<p>GPRS and EDGE are a best effort service (i.e. there is no guaranteed quality of service as
          in a switched circuit). Several subscribers share the same bandwidth. I have experienced
          data rates as low as 25 Kbits-1 while connected to EDGE in spite of there being excellent
          signal quality.</p>

        <h2>Third Generation Systems (3G)</h2>
        <?php
		 echo addImage
		  (
		  	array(),'Fig '.++$figCounter.': 3G HSDPA modem 7.2Mbps usb modem wireless 3g modem',
			array('id'=>'3g-HSDPA-modem-7-2Mbps-usb-modem_wireless-3g-modem',
			'src'=>'/imgs/wifi-wimax-lte/lte/3g-hsdpa-modem-7.2Mbps-usb-modem-wireless-3g-modem-V2.png','alt'=>' 3G HSDPA modem 7.2Mbps usb modem wireless 3g modem')
		  ); ?>


		  <?php
		 echo addImage
		  (
		  	array(),'Fig '.++$figCounter.': O2 3G Mast, Outside Bournemouth University',
			array('id'=>'threeg-mast','src'=>'/imgs/wifi-wimax-lte/lte/3g-mast.jpg','alt'=>'O2 3G Mast, Outside Bournemouth University')
		  ); ?>

		<p>To offer third generation (3G) technologies, the 3GPP group developed Universal Mobile
          Telecommunication System (UMTS). UMTS is set up as part of the International Mobile
          Telecommunication (IMT) and its task is to specify the requirements of 3G technologies.
          UMTS has a completely new designed radio access network introducing Wideband Code
          Division Multiple Access (WCDMA) .Currently, the 3GPP group has evolved UMTS
          in Releases 5, 6 and 7.</p>

		<?php


		$tableHeader = array("Release","Functional <wbr>freeze","Main UMTS feature of release");
		$tableData = array
			(
				array('Rel-99',' March 2000 ','Basic 3.84 Mcps W-CDMA (FDD-TDD)'),
				array('Rel-4',' March 2001 ','1.28 Mcps TDD (aka TD-SCDMA)'),
				array('Rel-5','June 2002 ','HSDPA'),
				array('Rel-6','March 2005 ','HSDPA (E-DCH)'),
				array('Rel-7','Decemember 2007 ','HSDPA + (64QAM downlink&#44;  MIMO&#44; 16QAM uplink) <br>LTE & SAE feasibility study'),
				array('Rel-8','Decemember 2008','LTE work item<br> - OFOMA/SC-FDMA air interface SAE work item<br> - new IP core network Furhter HSPA improvements')
			);

		echo createTable
		(
			array(),
			$tableHeader,
			$tableData
		);

		?>

		<p>Mobile operators had to build entirely new networks and license entirely new frequencies
          (2100MHz), especially to achieve high-end data transmission rates of up to 2mbits-1 for
          stationary or near stationary users and 384kbits-1 for mobile users.</p>

		<p>The UK Government scooped &pound;22bn from the sale of licences for 3G. Many<br />
          commentators view that the mobile operators paid too much for their licenses and left
          them without the funds to invest in their networks, leaving companies like Vodafone with
          the challenge of generating &pound;600 pounds from each subscriber just to cover their &pound;6bn 3G
          license costs.</p>

		<p>High Speed Downlink Data Access (HSDPA) is an enhancement to 3G and is part of
          UTMS standards since release 5. High downloads speeds of 14Mbits-1 are achieved
          through higher order modulation 64QAM, reduced radio frame lengths and new
          functionalities within the radio networks.</p>

		<p>HSDPA+ an evolution of HSPA was specified resulting from studies in Release 7 which
          added multiple input/ multiple output (MIMO) antenna capability and
          16QAM (Uplink)/ 64QAM (Downlink) modulation.</p>

		<p>In reality the speeds, observed by UK consumers is considerably lower. BBC News
          reported that consumers in towns in Britain were receiving between 1.7-3.6 Mbits-1 for
          their down link connections..</p>

		<p>With the advent of I-phones, tablets and other such sophisticated mobile devices and
          applications there is a requirement for ever higher bandwidth.</p>

			<ul class="subNav">
      <li><a href="<?php echo $lteFolder; ?>lte-topics.php">See LTE Topics</a></li>
      <li><a href="<?php echo $lteFolder; ?>lte-history.php">LTE History</a></li>
      <li><a href="<?php echo $lteFolder; ?>lte.php">LTE</a></li>
      <li><a href="<?php echo $lteFolder; ?>lte-advanced.php">LTE Advanced</a></li>
	  <li><a href="<?php echo $lteFolder; ?>implementation-of-lte-and-4g.php">Implementation of LTE and 4G</a></li>
      <li><a href="<?php echo $lteFolder; ?>lte-test.php">LTE Tests</a></li>
	  <li><a href="<?php echo $lteFolder; ?>lte-conclusion.php">LTE Conclusion</a></li>
    </ul>
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
