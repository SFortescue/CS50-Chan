<?php

	$rows = query("SELECT * FROM posts WHERE op='1'");

	if (!$rows)
	{
		print "Error retrieving post.";	
		exit;
	}


	foreach ($rows as $post)
	{
		print("<div class=\"threadContainer\"><div><div class=\"postInfo\">

			<div class=\"imageContainer\"><div class=\"image\">File: <a href=\"../img/" . $post["image_file"] . "\">"
			 . $post["image_file"] . "</a><a class=\"fileThumb\"></div>
			</a></div>

			<input type=\"checkbox\" value=\"delete\"> 
			<span class=\"nameBlock\"><span class=\"name\">" . $post["name"] . "</span> </span> 
			<span class=\"dateTime\">" . $post["date"] . "</span> 
			<span class=\"postNum\">No." . $post["post_number"] . "</span></div>

			<span class=\"OP\"><img src=\"../img/" . $post["image_file"] . "\" style=\"height: 250px; width: 250px;\">

			<blockquote class=\"postMessage\">" . $post["post_content"] . "</blockquote></div></div>
			<span class=\"reply_link\">[<a href=\"/cs50chan/public/thread.php?no=" . $post["post_number"] . 
			"\">Reply</a>]</span></div><hr>");
     	}


?>
