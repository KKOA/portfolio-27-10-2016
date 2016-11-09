<?php

require_once '../../includes/config.php';

$title = "Quiz";
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
<link rel="stylesheet"	type="text/css"	href="../../styles/vendors/normalize.css">
<?php //css reset ?>
<link rel="stylesheet"	type="text/css"	href="../../styles/dev/css/templateV7.css">
<style type="text/css">
#quiz,#quizIE {
	width:810px;
	height:610px;
	background-color:transparent;
}
</style>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<?php //See http://fortawesome.github.io/Font-Awesome/icons/ more details on css icons ?>
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
			<?php require_once "../../includes/nav.php"; ?>
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
			<h1>Wi-Fi,WiMAX &amp; LTE Learning Aid : Quiz</h1>
			<?php /*** Optional header - only applicable when more than one article one page */ ?>
		</header>
		<!--<p><a>Breadcrumbs</a></p>-->

		<article>
			<header>
				<h1>Quiz</h1>
			</header>
			<?php 	//Need to create an  equivalent version of the flash quiz ?>
			<ul>

				<li>
					<a href="<?=$quizFolder;?>quiz_flash.php">
						Quiz (Flash Version)
					</a>
				</li>
				<li>
					<a href="<?=$quizFolder;?>quiz_alt.php">
						Quiz (Non Flash Version)
					</a>
				</li>




			</ul>
			<footer>
				<?php /* Author and date of work */	?>
				<p>Created by <a title="" class="author" href="#">Keith Amoah</a>, May 2011</p>
			</footer>
		</article>
		<div id="bottom"><a title="Navigate to top of the current page" href="#Top"><span class="fa fa-arrow-circle-up"></span>To the Top <span class="fa fa-arrow-circle-up"></span></a></div>
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
