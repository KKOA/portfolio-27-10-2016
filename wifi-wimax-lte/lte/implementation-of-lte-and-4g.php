<?php
 require_once '../../includes/config.php';
 require "../../includes/figureHelperV2.php";


$title = "Implementation of LTE and 4G";
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
				<button class="navButton">
				<h2>Menu<span class="fa fa-bars"></span><span class="fa fa-times-circle"></span></h2>
				</button>
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
		<p><a href="lte-topics.php">LTE</a> > LTE Implementation of LTE and 4G</p>

		<article>
			<header>
				<h1>Implementation of LTE and 4G</h1>
			</header>
			<h2>First implementation of LTE</h2>
        <p>Nordic carrier  TeliaSonera deployed what it claims are the world&rsquo;s first two commercial LTE  networks in December 2009 in Stockholm and Oslo, offering maximum throughput  speeds of 100Mbits/s. Ericson provided Swedish network whereas the Norwegian  kit was provided by Chinese vendor Huawei. </p>
        <?php

		$stockholmCaption = 'Telecom.com article on Launch of commerical LTE in StockHolm and Oslo by TeliaSonera.';
		$stockholmCaption .= 'See link below for article.<br>';
		$stockholmCaption .='<a href="http://www.telecoms.com/16997/teliasonera-launches-commercial-lte-in-stockholm-and-oslo/" target="_blank">';
        $stockholmCaption .='http://www.telecoms.com/16997/teliasonera-launches-commercial-lte-in-stockholm-and-oslo/';
		$stockholmCaption .='</a>';

		echo addImage(array(),'Fig'.++$figCounter.' : '.$stockholmCaption,
			array
			(
				'id'=>'lte-in-stockholm',
				'src'=>'/imgs/wifi-wimax-lte/lte/lte-in-stockholm.jpg',
				'alt'=>'Screen shot of Telecom.com article on Launch of commerical LTE in StockHolm and Oslo by TeliaSonera'
			)
		);
		?>

		<!--<figure>
				<?php
		  addImage2("/imgs/wifi-wimax-lte/lte/lte-in-stockholm.jpg",
		  "lte-in-stockholm",
		  "Screen shot of Telecom.com article on Launch of commerical LTE in StockHolm and Oslo by TeliaSonera","");
		  ?>
				<figcaption>Fig <?php //echo ++$figCounter ?> : Telecom.com article on Launch of commerical LTE in StockHolm and Oslo by TeliaSonera. See link below for article.
        <a href="http://www.telecoms.com/16997/teliasonera-launches-commercial-lte-in-stockholm-and-oslo/">http://www.telecoms.com/16997/teliasonera-launches-commercial-lte-in-stockholm-and-oslo/</a>  </figcaption>
			</figure>-->

        <h2>Strategies for implementing LTE</h2>
        <p>It is envisaged that  carriers will adopt several strategies for implementing LTE. Some will  implement data over LTE while using the older 3G and 2G networks for  voice.&nbsp; Nearly all of them will have a  fall back strategy of fall back HSDPA and EDGE for areas where no LTE coverage.</p>
        <h1>Comparison of LTE with other technologies</h1>

        <p>In the 3G and HSDPA world  service providers always prefer the customer to connect to their WI-FI hotspots  in preference to their 3G and HSDPA networks.
          This gives an indication of the  relative costs and performance of proving these services.
          It is unlikely that the cost model will  change even with the introduction of LTE.
          Wide area license radio spectrum is  likely always to be at a premium.</p>
        <p>Probably more interesting, is to compare LTE with WiMAX.  The initial release of WiMAX was not mobile but with the release of IEEE  802.16e, WiMAX gained mobile capabilities. A comparison of the technologies and  the business model is given in section 9.2.</p>
        <h2>Sale of 4G licenses in the UK</h2>
        <p>On 22nd March 2011, Ofcom the telecoms regulator launched a consultation on how best to sell off the rights to the next generation of mobile wireless networks. </p>
        <p>There are two blocks of frequency to be  sold off.&nbsp; One block in 2.6 GHz band and  the other in the lower frequency of 800MHz band a spin off from the migration  from analogue to digital TV.</p>
        <p> The bandwidth being sold off is 80% more than what  was sold in 3G auction in 2000.</p>
        <p>It is unlikely that that the Government  will raise the &pound;22 billion it raised through the sale of 3 G licenses.
        The  German auction of 4G licences last year raised 4.3Bn Euros as against the 50bn  Euros it raised from the sale of 3G licenses in 2000.
        </p>
        <p> Most telecoms analyst believe that  mobile providers over paid for 3G licences in 2000. </p>
		<?php
		echo addImage(array(),
		'Fig '.++$figCounter.' : Screen shot of BBC article on OFcom Launching next-generation 4G consultation<br/>
					<a href="http://www.bbc.co.uk/news/business-12811122" target="_blank" >http://www.bbc.co.uk/news/business-12811122</a> ',
			array
			(
				'id'=>'next-generation-4g',
				'src'=>'/imgs/wifi-wimax-lte/lte/next-generation-4g.jpg',
				'alt'=>'Screen shot of BBC article on OFcom Launching next-generation 4G consultation'
			)
		);
		?>




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
