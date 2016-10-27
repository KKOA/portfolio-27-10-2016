<?php 


/*
  ==========================================================================
 General Information
 ==========================================================================
Website Url : http://www.keith-amoah.webspace.virginmedia.com/
Description : Helper function for construct a figure with images and video
Version : 2
Author : Keith Amoah
Date : 11/03/2015

 
   
 ==========================================================================
 Table of Content
 ========================================================================== 
*/




require_once 'helper.php';

function addFigure($array)
{
	$html ='<figure ';
	$html.= loopthroughAssoicate($array);
	$html .=' >';
	return $html;
}

function addImage2($image)
{
	$html="";
	if((isset($image[0]))&&(is_array($image[0])))
	{
		$sizeOfArray = sizeof($image);
		for($counter =0; $counter < $sizeOfArray; $counter++)
		{
			$html .='<img ';		
			$html .= loopthroughAssoicate($image[$counter]);
			$html .=' />';
		}	
	}
	else
	{
		$html .='<img ';
		$html .= loopthroughAssoicate($image);
		$html .=' />';
	}
	return $html;
}


function closeFigure($caption)
{
	$html ='<figcaption>'.$caption.'</figcaption></figure>';
	return $html;
}

//
function addImage($figure=array(),$caption,$image)
{
	/*  Note 
	Create figure with one or more images
	Both $image & figure must be an array.
	
	$caption is optional
	*/
	$html ='<figure ';
	if(!empty($figure))
	{
		$html .=loopthroughAssoicate($figure);
	}
	if (!isset($figure['class']))
	{
		$figure['class'] = 'nojs';
		$html .= 'class ="'. $figure['class'].'" ';
	}
	
	$html .=' />';
	
	if((isset($image[0]))&&(is_array($image[0])))
	{
		$sizeOfArray = sizeof($image);
		for($counter =0; $counter < $sizeOfArray; $counter++)
		{
			$html .='<img ';		
			$html .= loopthroughAssoicate($image[$counter]);
			if(!isset($image[$counter]['alt']))
			{
				$image[$counter]['alt'] = $caption;
				$html .= 'alt ="'.$image[$counter]['alt'].'" ';
			}
			$html .=' />';
		}
	}
	else
	{
		$html .='<img ';
		$html .= loopthroughAssoicate($image);
		if(!isset($image['alt']))
		{
			$image['alt'] = $caption;
			$html .= 'alt ="'.$image['alt'].'" ';
		}
		$html .=' />';
	}
	
	$html .='<figcaption>'.$caption.'</figcaption>';
	$html .='</figure>';
	return $html;
	
}


function generatemap($name,$area)
{
	
	$html = '<map name="'.$name.'">';
	
	if(is_array($area[0]))
	{
		for($counter = 0; $counter <sizeof($area);$counter++ )
		{	
			$html .= '<area  ';
			$html .= loopthroughAssoicate($area[$counter]);
			$html .= ' >';
		}
		
		//$html = '<area  '.$html;
	}
	else
	{
		$html .= '<area  ';
		$html .= loopthroughAssoicate($area);
		$html .= ' >';
		
	}
	//$html .= ' >';
	$html .='</map>';
	
	/*<map name="planetmap">
		<area shape="circle" coords="25,39,12" alt="02 GSM mast Bournemouth University" title="02 GSM mast"   />
		<area shape="circle" coords="110,122,13" alt="Test conducted in Bournemouth University" title="Bournemouth University's Car Park where the test was conducted"    />
		<area shape="circle" coords="234,149,12" alt=" 02 3G mast Bournemouth University " title="02 3G mast"/>
		<area shape="poly" coords="0,0,85,0,70,28,62,42,42,56,0,76" alt=" Good outdoors coverage area" title="Good outdoors coverage area"   />
		<!--<area shape="rect" coords="0,0,312,197" alt="Good Indoor &amp; Outdoor coverage" title="Good Indoor &amp; Outdoor coverage" href="http://www.o2.co.uk/coveragechecker"/>-->
		<area shape="rect" coords="0,0,312,197" alt="Good Indoor &amp; Outdoor coverage" title="Good Indoor &amp; Outdoor coverage"/>
	
	</map>*/
					
					
					
					
					return $html;
					
	
}

/*
$figure =array('id'=>'Figure');
$image =array(
array('id'=>'myName','src'=>'http://localhost/virginmedia/imgs/pdf.png'),
array('id'=>'myName','src'=>'http://localhost/virginmedia/imgs/pdf.png')
);


$caption = "My caption";
$image1 =array('id'=>'myName2','src'=>'http://localhost/virginmedia/imgs/pdf.png');


echo addImage($figure,$caption,$image);
//echo AddImage($figure,$caption,$image1);

echo addFigure($figure);
echo addImage2($image1);
echo closeFigure($caption);
*/