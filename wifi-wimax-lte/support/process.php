<?php
function clean($data) 
{
	$data = trim(stripslashes(strip_tags($data)));
	return $data;
}

function isBot() 
{
	$bots = array("Indy", "Blaiz", "Java", "libwww-perl", "Python", "OutfoxBot", "User-Agent", "PycURL", "AlphaServer", "T8Abot", "Syntryx", "WinHttp", "WebBandit", "nicebot", "Teoma", "alexa", "froogle", "inktomi", "looksmart", "URL_Spider_SQL", "Firefly", "NationalDirectory", "Ask Jeeves", "TECNOSEEK", "InfoSeek", "WebFindBot", "girafabot", "crawler", "www.galaxy.com", "Googlebot", "Scooter", "Slurp", "appie", "FAST", "WebBug", "Spade", "ZyBorg", "rabaz");

	foreach ($bots as $bot)
	{
		if (strpos($_SERVER['HTTP_USER_AGENT'], $bot) !== false)//if (stripos($_SERVER['HTTP_USER_AGENT'], $bot) !== false)
		{return true;}
	}

	if (empty($_SERVER['HTTP_USER_AGENT']) || $_SERVER['HTTP_USER_AGENT'] == " ")
	{return true;}
	return false;
}

function get_data($var) 
{
	if (isset($_POST[$var]))
	{echo htmlspecialchars($_POST[$var]);}
}