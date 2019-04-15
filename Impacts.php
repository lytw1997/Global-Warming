

<!DOCTYPE html>
<HTML>
   <HEAD>
      <TITLE>Global Warming | Impacts</TITLE>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/Global Warming.css">
   </HEAD>
   <BODY>
      <!-- Responsive Header -->
      <div class="sticky">
         <div class="header">
            <a href="main.html" class="home" target="_top"><font face ="Yu Gothic UI"><b>GLOBAL WARMING</b> 
            <br>
            <font face = "Yu Gothic UI" >HISTORY'S GREATEST GENOCIDE</a>
            <div class="header-right">
               <a href="news.html">News</a>
               <a href="Causes.php">Causes</a>
               <a href="Impacts.php">Impacts</a>
               <a href="aboutus.html">About us</a>
            </div>
         </div>
      </div>
      <div id="box">
         <div class="container">
            <img class="imagesci" src="assets/image/impacts_images/global.jpg" alt="" width=100%>
            <div class="center">
               <b>Impacts</b>
            </div>
         </div>
         <div id="content">
            <div id="art">
               <main>
                  <p class="img1cap">The planet is warming, from North Pole to South Pole. Since 1906, the 
                     global average surface temperature has increased by more than 1.6 degrees 
                     Fahrenheit (0.9 degrees Celsius)-even more in sensitive polar regions. And the 
                     impacts of rising temperatures aren't waiting for some far-flung future-the 
                     effects of global warming areappearing right now. The heat is melting glaciers 
                     and sea ice, shifting precipitation patterns, and setting animals on the move.
                  </p>
                  <br/>
                  <section>
                     <h2>Rising Sea Levels</h2>
                     <article>
                        <figure><img class="secpic" src="assets/image/impacts_images/rising.jpg" alt=""/></figure>
                        Increased ocean temperatures are melting glaciers and ice caps all over the world. 
                        Melted ice increases the volume of water in our oceans. Warmer temperatures also 
                        result in the expansion of the water's mass, which causes sea levels to rise, 
                        threatening low-lying islands and coastal cities.
                     </article>
                  </section>
                  <section>
                     <h2>More Frequent And Intense Extreme Weather Events</h2>
                     <article>
                        <figure><img class="secpic" src="assets/image/impacts_images/fire.jpg" alt=""/></figure>
                        Extreme weather events like bushfires, cyclones, droughts and floods are becoming 
                        more frequent and more intense as a result of global warming.
                     </article>
                  </section>
                  <section>
                     <h2>Oceans Are Warming And Acidifying</h2>
                     <article>
                        <figure><img class="secpic" src="assets/image/impacts_images/ocean.jpg" alt=""/></figure>
                        The oceans have absorbed most of extra heat and carbon dioxide (CO2) so far - more 
                        than the air - making the seas both warmer and more acidic. Warming waters are 
                        bleaching coral reefs and driving stronger storms. Rising ocean acidity threatens 
                        shellfish, including the tiny crustaceans without which marine food chains would 
                        collapse.
                     </article>
                  </section>
                  <section>
                     <h2>Hotter Days</h2>
                     <article>
                        <figure><img class="secpic" src="assets/image/impacts_images/hotter.jpg" alt=""/></figure>
                        Dangerously hot weather is already occuring more frequently than it did 60 years 
                        ago and scientists expect heat waves to become more frequent and severe as global 
                        warming intensifies. This increase in heat waves creates serious health risks, and 
                        can lead to heat exhaustion, heat stroke, and aggravate existing medical conditions.
                     </article>
                  </section>
                  <section>
                     <h2>Costly And Growing Health Impacts</h2>
                     <article>
                        <figure><img class="secpic" src="assets/image/impacts_images/health.jpg" alt=""/></figure>
                        Global warming has significant implications for our health. Rising temperatures 
                        will likely lead to increased air pollution, a longer and more intense allergy 
                        season, the spread of insect-borne diseases, more frequent and dangerous heat 
                        waves, and heavier rainstorms and flooding. All of these changes pose serious, 
                        and costly, risks to public health.
                     </article>
                  </section>
               </main>
            </div>
            <div id="side">
               <aside>
                  <h3>Find out more</h3>
                  <a href="https://nca2014.globalchange.gov/" target="_blank">The U.S. Global Change Research Program's Third Assessment Report</a>
                  <br/><br/>
                  <a href="https://www.ipcc.ch/report/ar5/wg2/"  target="_blank">The IPCC's 2014 report on climate change impacts, adaptation and vulnerability</a>
               </aside>
               <br/>
               <aside>
                  <h3>[Related Articles]</h3>
                  <a href="https://www.nationalgeographic.com/environment/global-warming/global-warming-effects/" target="_blank">Effects of Global Warming</a>
                  <br/><br/>
                  <a href="https://www.ucsusa.org/our-work/global-warming/science-and-impacts/global-warming-impacts" target="_blank">Global Warming Impacts</a>
                  <br/><br/>
                  <a href="https://www.wwf.org.au/what-we-do/climate/impacts-of-global-warming#gs.3przjm" target="_blank">Impacts of Global Warming</a>
               </aside>
			   <h3>Share on:<h3>
			<?php
				$actual_link=(isset($_SERVER['HTTPS'])? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				$page_title="Global Warming Impacts";
				$googleurl="https://plus.google.com/share?url=".$actual_link;
				$facebookurl="https://www.facebook.com/sharer/sharer.php?u=".$actual_link;
				$twitterurl="http://www.twitter.com/share?text=".$page_title."&url=".$actual_link;
				$linkendinurl="https://www.linkedin.com/shareArticle?mini=true&url=".$actual_link."&title=".$page_title;
				$redditurl="https://reddit.com/submit?url=".$actual_link."&title=".$page_title;
				echo '<a href="'.$googleurl.'" target="_blank"><img src="assets/image/icon_images/goo.jpg" alt=""/></a>';
				echo '<a href="'.$facebookurl.'" target="_blank"><img src="assets/image/icon_images/fb.jpg" alt=""/></a>';
				echo '<a href="'.$twitterurl.'" target="_blank"><img src="assets/image/icon_images/twi.jpg" alt=""/></a>';
			    echo '<a href="'.$linkendinurl.'" target="_blank"><img src="assets/image/icon_images/li.jpg" alt=""/></a>';
				echo '<a href="'.$redditurl.'" target="_blank"><img src="assets/image/icon_images/red.jpg" alt=""/></a>';
			?>
            </div>
         </div>
      </div>
      <footer><p>Site last updated: March 31, 2019</p><p>Copyrights © 2019. All right reserved.</p></footer>
   </BODY>
</HTML>

