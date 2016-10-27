<?php

require_once '../../includes/config.php';
require_once '../../includes/helper.php';
require_once '../../includes/figureHelperV2.php';

function human_filesize($bytes, $decimals = 2)
{
  $sz = 'BKMGTP';
  $factor = floor((strlen($bytes) - 1) / 3);
  return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . @$sz[$factor];
}




$title = "Reports";
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

<!--<link rel="stylesheet" href="../styles/Comparison2.css" type="text/css" media="screen" />-->

<link rel="stylesheet"	type="text/css"	href="/styles/dev/css/templateV7.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<?php //See http://fortawesome.github.io/Font-Awesome/icons/ more details on css icons ?>
<style type="text/css">
#intro
{
	width:320px;
	height:270px;
	background:#666;
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
	<h1>Wi-Fi,WiMAX &amp; LTE Learning Aid : Summary</h1>
	<?php /*** Optional header - only applicable when more than one article one page */ ?>
</header>
<p>
	<a href="summary-topics.php">
		Summary
	</a>
	> Reports</p>
<article>
<header>
	<h1>Reports</h1>
</header>
<h2>Abstract</h2>
<p>This project is centred on the  development of a web-based, e-learning tool to assist students in studying  WiFi, WiMAX and LTE. It provides a "blended learning" experience which embraces  a number of multimedia modes such as text, video and audio. The learning aid  teaches</p>
<ul>
	<li> Basic  Digital Communication Theory to ensure that a rudimentary understanding of the  terminology has been acquired. </li>
	<li> Wi-Fi,  WiMAX and Long-term Evolution (LTE)&nbsp;&nbsp;
	</li>
</ul>
<p>As a basis for the development of  the content, material from the Advanced Networks Systems course on myBU  provided the starting point. Further extensive research was then carried out to  enlarge and extend the coverage of Wi-Fi, WiMAX and LTE.</p>
<p> For information about the project, click links below:</p>

	<?php //Need fix links to reports
	 $counter = 1;



	 function reportLinks($src)
	 {
		//Link name is the file name with space instead of dashes and fi

		// split src url last part contains file name
	 	$parts = explode('/',$src);
		$fileName = $parts[count($parts)-1];
		$linkName = ucwords(str_replace('-',' ',$fileName));
		global $counter; // use global variable rather local
		$html= $counter.') <a href="'.$src.'.pdf">';
		$html.=addImage2(
			array(
					'class'=>'pdf-icon',
					'src'=>'/imgs/pdf.png',
					'alt'=>'Adobe Icon')
			);

		$html.=$linkName;
		$size =human_filesize(filesize($src.'.pdf'));

		$html.='</a> ('.$size.'B)';

		$counter++;
		return $html;
	 }
	$reportsDir ='../../downloads/reports/';

	 //echo $counter;
	 ?>

	<p><?php echo reportLinks($reportsDir.'project-brief');?></p>

	 <p><?php echo reportLinks($reportsDir.'/methodology');?></p>

	 <p><?php echo reportLinks($reportsDir.'/multimedia-in-he');?></p>

	 <p><?php echo reportLinks($reportsDir.'/pricinples-of-digital-communications');?></p>

	 <p><?php echo reportLinks($reportsDir.'/wifi');?></p>

	 <p><?php echo reportLinks($reportsDir.'/wimax');?></p>

	 <p><?php echo reportLinks($reportsDir.'/lte');?></p>

	 <p><?php echo reportLinks($reportsDir.'/conclusion-and-comparison');?></p>

	 <p><?php echo reportLinks($reportsDir.'/full-report');?></p>

	<p id="subTopicNav"><a href="wifi-vs-wimax-vs-lte.php">Wi-Fi vs WiMAX vs LTE</a> <a class ="current">Reports</a></p>
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
