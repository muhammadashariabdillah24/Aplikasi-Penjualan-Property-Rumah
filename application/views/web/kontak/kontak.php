<!-- Page heading -->
<!-- Give background color class on below line (bred, bgreen, borange, bviolet, blightblue, bblue) -->
<div class="page-heading blightblue">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="pull-left"><i class="fa fa-question title-icon"></i> Help</h2>
        <div class="pull-right heading-meta" style="font-size:15px;"><a href="<?php echo base_url(); ?>" style="color:#f1f1f1;">Home</a> / <a href="help"><span class="lightblue">Help</span></a></div>
      </div>
    </div>
  </div>
</div>
<!-- Page heading ends -->


<!-- Content starts -->
<div class="content">

  <!-- <div class="container">
    <div class="panel panel-default">
      <div class="row">
        <div class="col-md-12">

          <br><br>
            <center>
              KOTAk IKLAN
            </center>
          <br><br>

        </div>
      </div>
    </div>
  </div> -->


  <!-- Content starts -->
  <div class="content">
    <div class="container">

      <div class="contact">
                        <div class="row">
                           <div class="col-md-12">
                              <!-- Google maps -->
                              <div class="gmap">
                                 <!-- Google Maps. Replace the below iframe with your Google Maps embed code -->
                                 <iframe height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="<?php echo $data_web->embed_lokasi; ?>"></iframe>
                              </div>

                           </div>
                        </div>
                        <?php
                        echo $this->session->flashdata('msg');
                        ?>
                        <div class="row">
                           <div class="col-md-6 col-sm-6">
                              <div class="cwell">
                                 <!-- Contact form -->
                                    <h3 class="title">Form Kontak</h3>
                                    <div class="form">
                                      <!-- Contact form (not working)-->
                                      <form class="form-horizontal" action="" method="post">
                                          <!-- Name -->
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="name">Nama</label>
                                            <div class="col-md-9">
                                              <input type="text" class="form-control" id="name" name="nama" required>
                                            </div>
                                          </div>
                                          <!-- Email -->
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="email">Email</label>
                                            <div class="col-md-9">
                                              <input type="email" class="form-control" id="email" name="email" required>
                                            </div>
                                          </div>
                                          <!-- Comment -->
                                          <div class="form-group">
                                            <label class="control-label col-md-3" for="comment">Komentar</label>
                                            <div class="col-md-9">
                                              <textarea class="form-control" id="comment" rows="3" name="komentar" required></textarea>
                                            </div>
                                          </div>
                                          <!-- Buttons -->
                                          <div class="form-group">
                                             <!-- Buttons -->
                      											 <div class="col-md-9 col-md-offset-3">
                      												<button type="submit" name="btnkirim" class="btn btn-info">Kirim</button>
                      												<button type="reset" class="btn btn-warning">Reset</button>
                      											 </div>
                                          </div>
                                      </form>
                                    </div>
                                 </div>
                           </div>
                           <div class="col-md-6 col-sm-6">
                                 <div class="cwell">
                                    <!-- Address section -->
                                       <h3 class="title">Alamat</h3>

                                       <div class="address">
                                           <address>
                                              <!-- Company name -->
                                              <h4>Responsive Web, Inc.</h4>
                                              <!-- Address -->
                                              <?php echo ucwords($data_web->alamat); ?><br>
                                              <!-- Phone number -->
                                              <abbr title="Phone">Telp.</abbr> <?php echo $data_web->telp; ?>.
                                           </address>

                                           <address>
                                              <!-- Name -->
                                              <h4><?php echo ucwords($data_web->nama_web); ?></h4>
                                              <!-- Email -->
                                              <a href="mailto:#"><?php echo $data_web->email; ?></a>
                                           </address>

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
