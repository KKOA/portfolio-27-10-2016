/*
Description : Script for show/hide questions
Author : Keith Amoah
*/

$( document ).ready(function()
{

    function nextQuestion() // Hide current question and show next question
    {
    	event.preventDefault();
  		$(this).parent().hide();
  		$(this).parent().next().show();
    }

    function previousQuestion() // Hide current question and show previous question
    {
    	event.preventDefault();
  		$(this).parent().hide();
  		$(this).parent().prev().show();
    }

    $('.questions').addClass( "shadow" );

    //Need change id name
    $("#submit").before("<input type='submit' name ='prev'  id='lastquestionprev' value='< Previous'>");
    $( "#lastquestionprev").click(previousQuestion);

    noOfDiv =$('div.questions').length; // Count number of divs
    $('div.questions').not('#question1').hide();// Hide all questions except the first
    $('div.questions').each(function(i, obj)// i starts at 0
    {
    	i++;
    	if(i == 1)
    	{

    		$("#question"+(i)).append("<input type='submit' name ='next'  id='question"+i+"next' value='NEXT >'>");
    		$("#question"+(i)+"next" ).click(nextQuestion);
    	}
    	else if(i == noOfDiv)
    	{
    		$("#question"+(i)).append("<input type='submit' name ='prev'  id='question"+i+"prev' value='< Previous'>");
    		$( "#question"+(i)+"prev" ).click(previousQuestion);
    	}
    	else
    	{
    		$("#question"+(i)).append("<input type='submit' name ='prev'  id='question"+i+"prev' value='< Previous'>");
    		$( "#question"+(i)+"prev" ).click(previousQuestion);

    		$("#question"+(i)).append("<input type='submit' name ='next'  id='question"+i+"next' value='NEXT >'>");
    		$( "#question"+(i)+"next" ).click(nextQuestion);
    	}

    });
});