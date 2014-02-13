<?php  $login = $this->session->userdata('logged_in');?>
<?php if($login['user_id']):?>
<div id="nav">
		<ul class="left-nav">
			<li><a href="<?php echo site_url('surat') ?>">Kotak Surat</a></li>
			<li><span>|</span></li>
			<li><a href="<?php echo site_url('chat') ?>">Chatbox</a></li>
			<li><span>|</span></li>
			<li><a href="<?php echo site_url('onlineuser') ?>">Anggota Online</a></li>
			<li><span>|</span></li>
			<li><a href="<?php echo site_url('onlineuser') ?>">Anggota Yang Cocok</a></li>
			<li><span>|</span></li>
			<li><a href="<?php echo site_url('pencarian') ?>">Cari</a></li>
		</ul>
		<ul class="right-nav">
                    <li><span>Selamat datang</span>&nbsp;<a href="<?php echo site_url('account') ?>"><?php echo $login['user_firstname']?></a></li>
			<li><span>|</span></li>
                        <li><a href="<?php echo site_url('logout') ?>">Logout</a></li>
		</ul>
		<div class="clear"></div>
	</div>
<?php endif;?>