<div id="footer">
	<h4>
	<?php
		date_default_timezone_set("America/Chicago");
		$t = date("H");

		if ($t < "5" && $t < "12") {
			echo "Have a good morning!";
		} elseif ($t >= "12" && $t < "18") {
			echo "Have a good afternoon!";
		} elseif ($t >= "18" && $t < "22") {
			echo "Have a good evening!";
		} else {
			echo "Have a good night!";
		}
		
	?>
	</h4> 
	<?php
		include('./includes/inc_page_links.php');
	?>
</div>
</body>
</html>