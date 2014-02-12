<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
<?php $this->load->view('common/head')?>		
</head>
    
<body>
<div id="container">
    <div id="header">
        <?php $this->load->view('common/header') ?>
    </div>
    <?php $this->load->view('common/nav') ?>
    <div id="content">
		<!--HOMEPAGE-->
		<div class="homepage">
			<div class="top">
				<div class="login-search">
					<?php $this->load->view('common/login')?>
					<?php $this->load->view('common/quick_search')?>
				</div>
				<div class="banner">
					<ul>
                        <li><img src="<?php echo base_url('images/banner1.jpg') ?>"/></li>
                        <li><img src="<?php echo base_url('images/banner2.jpg') ?>"/></li>
                        <li><img src="<?php echo base_url('images/banner3.jpg') ?>"/></li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<div class="middle">
				<div class="welcome">
					<h3>Welcome <span>Message</span></h3>
					<p class="caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<a href="#">Selengkapnya</a>
				</div>
				<div class="how-to-join">
					<ul>
						<li>
							<div class="step one">
								<span>Daftar Sekarang</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</li>
						<li>
							<div class="step two">
								<span>Buat Profile</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</li>
						<li>
							<div class="step three">
								<span>Temukan Cintamu</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<div class="bottom">
				<div class="why-to-join">
					<h3>Mengapa Perlu <span>Bergabung?</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					<a href="#">Selengkapnya</a>
                                        <a href="<?php echo base_url().'register' ?>" class="button">Bergabung Sekarang</a>
				</div>
				<div class="follow-us">
					<h3>Follow <span>Us</span></h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				<div class="clear"></div>
				<div class="send-message">
					<h3>Kirim <span>Pesan</span></h3>
					<div class="form-sendmessage">
						<div class="input-text"><input type="text" name="txtEmailSender" placeholder="enter your email"/></div>
						<div class="input-textarea"><textarea name="txtMessage" placeholder="type your message here"></textarea></div>
						<div class="actions">
							<button class="button" name="btnReset">Reset</button>
							<input type="submit" name="btnSendMessage" class="button" value="Kirim"/>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			
		</div>
		<!--END HOMEPAGE-->
	</div>
	<div id="footer">
		<?php $this->load->view('common/footer')?>
	</div>
</div>
</body>
</html>
