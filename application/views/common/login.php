<?php if($this->session->userdata('user_id') == null):?>
<div class="login">
    <form method="POST" action=""  accept-charset="utf-8">
        <h4>Login <span>Member</span></h4>
        <?php echo validation_errors(); ?>
        <div class="login-form">
                <table>
                        <tbody>
                                <tr>
                                        <td class="lbl-form"><span>Alamat Email:</span></td>
                                        <td><div class="input-text"><input type="text" name="txtEmail" placeholder="email"/></div></td>
                                </tr>
                                <tr>
                                        <td class="lbl-form"><span>Sandi:</span></td>
                                        <td><div class="input-text"><input type="password" name="txtPassword" placeholder="password"/></div></td>
                                </tr>
                                <tr>
                                        <td></td>
                                        <td><a href="#">Lupa Sandi</a><br/><span>Bukan member?</span>&nbsp;<a href="<?php echo site_url("register")?>">Daftar sekarang!</a></td>
                                </tr>
                        </tbody>
                </table>
        </div>
        <div class="actions">
                <input type="submit" name="btnLogin" class="button" value="Login"/>
        </div>
    </form>
					</div>
<?php endif;?>