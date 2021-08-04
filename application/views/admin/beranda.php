<!-- Main content -->
<div class="content-wrapper">
  <br><br><br>
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-lg-12">

        <!-- Quick stats boxes -->
        <div class="row">
          <div class="col-lg-4">

            <!-- Current server load -->
            <div class="panel bg-orange-400">
              <div class="panel-body">

                <h3 class="no-margin"><?php echo $v_member->num_rows(); ?></h3>
                Jumlah Member
              </div>

              <div id="server-load"></div>
            </div>
            <!-- /current server load -->

          </div>

          <div class="col-lg-4">

            <!-- Current server load -->
            <div class="panel bg-teal-400">
              <div class="panel-body">

                <h3 class="no-margin"><?php echo $v_barang->num_rows(); ?></h3>
                Jumlah Produk
              </div>

              <div id="server-load"></div>
            </div>
            <!-- /current server load -->

          </div>

          <div class="col-lg-4">

            <!-- Current server load -->
            <div class="panel bg-blue-400">
              <div class="panel-body">

                <h3 class="no-margin"><?php echo $v_artikel->num_rows(); ?></h3>
                Jumlah Artikel
              </div>

              <div id="server-load"></div>
            </div>
            <!-- /current server load -->

          </div>

        </div>
        <!-- /quick stats boxes -->

      </div>


    </div>
    <!-- /dashboard content -->

    <div class="row">
      <div class="col-md-12">

        <div class="panel panel-flat">
          <div class="panel-heading">
            <h5 class="panel-title">Konfigurasi WEB</h5>
            <div class="heading-elements">
              <ul class="icons-list">
                <li><a data-action="collapse"></a></li>
              </ul>
            </div>
          </div>
          <hr style="margin:0px;">
          <div class="panel-body">
            <?php
            echo $this->session->flashdata('msg');
            ?>
            <form action="" method="post">
              <div class="form-group">
                <label class="control-label col-lg-2">Nama Web</label>
                <div class="col-lg-10">
                  <input type="text" name="nama_web" class="form-control" value="<?php echo $data_web->nama_web; ?>" placeholder="Nama Web" required maxlength="100">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2">Telp.</label>
                <div class="col-lg-10">
                  <input type="text" name="telp" class="form-control" value="<?php echo $data_web->telp; ?>" placeholder="Telp." required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2">Twitter</label>
                <div class="col-lg-10">
                  <input type="text" name="twitter" class="form-control" value="<?php echo $data_web->twitter; ?>" placeholder="Twitter" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2">Facebook</label>
                <div class="col-lg-10">
                  <input type="text" name="fb" class="form-control" value="<?php echo $data_web->fb; ?>" placeholder="Facebook" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2">Google Plus</label>
                <div class="col-lg-10">
                  <input type="text" name="google_plus" class="form-control" value="<?php echo $data_web->google_plus; ?>" placeholder="Google +" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2">Email</label>
                <div class="col-lg-10">
                  <input type="text" name="email" class="form-control" value="<?php echo $data_web->email; ?>" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2">Alamat</label>
                <div class="col-lg-10">
                  <textarea name="alamat" rows="3" cols="80" class="form-control" placeholder="Alamat" required><?php echo $data_web->alamat; ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-lg-2">Embed Lokasi</label>
                <div class="col-lg-10">
                  <textarea name="embed_lokasi" rows="3" cols="80" class="form-control" placeholder="Embed Lokasi" required><?php echo $data_web->embed_lokasi; ?></textarea>
                </div>
              </div>

              <div class="col-lg-12">
                <br>
                <button type="submit" name="btnsimpan" class="btn btn-primary" style="float:right;">Simpan</button>
              </div>

            </form>
          </div>
        </div>

      </div>
    </div>
