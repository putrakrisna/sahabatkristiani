<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <?php $this->load->view('common/head') ?>
    <!--bagian ini untuk load css dan js--> 
    <link rel="stylesheet" href="<?php echo base_url('css/myaccount.css'); ?> " type="text/css" media="screen"/>
    <!--end load css dan js-->
    
</head>
<body>
<div id="container">
	<div id="header">
            <?php $this->load->view('common/header') ?>
	</div>
	<?php $this->load->view('common/nav') ?>
	<div id="content">
		<h2 class="page-title">Pencarian Member</h2>
		<div class="myaccount">
			<div class="pager">
                            <span class="info">Ditemukan <?php echo isset($user) ? $jml : '0'; ?> anggota </span>
				<div class="shown">
					<div class="select-option">
						<select>
							<option>20</option>
						</select>
					</div>
					<a href="#">Tampilkan Semua</a>
				</div>
				<div class="pagination">
					<span>Halaman</span>
					<a href="#"><<</a>
					<a href="#"><</a>
					<a href="#">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<a href="#">5</a>
					<a href="#">6</a>
					<a href="#">></a>
					<a href="#">>></a>
				</div>
				<div class="clear"></div>
			</div>
                        <?php if(isset($user)): ?>
                    <div class="members">
				<ul>
                                        <?php foreach($user as $row): ?>
					<li class="item">
						<div class="member">
							<span class="lbl-newmember"></span>
                                                        <a href="<?php echo site_url(); ?>" class="member-image"><img src="<?php echo base_url('images/thumbnail.jpg'); ?>"/></a>
                                                        <a href="<?php echo site_url(); ?>" class="member-name <?php echo $row['user_gender']; ?>"><?php echo $row['user_firstname'].' ('.$this->umur->cekUmur($row['user_tgl_lahir']) .')'; ?> </a>
						</div>
					</li>
                                        <?php endforeach; ?>
					
					<div class="clear"></div>
				</ul>
			</div><!-- end .member-->
                        <?php endif; ?>
		</div>
	</div>
	<div id="footer">
            <?php $this->load->view('common/footer') ?>
	</div>
</div>
</body>
</html>
