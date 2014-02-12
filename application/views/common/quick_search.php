<div class="quick-search">
						<h4>Pencarian <span>Cepat</span></h4>
                                                <form method="POST" action="" autocomplete="off" accept-charset="utf-8">
						<div class="quicksearch-form">
							<table>
								<tbody>
									<tr>
										<td class="lbl-form"><span>Mencari:</span></td>
										<td>
											<div class="select-option">
                                               	<select name="slcGender">
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
                                                <select name="slcAgeStart">
                                                	<?php for($_iAgeStart=17;$_iAgeStart<=50;$_iAgeStart++):?>
													<option value="<?php echo $_iAgeStart ?>"><?php echo $_iAgeStart ?></option>
													<?php endfor?>
												</select>
											</div>
											<div style="float:left;margin-right:3px;margin-top:13px;">s.d.</div>
											<div class="select-option">
												<?php $_iAgeEnd = 17;?>
                                                <select name="slcAgeEnd">
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