<?php
/*
  ==========================================================================
 General Information
 ==========================================================================
Website Url : http://www.keith-amoah.webspace.virginmedia.com/
Description : Provide series of generic helper functions
Version : 2
Author : Keith Amoah
Date : 25/03/2015



 ==========================================================================
 Table of Content
 ==========================================================================
*/
function loopthroughAssoicate($array,$html="")
{
	foreach($array as $key => $value)
	{
		$html .= $key.'="'.$value.'" ';
	}
	return $html;
}



// Add External Source to top of page
function addExternalSource ($type,$src,$rel)
{
	$rel = $type = $src ="";

	if($type =='text/css')
	{
		$html ='<link rel="'.$rel.'" type="'.$type.'" href="'.$src.'">';
	}
	if($type =='text/css')
	{
		$html = '<script type="'.$type.'" src="'.$src.'"></script>';
	}
	return $html;
}


// create Note with folded corner
function createNote($context)
{
	$html ='<div class="note folded-rightbottom shadow">';
	$html .='<header>Note</header>';
	$html .= '<div class="noteBody">'.$context.'</div>';
	$html .= '</div>';
	return $html;
}

?>