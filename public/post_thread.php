<?php

	require("../includes/config.php");

if (isset($_POST)) 
{	

	//validate name field

	if ($_POST["name"] == "")
		{
			$name = "Anonymous";
		}
	else
		{
			$name = $_POST["name"];
		}
		//check if image is attached
	if ($_FILES["fileToUpload"]["name"] != ""){
		$filename = $_FILES["fileToUpload"]["name"];

		require("upload.php");	

	}
	else{
		$filename = "";
	}

	// send post data to database

  	$post = query("INSERT INTO `cs50chan`.`posts` (`name`, `subject`, `email`, `date`, `op`, 		
				`post_number`, `image_file`, `post_content`) VALUES (?, ?, ?, NOW(), 1, NULL, ?, ?)", 
				$name, $_POST["subject"], $_POST["email"], $filename, $_POST["comment"]);

	if ($post === false)
		{
			require("../templates/post_failure.php");
			print_r($post);
		}

	render_message("../templates/message.php", ["message" => "Post Successful!"]);
	
} 
else 
{
	render_message("../templates/message.php", ["message" => "Something went wrong!\nYour post was not submitted..."]);
		
}
 	//Pause for 2 seconds before redirecting 
	header("Refresh: 2; URL=/cs50chan/public/home.php");
?>
