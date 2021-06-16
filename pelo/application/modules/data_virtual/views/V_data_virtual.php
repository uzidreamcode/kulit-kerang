<section class="section bg-light" id="blog">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            
                            <h2 class="title-heading">Virtual Tours</h2>
                            <p class="title-desc text-muted mt-2">Jelajahi Pesona indonesia dengan menggunakan virtual tours</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 pt-3">
                    <?php
                    foreach ($tampil as $s) {?>
                       <div class="col-lg-4">
                        <div class="blog-box mt-4 bg-white">
                            <img style="width: 100%" src="<?php echo base_url ()?>assets/img/<?php echo $s->foto_virtual?>" class="img-fluid rounded" alt="" />

                            <div class="blog-contain p-4">
                                

                                <h5 class="mt-4"><a href="" class="text-dark f-18"><?php echo $s->nama_virtual?></a></h5>

                                

                                <div class="mt-4">
                                    <a href="<?php echo base_url('data_virtual/detail/'. $s->id_virtual) ?>" class="btn btn-primary btn-sm">Jelajahi <i class="mdi mdi-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </section>