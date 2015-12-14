<?php
	$rows = query("SELECT * FROM posts WHERE post_number = ?", $_GET["no"]);

	if (!$rows)
	{
		print "Error retrieving thread.";
		exit;
	}
	$rows = $rows[0];
				//print html for OP
	print("<div class=\"postContainerOP\"><div class=\"postInfo\">

					<div class=\"imageContainer\"><div class=\"image\">File: <a href=\"../img/" . $rows["image_file"] . "\">"
					 . $rows["image_file"] . "</a><a class=\"fileThumb\"></div>
					</a></div>

					 <input type=\"checkbox\" value=\"delete\"> 
					 <span class=\"subject\">" . $rows["subject"] . "</span>
		             <span class=\"nameBlock\"><span class=\"nameOP\">" . $rows["name"] . "</span> </span> 
		             <span class=\"dateTime\">" . $rows["date"] . "</span> 
		             <span class=\"postNum\">No." . $rows["post_number"] . "</span></div>

					 <span class=\"OP\"><a href=\"../img/" . $rows["image_file"] . "\"><img src=\"../img/" . $rows["image_file"] .
					 "\" style=\"height: 250px; width: 250px;\"></a>

		             <blockquote class=\"postMessage\">" . $rows["post_content"] . "</span></blockquote></div>");

	$rows = query("SELECT * FROM posts WHERE thread_number = ?", $_GET["no"]);


	if (!$rows)
	{
		exit;
	}	
			//print html for thread posts
	foreach ($rows as $post)
	{
		print("<div class=\"postContainer\"><div class=\"postInfo\">");
			


		print("<input type=\"checkbox\" value=\"delete\"> 
			<span class=\"nameBlock\"><span class=\"name\">" . $post["name"] . "</span> </span> 
			<span class=\"dateTime\">" . $post["date"] . "</span> 
			<span class=\"postNum\">No.<span>" . $post["post_number"] . "</span></span></div>");

		if($post["image_file"] != ""){			//if image exists, add image html
			print ("<div class=\"postImageContainer\"><div class=\"image\">File: <a href=\"../img/" . $post["image_file"] . "\">"
					 . $post["image_file"] . "</a></div></div><span class=\"postPic\">
					<a href=\"../img/" . $post["image_file"] . "\"><img src=\"../img/" . $post["image_file"] . 
					"\" style=\"height: 150px; width: 150px;\"></a>");
		}

		print("<blockquote class=\"postMessage\">" . $post["post_content"] . "</blockquote></div>");
     	}
	
	print("<hr>");

?>
