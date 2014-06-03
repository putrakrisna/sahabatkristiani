<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
	<?php $this->load->view('common/head') ?>
	<link rel="stylesheet" href="css/chat.css" type="text/css" media="screen"/>
</head>
<body>
<div id="container">
	<div id="header">
            <?php $this->load->view('common/header') ?>
	</div>
	<?php $this->load->view('common/nav') ?>
	<div id="content">
		<h2 class="page-title">Chat Room</h2>
		<div class="chat-room">
			<div class="chat-header">Live Chat</div>
			<div class="chat-box"></div>
			<div class="chat-list">
				<ul>
					<li class="male"><a href="#" class="new-chat">username</a></li>
					<li class="male"><a href="#">username</a></li>
					<li class="female"><a href="#" class="new-chat">username</a></li>
					<li class="male"><a href="#" class="new-chat">username</a></li>
					<li class="female"><a href="#">username</a></li>
					<li class="male"><a href="#">username</a></li>
					<li class="female"><a href="#" class="new-chat">username</a></li>
					<li class="male"><a href="#" class="new-chat">username</a></li>
					<li class="male"><a href="#">username</a></li>
					<li class="male"><a href="#">username</a></li>
					<li class="female"><a href="#">username</a></li>
					<li class="male"><a href="#">username</a></li>
					<li class="female"><a href="#">username</a></li>
					<li class="male"><a href="#">username</a></li>
					<li class="female"><a href="#" class="new-chat">username</a></li>
					<li class="male"><a href="#" class="new-chat">username</a></li>
					<li class="male"><a href="#" class="new-chat">username</a></li>
					<li class="male"><a href="#">username</a></li>
					<li class="female"><a href="#" class="new-chat">username</a></li>
					<li class="male"><a href="#" class="new-chat">username</a></li>
					<li class="female"><a href="#">username</a></li>
					<li class="male"><a href="#">username</a></li>
					<li class="female"><a href="#" class="new-chat">username</a></li>
					<li class="male"><a href="#" class="new-chat">username</a></li>
					<li class="male"><a href="#">username</a></li>
					<li class="male"><a href="#">username</a></li>
					<li class="female"><a href="#">username</a></li>
					<li class="male"><a href="#">username</a></li>
					<li class="female"><a href="#">username</a></li>
					<li class="male"><a href="#">username</a></li>
					<li class="female"><a href="#" class="new-chat">username</a></li>
					<li class="male"><a href="#" class="new-chat">username</a></li>
				</ul>
			</div>
			<div class="clear"></div>
			<div class="chat-type">
				<textarea name="txtChat"></textarea>
				<input type="submit" name="btnChat" value="Send"/>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div id="footer">
            <?php $this->load->view('common/footer') ?>
	</div>
</div>  
</body>
</html>
