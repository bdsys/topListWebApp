<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<link type"text/css" rel="stylesheet" href="collector-main.css"/>
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script> <!-- Calls Jquery library from teh netz  You may want to host this server side after dev work:)--> 
    	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script> <!-- This too ^.^ -->
    	<script type="text/javascript" src="collector-main.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Collector Net</title>
    </head>
      <!-- Everything below this in every site -->
    <body>
    	
    	<!-- Below is a fixed welcome banner ONLY ON THIS PAGE -->
    	
    	<div class="welcomeBanner">
        	<img class="exitX" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQFzLSTJ4t4PSRlYjKkGf_45ikmwEt1TaikQNWwH_DIncNlKziz-w" />
        	<p> Welcome! </p>
        	<br>
        	<p>Looks like this is your first time visting.</p>
        	<br>
        	<a href="/collector" target="_blank"><button>Register an account</button></a>
        	<br>
        	<p> Click <a href="http://www.bdsys.net/" target="_blank">here</a>
        	   for more information.</p>
        	<br>
        	
        	<form>
        		Username: <input type="text" name="username"/>
        		<br>
        		<br>
        		Password: <input type="password" name="password" />
        	</form>
        	<div id="signIn">
        		<h6>Sign In</h6>
        	</div>
        </div>
    	
    	 <!-- Header below is on every page -->
    	 
    <header id="topofpage">
        <h1>Vinyl Collection</h1>
        
        <nav id="navHead">
        <table class="TopToolbarContainer">
        	<tbody>
        		<tr>
        			<td>
        				<a href="/collector/">Home</a>
        			</td>
        			<td>
        				<a href="/collector/about">About</a>
        			</td>
        			<td>
        				<a href="http://shop.bdsys.net/">Store</a>
        			</td>
        			<td>
        				<a href="http://parked.bdsys.net/parked2/lolcat/">That</a>
        			</td>
        		</tr>
        	</tbody>
        </table>
        </nav>
        </header>
        <!-- Header above is on every page -->
        
    <!-- Everything below this is the LEFT TOOLBAR CONTAINER FOR EVERY PAGE -->
   
    	<div class="LeftToolbarContainer">
    		<nav id="navLeftToolbar">
    			
    	<a href="/collector"> <div class="leftToolbarButton" id="myVinylButton">
    			 My [list here]
    		<br>Collection 
    	</div> </a>
    		
    		<br>
    		
    		<table class="favTableLeftToolbar" id="myFav">
    			<tbody>
    				<th>My Favorite</th> 				
    			<tr>
    				
    				<td>
    					<ul> 
    					<a href="genre"><li>-Artists</li></a>    				
    				 	<a href="/collector/vinyl/genre/rock/ledzep"><li>-Records</li></a>
    				 	<a href="/collector"><li>-Collections</li></a>
    				 	<a href="http://parked.bdsys.net/parked2/lolcat/"><li>-Cats</li></a>
    				 	<a href="http://parked.bdsys.net/parked2/lolcat/"><li>-Cats</li></a>
    				 	<a href="http://parked.bdsys.net/parked2/lolcat/"><li>-Cats</li></a>
    				 	</ul> 
    				</td>
    				
    			</tr>
    			</tbody>
    		</table>
    		
    		<form class="searchForm" name="searchBarLeftToolbar">
    				<input type="text" name="Search" />
    		</form>
    		<br>
    		<a href="/collector"><div class="leftToolbarButton" id="searchButton"> Search </div></a> 

    		<table class="myCollectTableLeftToolbar" id="myCollect">
    			<tbody>
    				<th>My Collections</th> 				
    			<tr>
    				
    				<td>
    					<ul> 
    					<a href="genre"><li>-Anime</li></a>    				
    				 	<a href="/collector/vinyl/genre/rock/ledzep"><li>-Books</li></a>
    				 	<a href="/collector"><li>-Cars</li></a>
    				 	<a href="http://parked.bdsys.net/parked2/lolcat/"><li>-Cards</li></a>
    				 	<a href="http://parked.bdsys.net/parked2/lolcat/"><li>-Coins</li></a>
    				 	<a href="http://parked.bdsys.net/parked2/lolcat/"><li>-Comics</li></a>
    				 	<a href="http://parked.bdsys.net/parked2/lolcat/"><li>-Legos</li></a>
    				 	<a href="http://parked.bdsys.net/parked2/lolcat/"><li>-Toys</li></a>
    				 	<a href="http://parked.bdsys.net/parked2/lolcat/"><li>-Cats</li></a>  			
    				 	</ul> 
    				</td>
    				
    			</tr>
    			</tbody>
    		</table>
    		
    		<table class="favTableLeftToolbar" id="myDisplay">
    			<tbody>
    				<th>Collection Toplist to Display</th> 				
    					<tr>
    						<td class="leftToolbarButton" id="vinylToplist">				
    							<button>Vinyl Toplist</button>						
    						</td>
    					</tr>
    					<tr>
    						<td class="leftToolbarButton" id="genreToplist">
								<button>Genre Toplist</button>
    						</td>
    					</tr>
    					<tr>
    						<td class="leftToolbarButton" id="artistToplist"> 												
    							<button>Artist Toplist</button>					
    						</td>
    					</tr>
    					<tr>
    						<td class="leftToolbarButton" id="recordToplist">					
    							<button>Record Toplist</button>						
    						</td>
    					</tr>
    					<tr>
    						<td class="leftToolbarButton" id="catToplist">
								<button>Cat Toplist</button>
    						</td>
    					</tr>
    			</tbody>
    		</table>
			</nav>
    	</div> 
    	
    	<!-- Everything above this is the LEFT TOOLBAR CONTAINER FOR EVERY PAGE -->
        
        <!-- Below is the unique main body -->
        
        
        <div id="spaceHolder"></div>
        	
         <!-- Above is the unique main body -->
       
         <!-- Below is the footer in every page -->
    <footer>
    <nav id="navFoot">
    	<div>
    		<table>
    			<tbody>
    				
    					<a href="#topofpage"><img id="TopofPageButton" src="http://bit.ly/11tRGfA" alt="This button goes to the top of this page"/></a>
    					
    				<tr class="LinkRowLeft">
    				
    					<td>
    						<h3 class="navText">Collector Navigation</h3>
    					
    					</td>
    					
        				<ul>
        					<td>
        						<a href="/collector/vinyl/"><li>Home</li></a>
        						<a href="/collector/about/"><li>About</li></a>
        						<a href="http://shop.bdsys.net/"><li>Store</li></a>
        						<a href="http://parked.bdsys.net/parked2/lolcat"><li>That</li></a>
        					</td>
        				</ul>
        				</tr>
 						<tr class="LinkRowCenter">
 							       						
       						<td>
       							<h3 class="navText">Top Lists</h3>
       						</td>
       						
        					<ul>
        						<td>
        							<a href="/collector/vinyl/toplist/"><li>Vinyl Top List</li></a>
        							<a href="/collector/vinyl/popart/"><li>Artists Top List</li></a>
        							<a href="/collector/vinyl/poprec/"><li>Records Top List</li></a>
        							<a href="/collector/vinyl/blackroom/"><li>Black Room</li></a>
        						</td>
        					</ul>
       					</tr>
       					<tr class="LinkRowCenter">
 							       						
       						<td>
       							<h3 class="navText">Extras &amp; Fun</h3>
       						</td>
       						
        					<ul>
        						<td>
        							<a href="/collector/vinyl/toplist/"><li>Release Room</li></a>
        							<a href="/collector/vinyl/popart/"><li>Submit a bug</li></a>
        							<a href="/collector/vinyl/poprec/"><li>Jobs</li></a>
        							<a href="/collector/vinyl/blackroom/"><li>Black Room</li></a>
        						</td>
        					</ul>
       					</tr>
       					<tr class="LinkRowRight">
       						<td>
        					<h6>Page Design by: Andrew Lass<br> Made In Morro Bay California</h6>
    			 	  	    <p>&copy; Black Dog Systems</p>
    			 	  	    <br>
     				  	 	<a href="www.bdsys.net"><img id="footerLogo" src="http://bdsys.net/ihost/?dm=JP0J" alt="Black Dog Systems Homepage"/></a>
      				  		<br>
      				  		<a href="www.bdsys.net/about">
      				  			<p> About BDS </p></a>

      				  		</td>
      				  	</tr>
      				  	<tr class="ConnectRow">
      				  		<td>
      				  			<br>
      				  		
      				  		<h3> Connect With Us </h3>
      				  		
      				  		<a href="mailto:admin@bdsys.net?subject=I (emotion you feel here) the Site!">
      				  		<img id="emailIcon" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcS253o3Gv3KJrDDtCRc9DOhQH0pIO4Igfx9l3XF4jDI7kmNLTdB9Q" alt="Email Icon"/></a> 
      				  		
      				  		<a href="https:///www.facebook.com/lass2112">
      				  		<img id="facebookIcon" src="http://1.bp.blogspot.com/-KL5NxRS7sqY/Tjac52rFmpI/AAAAAAAAALw/WSL46Vc1ArA/s1600/Facebook_icon.jpg" alt="Facebook Icon"/></a>
      				  		
      				  		<a href="https://www.twitter.com">
      				  		<img id="twitterIcon" src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRo5W806gp_UGBAstQKT5LPHTARA227zFwLfMvbQUeAo8cH4KCK" alt="Twitter Icon"/></a>
      				  		</td>
      				  	</tr>
        		</tbody>
        	</table>
        </div>
        </nav>
        </footer>
        <!-- Everything above this is the footer in ever site. It contains the logo, additional links and a top of page button -->
        
    </body>
    
</html>
