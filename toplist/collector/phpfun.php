<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    	<link type"text/css" rel="stylesheet" href="phpfun.css"/>
    	<script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js"></script> <!-- Calls Jquery library from teh netz  You may want to host this server side after dev work:)--> 
    	<script type="text/javascript" src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script> <!-- This too ^.^ -->
    	<script type="text/javascript" src="phpfun.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Collector Net</title>
    </head>
      <!-- Everything below this in every site -->
    <body>

    	
    	
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
        
        <div id="phpCenter">

        		<?php
        			echo "<h2> Howdy, Friends! </h2>";
        		?>

        		<?php
        			$userName = "Andrew";
					$userAge = 23;
					echo "<p> My name is" ." ". $userName ." ". "and I'm" ." ". $userAge ." ". "years old! </p>";
					
					if ($userName == "Andrew" && $userAge == 23) {
						echo "<p>That is indeed his name and age! I should know, my logical control flow tells me so! </p>";
					} elseif ($userName == "Andrew" && $userAge != 23) {
						echo "<p> That's his name but that age ain't right! </p>";
					} else {
						print "<p> srsly who cares, this flow will never get this far!</p>";
					}
        		?>
        		
        		<?php
        			$recordYear = 1974;
        			$recordQuality = "Like New";
        			$recordRarity = "Epic";
					$recordEra = "";
					$currentTime = time();
					$currentYear = 2013;
					
					switch ($recordYear) {
						case $recordYear <= 1975 && $recordYear >= 1960:
							$recordEra = "Modern Classic";
							break;
						case $recordYear <= 1959 && $recordYear >= 1945:
							$recordEra = "Oldies";
							break;
						case $recordYear >=1975 && $recordYear <=1989:
							$recordEra = "Adult Contemporary";
						case $recordYear >= $currentYear - 20 && $recordYear <= $currentYear -6:
								$recordEra = "Modern Contemporary";
								break;
						case $recordYear >= $currentYear -5:
							  $recordEra = "Modern";
								break; 
					}				
        		?>

        		<?php
        			 echo "<br> 
        			 	   <p> Your record was pressed in " . $recordYear . " and is considerd " . $recordEra . ". </p>";
        		?>

        		<?php
        			 echo "<p> This makes it " . $recordRarity . "! </p>"; 
        		?>

        		<?php
        		 	echo "<p> The quality of your record is " . $recordQuality . ". </p>";
        		?>

        		<?php
        		 	echo "<p> The current time is " . $currentTime . " and year is " . $currentYear . ". </p>";
        		?>

        		<?php
        			echo "<p> why did I tell you this? Because, I made variables and didn't want them to go to waste </p";
        		?>
        		
        		<?php
        			$artist = "rush";
        			$myRecordList = array("2112, Rush", "Led Zeppelin I, Led Zeppelin", "Trick of the Tail, Genesis", "5150, Van Halen");
					$rushRecords = array("Caress of Steel", "2112", "Moving Pictures");
					$zeppelinRecords = array("Led Zeppelin", "Led Zeppelin II", "Led Zeppelin IV");
					$arrI = 0;
        		?>
        		       	
        		<?php
        		 echo "<br><p> YAY Records!!!</p>";
        		?>
        		
        		<?php
        			echo "<p>". $myRecordList[0] . "</p>";
					echo "<p>". $myRecordList[1] . "</p>";
					echo "<p>". $myRecordList[2] . "</p>";
					echo "<p>". $myRecordList[3] . "</p>";
        		?>
        		
        		<?php
        		 echo "<br><p> YAY " . $artist . "!!!</p>";
        		?>
        		
        		<?php
        			echo "<p>". $rushRecords[0] . "</p>";
					echo "<p>". $rushRecords[1] . "</p>";
					echo "<p>". $rushRecords[2] . "</p>";
        		?>
        		
        		<?php
        		 echo "<br><p> YAY Led Zeppelin!!!</p>";
        		?>
        		
        		<?php
        			echo "<p>". $zeppelinRecords[0] . "</p>";
					echo "<p>". $zeppelinRecords[1] . "</p>";
					echo "<p>". $zeppelinRecords[2] . "</p>";
        		?>
        		
        		
        		</p>
        		
        		<h2>Normal Globe</h2>
        		<script type="text/javascript" src="http://jk.revolvermaps.com/2/1.js?i=aqbpmn1s083&amp;s=244&amp;m=0&amp;v=true&amp;r=true&amp;b=000000&amp;n=false&amp;c=007eff" async="async"></script>
        		<br>
        		<br>
        		<h2>Mini Globe</h2>
        		<script type="text/javascript" src="http://jk.revolvermaps.com/2/2.js?i=ajpswvo7jxh&amp;m=0&amp;s=130&amp;c=007eff&amp;t=1" async="async"></script>
        		<br>
        		<br>
        		<h2>Normal flat map (Flash)</h2>
        		<script type="text/javascript" src="http://jk.revolvermaps.com/p.js"></script><script type="text/javascript">rm2d_ki101('0','302','151','aw7jfyyol2s','007eff',40);</script>
        		<br>
        		<br>
        		<h2>Visitor Bar Graph</h2>
        		<script type="text/javascript" src="http://jk.revolvermaps.com/2/0.js?i=a2ncmf97hur&amp;d=3&amp;p=0&amp;b=0&amp;w=293&amp;g=3&amp;f=tahoma&amp;fs=14&amp;r=0&amp;c0=000000&amp;c1=0006ff&amp;c2=0006ff&amp;ic0=0&amp;ic1=0" async="async"></script>
        		<br>
        		<br>
        </div>
        
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
