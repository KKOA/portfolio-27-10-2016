<?php
//function addImage($imgSource,$imgAlt,$imgID,$imgClass,$caption)
function addImage($imgSource,$imgAlt,$imgID,$caption)
{

//$classes = implode(" ",$imgClasses); 

$html = '<figure>';
//$html .= '<img id="'.$imgID.'" class="'.$classes.'" src="'.$imgSource.'" alt="'.$imgAlt.'"/>';
$html .= '<img id="'.$imgID.'" src="'.$imgSource.'" alt="'.$imgAlt.'"/>';
$html .= '<figcaption>'.$caption.'</figcaption>';
$html .= '</figure>';

return $html;

}

function addImage2($imgSrc,$imgId,$imgAlt,$imgClass = "")
//function addImage2($imgId,$imgSrc,$imgAlt,$imgClass = "")
{
	$html = '<img ';
	$html .= 'id="'.$imgId.'" ';
	
	if(sizeof($imgClass) > 1)
	{
		$imgClass = implode(" ",$imgClass);
		
	}
		
	$html .= 'class="'.$imgClass.'" ';
	$html .= 'src="'.$imgSrc.'" ';
	$html .= 'alt="'.$imgAlt.'" ';
	$html .= '/>';
	echo $html;
}

/*
function addTable($table,$thead,$body)
{
	
	// table
	
	$html = "<table>";
	$html = "<caption></caption>";
	$html .="<thead>";
	
	$html .="</thead>";
	$html .="</tbody>";
	$html .="</tbody>";
	$html .= "</table>";
	
}*/


?>