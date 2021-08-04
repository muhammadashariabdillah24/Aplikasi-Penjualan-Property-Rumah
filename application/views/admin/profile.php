<?php
$user = $v_admin->row();?>
<script src="assets/css/fileinput.min.css"></script>

<style>
    .kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
      margin: 0;
      padding: 0;
      border: none;
      box-shadow: none;
      text-align: center;
    }
    .kv-avatar {
      display: inline-block;
    }
    .kv-avatar .file-input {
      display: table-cell;
      width: 213px;
    }
    .kv-reqd {
      color: red;
      font-family: monospace;
      font-weight: normal;
    }
    .fileinput-remove-button{
      margin-top: -20px;
    }
    .text-muted{
      cursor: pointer;
    }
</style>
<!-- Main content -->
<div class="content-wrapper">
  <br><br><br>
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="col-md-6">
      <div class="panel panel-flat">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold"><i class="icon-user"></i> Ubah Profil</legend>
              <?php
              echo $this->session->flashdata('msg');
              ?>
              <div id="kv-avatar-errors-1" class="center-block" style="width:100%;display:none"></div>
              <form class="form form-vertical" action="" method="post" enctype="multipart/form-data">
                <center>
                  <div class="kv-avatar">
                      <input id="avatar-1" name="avatar-1" type="file" class="file-loading">
                  </div>
                  <div class="kv-avatar-hint"><small><b>Select file < 3 MB</b></small></div>
                </center>
                <hr>
                <div class="form-group">
                  <label class="control-label col-lg-3">Username</label>
                  <div class="col-lg-9">
                    <input type="text" name="username" class="form-control" value="<?php echo $user->username; ?>" placeholder="Username" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Nama Lengkap</label>
                  <div class="col-lg-9">
                    <input type="text" name="nama_lengkap" class="form-control" value="<?php echo $user->nama_lengkap; ?>" placeholder="Nama Lengkap" maxlength="100" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">No HP</label>
                  <div class="col-lg-9">
                    <input type="text" name="no_hp" class="form-control" value="<?php echo $user->no_hp; ?>" placeholder="No HP" maxlength="20">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Alamat</label>
                  <div class="col-lg-9">
                    <textarea name="alamat" class="form-control" rows="4" cols="80" placeholder="Alamat Lengkap"><?php echo $user->alamat; ?></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Tentang Kami</label>
                  <div class="col-lg-9">
                    <textarea name="tentang" class="form-control" rows="4" cols="80" placeholder="Tentang Kami"><?php echo $user->tentang; ?></textarea>
                  </div>
                </div>
            </fieldset>
            <div class="col-md-12">
              <button type="submit" name="btnupdate" class="btn btn-primary" style="float:right;">Simpan</button>
            </div>
          </form>
          </div>
      </div>
      </div>


      <div class="panel panel-flat col-md-6">
          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold">Profile - Ubah Password</legend>
              <?php
              echo $this->session->flashdata('msg2');
              ?>
              <form class="form-horizontal" action="" method="post">
                <div class="form-group">
                  <label class="control-label col-lg-3">Password</label>
                  <div class="col-lg-9">
                    <input type="password" name="password" class="form-control" value="" placeholder="Password" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-lg-3">Ulangi Password</label>
                  <div class="col-lg-9">
                    <input type="password" name="password2" class="form-control" value="" placeholder="Ulangi Password" required>
                  </div>
                </div>

            </fieldset>
            <div class="col-md-12">
              <button type="submit" name="btnupdate2" class="btn btn-primary" style="float:right;">Simpan</button>
            </div>
          </form>
          </div>

      </div>
    </div>
    <!-- /dashboard content -->



    <script src="assets/js/fileinput.min.js"></script>

        <!-- the fileinput plugin initialization -->
        <script>
        var btnCust = '';
        $("#avatar-1").fileinput({
            overwriteInitial: true,
            maxFileSize: 3074,
            showClose: false,
        		showCaption: false,
        		showBrowse: false,
        		browseOnZoneClick: true,
        		removeLabel: '',
        		removeIcon: 'Reset Image &nbsp;<i class="glyphicon glyphicon-refresh"></i>',
        		removeTitle: 'Cancel or reset changes',
        		elErrorContainer: '#kv-avatar-errors-1',
        		msgErrorClass: 'alert alert-block alert-danger',
            defaultPreviewContent: '<br><img src="img/profile/<?php if($user->foto == ''){echo"default.png";}else{echo $user->foto;} ?>" alt="<?php echo $user->nama_lengkap; ?>" width="176" height="176" class="text-muted"><h6 class="text-muted">Click to select</h6>',
            layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
            allowedFileExtensions: ["jpg", "jpeg", "png", "gif", "bmp"]
        });
        </script>
