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
        <h4>Pencarian <span>Cepat</span></h4>
        <form method="POST" action="<?php echo site_url('pencarian/hasil'); ?>" autocomplete="off" accept-charset="utf-8">
        <div class="quicksearch-form">
                <table>
                        <tbody>
                                <tr>
                                        <td class="lbl-form"><span>Mencari:</span></td>
                                        <td>
                                                <div class="select-option">
        <select name="user_gender">
                                                                <option>Pria</option>
                                                                <option>Wanita</option>
                                                        </select>
                                                </div>
                                        </td>
                                </tr>
                                <tr>
                                        <td class="lbl-form"><span>Usia:</span></td>
                                        <td>
                                                <div class="select-option">
                                                        <?php $_iAgeStart = 17;?>
        <select name="age_start">
                <?php for($_iAgeStart=17;$_iAgeStart<=50;$_iAgeStart++):?>
                                                                <option value="<?php echo $_iAgeStart ?>"><?php echo $_iAgeStart ?></option>
                                                                <?php endfor?>
                                                        </select>
                                                </div>
                                                <div style="float:left;margin-right:3px;margin-top:13px;">s.d.</div>
                                                <div class="select-option">
                                                        <?php $_iAgeEnd = 17;?>
        <select name="age_end">
                                                                <?php for($_iAgeEnd=17;$_iAgeEnd<=50;$_iAgeEnd++):?>
                                                                <option value="<?php echo $_iAgeEnd ?>"><?php echo $_iAgeEnd ?></option>
                                                                <?php endfor?>
                                                        </select>
                                                </div>
                                        </td>
                                </tr>

                        </tbody>
                </table>
        </div>
        <div class="actions">
                <input type="submit" name="btnSearch" class="button" value="Cari"/>
        </div>
        </form>
</div>
        
        <!--end content-->
        </div>
	<div id="footer">
            <?php $this->load->view('common/footer') ?>
	</div>
</div>
</body>
</html>
