<?php
require_once '../../includes/config.php';
require_once '../../includes/figureHelperV2.php';

/** Page need to seperate to much content for mobile device. **/


$title = " Wi-Fi Modulation ..";
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

.mimo
{
	width:550px;
	height:500px;
	background-color:transparent;
}

table #selected
{
  border:red 3px solid;
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
	<h1>Wi-Fi,WiMAX &amp; LTE Learning Aid : Wi-Fi</h1>
	<?php /*** Optional header - only applicable when more than one article one page */ ?>
</header>
<p><a href="wifi-topics.php">Wi-Fi</a> > Modulation & Performance</p>

<article>
<header>
	<h1>Wi-Fi Continued</h1>
</header>

	<h2>Modulation and Performance</h2>
	<p>Performance of Wi-Fi depends on
    </p>
    <ul>
      <li> Whether the equipment is 802.11a, 802.11b, 802.11g, 802.11n</li>
      <li> Signal strength and Quality
        <ul>
          <li>Distance Wireless Access Point</li>
          <li> 2.4 or 5GHz ( 5 GHz less interference but higher attenuation)</li>
        </ul>
      </li>
      <li> MIMO ( spatial Multiplexing)
        <ul>
          <li>1x1, 2x2, 4x4</li>
        </ul>
      </li>
    </ul>

    <h3>Adapative Modulation</h3>
    <p>Wi-Fi uses adaptive modulation dynamically adjusting the modulation type of a<br />
      communication channel based on specific criteria (e.g. signal quality &ndash; signal strength,<br />
      interference and noise), dropping down from 64QAM near the wireless access point<br />
      down to BPSK at the edge of the access points range.</p>


	<h3>Multiple Input Multiple Output(MIMO)</h3>
    <p>802.11n can use MIMO to either increase the throughput through
      spatial multiplexing or to improve the signal to noise ration.</p>

	<?php /* Need to make changes to video


	802.11n can use MIMO. The video below illustrate the benefits of MIMO.

	Video Script
	Without mimo you are limit to Without MIMO you can only send and recieve one signal stream at a time.

	MIMO can use to increase the throughput through multiplesxing. Allow you send recieve multiple signal streams at a time.

	In noise environemnts the same information can be sent down both streams. This improves the signal quality recieved by the channel decoder.

	*/
	?>


	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000"  class="mimo">
        <param name="movie" value="/video/wifi-wimax-lte/wifi/mimo.swf" />
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
        <object type="application/x-shockwave-flash" data="/video/wifi-wimax-lte/wifi/mimo.swf" class="mimo">
          <param name="movie" value="/video/wifi-wimax-lte/wifi/mimo.swf" />
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

	<p>From the example in Fig 6 and table 2, it can be seen that the laptop is communicating
      with the Wireless Access Point using 64-QAM, coding rate 5/6, with 1 spatial stream and
      20 MHz Channel. </p>

	<?php //Need change id and alt

	echo addImage
	(
		array(),
		'Fig 6: Shows connection to WAP Amoah at 72Mbits',
		array
		(
			'id'=>'laptopLinkSpeed',
			'src'=>'/imgs/wifi-wimax-lte/wifi/x.png',
			'alt'=>'Windows Task manager on Laptop showing my current link speed on a Network '
		)
	);



	$tableData = array
	(
		array('00','BSPK','1/2','1','6.50','7.20','13.50','15.00'),
		array('01','QPSK','1/2','1','13.00','14.40','27.00','30.00'),
		array('02','16-QAM','3/4','1','19.50','21.70','40.50','45.00'),
		array('03','16-QAM','1/2','1','26.00','28.90','54.00','60.00'),
		array('04','64-QAM','3/4','1','39.00','43.30','81.00','90.00'),
		array('05','64-QAM','2/3','1','52.00','57.80','108.00','120.00'),
		array('06','64-QAM','3/4','1','58.50','65.00','121.50','135.00'),
		array('07','64-QAM','5/6','1','65.00','72.00','135.00','150.00'),
		array('08','BSPK','1/2','2','13.00','14.40','27.00','30.00'),
		array('09','QSPK','1/2','2','56.00','28.90','54.00','60.00'),
		array('10','QPSK','3/4','2','39.00','43.30','81.00','90.00'),
		array('11','16-QAM','1/2','2','52.00','57.80','108.00','120.00'),
		array('12','16-QAM','3/4','2','78.00','86.70','162.00','180.00'),
		array('13','64-QAM','2/3','2','104.00','115.60','216.00','240.00'),
		array('14','64-QAM','3/4','2','117.00','130.00','243.00','270.00'),
		array('15','64-QAM','5/6','2','130.00','144.00','270.00','300.00'),
		array('16','BSPK','1/2','3','19.50','21.70','40.50','45.00'),
		array('...','...','...','...','...','...','...','...'),
		array('31','64-QAM','5/6','4','260.00','288.90','540.00','600.00')
	);

	$tablerows = sizeof($tableData);

	  ?>

	 <table style="display:inline-block; vertical-align:top;">
	 	<caption>Table 2 Modulation schemes Source 802.11n Wireless LAN standard.</caption>
		<thead>
			<tr>
            <th rowspan='2'>MCS <br/>Index</th>
            <th rowspan='2'>Type</th>
            <th rowspan='2'>Coding <br/>Rate</th>
            <th rowspan='2'>Spatial <br/> Streams</th>
            <th colspan='2'>Date Rate &#40;Mbps&#41; <br/>with 20 MHZ CH</th>
            <th colspan='2'>Date Rate &#40;Mbps&#41; <br/> with 40 MHZ CH</th>
          </tr>
          <tr>
            <th> 800 ns</th>
            <th> 400 ns <br/> &#40;SGI&#41;</th>
            <th> 800 ns</th>
            <th> 400 ns <br/> &#40;SGI&#41;</th>
          </tr>
		</thead>
		<tbody>
		<?php
		for($tablerow = 0; $tablerow< $tablerows; $tablerow++)
		{
			 $rowStyle = "oddRow";
			if(($tablerow% 2)==0)
			{
				 $rowStyle = "evenRow";
			}
			echo "<tr class='".$rowStyle."'>";
			$tablecols = sizeof($tableData[$tablerow]);
			for($tablecol = 0; $tablecol < $tablecols; $tablecol++)
			{
				if(($tablecol ==5) && ($tablerow ==7))
				{
					echo "<td id='selected'>";
				}
				else
				{
					echo"<td>";
				}

				echo $tableData[$tablerow][$tablecol];
				echo"</td>";
			}
			echo'</tr>';
		}

		?>
		</tbody>
	 </table>

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
