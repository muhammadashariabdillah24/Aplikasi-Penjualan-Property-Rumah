<!-- Page heading -->
<!-- Give background color class on below line (bred, bgreen, borange, bviolet, blightblue, bblue) -->
<div class="page-heading blightblue">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="pull-left"><i class="fa fa-user title-icon"></i> <?php echo ucwords($t_member->nama); ?></h2>
        <div class="pull-right heading-meta" style="font-size:15px;"><a href="<?php echo base_url(); ?>" style="color:#f1f1f1;">Home</a> / <a href="member"><span class="lightblue">Member</span></a></div>
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
          <?php
          echo $this->session->flashdata('msg');
          ?>
          <!-- Social -->
          <div class="col-md-3">

            <div class="panel panel-default">

                <center>
                  <img src="img/profile/default.png" alt="" class="img-responsive">
                </center>

              <div class="clearfix"></div>

            </div>

          </div>

          <!-- Service -->

          <div class="col-md-9 service-list">

              <!--  Service #1 -->
              <!-- Service icon -->
                <!-- Title -->
              <?php
              $link_2 = strtolower($this->uri->segment(2));
              if ($link_2 == 'e') {?>
                <form action="" method="post">
                  <h4><i class="fa fa-key"></i> Username <input type="text" class="form-control" placeholder="Username" value="<?php echo $t_member->username; ?>" maxlength="30" required readonly/></h4>
                  <h4><i class="fa fa-user"></i> Nama Lengkap <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" value="<?php echo $t_member->nama; ?>" maxlength="100" required/></h4>
                  <h4><i class="fa fa-envelope"></i> Email <input type="text" class="form-control" name="email" placeholder="Email" value="<?php echo $t_member->email; ?>" required/></h4>
                  <h4><i class="fa fa-phone"></i> No HP <input type="text" class="form-control" name="no_hp" placeholder="No HP" value="<?php echo $t_member->no_hp; ?>" maxlength="20" required/></h4>
                  <h4><i class="fa fa-map-marker"></i> Alamat <textarea class="form-control" name="alamat" placeholder="Alamat" required><?php echo $t_member->alamat; ?></textarea></h4>
                  <button type="submit" name="btnupdate" class="btn btn-primary" style="float:right;"><i class="fa fa-pencil"></i> Update</button>
                  <a href="member" class="btn btn-warning" style="float:right;margin-right:10px;">Kembali</a>
                </form>
              <?php
            }elseif ($link_2 == 'np') {?>
                <form action="" method="post">
                  <h4><i class="fa fa-key"></i> Password<input type="password" name="password" class="form-control" placeholder="Password" value="" required/></h4>
                  <h4><i class="fa fa-key"></i> Re-Password<input type="password" name="password2" class="form-control" placeholder="Re-Password" value="" required/></h4>
                  <button type="submit" name="btnupdate2" class="btn btn-primary" style="float:right;"><i class="fa fa-pencil"></i> Update</button>
                  <a href="member" class="btn btn-warning" style="float:right;margin-right:10px;">Kembali</a>
                </form>
              <?php
              }else{ ?>
                <table>
                  <tr>
                    <td width="20"><i class="fa fa-key"></i></td>
                    <td><?php echo $t_member->username; ?></td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-user"></i></td>
                    <td><?php echo $t_member->nama; ?></td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-envelope"></i></td>
                    <td><?php echo $t_member->email; ?></td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-phone"></i></td>
                    <td><?php echo $t_member->no_hp; ?></td>
                  </tr>
                  <tr>
                    <td><i class="fa fa-map-marker"></i></td>
                    <td><?php echo $t_member->alamat; ?></td>
                  </tr>
                </table>
                  <a href="member/e" class="btn btn-success" style="float:right;"><i class="fa fa-pencil"></i> Ubah Data Member</a>
                  <a href="member/np" class="btn btn-warning" style="float:right;"><i class="fa fa-key"></i> Ubah Password</a>
              <?php
              } ?>
              <hr />

              <b>Tanggal Daftar :</b> <?php echo $this->Mcrud->tgl_id($t_member->tgl_daftar); ?><br>
              <b>Terakhir Login :</b> <?php echo $this->Mcrud->tgl_id(date('Y-m-d', strtotime($t_member->terakhir_login)))." ".date('H:i:s', strtotime($t_member->terakhir_login)); ?>

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
