<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php $this->load->view('common/head') ?>
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
	<div id="nav">
            <?php $this->load->view('common/nav') ?>
	</div>
	<div id="content">
		<h2 class="page-title">My Account</h2>
		<div class="myaccount">
			<div class="profile-pict">
				<a href="#"><img src="<?php echo base_url('images/pp.jpg') ?> "/></a>
			</div>
			<div class="member-desc">
				<div class="member-name male">Nama / Umur / Yogyakarta <span class="online-now"></span></div>
				<div class="member-info">
					<a href="#" class="link-edit">Edit Info</a>
					<div class="clear"></div>
					<table>
						<tbody>
							<tr>
								<td class="lbl-form"><span>Tanggal Lahir:</span></td>
								<td>
									<div class="input-text date"><input type="text" name="txtTglLahir"/></div>
                                                                        <a href="#"><img src="<?php echo base_url('images/date.png') ?> "/></a>
								</td>
							</tr>
							<tr>
								<td class="lbl-form"><span>Lokasi:</span></td>
								<td><div class="input-text"><input type="password" name="txtLokasi" /></div></td>
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
	</div>
</div>
</body>
</html>
