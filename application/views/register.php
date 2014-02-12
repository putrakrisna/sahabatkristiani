<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php $this->load->view('common/head') ?>
    <link rel="stylesheet" href="<?php echo base_url() ?>css/register.css" type="text/css" media="screen"/>
</head>
<body>
<div id="container">
	<div id="header">
            <?php $this->load->view('common/header') ?>
	</div>
	<?php $this->load->view('common/nav') ?>
	<div id="content">
		<!--Register-->
		<h2 class="page-title">Register</h2>
		<div class="register">
			<div class="text">
				<p>Bergabunglah bersama kami di SAHABATKRISTIANI.COM dan temukan sahabat-sahabat dalam satu kasih Tuhan Yesus Kristus. Setelah mendaftar, anda akan diberikan kesempatan untuk mencoba semua fitur yang ada dalam website secara gratis selama 1 bulan penuh.</p>
			</div>
			<div class="error-validation"><?php echo validation_errors() ?></div>
            <form method="POST">
			<table id="form-register">
				<tbody>
					<tr>
						<td class="lbl-form"><span>Email</span></td>
						<td>
                                                    <div class="input-text"><input type="text" name="txtEmail" value="<?php echo set_value('txtEmail', '') ?>"/></div>
						</td>
					</tr>
					<tr>
						<td class="lbl-form"><span>Password</span></td>
						<td>
							<div class="input-text"><input type="password" name="txtPassword"/></div>
						</td>
					</tr>
					<tr>
						<td class="lbl-form"><span>Confirm Password</span></td>
						<td>
							<div class="input-text"><input type="password" name="txtConfirmPassword"/></div>
						</td>
					</tr>
					<tr>
						<td class="lbl-form"><span>First Name</span></td>
						<td>
							<div class="input-text"><input type="text" name="txtFirstName" value="<?php echo set_value('txtFirstName', '') ?>"/></div>
						</td>
					</tr>
					<tr>
						<td class="lbl-form"><span>Last Name</span></td>
						<td>
							<div class="input-text"><input type="text" name="txtLastName" value="<?php echo set_value('txtLastName', '') ?>"/></div>
						</td>
					</tr>
					
					<tr>
						<td class="lbl-form"><span>Tanggal Lahir:</span></td>
						<td>
							<div class="input-text date"><input type="text" name="txtTglLahir" class="date-pick"/></div>
							<div class="clear"></div>
						</td>
					</tr>
					<tr>
						<td class="lbl-form"><span>Lokasi:</span></td>
                                                <td><div class="select-option"><?php echo form_dropdown('slcKota', $provinsi_all) ?></div></td>
						<!--<td><div class="input-text"><input type="text" name="slcKota" value="<?php echo set_value('slcKota', '') ?>"/></div></td>-->
					</tr>
					<tr>
						<td class="lbl-form"><span>Gender:</span></td>
						<td>
							<div class="select-option">
                                                            <select name="slcGender">
                                                                <option value="pria">Pria</option>
                                                                <option value="wanita">Wanita</option>
								</select>
							</div>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="checkbox" name="checkAgree" class="checkbox"/>
							<span>Saya sudah membaca, mengerti dan setuju untuk memenuhi <a href="#">Syarat dan kondisi</a> dalam SAHABATKRISTIANI</span>
						</td>
					</tr>
				</tbody>
			</table><br/>
			<!--<table id="form-register">
			<tr>
				<td class="lbl-form"></td>
				<td>
					<div class="actions">
						<a href="#" class="button">Langkah Sebelumnya</a>
						<a href="#" class="button">Langkah Selanjutnya</a>
					</div>
				</td>
			</tr>
			
			</table>-->
			<br/>
			<h2 class="page-title">Pertanyaan</h2>
			<div class="text">Silakan menjawab pertanyaan-pertanyaan berikut, yang sesuai dengan diri anda. Jawaban anda akan menjadi bagian utama dari profil anda di SAHABATKRISTEN yang bisa dibaca oleh anggota yang lain. Anda bisa memperbaharui jawaban anda kapan saja.</div>
			<div class="list-question">
                            <?php foreach($pertanyaan_all as $pertanyaan): ?>
				<div class="question">
                                    <p><?php echo $pertanyaan['pertanyaan_isi']; ?></p>
	    		 	<div class="select-option">
                                    <select name="pertanyaan[<?php echo $pertanyaan['pertanyaan_id']?>]">
                                        <?php foreach($pilihan_all[$pertanyaan['pertanyaan_id']] as $pilihan): ?>
                                        <option value="<?php echo $pilihan['pilihan_id']; ?>"><?php echo $pilihan['pilihan_isi']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
			 	</div>
                            <?php endforeach; ?>
			</div>
			<div class="actions">
				<input type="submit" name="btnSimpan" class="button" value="Simpan"/>
                                <a class="button" href="<?php echo site_url(); ?>" >Batal</a>
			</div>
                    </form>
		</div>
		<!--END Register-->
	</div>
	<div id="footer">
		<?php $this->load->view('common/footer') ?>
	</div>
</div>
</body>
</html>
