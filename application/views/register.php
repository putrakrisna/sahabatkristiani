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
	<div id="nav">
		<?php $this->load->view('common/nav') ?>
	</div>
	<div id="content">
		<!--Register-->
		<h2 class="page-title">Register</h2>
		<div class="register">
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
<!--					<tr>
						<td class="lbl-form"><span>First Name</span></td>
						<td>
							<div class="input-text"><input type="text" name="txtLastName" value="<?php echo set_value('txtLastName', '') ?>"/></div>
						</td>
					</tr>-->
					
					<tr>
						<td class="lbl-form"><span>Tanggal Lahir:</span></td>
						<td>
							<div class="input-text date"><input type="text" name="txtTglLahir" class="date-pick"/></div>
							<div class="clear"></div>
						</td>
					</tr>
					<tr>
						<td class="lbl-form"><span>Lokasi:</span></td>
						<td><div class="input-text"><input type="text" name="txtLokasi" value="<?php echo set_value('txtLokasi', '') ?>"/></div></td>
					</tr>
					<tr>
						<td class="lbl-form"><span>Gender:</span></td>
						<td>
							<div class="select-option">
                                                            <select name="slcGender">
									<option>Men</option>
								</select>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
			<div class="list-question">
                            <?php foreach($pertanyaan_all as $pertanyaan): ?>
				<div class="question">
                                    <p><?php echo $pertanyaan['pertanyaan_isi']; ?></p>
	    		 	<div class="select-option">
                                    <select name="pertanyaan_<?php echo $pertanyaan['pertanyaan_id']?>">
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
				<button class="button" name="btnBatal">Batal</button>
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
