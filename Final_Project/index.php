<div id="container">
<?php
	include('./includes/inc_header.php');
?>
	<div id="content">
	<?php
		if (isset($_GET['page'])) {
				switch ($_GET['page']) {
					case 'home':
						include('./includes/inc_homepage.php');
						break;
					case 'topten':
						include('./includes/inc_top_ten_songs.php');
						break;
					case 'disc':
						include('./includes/inc_discography.php');
						break;
					case 'mail_list':
						include('./includes/inc_mailing_page.php');
						break;		
					case 'home_page': // A value of 'home_page means to display the default page
					default:
						include('./includes/inc_homepage.php');
						break;
				}
			}
			else // If no button has been selected, then display the default page
				include('./includes/inc_homepage.php');
	?>
	</div>
	<?php
	include("./includes/inc_footer.php");
?>
</div>

