<br><br>
					<!-- Simple login form -->
					<form action="" method="post">
						<div class="panel panel-body login-form">
							<div class="text-center">

								<h5 class="content-group">Form Login Admin<small class="display-block">Silahkan Masuk</small></h5>
								<?php
								echo $this->session->flashdata('msg');
								?>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group has-feedback has-feedback-left">
								<input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>



									<div class="form-group">
										<button type="submit" name="btnlogin" class="btn btn-primary btn-block" style="border:1px solid #f1f1f1;">Masuk <i class="icon-circle-right2 position-right"></i></button>
									</div>

							<div class="text-center">
<!--								<a href="admin/lupa_password">Lupa Password??</a>-->
							</div>
						</div>
					</form>
					<!-- /simple login form -->
