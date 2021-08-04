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


<!-- Footer -->

<!-- Below area is for testimonial -->
<div class="foot blightblue">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

          <!-- User icon -->
          <span class="twitter-icon text-center"><i class="fa fa-user"></i></span>
          <p><em>"Terimakasih sudah berkunjung di web <?php echo $data_web->nama_web; ?>"</em></p>


      </div>
    </div>
  </div>
</div>

<footer>
  <div class="container">
    <div class="row">


      <div class="widgets">

        <div class="col-md-3">
          <div class="fwidget">

            <h4>Kontak</h4>

                  <p>Silahkan Hubungi Kami dan tanyakan apapun tentang <?php echo $data_web->nama_web; ?>. </p>
                  <hr />
                  <i class="fa fa-home"></i> &nbsp; <?php echo ucwords($data_web->alamat); ?>
                  <hr />
                  <i class="fa fa-phone"></i> &nbsp; <?php echo ucwords($data_web->telp); ?>
                  <hr />
                  <i class="fa fa-envelope-o"></i> &nbsp; <a href="mailto:#"><?php echo ucwords($data_web->email); ?></a>
                  <hr />


          </div>
        </div>

        <div class="col-md-3">
          <div class="fwidget">
            <h4>Menu</h4>
            <ul>
              <li><a href="<?php echo base_url(); ?>">Home - Halaman Utama</a></li>
              <li><a href="about">About</a></li>
              <li><a href="artikel">Artikel - <?= $t_artikel; ?></a></li>
              <li><a href="help">Help</a></li>
            </ul>
          </div>
        </div>

        <div class="col-md-3">
          <div class="fwidget">

            <!-- <h4>Subscribe</h4>
            <p>Duis leo risus, condimentum ut posuere ac, vehicula luctus nunc.  Quisque rhoncus, a sodales enim arcu quis turpis.</p>
            <p>Enter you email to Subscribe</p>

			<form class="form-inline" role="form">
			  <div class="input-group">
				<input type="text" class="form-control" id="subscribe" placeholder="Subscribe...">
				<span class="input-group-btn">
					<button type="submit" class="btn btn-danger">Subscribe</button>
				</span>
			  </div>
			</form> -->
              <h4>Sosial Media Kami</h4>
              <p>Ikuti dan Tanyakan seputar <?php echo $data_web->nama_web; ?> di sosial media kami.</p>

              <div class="social">
                <?php if ($data_web->fb != ''): ?>
                          <a href="<?php echo $data_web->fb; ?>" class="bblue" target="_blank"><i class="fa fa-facebook"></i></a>
                <?php endif; ?>
                <?php if ($data_web->google_plus != ''): ?>
                          <a href="<?php echo $data_web->google_plus; ?>" class="borange" target="_blank"><i class="fa fa-google-plus"></i></a>
                <?php endif; ?>
                <?php if ($data_web->twitter != ''): ?>
                        <a href="<?php echo $data_web->twitter; ?>" class="blightblue" target="_blank"><i class="fa fa-twitter"></i></a>
                <?php endif; ?>
                <!-- <a href="#" class="bviolet"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="bred"><i class="fa fa-pinterest"></i></a>
                <a href="#" class="borange"><i class="fa fa-rss"></i></a> -->
              </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="fwidget">
            <h4>Artikel Terbaru</h4>
            <ul>
              <?php
              $artikel_new = $this->db->query("SELECT * FROM tbl_artikel ORDER BY id_artikel DESC LIMIT 5")->result();
              foreach ($artikel_new as $baris) {?>
                <li><a href="ar_d/<?php echo $baris->url; ?>"><?php echo ucwords($baris->judul); ?></a></li>
              <?php
              } ?>
            </ul>
          </div>
        </div>

      </div>
	</div>
	<div class="row">
      <div class="col-md-12">
          <div class="copy">
                <p>
                  Copyright &copy; <a href="#"><?php echo substr(base_url(), 7); ?></a> - <a href="<?php echo base_url(); ?>">Home</a>
                  <!-- | <a href="aboutus.html">About Us</a> | <a href="faq.html">FAQ</a>  -->
                  | <a href="profile">Tentang Kami</a>
                </p>
          </div>
      </div>

    </div>
  <div class="clearfix"></div>
  </div>
</footer>


		<!-- Scroll to top -->
		<span class="totop"><a href="#"><i class="fa fa-angle-up"></i></a></span>


		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="assets/web/js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="assets/web/js/bootstrap.min.js"></script>
		<!-- prettyPhoto -->
		<script src="assets/web/js/jquery.prettyPhoto.js"></script>
		<!-- isotope -->
		<script src="assets/web/js/jquery.isotope.js"></script>
		<!-- Navigation menu -->
		<script src="assets/web/js/ddlevelsmenu.js"></script>
		<!-- jQuery cSlider / Extra script for cslider -->
		<script src="assets/web/js/jquery.cslider.js"></script>
		<script src="assets/web/js/modernizr.custom.69985.js"></script>
		<!-- Support -->
		<script src="assets/web/js/filter.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="assets/web/js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="assets/web/js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="assets/web/js/custom.js"></script>
	</body>

<!-- Mirrored from ashobiz.dreamhosters.com/wrapbootstrap/metroman325/index-parallax.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Sep 2017 08:40:16 GMT -->
</html>
