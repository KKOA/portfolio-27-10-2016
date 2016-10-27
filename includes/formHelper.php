<?php 
/*
  ==========================================================================
 General Information
 ==========================================================================
Website Url : http://www.keith-amoah.webspace.virginmedia.com/
Description : Provide series of form helper functions
Version : 2
Author : Keith Amoah
Date : 25/03/2015

 
   
 ==========================================================================
 Table of Content
 ========================================================================== 
*/

//Link to any necessary external sources
require_once 'helper.php';


function createLabel($for,$context)
{
	$html = '<label for="'.$for.'">'.$context.'</label>';
	return $html;
}

function generateSelect($selectId,$options)
{
	$html = '<select id="'.$selectId.'" name="'.$selectId.'">';
			
	//loop options
	foreach ($options as $key=>$value)
	{
		$html .='<option value="'.$value.'">'.$key.'</option>';
	}
	$html .= '</select>';
	return $html;
}

function generateTextArea($textarea,$context,$labelContext)
{

	$html ="";
	if (isset($labelContext))
	{
		$html .= createLabel($textarea['id'],$context);
	}
	$html .='<textarea ';
	$html .= loopthroughAssoicate($textarea);
	$html .=' >';
	$html .= $context;
	$html .='</textarea>';
	
	return $html;	
}