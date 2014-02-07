<?php  $login = $this->session->userdata('logged_in');?>
<?php if($login['user_id']):?>
<div id="nav">
		<ul class="left-nav">
			<li><a href="#">Kotak Surat</a></li>
			<li><span>|</span></li>
			<li><a href="#">Chatbox</a></li>
			<li><span>|</span></li>
			<li><a href="#">Cari</a></li>
		</ul>
		<ul class="right-nav">
                    <li><span>Selamat datang</span>&nbsp;<a href="<?php echo base_url().'account' ?>"><?php echo $login['user_fullname']?></a></li>
			<li><span>|</span></li>
                        <li><a href="<?php echo base_url().'logout'?>">Logout</a></li>
		</ul>
		<div class="clear"></div>
	</div>
<?php endif;?>