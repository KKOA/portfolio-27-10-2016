<?php
require_once '../../includes/config.php';
require_once '../../includes/figureHelperV2.php';
require_once '../../includes/tableHelper.php';


$title = " WiMAX";
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

#ggh
{
	width:500px;
	height:380px;
}

#fbwa-systmes-reference-diagram
{
	width:525px;
	height:300px;
}

#distance-vs-modulation-used
{
	width:400px;
	height:375px;
}

#fec-modulation-used-distance
{
	width:537px;
	height:200px;
}

table#qos
{
	width:500px;
	font-size:12px;
}

table#qos ul
{
	margin:0;
	padding:0;
	list-style-position: inside;
}

#qos thead
{
	text-align:center;
	color:#FC0;
	background:#666;
	font-weight:bold;
}

table#qos th, table#qos td
{
	border:solid 2px #000;
	padding:5px;
}

#qos tbody { background:#CCC; }

#qos thead tr > th:nth-child(1), #qos tbody tr > td:nth-child(1) { width:120px; }

#qos thead tr > th:nth-child(2), #qos tbody tr > td:nth-child(2) { width:100px; }

#wimax-in-the-uk
{
	width:556px;
	height:359px;
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
		<h1>Wi-Fi,WiMAX &amp; LTE Learning Aid : WiMAX</h1>
		<?php /*** Optional header - only applicable when more than one article one page */ ?>
	</header>
	<p>
		<a href="wimax-topics.php">
			WiMAX
		</a>
		> WiMAX</p>
	<article>
		<header>
			<h1>WiMAX</h1>
		</header>
		<h2> Background </h2>
		<?php // Need change name of file and id , add alt

		echo addImage
		(
			array
			(
				'class'=>'right'
			),
			'Fig 1: Show how WiMAX can be used to connnect to various device to the internet.
			<br>[Source: Advanced Network Module, www.bournemouth.ac.uk]'
			,
			array
			(
				'id'=>'ggh',
				'src'=>'/imgs/wifi-wimax-lte/wimax/wimax-1.jpg',
				'alt'=>''
			)
		); ?>
		<p>Worldwide Interoperability for  Microwave Access (WiMAX) is a wireless communication system that allows  computers to remotely connect to high-speed data networks like the Internet.</p>
		<p>The IEEE 802.16 standard defines the  standards for Broadband Wireless Metropolitan Area Networks.</p>
		<p>WiMAX is the commercial name for this  class of systems.&nbsp; The WiMAX Forum is an  industry-led, not-for-profit organization formed to certify and promote the  compatibility and interoperability of broadband wireless products based upon  the harmonized IEEE 802.16/ETSI HiperMAN standard [602]. </p>
		<p>WiMAX systems are composed of  subscriber stations, base stations, interconnecting switches, and databases.
			WiMAX provides an alternative solution to ADSL for the &ldquo;Final Mile&rdquo; broadband  Access.</p>
		<h2>History</h2>
		<h3> Fixed Acess </h3>
		<p>The IEEE 802.16  Group was formed in 1998. Its original focus was on Line Of Sight (LOS).
			The  Original IEEE 802.16 standard was completed in 2001.
			An amendment to the standard produced IEEE  802.16a to include Non-Line of Sight (NLOS)<br />
			A revised  standard, IEEE 802.16-2004 was produced for fixed subscribers.</p>
		<h3> Introduction of Mobility </h3>
		<p>Subsequently in 2005, the IEEE 802.16e standard  was produced to support mobile subscribers</p>



		<?php
			$Code = array("BS","RS","SS","TE");
			$Full_Name = array("Base Station","Relay Station","Subscriber Station","Terminal Equipment <br/>( i.e. PC, Phone etc)");
		?>
		<h3>Fixed Broadband Wireless Access(FBWA)</h3>
		<?php
		echo addImage
		(
			array(),
			'Fig 2:Reference diagram for FBWA systems'
			,
			array
			(
				'id'=>'fbwa-systmes-reference-diagram',
				'src'=>'/imgs/wifi-wimax-lte/wimax/fbwa-systems-reference-diagram.jpg',
				'alt'=>'FBWA Systmes Reference diagram'
			)
		); ?>

		<?php echo createTable
		(
			array('style'=>'display:inline-block'),
			array('Code','Full Name'),
			array
			(
				array('BS','Base Station'),
				array('RS','Relay Station'),
				array('SS','Subscriber Station'),
				array('TE','Terminal Equipment <br/>( i.e. PC, Phone etc)')
			)
		);

		?>
		<h2> Spectrum</h2>
		<p>WiMAX can operate in the radio  spectrum from 2GHz to 66GHz.</p>
		<p>Though WiMAX can operate in the  unlicensed spectrum, nearly all providers prefer to provide service in the  licensed spectrum. The unlicensed spectrum can be unpredictable in terms of  noise and interference and normally regulators insist that transmitters in this  spectrum are very low power.&nbsp;
		</p>
		<p>In the UK, Ofcom is the  independent regulator and competition authority for the UK communications  industries. Amongst its brief is the allocation/sale of radio spectrum. For  example, Urban WiMAX which provides coverage in central London has 112MHz  licence at 28.1925 and 29.2005MHz .</p>
		<p>In America it is the Federal  Communicate Commissions (FCC) that is responsible for allocating Spectrum.</p>
		<h2> Performance Characteristics</h2>
		<?php
		echo addImage
		(
			array(),
			'fig 3 & 4 : Illustrates how WiMAX adjust parmeter in order provide coverage<br/>[Source : "Wireless Broadband Spectrum Recommendation," A. N. Muragappan, June 2006] ',
			array
			(
				array('id'=>'distance-vs-modulation-used','src'=>'/imgs/wifi-wimax-lte/wimax/wimax-range.png','alt'=>''),
				array('id'=>'fec-modulation-used-distance','src'=>'/imgs/wifi-wimax-lte/wimax/wimax-modulation.png','alt'=>'')
			)
		);
		?>
		<p>Performance of WiMAX depends on the  bandwidth allocated. For a typical 20MHz bandwidth, peak speeds of up to  75mbits-1 can be achieved.</p>
		<h2>Modultion in WiMAX</h2>
		<h3>OFDMA</h3>
		<p>WiMAX uses Scalable Orthogonal  Frequency Division Multiple Access (SOFDMA) for both the down and uplinks.  WiMAX supports Frequency Division Duplex (FDD), Time Division Duplex (TDD) as  well as adaptive Time Division Duplex. This means channel bandwidth can be  divided in both the frequency and time domain and also between down links and  uplinks.</p>
		<h3>Adapaptive Modulation</h3>
		<p>On each of its sub-carriers, WiMAX  uses adaptive modulation dynamically adjusting the modulation type of a  communication channel based on specific criteria (e.g. signal quality &ndash; signal  strength, interference and noise), dropping down from 256QAM &nbsp;near &nbsp;the base station down through BPSK at the edge  of the cell.</p>
		<h2> Sectoring,beam forming Diversity MIMO</h2>
		<h3>Sectoring</h3>
		<p>WiMAX can re-use frequency within a  cell by dividing the cell into sectors and positioning the base stations  aerials in positions such that they form beams in particular directions. The  frequency can be re-used between the individual beams. <br/>
		</p>
		<h3>Beam Forming</h3>
		<?php
		echo addImage
		(
			array(),
			' Fig 5: Demonstrating how Sectoring, Beam forming, Divesity Tranmission and MIMO can be used.',
			array
			(
				array('id'=>'beam-forming','src'=>'/imgs/wifi-wimax-lte/wimax/beam-forming.png','alt'=>'Illustrating WiMAX Beam Forming')
			)
		);
		?>
		<p>WiMAX can be built with Adaptive Antenna  System (AAS).&nbsp; This is a form of  sectoring where the beams follow the subscribers within a cell. Again, the  frequencies can be re-used.</p>
		<h3>Diversity Transmissions</h3>
		<p>WiMAX uses diversity transmission  (frequency, temporal and spatial) to improve the signal to noise ratio and  extend the range of the base station. The subscriber station can combine the  streams of information to build error free frames.</p>
		<h3>MIMO</h3>
		<p>WiMAX can use Multiple Input Multiple  Output to either increase the throughput through spatial multiplexing or to  improve signal to noise ration as stated above.&nbsp;
		</p>
		<h2> Network Topology</h2>
		<p>WiMAX networks can be point to point  (this is normally used for backhaul network), Point to multipoint (i.e. Base  Station to many Subscriber Stations) and mesh.</p>
		<p>Mesh is where subscriber stations can  be connected to multiple Base Stations and multiple base stations are connected  to each other. This allows for redundancy, potentially better load balancing  allowing packets to travel through many alternative routes.</p>
		<br/>
		<h2>Quality of Service (QoS)</h2>
		<figure class="left" style ="margin-right:20px;">
		<?php echo createTable
		(
			array('id'=>'qos'),
			array('Qos Catergory','Applications','Qos Specifications'),
			array
			(
				array
				(
					'Unsolicited Grant Services (UGS)',
					'VoIP',
					'<ul><li>Maximum Sustained Rate</li><li>Latency Tolerance</li><li>Jitter Tolerance</li><li>Grant Interval</li></ul>'
				),
				array
				(
					'real-time Polling Services (rtPS)',
					'Streaming Audio or Video',
					'<ul><li>Minimum Reservate Rate</li><li>Maximum Sustained Rate</li><li>Latency Tolerance</li><li>Traffic Priority</li></ul>'
				),
				array
				(
					'extended real-time Polling Service (ertPS)',
					'VoIP with Voice Activity Detection / Silence Suppression',
					'<ul><li>Minimum Reservate Rate</li><li>Maximum Sustained Rate</li><li>Latency Tolerance</li><li>Jitter Tolerance</li><li>Traffic Priority</li></ul>'
				),

				array
				(
					'non-real-time  Polling Services (nrtPS):',
					'File Transfer Protocol (FTP)',
					'<ul><li>Minimum Reservate Rate</li><li>Maximum Sustained Rate</li><li>Traffic Priority</li></ul>'
				),
				array
				(
					'Best  Effort Services (BES)',
					'Data Transfer, Web Browsing',
					'<ul><li>Maximum Sustained Rate</li><li>Traffic Priority</li></ul>'
				)
			),
			'WiMAX Qos Applications and specification<br/>
				[Source : IP Design for Mobile Networks "Mark Grayson, Kevin Shatzkamer Scott Wainner]'
		);

		?>
		</figure>

		<p>WiMAX supports 5 classes of QoS in  descending priority.</p>
		<ul>
			<li>Unsolicited  Grant Services (UGS)</li>
			<li>real-time  Polling Services (rtPS):</li>
			<li>extended  real-time Polling Service (ertPS)</li>
			<li>non-real-time  Polling Services (nrtPS):</li>
			<li>Best  Effort Services (BES):</li>
		</ul>
		<p>For example,  Best Effort Service whereas Voice over Internet Protocol (VoIP) uses ertPS.  (Use rtPS or UGS could be used but it would waste bandwidth as there are so  many silences in speech)</p>
		<div class="clearthis"></div>
		<h2>WiMAX Coverage in the UK</h2>
		<p>In the UK, coverage of WiMAX is limited to 5 small service  providers.</p>
		<ul>
			<li>
				<a href="http://www.fastruralbroadband.co.uk">
					Attend 2 Ltd
				</a>
				,       a WiMAX service that covers the South East of England.</li>
			<li>
				<a href="http://www.connectmk.com/">
					ConnectMK
				</a>
				,&nbsp; Milton Keynes</li>
			<li>
				<a href="http://www.barnardcastlevision.co.uk/broadband.asp">
					Digital Teesdale
				</a>
				, Teesdale area in the North of       England.</li>
			<li>
				<a href="http://www.wildcard.net.uk/">
					LiveWave
				</a>
				,       Newcastle-upon-Tyne, Tynedale, Northumberland </li>
			<li>
				<a href="http://www.urbanwimax.co.uk">
					Urban WiMAX
				</a>
				,       Central London (travelcard Zone 1 and some of Zone 2).</li>
		</ul>
		<h3>Rural UK Coverage</h3>
		<?php echo addImage
		(
			array(),
			' Fig 7: Attend 2 WiMAX Coverage ',
			array
			(
				'id'=>'wimax-in-the-uk',
				'src'=>'/imgs/wifi-wimax-lte/wimax/attend2-coverage.jpg',
				'alt'=>'WiMAX in the UK'
			)

		);
		?>
		<!--<figure>
			<img id="wimax-in-the-uk" src="/imgs/wifi-wimax-lte/wimax/attend2-coverage.jpg"  width="556" height="359" alt="WiMAX in the UK"/>
			<figcaption> Fig 7: Attend 2 WiMAX Coverage </figcaption>
		</figure>-->
		<p>Digital Teesdale is backed by Durham  County Council in conjunction with One North  East.
			The Digital Teeside web site states that the WiMAX was a cost-effective  method of providing broadband to rural locations.
			Speeds of up to 2Mbits-1  are now being offered. This contrasts with the project to cover Swindon with a  1,400 Wi-Fi-Mesh.
			This project has now been put on hold due to financial constraints.</p>
		<p>Coverage in America is considerably  more with Sprint and Clearwire leading the way.</p>
		<p>WiMAX is also quite successful in  developing countries where the roll out of fixed wire Broadband would very  capital intensive.</p>
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
