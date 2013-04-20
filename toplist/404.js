/**
 * @author Andrew Lass | Black Dog Systems 
 */

//Jquery fun

$(document).ready(function ()
{	
	
	// Below is Jquery that is on every page
	
	//initially only shows the main vinyl body and hides the rest
	$("#toplistArtist").css("display", "none");
	$("#toplistGenre").css("display", "none");
	$("#toplistRecord").css("display", "none");
	$("#toplistCat").css("display", "none");

	
	//fades welcome banner after clicking "X", a button or link.
	$(".exitX, .welcomeBanner button, .welcomeBanner a").click(function (){
		$(".welcomeBanner").fadeOut("slow");
	}); 
	
	
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
	$(".leftToolbarButton, .TopToolbarContainer td, #artistTopTable img, .pullTab, #signIn, #footerLogo").mouseenter(function () {
		$(this).fadeTo("fast", 0.5);
	});
	$(".leftToolbarButton, .TopToolbarContainer td, #artistTopTable img, .pullTab, #signIn, #footerLogo").mouseleave(function () {
		$(this).fadeTo("fast", 1);
	});
	
	

	//assigns css class to divs that control which body data is displayed
	$("#vinylToplist button").click(function () {
		$("#toplistVinyl").css("display", "block");
		$("#toplistGenre").css("display", "none");
		$("#toplistArtist").css("display", "none");
		$("#toplistRecord").css("display", "none");
		$("#toplistCat").css("display", "none");
		$(".showBar").hide();
	});
	
	$("#genreToplist button").click(function () {
		$("#toplistGenre").css("display", "block");
		$("#toplistVinyl").css("display", "none");
		$("#toplistArtist").css("display", "none");
		$("#toplistRecord").css("display", "none");
		$("#toplistCat").css("display", "none");
		$(".showBar").hide();
	});
	
	$("#recordToplist button").click(function () {
		$("#toplistRecord").css("display", "block");
		$("#toplistGenre").css("display", "none");
		$("#toplistVinyl").css("display", "none");
		$("#toplistArtist").css("display", "none");
		$("#toplistCat").css("display", "none");
		$(".showBar").hide();
	});
	
	$("#artistToplist button").click(function () {
		$("#toplistArtist").css("display", "block");
		$("#toplistGenre").css("display", "none");
		$("#toplistVinyl").css("display", "none");
		$("#toplistRecord").css("display", "none");
		$("#toplistCat").css("display", "none");
		$(".showBar").hide();
	});
	
	$("#catToplist button").click(function () {
		$("#toplistCat").css("display", "block");
		$("#toplistGenre").css("display", "none");
		$("#toplistVinyl").css("display", "none");
		$("#toplistArtist").css("display", "none");
		$("#toplistRecord").css("display", "none");
		$(".showBar").hide();
	});
	
		//Above is Jquery on every page	
		
		//Below is Jquery unique to this page
	
	
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

