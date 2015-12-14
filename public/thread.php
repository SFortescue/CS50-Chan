<?php
require("../includes/config.php");
//include functions, config
//take query string
//query mysql db for all posts in that thread
//populate mid section of page with posts according to date/time posted
//

	if (isset($_GET["no"]))
		{
			render("../templates/thread.php");
		}
	else
		{
			render_message("../templates/message.php", ["message" => "Error: thread does not exist."]);
			header("Refresh: 2; URL=/cs50chan/public/home.php");
		}

?>
