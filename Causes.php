

<!DOCTYPE html>
<html>
   <head>
      <TITLE>Global Warming | Causes</TITLE>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="assets/css/Global Warming.css">
   </head>
   <body>
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
      <div class="container">
         <img class="imagesci" src="assets/image/causes_images/causes.jpg" alt="" width = 100% height=85%>
         <div class="center">
            <b>Causes</b>
         </div>
      </div>
      <div id="content">
         <div id="art">
            <main>
               <div id="inside">
                  <p>A layer of greenhouse gases - primarily water vapor, and including much smaller 
                     amounts of carbon dioxide, methane and nitrous oxide - acts as a thermal blanket 
                     for the Earth, absorbing heat and warming the surface to a life-supporting 
                     average of 59 degrees Fahrenheit (15 degrees Celsius).
                  </p>
                  <p>Most climate scientists agree the main cause of the current global warming 
                     trend is human expansion of the "greenhouse effect" - warming that results when 
                     the atmosphere traps heat radiating from Earth toward space.
                  </p>
                  <p>Certain gases in the atmosphere block heat from escaping. Long-lived gases 
                     that remain semi-permanently in the atmosphere and do not respond physically 
                     or chemically to changes in temperature are described as "forcing" climate 
                     change. Gases, such as water vapor, which respond physically or chemically to 
                     changes in temperature are seen as "feedbacks."
                  </p>
                  <p>Gases that contribute to the greenhouse effect include:</p>
                  <figure><img class="img2" src="assets/image/causes_images/gases.jpg" alt=""/></figure>
                  <ul>
                     <li>Water vapor. The most abundant greenhouse gas, but importantly, it acts as a feedback 
                        to the climate. Water vapor increases as the Earth's atmosphere warms, but so does the 
                        possibility of clouds and precipitation, making these some of the most important feedback 
                        mechanisms to the greenhouse effect.
                     </li>
                     <br/>
                     <li>Carbon dioxide (CO2). A minor but very important component of the atmosphere, carbon 
                        dioxide is released through natural processes such as respiration and volcano eruptions 
                        and through human activities such as deforestation, land use changes, and burning fossil 
                        fuels. Humans have increased atmospheric CO2 concentration by more than a third since the 
                        Industrial Revolution began. This is the most important long-lived "forcing" of climate 
                        change.
                     </li>
                     <br/>
                     <li>Methane. A hydrocarbon gas produced both through natural sources and human activities, 
                        including the decomposition of wastes in landfills, agriculture, and especially rice 
                        cultivation, as well as ruminant digestion and manure management associated with domestic 
                        livestock. On a molecule-for-molecule basis, methane is a far more active greenhouse gas 
                        than carbon dioxide, but also one which is much less abundant in the atmosphere.
                     </li>
                     <br/>
                     <li>Nitrous oxide. A powerful greenhouse gas produced by soil cultivation practices, 
                        especially the use of commercial and organic fertilizers, fossil fuel combustion, nitric 
                        acid production, and biomass burning.
                     </li>
                     <br/>
                     <li>Chlorofluorocarbons (CFCs). Synthetic compounds entirely of industrial origin used 
                        in a number of applications, but now largely regulated in production and release to the 
                        atmosphere by international agreement for their ability to contribute to destruction of 
                        the ozone layer. They are also greenhouse gases.
                     </li>
                  </ul>
                  <p>On Earth, human activities are changing the natural greenhouse. Over the last century 
                     the burning of fossil fuels like coal and oil has increased the concentration of 
                     atmospheric carbon dioxide (CO2). This happens because the coal or oil burning process 
                     combines carbon with oxygen in the air to make CO2. To a lesser extent, the clearing of 
                     land for agriculture, industry, and other human activities has increased concentrations 
                     of greenhouse gases.
                  </p>
                  <h3>The Role of Human Activity</h3>
                  <p>In its Fifth Assessment Report, the Intergovernmental Panel on Climate Change, a group 
                     of 1,300 independent scientific experts from countries all over the world under the auspices 
                     of the United Nations, concluded there's a more than 95 percent probability that human 
                     activities over the past 50 years have warmed our planet.
                  </p>
                  <p>The industrial activities that our modern civilization depends upon have raised
                     atmospheric carbon dioxide levels from 280 parts per million to 400 parts per million 
                     in the last 150 years. The panel also concluded there's a better than 95 percent 
                     probability that human-produced greenhouse gases such as carbon dioxide, methane
                     and nitrous oxide have caused much of the observed increase in Earth's temperatures
                     over the past 50 years.
                  </p>
               </div>
            </main>
         </div>
         <div id="side">
            <aside>
               <h3>We live in a greenhouse</h3>
               <p>Life on Earth depends on energy coming from the Sun. About half the light reaching Earth's 
                  atmosphere passes through the air and clouds to the surface, where it is absorbed and then 
                  radiated upward in the form of infrared heat. About 90 percent of this heat is then absorbed 
                  by the greenhouse gases and radiated back toward the surface, which is warmed to a life-supporting 
                  average of 59 degrees Fahrenheit (15 degrees Celsius).
               </p>
            </aside>
            <br/>
            <aside>
               <h3>Find out more</h3>
               <h4>IPCC Fifth Assessment Report, 2014</h4>
               <a href="https://www.globalchange.gov/browse/reports/global-climate-change-impacts-united-states" target="_blank">Global Climate Change Impacts in the United States</a>
               <br/><br/>
               <a href="http://science.sciencemag.org/content/306/5702/1686.full"  target="_blank">The Scientific Consensus on Climate Change</a>
            </aside>
			<h3>Share on:<h3>
			<?php
				$actual_link=(isset($_SERVER['HTTPS'])? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
				$page_title="Global Warming Causes";
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
      <footer><p>Site last updated: March 31, 2019</p><p>Copyrights © 2019. All right reserved.</p></footer>
   </BODY>
</HTML>

