<?php

	require("../includes/config.php");

if (!isset($_GET["no"]))
	{	
		render_message("../templates/message.php", ["message" => "Error: thread does not exist."]);
		print htmlspecialchars($_GET["no"]);   
		//     header("Refresh: 2; URL=/cs50chan/public/home.php");
	}

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

		//check if image exists
	if ($_FILES["fileToUpload"]["name"] != ""){
		$filename = $_FILES["fileToUpload"]["name"];

		require("upload.php");	

	}
	else{
		$filename = "";
	}

	// send post data to database

  	$post = query("INSERT INTO `cs50chan`.`posts` (`name`, `subject`, `email`, `date`, `op`, 		
				 `post_number`, `image_file`, `post_content`, `thread_number`) VALUES (?, '', ?, NOW(), NULL,
	   			'', ?, ?, ?)", $name, $_POST["email"], $filename, $_POST["comment"], $_GET["no"]);

	if ($post === false)
		{
			render_message("../templates/message.php", ["message" => "Something went wrong!\n
							Your post was not submitted..."]);
			print_r($post);
		}
	else
	{
		render_message("../templates/message.php", ["message" => "Post Successful!"]);
	}
} 
else 
{
	render_message("../templates/message.php", ["message" => "Something went wrong!\nYour post was not submitted..."]);
		
}
 	//Pause for 2 seconds before redirecting 
	header("Refresh: 2; URL=/cs50chan/public/thread.php?no=" . htmlspecialchars($_GET["no"]));

?>
