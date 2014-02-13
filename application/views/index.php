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
					<p class="caption">Janganlah kiranya kasih dan setia meninggalkan engkau! Kalungkanlah itu pada lehermu, tuliskanlah itu pada loh hatimu, maka engkau akan mendapat kasih dan penghargaan dalam pandangan Allah serta manusia.</p>
					<!--<p>(Amsal 3:3-4)</p>-->
					<p>Setiap orang yang memiliki hubungan secara pribadi dengan Yesus Kristus dan percaya bahwa Dia adalah Anak Allah, tidak peduli bagaimana masa lalu anda, darimana anda berasal, apakah anda masih single atau jomblo, sudah punya pacar, atau bahkan sudah menikah, karena Jodoh Kristen tidak hanya tentang jodoh atau pasangan hidup saja, melainkan juga tentang persahabatan dan persekutuan Kristen. </p>
					<a href="#">Selengkapnya</a>
				</div>
				<div class="how-to-join">
					<ul>
						<li>
							<div class="step one">
								<span>Daftar Sekarang</span>
								<p>Bergabunglah sekarang dengan mengisikan data anda pada form registrasi, Pendaftaran gratis!</p>
							</div>
						</li>
						<li>
							<div class="step two">
								<span>Buat Profile</span>
								<p>Buat profil anda sesuai dengan kondisi anda sebenarnya agar anggota lain dapat mengetahui anda dari profil yang anda buat</p>
							</div>
						</li>
						<li>
							<div class="step three">
								<span>Temukan Cintamu</span>
								<p>Mulailah menjalin komunikasi dengan anggota lain, dan temukan kecocokan dalam menjalin persahabatan</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
			<div class="bottom">
				<div class="why-to-join">
					<h3>Mengapa Perlu <span>Bergabung?</span></h3>
					<p>Melalui komunitas ini, anda bisa bertemu dan mengenal dengan orang-orang dalam satu kasih Tuhan Yesus Kristus. Dan juga tidak menutup kemungkinan anda akan menemukan pasangan hidup yang seiman. </p>
					<br/>
                                        <a href="<?php echo base_url().'register' ?>" class="button">Bergabung Sekarang</a>
				</div>
				<div class="follow-us">
					<h3>Follow <span>Us</span></h3>
					<p>Jangan lewatkan juga berita-berita terbaru tentang SAHABATKRISTIANI melalui media social berikut</p><br/>
					<p><a href="#"><img src="<?php echo base_url('images/facebook.png')?>"/></a>&nbsp;&nbsp;<a href="#"><img src="<?php echo base_url('images/twitter.png')?>"/></a></p>
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
