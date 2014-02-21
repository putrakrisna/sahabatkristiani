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
    <?php echo validation_errors(); ?>
        <h2 class="page-title">tulis surat</h2>
        <form method="POST" action="" autocomplete="off" accept-charset="utf-8">
            <table>
                <tbody>
                    <tr>
                        <td class="lbl-form"><span>Judul:</span></td>
                        <td><input type="text" name="surat_judul" value="" placeholder="judul surat"></input></td>
                    </tr>
                    <tr>
                        <td class="lbl-form"><span>Isi</span></td>
                        <td><textarea rows="4" cols="50" name="surat_isi" ></textarea></td>
                    </tr>
                </tbody>
            </table>
            <div class="actions">
                    <input type="submit" name="btnKirim" class="button" value="Kirim"/>
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
