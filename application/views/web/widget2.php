<div class="sidebar">
   <!-- Widget -->
   <!-- <div class="widget">
      <h4>Search</h4>
       <form role="form">
         <div class="input-group">
         <input type="text" class="form-control" id="subscribe" placeholder="Subscribe...">
         <span class="input-group-btn">
           <button type="submit" class="btn btn-danger">Subscibe</button>
         </span>
         </div>
       </form>
   </div> -->

   <!-- <div class="widget">-->
      <!-- <h4></h4> -->
      <!-- <p>Kotak Iklan</p>
   </div> -->
   <div class="widget">
      <h4>Artikel Terbaru</h4>
      <ul>
        <?php
        $artikel_new = $this->db->query("SELECT * FROM tbl_artikel ORDER BY id_artikel DESC LIMIT 12")->result();
        foreach ($artikel_new as $baris) {?>
           <li><a href="ar_d/<?php echo $baris->url; ?>"><?php echo ucwords($baris->judul); ?></a></li>
        <?php
        } ?>
      </ul>
   </div>
</div>
