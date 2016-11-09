<?php

require_once '../../includes/config.php';

require_once  'qa.php';


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
<link rel="stylesheet"	type="text/css"	href="../../styles/dev/css/templateV7.css"

<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<?php //See http://fortawesome.github.io/Font-Awesome/icons/ more details on css icons ?>

<style type="text/css">

form
{
	/*border:solid 1px #000;*/
	/*margin:auto ;
	width:50%;*/
	min-width:300px;
	max-width: 600px;
	padding:5px;


}


.questions
{
	border:solid 1px #000;
	padding:5px;
	min-height: 250px;
	background:#fcc;
	/*-moz-box-shadow:5px 5px 7px rgba(33,33,33,1);
  	-webkit-box-shadow: 5px 5px 7px rgba(33,33,33,.7);
  	box-shadow: 5px 5px 7px rgba(33,33,33,.7);*/

}

.questions:nth-child(2n)
{
	background:#ccf;
}
.questions:nth-child(3n)
{
	background:#cfc;
}

/*input[type]:first-child
{
	margin:;
}*/

input[type=radio]
{
	margin: 10px 5px;
}


input[type=submit]
{
	margin:5px;
}

.center
{
	width:200px;
	margin:auto;
}

.shadow
{
	-moz-box-shadow:5px 5px 7px rgba(33,33,33,1);
  	-webkit-box-shadow: 5px 5px 7px rgba(33,33,33,.7);
  	box-shadow: 5px 5px 7px rgba(33,33,33,.7);
}
</style>


<?php /*
 ********************** Scripts ***********************************
 */ ?>
<script   src="/scripts/vendors/jquery-1.11.1.js"></script>
<?php //JQuery Library ?>
<script type="text/javascript">
var currentUrl = <?php echo json_encode($_SERVER['REQUEST_URI']); ?>;
$( document ).ready(function()
{
	//$('.questions').addClass( "shadow" );
});
</script>
<script type="text/javascript" src="/scripts/customV3.js"></script>
<script type="text/javascript" src="/scripts/question.js"></script>

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
			<h1>Wi-Fi,WiMAX &amp; LTE Learning Aid : Quiz Result</h1>
			<?php /*** Optional header - only applicable when more than one article one page */ ?>
		</header>
		<!--<p><a>Breadcrumbs</a></p>-->

		<article>
			<header>
				<h1>Quiz</h1>
			</header>
			<?php 	//Need to create an  equivalent version of the flash quiz ?>
			<!--[if !IE]>-->

			<h2>Instructions</h2>
			Use result button to see your results.
			<p> There are no time limits. Scores are not recorded and you may repeat the quiz as many times as you like.</p>

			<p><b>(JavaScript enable user Only)</b><br>
			Only one question will appear at any time.Use next button and previous button to navigate the quiz.</p>


			<!--<p><a href="quiz_alt.php"></a></p>-->
			<form action="quiz_alt_result.php" method="post">
				<?php
				for($qid=0;$qid < count($questions);$qid++)
				{
					echo '<div  id="question'.($qid+1).'" class="questions">';
					for($j=0;$j < count($questions[$qid]);$j++)
					{
						if($j == 0) //Question
						{
								echo "<h2 style='text-align:center;'>Question ".($qid+1)." out of $totalQuestion</h2>";

							echo '<h3>'.$questions[$qid][$j].'</h3>';
							echo"<input type='hidden' name='question".$qid."_text'  value='".$questions[$qid][$j]."'>";
						}
						elseif($j == 1)
						{

							for($aid=0;$aid < count($questions[$qid][$j]);$aid++)
							{

								echo"<input type='radio' name='question".$qid."_answer'  value='".$questions[$qid][$j][$aid]."'>";
								echo $questions[$qid][$j][$aid].'<br>';
							}
						}
					 }
					 echo'</div>';
				}?>
				<div class="questions" id="check">

					<h1>Quiz complete</h1>
					<p>
						Click submit to see your result. If want to review your answer select previous.
					</p>
					<input type='submit' name ='submit' value='RESULT' id="submit">

				</div>
			</form>
		<p><a href="quiz.php">Back to Quiz</a></p>



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
