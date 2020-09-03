<h2 id='top'>Top Viza Songs</h2>
<h3>Top 10 Viza Songs</h3>
<p>Viza has changed its sound with each album that is released. The songs can vary from mellow folk style songs to aggresive harder rock. Some earlier songs are heavily influenced by System of a Down, later songs by folk artists such as Gogle Bardello.</p>
<p>Here is a list of a few top songs according to Spotify and Youtube</p>
<table id='vizaTable'>
<?php
	$songs = array("Eros", "Trans-Siberian Standoff","Midnight Hour (Dingle Rock)",
	"Vikorious","The Girl That Doesn't Exist","When Doves Cry (cover)",
	"Viktor (feat Serj Tankian)","Quicksand","It's All Wrong","Never Feel");
	
	$album = array("Eros (Single)", "Made In Chernobyl", "Aria",
	"The Unorthodox Revival 1", "Aria", "When Doves Cry (Single)",
	"Made In Chernobyl", "Aria", "Made In Chernobyl", "Aria");
	
	echo "<tr><th>Song Name</th><th>Album</th></tr>";
		
	echo "<tr></tr>";
	for ($i = 0; $i < 10; ++$i) {
			echo "<tr>";
			echo "<td>".$songs[$i]."</td>";
			echo "<td>".$album[$i]."</td></tr>";
		}
?>
</table>
<h3>My Favorite Song</h3>
<p>I enjoy the various styles throughtout each of Viza's albums, but one stands out form their "Made in Chernobyl" album. The song "What If?", the style blends a style that is similar to Slavic folk with rock. The melody is smooth and mellow. The lyrics asks "What if we could live a better life?"</p>
<iframe width="560" height="315" src="https://www.youtube.com/embed/4zr_lXItr84" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<br /><br />
<a href="#top" style="font-size:25px;font-weight: bold;text-decoration: none;
color:Black">&#8593;</a>