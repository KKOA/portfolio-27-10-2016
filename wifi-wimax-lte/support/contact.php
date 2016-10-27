<?php
require_once '../../includes/config.php';
require_once "../../includes/formHelper.php";
require_once "../../includes/figureHelperV2.php";
require_once "process.php";


/**/

$yourEmail = "ka33145@googlemail.com"; // the email address you wish to receive these mails through
$yourWebsite = "DWEVELOPS";// the name of your website
$thanksPage = '../thank-you.php';// URL to 'thanks for sending mail' page; leave empty to keep message on the same page
$maxPoints = 4; // max points a person can hit before it refuses to submit - recommend 4

$requiredFields = "name,email,subject,message";// names of the fields you'd like to be required as a minimum, separate each field with a comma

// DO NOT EDIT BELOW HERE
$error_msg = array();
$result = null;

$requiredFields = explode(",", $requiredFields);

if ($_SERVER['REQUEST_METHOD'] == "POST")
{
	if (isBot() !== false)
	{$error_msg[] = "No bots please! UA reported as: ".$_SERVER['HTTP_USER_AGENT'];}
	// lets check a few things - not enough to trigger an error on their own, but worth assigning a spam score..
	// score quickly adds up therefore allowing genuine users with 'accidental' score through but cutting out real spam :)

	$points = (int)0;
	$myName = $_POST['name'];
	$mySubject = $_POST['subject'];
	$myEmail = $_POST['email'];
	$myMessage = $_POST['message'];

	$badwords = array("adult", "beastial", "bestial", "blowjob", "clit", "cum", "cunilingus", "cunillingus", "cunnilingus", "cunt", "ejaculate", "fag", "felatio", "fellatio", "fuck", "fuk", "fuks", "gangbang", "gangbanged", "gangbangs", "hotsex", "hardcode", "jism", "jiz", "orgasim", "orgasims", "orgasm", "orgasms", "phonesex", "phuk", "phuq", "pussies", "pussy", "spunk", "xxx", "viagra", "phentermine", "tramadol", "adipex", "advai", "alprazolam", "ambien", "ambian", "amoxicillin", "antivert", "blackjack", "backgammon", "texas", "holdem", "poker", "carisoprodol", "ciara", "ciprofloxacin", "debt", "dating", "porn", "link=", "voyeur", "content-type", "bcc:", "cc:", "document.cookie", "onclick", "onload", "javascript");

	foreach ($badwords as $word)
	{
		// stripos not support version php4 i - make function case insentive
		if (strpos(strtolower($myMessage), $word) !== false || 	strpos(strtolower($myName), $word) !== false	|| strpos(strtolower($mySubject), $word) !== false)
		{$points += 2;}
	}

	if (strpos($myMessage, "http://") !== false || strpos($myMessage, "www.") !== false)
	{$points += 2;}

	/*if (isset($_POST['nojs']))
	{$points += 1;}*/

	if (preg_match("/(<.*>)/i", $myMessage))
	{$points += 2;}

	if (strlen($myName) < 3)
	{$points += 1;}

	if (strlen($myMessage) < 15 || strlen($myMessage > 1500))
	{$points += 2;}

	if (strlen($mySubject) < 3 )
	{$points += 1;}

	if (preg_match("/[bcdfghjklmnpqrstvwxyz]{7,}/i", $myMessage))
	{$points += 1;}
	// end score assignments

	// Check if all fields are filled in.
	foreach($requiredFields as $field)
	{
		trim($_POST[$field]);

		if (!isset($_POST[$field]) || empty($_POST[$field]) && array_pop($error_msg) != "Please fill in all the required fields and submit again.\r\n")
		{$error_msg[] = "Please fill in all the required fields and submit again.";}
	}

	$namePattern = "/^[a-zA-Z-'\s]*$/";
	if (!empty($myName) && !preg_match($namePattern, stripslashes($myName)))
	{$error_msg[] = "The name field must not contain special characters.\r\n";}

	$emailPattern = '/^([a-z0-9])(([-a-z0-9._])*([a-z0-9]))*\@([a-z0-9])(([a-z0-9-])*([a-z0-9]))+' . '(\.([a-z0-9])([-a-z0-9_-])?([a-z0-9])+)+$/i';

	if (!empty($myEmail) && !preg_match($emailPattern, strtolower($myEmail)))
	{$error_msg[] = "That is not a valid e-mail address.\r\n";}


	if ($error_msg == NULL && $points <= $maxPoints)
	{
		$subject = "Automatic Form Email : {$mySubject}";
		$message = "<html><body>";
		$message .= "You received this e-mail message through your website : {$yourWebsite} \n\n";

		$message .= "<h1>Subject : ".clean($subject)."</h1> \r\n ";
		$message .= "<h2> MESSAGE</h2> \r\n Dear Keith, ";
		$message .= "<p>".clean($myMessage) . "</p> \r\n";
		$message .= "Yours Sincerely \r\n <p>".clean($myName)."</p> \r\n";
		$message .= "Email : ".clean($myEmail)." \r\n";
		$message .= "<h3 style='font-weight:bold'> NOTE </h3> \r\n ";
		$message .= "<span style='font-weight:bold'>WHEN REPLYING TO THIS EMAIL, USE THE EMAIL ADDRESS IN MESSAGE. DO NOT USE THE EMAIL ADDRESS IN THE HEADER.</span>";
		$message .="</body></html>";



		if (strstr($_SERVER['SERVER_SOFTWARE'], "Win"))
		{$headers   = "From: $yourEmail\r\n";}
		else
		{$headers   = "From: $yourWebsite <$yourEmail> \r\n";}

		$headers  .= "Reply-To: {$myEmail}\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		if (mail($yourEmail,$subject,$message,$headers))
		{
			if (!empty($thanksPage))
			{
				header("Location: $thanksPage");
				exit;
			}
			else
			{
				$result = 'Your mail was successfully sent.';
				$disable = true;
			}
		}
		else
		{$error_msg[] = 'Your mail could not be sent this time. ['.$points.']';}
	}
	else
	{
		if (empty($error_msg))
		{$error_msg[] = 'Your mail looks too much like spam, and could not be sent this time. ['.$points.']';}
	}

}
/**/



