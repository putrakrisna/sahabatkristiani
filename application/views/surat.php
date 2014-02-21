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
		<h2 class="page-title">Kotak Masuk</h2>
		<div class="myaccount">
			<div class="pager">
				<span class="info">Anda memiliki 200 pesan | Pesan 1-50 dari 200</span>
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
			<div class="list-message">
			<table id="list-message inbox">
				<thead>
					<tr>
						<th class="checkbox"><input type="checkbox" name="selectMessage"/></th>
						<th>Subject</th>
						<th>Pengirim</th>
						<th>Tanggal/Waktu</th>
					</tr>
				</thead>
				<tbody>
                                    <?php if(isset($surat_all)): ?>
                                        <?php foreach($surat_all as $surat): ?>
					<tr>
                                            <td class="checkbox"><input type="checkbox" name="surat_id" value="<?php echo $surat['surat_id']; ?>"/></td>
                                                <td><a href="#"><?php echo $surat['surat_judul']; ?></a></td>
                                                <?php $pengirim = $this->user->get_by_id($surat['surat_pengirim'])->row_array(); ?>
                                                <td><?php echo $pengirim['user_firstname'];?></td>
                                                <td><?php echo $surat['surat_tgl_kirim']; ?></td>
					</tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
				</tbody>
			</table>
			<div class="message-action"><a href="#">Delete</a></div>
			</div>
		</div>
	</div>
	<div id="footer">
            <?php $this->load->view('common/footer') ?>
	</div>
</div>
</body>
</html>
