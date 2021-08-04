<!-- Page heading -->
<!-- Give background color class on below line (bred, bgreen, borange, bviolet, blightblue, bblue) -->
<div class="page-heading blightblue">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="pull-left"><i class="fa fa-user-md title-icon"></i> About</h2>
        <div class="pull-right heading-meta" style="font-size:15px;"><a href="<?php echo base_url(); ?>" style="color:#f1f1f1;">Home</a> / <a href="about"><span class="lightblue">About</span></a></div>
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

    <div class="service-home">
        <div class="row">

          <!-- Social -->
          <div class="col-md-3">

            <div class="panel panel-default">

                <center>
                  <img src="img/profile/<?php if($t_admin->foto == ''){echo"default.png";}else{echo $t_admin->foto;}  ?>" alt="" class="img-responsive">
                </center>

              <div class="clearfix"></div>

            </div>

          </div>

          <!-- Service -->

          <div class="col-md-9 service-list">

              <!--  Service #1 -->
              <!-- Service icon -->
                <!-- Title -->
                <table>
                  <tr>
                    <td width="20"><i class="fa fa-user"></i></td>
                    <td><?php echo $t_admin->nama_lengkap; ?></td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-phone"></i></td>
                    <td><?php echo $t_admin->no_hp; ?></td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-map-marker"></i></td>
                    <td><?php echo $t_admin->alamat; ?></td>
                  </tr>
                </table>
              <hr />

              <b>Tentang Kami :</b> <br>
                <p><?php echo $t_admin->tentang; ?></p>

              <br />


              <div class="clearfix"></div>

          </div>

          <!-- Image -->
          <!-- <div class="col-md-3">
            <a href="#" class="service-image"><img src="img/photos/girl2.png" alt="" class="img-responsive" /></a>
          </div> -->

        </div>

        <hr />

    </div>

  </div>
</div>
<!-- Content ends -->


</div>
<!-- Content ends -->
