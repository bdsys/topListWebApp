/**
 * @author Andrew Lass | Black Dog Systems 
 */

//Jquery fun

$(document).ready(function ()
{	
	
	// Below is Jquery that is on every page
	
	//initially only shows the main vinyl body and hides the rest
	$(".infoPane").hide();
	$(".hoverText").hide();
		
	//pull tab to show/hide left tool bar container
	$(".showBar").hide();
	$(".pullTab").click(function () {
		$(".LeftToolbarContainer").slideToggle("fast");
		$(".hideBar").slideToggle("fast");
		$(".showBar").slideToggle("fast");		
	});

	//hover over lwft toolbar buttons fades, leaving returns normal transparency 
	//Fades header tool bar container menu items upon mouse enter and then brings back to normal
	//Fades artist table images when hovered
	//hover over pull tab fades blue highlight
	//Fades sign in button on welcome banner 
	/*Fade Bottom Dog Logo upon mouse enter*/
	$(".leftToolbarButton, .TopToolbarContainer td, .pullTab, .aboutGridCell img, #footerLogo").mouseenter(function () {
		$(this).fadeTo("fast", 0.5);
	});
	$(".leftToolbarButton, .TopToolbarContainer td, .pullTab, .aboutGridCell img, #footerLogo").mouseleave(function () {
		$(this).fadeTo("fast", 1);
	});
	
	//Above is Jquery on every page	
		
	//Below is Jquery unique to this page
	
	//hovering over the about grid pics reveal their option
	$("#topLeft img, #topLeft p").hover(function() {
		$("#topLeft p").show();
	}, function() {
		$("#topLeft p").hide();
	});
	
	$("#topRight img, #topRight p").hover(function() {
		$("#topRight p").show();
	}, function() {
		$("#topRight p").hide();
	});
	
	$("#botLeft img, #botLeft p").hover(function() {
		$("#botLeft p").show();
	}, function() {
		$("#botLeft p").hide();
	});
	
	$("#botRight img, #botRight p").hover(function() {
		$("#botRight p").show();
	}, function() {
		$("#botRight p").hide();
	});
		
	//clicks a grid item and toggles information 
	$("#topLeft").click(function () {
		$("#meetUs").hide();
		$("#whoCares").hide();
		$("#whyCats").hide();
		$("#whatIsTL").slideToggle("fast");
	});
	
	$("#topRight").click(function () {
		$("#whatIsTL").hide();
		$("#whoCares").hide();
		$("#whyCats").hide();
		$("#meetUs").slideToggle("fast");
	});
	
	$("#botLeft").click(function () {
		$("#whatIsTL").hide();
		$("#meetUs").hide();
		$("#whyCats").hide();
		$("#whoCares").slideToggle("fast");
	});
	
	$("#botRight").click(function () {
		$("#whatIsTL").hide();
		$("#meetUs").hide();
		$("#whoCares").hide();
		$("#whyCats").slideToggle("fast");
	});
	
	
	
	//Above is Jquery unique to this page

	//Below is jquery used in the footer on every page
	
	
	//Fades other three contact buttons upon hovering over one of them
	$("#emailIcon").mouseenter(function (){
		$("#twitterIcon").fadeTo("slow", 0.5);
		$("#facebookIcon").fadeTo("slow", 0.5);
	});
	$("#emailIcon").mouseleave(function (){
		$("#twitterIcon").fadeTo("slow", 1);
		$("#facebookIcon").fadeTo("slow", 1);
	});
	
	
	$("#twitterIcon").mouseenter(function (){
		$("#emailIcon").fadeTo("slow", 0.5);
		$("#facebookIcon").fadeTo("slow", 0.5);
	});
	$("#twitterIcon").mouseleave(function (){
		$("#emailIcon").fadeTo("slow", 1);
		$("#facebookIcon").fadeTo("slow", 1);
	});
	
	
	$("#facebookIcon").mouseenter(function (){
		$("#twitterIcon").fadeTo("slow", 0.5);
		$("#emailIcon").fadeTo("slow", 0.5);
	});
	$("#facebookIcon").mouseleave(function (){
		$("#twitterIcon").fadeTo("slow", 1);
		$("#emailIcon").fadeTo("slow", 1);
	});
	
}); 

