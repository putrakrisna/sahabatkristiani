<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php $this->load->view('common/head') ?>
    <script type="text/javascript" src="<?php echo base_url('uploadify/jquery.uploadify.min.js') ?> "></script>
    <link rel="stylesheet" href="<?php echo base_url('uploadify/uploadify.css') ?>" type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo base_url('css/myaccount.css') ?>" type="text/css" media="screen"/>
    <script type="text/javascript" src="<?php echo base_url('js/organictabs.jquery.js') ?> "></script>
	<script type="text/javascript">
	    $(function() {
	
	        $("#example-one").organicTabs();
	        
	        $("#example-two").organicTabs({
	            "speed": 200
	        });
	
	    });
	</script>
		
</head>
<body>
<div id="container">
	<div id="header">
            <?php $this->load->view('common/header') ?>
	</div>
	<?php $this->load->view('common/nav') ?>
	<div id="content">
		<h2 class="page-title">My Account</h2>
		<div class="myaccount">
			<div class="profile-pict">
				<div class="profile-pict-large"><img src="images/pp.jpg"/></div>
                                <div class="link-upload"><button id="file_upload" class="btn-upload">Upload Photo</button></div>
				<div class="profile-pict-thumbnail" id="slides">
					<div>
						<img src="<?php echo base_url('images/pp.jpg');?>"/>
						<img src="<?php echo base_url('images/pp.jpg');?>"/>
						<img src="<?php echo base_url('images/pp.jpg');?>"/>
						<img src="<?php echo base_url('images/pp.jpg');?>"/>
					</div>
					<div>
						<img src="<?php echo base_url('images/pp.jpg');?>"/>
						<img src="<?php echo base_url('images/pp.jpg');?>"/>
						<img src="<?php echo base_url('images/pp.jpg');?>"/>
						<img src="<?php echo base_url('images/pp.jpg');?>"/>
					</div>
					<a class="slidesjs-previous slidesjs-navigation" href="#">Prev</a>
					<a class="slidesjs-next slidesjs-navigation" href="#">Next</a>
				</div>
			</div>
			<div class="member-desc">
                            <div class="member-name male"><?php echo $user['user_firstname']; ?> / <?php echo $this->umur->cekUmur($user_detail['user_tgl_lahir']); ?>  / <?php echo $user_detail['user_kota']; ?>  <span class="online-now"></span></div>
				<div class="member-info">
					<a href="#" class="link-edit">Edit Info</a>
					<div class="clear"></div>
					<table>
						<tbody>
							<tr>
								<td class="lbl-form"><span>Tanggal Lahir:</span></td>
								<td>
									<div class="input-text date">
                                                                            <input type="text" name="txtTglLahir" class="date-pick" value="<?php echo $user_detail['user_tgl_lahir']; ?>"/>
									</div>
                                </td>
							</tr>
							<tr>
								<td class="lbl-form"><span>Lokasi:</span></td>
                                                                <td><div class="input-text"><input type="text" name="txtLokasi" value="<?php echo $user_detail['user_kota']; ?>" /></div></td>
							</tr>
							<tr>
								<td>Login Terakhir:</td>
								<td><span class="last-login">7 Desember ; 11:11</span></td>
							</tr>
							<tr>
								<td></td>
								<td>
									<div class="actions">
										<input type="submit" name="btnSimpan" class="button" value="Simpan"/>
										<button class="button" name="btnBatal">Batal</button>
									</div>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div class="clear"></div>
			<div class="personal-info">
				<h3>Informasi <span>Personal</span></h3>
				<div id="example-two">
					
		    		<ul class="nav">
		                <li class="nav-one"><a href="#umum" class="current">Umum</a></li>
		                <li class="nav-two"><a href="#cirifisik">Ciri Fisik</a></li>
		                <li class="nav-three"><a href="#kebiasaan">Kebiasaan</a></li>
		                <li class="nav-four"><a href="#kehidupanpribadi">Kehidupan Pribadi</a></li>
		                <li class="nav-five last"><a href="#kesukaan">Kesukaan</a></li>
		            </ul>
		    		
		    		<div class="list-wrap">
		    		
		    			<div id="umum">
		    				<a href="#" class="link-edit-personalinfo">Edit Info</a>
		    				<div class="clear"></div>
                                                <?php foreach ($pertanyaan_all as $key => $value):?>
			        		 <div class="question">
                                                     <p><?php echo $value; ?></p>
			        		 	<div class="select-option">
									<select>
                                                                <?php foreach($pilihan[$key] as $key1 => $value1): ?>
                                                                            <option value="<?php echo $key1; ?>" <?php if($jawaban[$key] == $key1)  echo "selected";?> ><?php echo $value1; ?></option>
                                                                <?php endforeach; ?>
									</select>
								</div>
		        		 	</div>
                                                <?php endforeach; ?>
			        		<div class="actions">
								<input type="submit" name="btnSimpan" class="button" value="Simpan"/>
								<button class="button" name="btnBatal">Batal</button>
							</div>
		    			</div>
		        		 
		        		 <div id="cirifisik" class="hide">
		        		 	<a href="#" class="link-edit-personalinfo">Edit Info</a>
		        		 	<div class="clear"></div>
		                    <div class="question">
		        		 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</p>
			        		 	<div class="select-option">
									<select>
										<option>Jawaban</option>
									</select>
								</div>
		        		 	</div>
		        		 	<div class="question">
		        		 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</p>
			        		 	<div class="select-option">
									<select>
										<option>Jawaban</option>
									</select>
								</div>
		        		 	</div>
		        		 	<div class="question">
		        		 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</p>
			        		 	<div class="select-option">
									<select>
										<option>Jawaban</option>
									</select>
								</div>
		        		 	</div>
			        		<div class="actions">
								<input type="submit" name="btnSimpan" class="button" value="Simpan"/>
								<button class="button" name="btnBatal">Batal</button>
							</div>
		        		 </div>
		        		 
		        		 <div id="kebiasaan" class="hide">
		        		 	<a href="#" class="link-edit-personalinfo">Edit Info</a>
		        		 	<div class="clear"></div>
		        		    <div class="question">
		        		 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</p>
			        		 	<div class="select-option">
									<select>
										<option>Jawaban</option>
									</select>
								</div>
		        		 	</div>
		        		 	<div class="question">
		        		 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</p>
			        		 	<div class="select-option">
									<select>
										<option>Jawaban</option>
									</select>
								</div>
		        		 	</div>
		        		 	<div class="question">
		        		 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</p>
			        		 	<div class="select-option">
									<select>
										<option>Jawaban</option>
									</select>
								</div>
		        		 	</div>
			        		<div class="actions">
								<input type="submit" name="btnSimpan" class="button" value="Simpan"/>
								<button class="button" name="btnBatal">Batal</button>
							</div>
		        		 </div>
		        		 
		        		 <div id="kehidupanpribadi" class="hide">
		        		 	<a href="#" class="link-edit-personalinfo">Edit Info</a>
		        		 	<div class="clear"></div>
		        		 	<div class="question">
		        		 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</p>
			        		 	<div class="select-option">
									<select>
										<option>Jawaban</option>
									</select>
								</div>
		        		 	</div>
		        		 	<div class="question">
		        		 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</p>
			        		 	<div class="select-option">
									<select>
										<option>Jawaban</option>
									</select>
								</div>
		        		 	</div>
		        		 	<div class="question">
		        		 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</p>
			        		 	<div class="select-option">
									<select>
										<option>Jawaban</option>
									</select>
								</div>
		        		 	</div>
			        		<div class="actions">
								<input type="submit" name="btnSimpan" class="button" value="Simpan"/>
								<button class="button" name="btnBatal">Batal</button>
							</div>
		        		 </div>
		        		 <div id="kesukaan" class="hide">
		        		 	<a href="#" class="link-edit-personalinfo">Edit Info</a>
		        		 	<div class="clear"></div>
                                                
		        		 	<div class="question">
		        		 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</p>
			        		 	<div class="select-option">
									<select>
										<option>Jawaban</option>
									</select>
								</div>
		        		 	</div>
		        		 	<div class="question">
		        		 		<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry?</p>
			        		 	<div class="select-option">
									<select>
										<option>Jawaban</option>
									</select>
								</div>
		        		 	</div>
			        		<div class="actions">
								<input type="submit" name="btnSimpan" class="button" value="Simpan"/>
								<button class="button" name="btnBatal">Batal</button>
							</div>
		        		 </div>
		        		 
		    		 </div> <!-- END List Wrap -->
				 
				 </div> <!-- END Organic Tabs (Example One) -->    
			</div>
		</div>
	</div>
	<div id="footer">
            <?php $this->load->view('common/footer') ?>
            <script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			$('#file_upload').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>',
                                        'user_id'   : '<?php echo $user['user_id']; ?>'
				},
                                'buttonText': 'Upload Photo',
				'swf'      : '<?php echo base_url('uploadify/uploadify.swf')?>',
				'uploader' : '<?php echo base_url('uploadify/uploadify.php')?>'
			});
		});
            </script>
	</div>
</div>
</body>
</html>
