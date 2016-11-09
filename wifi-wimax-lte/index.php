<?php
//Require Files
require_once '../includes/config.php';
require_once '../includes/jsonwrapper/jsonwrapper.php';
require_once '../includes/helper.php';



$title = "Homepage";
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
#intro
{
	background:#666;
}

#introObject
{
	width:320px;
	height:270px;
}


.videoContainer
{
	margin: 10px 0;
}

video
{
	display:inline-block;
	padding:10px;
	box-sizing:content-box;
	vertical-align:top;
}

.transcript
{
	display:inline-block;
	padding: 10px;
	border:solid 1px #000;
	height: 300px;
	overflow-y:scroll;
}

</style>
<?php /*
 ********************** Scripts ***********************************
 */ ?>
<script type="text/javascript" src="/scripts/vendors/jquery-1.11.1.js"></script>
<?php //JQuery Library ?>
<script type="text/javascript">
	var currentUrl = <?php echo json_encode($_SERVER['REQUEST_URI']); ?>;

	$(document).ready(function()
	{
		transcriptWidth = $('.videoContainer').innerWidth();
		transcriptWidth = transcriptWidth - ($('video').outerWidth());
		$('.transcript').outerWidth(transcriptWidth -40);
	});

	$( window ).resize(function()
	{
		transcriptWidth = $('.videoContainer').innerWidth();
		transcriptWidth = transcriptWidth - ($('video').outerWidth());
		$('.transcript').outerWidth(transcriptWidth -40);
	});
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
		require_once "../includes/header.php";
		 /*
****************** Main Navigation *******************
*/ ?>
		<nav>
			<div id="bar">

				<div class="navButton">
					<h2>Menu<span class="fa fa-bars"></span><span class="fa fa-times-circle"></span></h2>
				</div>
			</div>
			<?php require_once "../includes/nav.php" ?>
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
		<h1>Wi-Fi,WiMAX &amp; LTE Learning Aid : Homepage</h1>
		<?php /*** Optional header - only applicable when more than one article one page */ ?>
	</header>
	<!--<p><a>Breadcrumbs</a></p>-->

	<article>
		<header>
			<h1>Welcome</h1>
		</header>

		<section class ="videoContainer">
			<video id="intro" controls>
				<source src="../video/wifi-wimax-lte/introduction.mp4" type="video/mp4">
				<source src="../video/wifi-wimax-lte/introduction.webm" type="video/webm" >
				<source src="../video/wifi-wimax-lte/introduction.ogv" type="video/ogg" >

				<object id="introObject"type="application/x-shockwave-flash" data="http://player.longtailvideo.com/player.swf">
					<param name="movie" value="../video/wifi-wimax-lte/introduction_VideoV3.swf" />
					<param name="allowFullScreen" value="true" />
					<param name="wmode" value="transparent" />
					<param name="flashVars" value="controlbar=over&amp;
						image=http%3A%2F%2Fwww.keith-amoah.webspace.virginmedia.com%2Fimgs%2Fwifi-wimax-lte%2Fintroduction-video.png&amp;

						file=http%3A%2F%2Fwww.keith-amoah.webspace.virginmedia.com%2Fvideo%2FWIFI-WiMAX-LTE%2Fintroduction.mp4"
					/>
					<img alt="Still frame shot of introduction video" src="../imgs/wifi-wimax-lte/introduction-video.png" width="640" height="360" title="No video playback capabilities, please download the video below" />
				</object>
			</video>
			<div class="transcript">
			<h2> Introduction Video </h2>
				<p>My name is Keith  Amoah. I am a 2010/2011 final year student from DEC, the Design Engineering and  Computer School, Bournemouth University.</p>
				<p>Welcome to  my Wi-Fi, WiMAX and Long-Term Evolution e-Learning Aid.</p>
				<p>I have  broken these subjects into 5 Modules:</p>
				<ul id="topics">
					<li>
						<a href="<?php echo $digtalFolder; ?>digital-com-topics.php" title="View Principles of Digital communications">
							Principles of Digital communications
						</a>
					</li>
					<li>
						<a href="<?php echo $wifiFolder ?>wifi-topics.php" title="Wi-Fi">
							Wi-Fi
						</a>
					</li>
					<li>
						<a href ="<?php echo $wimaxFolder ?>wimax-topics.php" title="View WiMAX">
							WiMAX
						</a>
					</li>
					<li>
						<a href ="<?php echo $lteFolder; ?>lte-topics.php" title=" View LTE">
							Long-Term Evolution
						</a>
					</li>
					<li>
						<a href ="<?php echo $summaryFolder; ?>summary-topics.php" title="View Comparison">
							Conclusion and Comparison
						</a>
					</li>
				</ul>
				<p>If you are a  novice, I would recommend that you go through the subject matter in the aforementioned sequence.</p>
				<p>If you are  an expert, you may proceed to the section you are interested in.</p>
				<p>Not sure?  Why not try the
					<a href="<?php echo $quizFolder; ?>quiz.php" title="View online quiz">
						on-line quiz?
					</a>
				</p>
				<p>I have also  published the project brief and
					<a href="<?php echo $summaryFolder; ?>reports.php" title="View reports">
						reports
					</a>
					on these subjects on-line. These came  together to make up my dissertation.</p>
				<p>Finally, I  welcome feedback on the e-learning guide.&nbsp;  Share with me which features you would like to see in the next release. Please  use the
					<a href="<?php echo $wifiWimaxLte; ?>support/contact.php" title="contact us">
						contact page
					</a>
					for this.</p>
				<p>Have fun  with the e-learning tool and learn a lot!</p>

				<p><strong>View flash alternative to the above of video <!--Download video:--></strong></p>
				<p><a href="../video/WIFI-WiMAX-LTE/introduction.mp4">
					MP4 format
				</a>
				|
				<a href="../video/WIFI-WiMAX-LTE/introduction.ogv">
					Ogg format
				</a>
				|
				<a href="../video/WIFI-WiMAX-LTE/introduction.webm">
					WebM format
				</a></p>

			</div>
		</section>

		<?php
			//Add stick note styling
		?>
		<?php
    		$note  = '<p>Your browser must have the following :</p>';
			$note .='<ul><li> JavaScript enabled in the browser</li>';
			$note .='<li>Flash installed and enabled in the browser</li></ul>';
			$note .='<p>Without these feature you will be unable to interact with certain aspects of the pages.</p>';
			echo createNote($note);
		?>
		<footer>
			<?php // Author and date of work
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
  	require_once '../includes/footer.php';
  ?>

</div>

</body>
</html>
