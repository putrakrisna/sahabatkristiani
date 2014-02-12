<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php $this->load->view('common/head') ?>
    <!--bagian ini untuk load css dan js--> 
    <!--...............................-->
    <!--end load css dan js-->
    
</head>
<body>
<div id="container">
	<div id="header">
            <?php $this->load->view('common/header') ?>
	</div>
	<?php $this->load->view('common/nav') ?>
	<div id="content">
		<!--bagian ini untuk kontenya--> 
        <h2 class="page-title">TERIMA KASIH</h2>
        <div class="sukses-register">
	        <div class="text">
		        <p>Terima kasih anda sudah mendaftar untuk menjadi bagian dari SAHABATKRISTIANI, silakan melakukan konfirmasi melalui email yang kami kirimkan ke alamat email yang anda daftarkan. Kami akan mengevaluasi data-data yang anda berikan, jika ada pertanyaan yang ingin ditanyakan, silakan menghubungi kami melalui email: <a href="mailto:sawokembar@gmail.com">sawokembar@gmail.com</a> </p>
	        </div>
        </div>
        <!--end content-->
        </div>
	<div id="footer">
            <?php $this->load->view('common/footer') ?>
	</div>
</div>
</body>
</html>
