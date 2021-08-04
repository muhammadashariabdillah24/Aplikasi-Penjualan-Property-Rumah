<!-- Page heading -->
<!-- Give background color class on below line (bred, bgreen, borange, bviolet, blightblue, bblue) -->
<div class="page-heading blightblue">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="pull-left"><i class="fa fa-film title-icon"></i> Produk</h2>
        <div class="pull-right heading-meta" style="font-size:15px;"><a href="<?php echo base_url(); ?>" style="color:#f1f1f1;">Home</a> / <a href="produk"><span class="lightblue">Produk</span></a></div>
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

  <div class="container">

    <div class="blog">
             <div class="row">
                <div class="col-md-12">

                   <!-- Blog Posts -->
                   <div class="row">
                      <div class="col-md-12 col-sm-12">
                         <div class="posts">

                            <!-- Each posts should be enclosed inside "entry" class" -->
                            <!-- Post one -->

                            <div class="img-portfolio">
                            <p>
                                <!-- Add filter names inside "data-filter". For example ".web-design", ".seo", etc., Filter names are used to filter the below images. -->
                                <!-- <?php if ($v_barang->num_rows() != 0) { ?>
                                   <ul id="filters">
                                     <li><a href="#" data-filter="*" class="btn btn-default bblack">Semua</a></li>
                                     <li><a href="#" data-filter=".one" class="btn btn-default borange" style="padding:14px;"></a></li>
                                     <li><a href="#" data-filter=".two" class="btn btn-default blightblue" style="padding:14px;"></a></li>
                                     <li><a href="#" data-filter=".three" class="btn btn-default bviolet" style="padding:14px;"></a></li>
                                     <li><a href="#" data-filter=".four" class="btn btn-default bred" style="padding:14px;"></a></li>
                                     <li><a href="#" data-filter=".five" class="btn btn-default bgreen" style="padding:14px;"></a></li>
                                   </ul>
                                <?php } ?> -->
                            </p>


                            <div id="portfolio">
                                <!-- Add the above used filter names inside div tag. You can add more than one filter names. For image lightbox you need to include "a" tag pointing to image link, along with the class "prettyphoto". -->
                                <?php
                                $i = 1;
                                foreach ($v_barang->result() as $baris){?>

                                       <div class="element one" style="width:175px;">
                                         <a href="<?php echo $baris->gambar; ?>" class="prettyphoto">
                                           <img src="<?php echo $baris->gambar; ?>" alt="Aplikasi <?php echo ucwords($baris->nama_kain); ?>"  style="width:175px;height:150px;"/>
                                           <!-- Portfolio caption -->
                                           <div class="pcap borange" style="padding:3px;height:80px;">
                                              <!-- <h4>Lorem ipsum dolor</h4> -->
                                              <p>
                                                <?php echo substr(ucwords($baris->nama_kain), 0, 60); if (strlen($baris->nama_kain) >= 60){echo"...";}?>
                                              </p>
                                           </div>
                                         </a>
                                         <div style="background-color:#222;padding:10px;padding-bottom:20px;">
                                            <!-- button -->
                                            <a href="produk_dtl/<?php echo $baris->id_barang; ?>" class="btn btn-warning btn-large" style="margin-right:5px;float:right;color:white;" target="_blank">Detail</a>
                                            <br>
                                         </div>
                                       </div>
                                   <?php
                                 $i++;
                               }?>

                            </div>


                            <!-- Pagination -->
                            <div align="center">
                              <br>
                               <?php echo $halaman; ?>

                            </div>

                            <div class="clearfix"></div>

                           </div>
                        </div>
                      </div>

                      <!-- <div class="col-md-4 col-sm-4">
                         <?php //$this->load->view('web/widget2'); ?>
                      </div> -->
                   </div>



                </div>
             </div>
          </div>

  </div>
</div>
<!-- Content ends -->
