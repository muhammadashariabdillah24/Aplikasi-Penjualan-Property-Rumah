<!-- Page heading -->
<!-- Give background color class on below line (bred, bgreen, borange, bviolet, blightblue, bblue) -->
<div class="page-heading blightblue">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="pull-left"><i class="fa fa-users title-icon"></i> Registrasi Member</h2>
        <div class="pull-right heading-meta" style="font-size:15px;"><a href="<?php echo base_url(); ?>" style="color:#f1f1f1;">Home</a> / <a href="login"><span class="lightblue">Registrasi Member</span></a></div>
      </div>
    </div>
  </div>
</div>
<!-- Page heading ends -->


<!-- Content starts -->
<div class="content">

  <!-- Content starts -->
  <div class="content">
    <div class="container">

      <div class="contact">

                        <div class="row">
                           <div class="col-md-3 col-sm-3"></div>
                           <div class="col-md-6 col-sm-6">
                              <div class="cwell">
                                 <!-- Contact form -->
                                    <h3 class="title">Form Registrasi</h3>
                                    <div class="form">
                                      <?php
                                      echo $this->session->flashdata('msg');
                                      ?>
                                      <!-- Contact form (not working)-->
                                      <form class="form-horizontal" action="" method="post">
                                          <!-- Name -->
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="nama">Nama</label>
                                            <div class="col-md-9">
                                              <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap" maxlength="100" required>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="email">Email</label>
                                            <div class="col-md-9">
                                              <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="no_hp">No. HP</label>
                                            <div class="col-md-9">
                                              <input type="text" class="form-control" id="no_hp" name="no_hp" placeholder="No. HP" maxlength="20" required>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="alamat">Alamat</label>
                                            <div class="col-md-9">
                                              <textarea name="alamat" class="form-control" rows="4" cols="80" placeholder="Alamat Lengkap" required></textarea>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="username">Username</label>
                                            <div class="col-md-9">
                                              <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="password">Password</label>
                                            <div class="col-md-9">
                                              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="repassword">Re-Password</label>
                                            <div class="col-md-9">
                                              <input type="password" class="form-control" id="repassword" name="repassword" placeholder="Re-Password" required>
                                            </div>
                                          </div>
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
                      											 <div class="col-md-9 col-md-offset-3">
                      												<button type="submit" name="btndaftar" class="btn btn-info" style="float:right;">Submit</button>
                                              <a href="login" class="btn btn-default">Login Member?</a>
                      												<button type="reset" class="btn btn-warning" style="float:right;margin-right:10px;">Reset</button>
                      											 </div>
                                          </div>
                                      </form>
                                    </div>
                                 </div>
                           </div>

                        </div>

                     </div>

    </div>
  </div>
  <!-- Content ends -->



</div>
<!-- Content ends -->
