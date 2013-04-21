/**
 * @author Andrew Lass | Black Dog Systems 
 */

//Jquery fun

$(document).ready(function ()
{	
	// Below is Jquery that is on every page	
		
	//pull tab to show/hide left tool bar container
	$("#youtubeVid").hide();
	$("#learnToSwim").click(function () {
		$("#youtubeVid").slideToggle("fast");		
	});

	//pull tab to show/hide left tool bar container
	$(".whyDiv").hide();
	//$(".toolDiv").hide();
	$("#camoP").click(function () {
		$(".whyDiv").slideToggle("slow");		
		//$(".toolDiv").slideToggle("slow");
		// $(".whyFiller").css("display", "none");
	}); 

}); 
