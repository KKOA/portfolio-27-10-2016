/*
Description :
Author : Keith Amoah
Date : 26/11/2014
*/

function setCurrentLink(selector,url)
{
	$(selector).each
	(
		function()
		{
			$this = $(this);

			if(url == '/wifi-wimax-lte/index.php')
			{
				url ='/wifi-wimax-lte/';
			}


			if(url == $this.attr('href')) // Remove
			{
				$this.addClass('current');
				$this.removeAttr("href");

			}
		}
	);
}

$(document).ready
(
	function()
	{

		$(".navButton").click(function ()
		{
			$(".navButton,ul#topLevel").toggleClass("open");
			console.log('x');
		});

		$('.nojs').removeClass('nojs'); // Remove nojs class

		setCurrentLink('#pageFooterNav a',currentUrl);
		setCurrentLink('#subTopicNav a',currentUrl);
	}
);