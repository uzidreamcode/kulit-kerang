<section style="height: 100px; " class="bg-home-3 align-items-center  bg-primary" id="home">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="home-contact text-white text-center mt-4">

                    <h1 class="home-title mt-3">Eksplorisasi Daerah</h1>
                    <p></p>



                    <div class="mt-4 pt-3">

                        <a href="" class="btn btn-outline-light">Jelajahi pesona indonesia</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<section class="section pb-5" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <?php
                foreach ($tampil as $t) {?>
                    <div style="margin-top: 30px" class="port portfolio-masonry mt-12">
                        <div class="portfolioContainer row">
                            <div style="width: 100%;" class="col-md-12 ">
                                <div class="item-box p-2 rounded">

                                    <div class="row">
                                        <div class="col-md-4 how-img">
                                            <img  height="200px" style="width: 300px; margin-top: -10px; border-radius: 5%" src="<?php echo base_url ()?>assets/img/<?php echo $t->foto_pulau?> " alt=""/>
                                        </div>
                                        <div style="margin-top: 20px" class="col-md-6">
                                            <h5><?php echo $t->nama_pulau?></h5>
                                            <p  class="text-muted"><b>
                                                <?php echo $t->tentang_pulau?>
                                             <br>
                                             <a style="margin-top: 20px" href="<?php echo base_url('data_wisata/detail/'. $t->id_pulau) ?>">Baca Selengkapnya -></a>
                                         </b></p>
                                     </div>
                                 </div>       


                             </div>
                         </div>
                     </div>
                 </div>
                 <?php }?> 

             </div>
         </div>


 </div>
</section>
