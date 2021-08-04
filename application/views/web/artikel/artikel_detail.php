<?php
$baris = $v_artikel->row();
if ($baris->id_artikel == '') {
  redirect('artikel');
}?>
<!-- Page heading -->
<!-- Give background color class on below line (bred, bgreen, borange, bviolet, blightblue, bblue) -->
<div class="page-heading blightblue">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="pull-left"><i class="fa fa-globe title-icon"></i> Artikel</h2>
        <div class="pull-right heading-meta" style="font-size:15px;"><a href="<?php echo base_url(); ?>" style="color:#f1f1f1;">Home</a> / <a href="artikel" style="color:#f1f1f1;">Artikel</a> / <span class="lightblue"><?php echo $baris->url; ?></span></a></div>
      </div>
    </div>
  </div>
</div>
<!-- Page heading ends -->

<!-- Content starts -->
<div class="content">
  <div class="container">

    <div class="blog">
             <div class="row">
                <div class="col-md-12">

                   <!-- Blog Posts -->
                   <div class="row">
                      <div class="col-md-8 col-sm-8">
                         <div class="posts">

                            <!-- Each posts should be enclosed inside "entry" class" -->
                            <!-- Post one -->

                              <div class="entry">
                                 <h2><i class="fa fa-arrow-right title-icon"></i> <a href="#"><?php echo ucwords($baris->judul); ?></a></h2>

                                 <!-- Meta details -->
                                 <div class="meta">
                                    <i class="fa fa-calendar"></i> <?php echo $baris->tgl_artikel; ?> <i class="fa fa-user"></i> Admin <!--<i class="fa fa-folder-open"></i> <a href="#">General</a>--> <span class="pull-right"><i class="fa fa-eye"></i> <?php echo number_format($baris->view,0,",","."); ?> </span>
                                 </div>

                                 <!-- Thumbnail -->
                                 <div align="center">
                                    <img src="<?php echo $baris->gambar; ?>" alt="" class="img-responsive" style="max-width:300px;"/>
                                 </div>
                                 <br>

                                 <p>
                                   <?php
                                         echo $baris->isi;
                                   ?>
                                 </p>

                                 <div class="clearfix"></div>

                              </div>

                              <div id="disqus_thread"></div>
                              <script>

                              /**
                              *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                              *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                              /*
                              var disqus_config = function () {
                              this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
                              this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                              };
                              */
                              (function() { // DON'T EDIT BELOW THIS LINE
                              var d = document, s = d.createElement('script');
                              s.src = 'https://hostqu.disqus.com/embed.js';
                              s.setAttribute('data-timestamp', +new Date());
                              (d.head || d.body).appendChild(s);
                              })();
                              </script>
                              <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>


                            <div class="clearfix"></div>

                         </div>
                      </div>
                      <div class="col-md-4 col-sm-4">
                         <?php $this->load->view('web/widget2'); ?>
                      </div>
                   </div>



                </div>
             </div>
          </div>

  </div>
</div>
<!-- Content ends -->
