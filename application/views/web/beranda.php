<!-- Hero starts -->

  <div class="hero">
    <div class="container">
      <div class="row">
        <?php
        echo $this->session->flashdata('msg');
        ?>
        <div class="col-md-12">

          <div class="hero-left">
            <i class="fa fa-desktop"></i>
          </div>

          <div class="hero-right">
            <div class="hero-title">Selamat datang di <b class="lightblue"><?php echo ucwords($data_web->nama_web); ?></b></div>
            <p>Terimakasih sudah berkunjung di web <?php echo $data_web->nama_web; ?>... :D</p>
          </div>

          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </div>


<!-- Hero Ends -->

<!-- CTA Starts -->

<!-- <div class="container">
  <div class="cta bviolet">
    <div class="row">
      <div class="col-md-12">

        <br><br>
          <center>
            KOTAk
          </center>
        <br><br>

      </div>
    </div>
  </div>
</div> -->

<!-- CTA Ends -->

<!-- Content starts -->
<div class="content">
  <div class="container">
    <h3 class="title"><!--<i class="fa fa-arrow-right title-icon"></i> Produk--> <?php if (isset($_POST['btncari'])) {echo  '- "'.$_POST['cari'].'"';} ?></h3>
    <div class="row">
  <div class="col-md-12">

        <div class="img-portfolio">
        <p>
            <!-- Add filter names inside "data-filter". For example ".web-design", ".seo", etc., Filter names are used to filter the below images. -->
            <?php if ($v_barang->num_rows() != 0) {?>
               <ul id="filters">
                 <li><a href="#" data-filter="*" class="btn btn-default bblack">Semua</a></li> -
                 <?php
                 $no=1;
                   foreach ($v_kat->result() as $baris){
                     if ($baris->id_kat == 1) {
                       $warna = "borange";
                     }elseif ($baris->id_kat == 2) {
                       $warna = "bgreen";
                     }elseif ($baris->id_kat == 3) {
                       $warna = "bred";
                     }elseif ($baris->id_kat == 4) {
                       $warna = "bblue";
                     }elseif ($baris->id_kat == 5) {
                       $warna = "bviolet";
                     }else{
                       $warna = "blightblue";
                     }
                     ?>
                      <li><a href="#" data-filter=".<?php echo $baris->id_kat; ?>" class="btn btn-default <?php echo $warna; ?>" style="padding:14px;"><?php echo $baris->nama_kat; ?></a></li>
                 <?php
                    $no++;
                   } ?>
                 <!-- <li><a href="#" data-filter=".two" class="btn btn-default blightblue" style="padding:14px;"></a></li>
                 <li><a href="#" data-filter=".three" class="btn btn-default bviolet" style="padding:14px;"></a></li>
                 <li><a href="#" data-filter=".four" class="btn btn-default bred" style="padding:14px;"></a></li>
                 <li><a href="#" data-filter=".five" class="btn btn-default bgreen" style="padding:14px;"></a></li> -->
               </ul>
            <?php } ?>
        </p>


        <div id="portfolio">
            <!-- Add the above used filter names inside div tag. You can add more than one filter names. For image lightbox you need to include "a" tag pointing to image link, along with the class "prettyphoto". -->
            <?php
            $i = 1;
             foreach ($v_barang->result() as $baris){
               if ($baris->id_kat == 1) {
                 $warna = "borange";
               }elseif ($baris->id_kat == 2) {
                 $warna = "bgreen";
               }elseif ($baris->id_kat == 3) {
                 $warna = "bred";
               }elseif ($baris->id_kat == 4) {
                 $warna = "bblue";
               }elseif ($baris->id_kat == 5) {
                 $warna = "bviolet";
               }else{
                 $warna = "blightblue";
               }?>

                    <div class="element <?php echo $baris->id_kat; ?>" style="width:175px;">
                      <a href="<?php echo $baris->gambar; ?>" class="prettyphoto">
                        <img src="<?php echo $baris->gambar; ?>" alt=""  style="width:175px;height:150px;"/>
                      </a>
                        <!-- Portfolio caption -->
                      <a href="dtl/<?php echo $baris->id_barang; ?>">
                        <div class="pcap <?php echo $warna; ?>" style="padding:3px;height:100px;">
                           <!-- <h4>Lorem ipsum dolor</h4> -->
                           <p>
                             <b><?php echo ucwords(substr($baris->judul, 0, 21)); ?></b>
                             <br>
                             <b>Lokasi:</b> <?php echo substr($baris->lokasi, 0, 50); ?>
                           </p>
                        </div>
                        <div style="background-color:#222;padding:10px;padding-bottom:10px;color:white;">
                           <!-- button -->
                             Rp. <?php echo number_format($baris->harga,0,",","."); ?>
                        </div>
                      </a>
                    </div>
              <?php
                $i++;
              }?>

        </div>

        <?php
        if ($v_barang->num_rows() == 0) {
          echo "<center>";
          if (isset($_POST['btncari'])) {
              $cari = $_POST['cari'];
              echo "Pencarian Aplikasi '$cari' Tidak ditemukan...";
          }else{
              echo "Aplikasi NULL...";
          }?>
          <br>
          <form action="<?php echo base_url(); ?>" method="post" class="form-inline" role="form">
            <div class="input-group">
              <input type="text" name="cari" class="form-control" id="search" placeholder="Cari Aplikasi..." required>
              <span class="input-group-btn">
                <button type="submit" name="btncari" class="btn btn-danger">Cari</button>
              </span>
            </div>
          </form>
          </center>
          <hr>
        <?php
        }?>


     <div align="center">
       <br>
        <?php echo $halaman; ?>

     </div>

    </div>

  </div>
</div>

  </div>
</div>
<!-- Content ends -->