$title = "Contact";
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
	<link rel="stylesheet"	type="text/css"	href="/styles/dev/css/contactV2.css">




	<?php /*
	 ********************** Scripts ***********************************
	 */ ?>
	<script type="text/javascript" src="/scripts/vendors/jquery-1.11.1.js"></script>
	<script type="text/javascript" src="/scripts/vendors/matching_columns.js"></script>
	<?php //JQuery Library ?>



	<script type ="text/javascript">
		var currentUrl = <?php echo json_encode($_SERVER['REQUEST_URI']); ?>;
		$(document).ready(function()
		{
			$(".navButton").click(function()
			{
				$(".navButton,ul#topLevel").toggleClass("open");
			});


			$('img').each(function() // set the corresponding figcaption to an image to the same width.
			{
					imgWidth = $(this).width;
					$(this).next("figcaption").width(imgWidth);
			});

			/*$( "#submit-button" ).click(function( event )
			{
  				event.preventDefault();
			});*/

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
      <h1>Wi-Fi,WiMAX &amp; LTE Learning Aid : Support</h1> <?php /*** Optional header - only applicable when more than one article one page */ ?>
    </header>
	<?php // sort out breadcrumb below ?>
    <p><a href="support-topics.php">Support</a> > <a>Contact</a></p>


    <article>
        <header>
        	<h1>Contact</h1>
        </header>
    <h2> Contact Instructions</h2>
	<p>Get In Touch! Click on the email link  or fill out contact form below to get in touch with us! Please provide as much information as possible for us to help you with your enquiry :)</p>


   <?php
	if (!empty($error_msg))
	{
		//echo '<p id="errors" class="error"><!--<img src="/imgs/error.png" style="width:25px; height:25px;" >-->ERROR: '. implode("<br />", $error_msg) . "</p>";

		/*echo " <div id='errors'>";
		echo "<header style='text-align:center; font-weight:bold; text-transform:uppercase;'>Error</header>";

		echo "<ul style='margin-left:0px; padding-left:20px;'>";
		foreach ($error_msg as $error)
		{
			echo "<li >".$error."</li>";
		}
		echo "</ul></div>";*/


		echo "<ul id='errors'>";
		echo "<li id='info'>Error</li>";
		foreach ($error_msg as $error)
		{
			echo "<li>".$error."</li>";
		}
		echo "</ul>";

	}
	if ($result != NULL)
	{
		echo '<p class="success">'. $result . "</p>";
	}
	?>



   <div id="contact-info"  class="column" >
	<header class="clearfix">
		<h2>Contact Information</h2>
	</header>

	<table>
		<tbody>
		<tr>
			<td><span class="fa fa-user"></span> Name : </td>
			<td>Keith Amoah</td>
		</tr>
		<tr>
			<td><span class="fa fa-envelope"></span> E-mail : </td>
			<td>

			<a class =" no-js e-l"
		href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#107;&#97;&#51;&#51;&#49;&#52;&#53;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;"
		title="mail me" data-ep1="ka33145" data-ep2="gmail" data-ep3="com">&#107;&#97;&#51;&#51;&#49;&#52;&#53;&#64;&#103;&#109;&#97;&#105;&#108;&#46;&#99;&#111;&#109;
		</a>

			</td>
		</tr>
		<tr>
			<td><span class="fa fa-globe"></span> Website : </td>
			<td><a href="#">www.keith-amoah.webspace.virginmedia.com</a></td>
		</tr>
		</tbody>
	</table>

	<?php
		$keith= array(
		"src"=>"/imgs/wifi-wimax-lte/support/Me_4.png",
		"id"=>"keith-amoah",
		"alt"=>"Picture of Keith Amoah"
		);

	?>

	<figure class="right" style="margin:10px;">
		<?php echo addImage2($keith); ?>
		<figcaption> Keith Amoah </figcaption>
	</figure>

	<h2>About</h2>
	<p> My name is Keith Amoah and I like to think of myself as a programmer/developer.</p><p>I am graduate from Bournemouth University (2011) with a BSc (Hons) Multimedia Communication Systems degree.</p>
	<p>When I am not playing sports, playing video games and socilizing, I spend  mytime messing around with technology and coding ... <a href="#">read more</a>.</p>

	  <div class="social" style="border-top:dotted 1px #000; text-align:center;">
		  <h3>Keith @ social media</h3>
		  <a href="#" title="contact me on facebook"><span class="fa fa-facebook fa-3x" ></span></a>
		  <a href="#" title="contact me on linkin"><span class="fa fa-linkedin fa-3x"></span></a>
		  <a href="#" title="contact me on skype"><span class="fa fa-skype fa-3x"></span></a>
		  <a href="#" title="contact me on codepen"><span class="fa fa-codepen fa-3x"></span></a>
	  </div>
	<div class="clearthis"></div>
</div>


   <div id="contact-form" class="clearfix column" >
		<header>
		<h2>Contact Form</h2>
	</header>

		<?php
			$recipient = array(
				"enquiry"=>"ka33145@googlemail.com",
				"sales" => "ka33145@googlemail.com",
				"support" => "ka33145@googlemail.com"
				);
		?>
		<form action="<?php echo basename(__FILE__); ?>" method="post">
		<!--<form method="post" action="process.php">-->

		<!--<noscript>
			<p><input type="hidden" name="nojs" id="nojs" /></p>
		</noscript>-->

		<?php echo createLabel('name','Name: <span class="required">*</span>'); ?>

		<input type="text" id="name" name="name" value="<?php get_data("name"); ?>" placeholder="John Doe" required="required" autofocus="autofocus" />

		<?php echo createLabel('email','Email Address: <span class="required">*</span>'); ?>
		<input type="email" id="email" name="email" value="<?php get_data("email"); ?>" placeholder="johndoe@example.com" required="required" />

		<?php echo createLabel('subject','Subject :<span class="required">*</span>'); ?>
		<input type="text" id="subject" name="subject" value="<?php get_data("subject"); ?>"  placeholder="What the subject title?" />

		<?php echo createLabel('message','Message: <span class="required">*</span>'); ?>
		<textarea id="message" name="message" placeholder="Your message must be greater than 20 charcters" required="required" data-minlength="20"><?php get_data("message"); ?></textarea>
		<span id="loading"></span>
		<input type="submit" value="Submit" id="submit-button" />
		<p id="req-field-desc"><span class="required">*</span> indicates a required field</p>
	</form>



	</div>
   <div class="note folded-rightbottom shadow">
		<header>Note</header>
		<div class="noteBody">
			<p>Check the Frequently Asked Questions
			( <a href = "/wifi-wimax-lte/support/faqs.php" title ="View Frequently Asked Questions">FAQs</a> ) section of website before contact me as you may find the answer there.</p>
			<p>Please make sure type in the your email address correctly
			otherwise I will not be able to get back to you.</p>

		</div>
	</div>

   <p id="subTopicNav">
				<a href="contact.php" class="current" >Contact</a>
				<a href="faqs.php">FAQS</a>
				<a href="abbreviations" >Abbreviations</a>
			</p>
    <footer>
    <?php // Auhtor and date of work

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

  <footer id="pageFooter">
  <ul id="pageFooterNav">
      <li><a href="/wifi-wimax-lte/">Home<span class="fa fa-home"></span></a></li>
      <li><a href="/wifi-wimax-lte/support/contact.php">Contact<span class="fa fa-envelope"></span></a></li>
  </ul>

  <div id="copyright">&#169;XXXX - YYYY Kwamina &#38; Co </div>
  </footer>


</div>
</body>
</html>
