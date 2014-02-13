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
        <h2 class="page-title">Hubungi Kami</h2>
        <div class="text">
	        <p>Apabila anda memiliki pertanyaan, kritik ataupun saran tentang SAHABATKRISTIANI? Apakah anda menghadapi masalah teknis, atau apakah anda memiliki ide mengenai bagaimana kami dapat meningkatkan SAHABATKRISTIANI lebih lanjut? Isilah formulir ini dan kirimkan pertanyaan, pendapat atau permintaan anda ke staf SAHABATKRISTIANI.</p>
        </div>
        <div class="form contact-us">
	        <table id="form-contactus">
				<tbody>
					<tr>
						<td class="lbl-form"><span>Alamat Email</span></td>
						<td>
							<div class="input-text"><input type="text" name="txtEmail" placeholder="masukan email anda"/></div>
						</td>
					</tr>
					<tr>
						<td class="lbl-form"><span>Subject</span></td>
						<td>
							<div class="input-text"><input type="text" name="txtSubject" placeholder="masukan subject"/></div>
						</td>
					</tr>
					<tr>
						<td class="lbl-form" valign="top"><span>Isi Pesan:</span></td>
						<td>
							<div class="input-textarea"><textarea name="txtIsiPesan" placeholder="masukan pesan anda disin"></textarea></div>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<div class="actions"><input type="submit" class="button" value="Kirim Pesan"/></div>
						</td>
					</tr>
				</tbody>
			</table>
        </div>
        <!--end content-->
        </div>
	<div id="footer">
            <?php $this->load->view('common/footer') ?>
	</div>
</div>
</body>
</html>
