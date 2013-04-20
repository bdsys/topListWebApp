/**
 * @author Andrew Lass | Black Dog Systems 
 */

//Jquery fun

$(document).ready(function ()
{	
	
	// Below is Jquery that is on every page	
		
	//pull tab to show/hide left tool bar container
	$(".toolDiv").hide();
	$("#learnToSwim").click(function () {
		$(".toolDiv").slideToggle("fast");		
	});

	//pull tab to show/hide left tool bar container
	$(".whyDiv").hide();
	$("#camoP").click(function () {
		$(".whyDiv").slideToggle("fast");		
	});

}); 

