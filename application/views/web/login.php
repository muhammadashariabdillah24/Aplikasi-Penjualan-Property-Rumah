<!-- Page heading -->
<!-- Give background color class on below line (bred, bgreen, borange, bviolet, blightblue, bblue) -->
<div class="page-heading blightblue">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="pull-left"><i class="fa fa-key title-icon"></i> Login Member</h2>
        <div class="pull-right heading-meta" style="font-size:15px;"><a href="<?php echo base_url(); ?>" style="color:#f1f1f1;">Home</a> / <a href="login"><span class="lightblue">Login Member</span></a></div>
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
                                    <h3 class="title">Form Login</h3>
                                    <div class="form">
                                      <?php
                                      echo $this->session->flashdata('msg');
                                      ?>
                                      <!-- Contact form (not working)-->
                                      <form class="form-horizontal" action="" method="post">
                                          <!-- Name -->
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="username">Username</label>
                                            <div class="col-md-9">
                                              <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username" required>
                                            </div>
                                          </div>
                                          <!-- Email -->
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="password">Password</label>
                                            <div class="col-md-9">
                                              <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password" required>
                                            </div>
                                          </div>
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
                      											 <div class="col-md-9 col-md-offset-3">
                      												<button type="submit" name="btnlogin" class="btn btn-info" style="float:right;">Login</button>
                                              <a href="register" class="btn btn-default">Registrasi Member?</a>
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
