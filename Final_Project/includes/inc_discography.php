<h2>Viza Discography</h2>
<h3>List of Viza Releases</h3>
<table id='vizaTable'>
<?php
	$album = array("Eros-Single", "The Unorthodox Revival ||", "The Unorthodox Revival |", "Aria", "Carnivalia", "Made in Chernobyl", "Eros (Albumn)", "Maktub","Viza-EP");
	
	$date = array("Oct 4, 2019", "Oct 12, 2018", "Feb 01, 2018", "Jan 17, 2014", "Dec 10, 2011","Jan 01, 2010", "Dec 10, 2008", "Jan 01, 2006", "Jan 01, 2001");
	
	echo " <tr><th>Album Name</th><th>Release date</th></tr> ";
	
	echo "<tr></tr>";
	for ($i = 0; $i < 9; ++$i) {
			echo "<tr>";
			echo "<td>".$album[$i]."</td>";
			echo "<td>".$date[$i]."</td></tr>";
		}
?>
</table>
