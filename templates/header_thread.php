<!DOCTYPE html>

<html>
    <head>
		<meta charset="UTF-8"> 
        <link href="../css/style.css" type="text/css" rel="stylesheet"/>
		<script src="../js/jquery-1.11.1.min.js"></script>
		<script src="../js/scripts.js"></script>
	<?php if (isset($title)): ?>
            <title><?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>CS50 Chan</title>
        <?php endif ?>
    </head>
<body id="bg">
	<div id="header">
	<a href="../public/home.php">
	<img id="banner" src = "../cs50chan.png">
	</a>
	</div>	
<p>
<hr>

<form id="postForm" name="post" action="post_thread.php" method="post" enctype="multipart/form-data">
    <table id="postTable">
        <tbody>
            <tr data-type="Name">
                <td>Name</td>
                <td>
                    <input name="name" type="text" tabindex="1" placeholder="Anonymous">
                </td>
			</tr>
			<tr data-type="Name">
                 <td>Subject</td>
                 <td>
                     <input name="subject" type="text" tabindex="1">
                 </td>
             </tr>
            <tr data-type="Email">
                <td>Email</td>
                <td>
                    <input name="email" type="text" tabindex="2">
                    <input type="submit" value="New Thread" tabindex="6">
                </td>
            </tr>
            <tr data-type="Comment">
                <td>Comment</td>
                <td>
					<textarea id="textBox" name="comment" cols="48" rows="4" wrap="soft" tabindex="4"
					 placeholder="Type your message here..."></textarea>
                </td>
            </tr>
            <tr data-type="File">
                <td>File</td>
                <td>
                    <input id="postFile" name="fileToUpload" type="file" tabindex="7"><span class="desktop"></span>
            </tr>
            <tr class="rules">
                <td colspan="2">
                    <ul class="rules">
                        <li>Please read the <a href="//www.4chan.org/rules#tv">Rules</a> and <a href="//www.4chan.org/faq">FAQ</a> before posting.</li>
			<li>Only post cool stuff.</li>
                    </ul>
                </td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="2">
                    <div id="postFormError"></div>
                </td>
            </tr>
        </tfoot>
    </table>
</form>
<hr>
            <div id="middle">               

