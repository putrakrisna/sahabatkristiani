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
        <h2 class="page-title">Undang Teman</h2>
        <div class="text">
        	<h4>Undang teman-teman anda untuk bergabung di SAHABATKRISTIANI</h4>
        	<p>Bagikan kegembiraan anda dan undang teman-teman anda untuk membuat profil gratis di SAHABATKRISTIANI. Mudah saja, tuliskan alamat-alamat email dari teman-teman anda pada kotak di bawah ini (pisahkan dengan spasi, koma atau titik koma) dan klik 'Undang Teman'.</p>
        </div>
        <div class="form invite-form">
	        <p><strong>Masukkan alamat email teman-teman anda</strong>(pisahkan dengan spasi, koma atau titik koma):</p>
	        <div class="input-textarea">
		        <textarea name="emailInvite" placeholder="masukan email"></textarea>
	        </div>
	        <br/>
	        <div class="actions"><input type="submit" name="btnInvite" class="button" value="Undang Teman"/></div>
        </div>
        <!--end content-->
        </div>
	<div id="footer">
            <?php $this->load->view('common/footer') ?>
	</div>
</div>
</body>
</html>
