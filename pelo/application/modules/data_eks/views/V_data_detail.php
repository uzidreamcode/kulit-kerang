<section class="home-slider" id="home">
        <div class="container-fluid">
            <div  class="row">
                <div  style="height: 200px; margin-top: 120px" id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    
                    <div id="mapid" style="height:50vh;"></div>
                    <script>
                        var mapOptions = {
                            center: [<?php echo $detail['la']?>,<?php echo $detail['lo']?>],
                            zoom: 20
                        }
                        var mapid = new L.map('mapid', mapOptions);
                        var marker = L.marker([<?php echo $detail['la']?>,<?php echo $detail['lo']?>]).addTo(mapid);
                        marker.bindPopup("<b><?php echo $detail['nama_wisata']?></b><br><?php echo $detail['alamat']?>").openPopup();
                        var marker = L.marker([<?php echo $detail['la']?>,<?php echo $detail['la']?>]).addTo(mapid);
                        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png?access_token={accessToken}', {
                            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                            maxZoom: 18,
                            id: 'mapbox.streets',
                            accessToken: 'pk.eyJ1IjoicGF4aXRvdDE5OSIsImEiOiJja2Jmenp4M3MxMHA1MnhvNXl1cDdvaDQxIn0.qC-z0-WmnyfnWC8Yo_mQMg'
                        }).addTo(mapid);
                    </script>
                </div>
            </div>
        </div>
    </section>


    <!--  -->
    <section class="section pb-5" id="features">
        <div style="
        margin-top: 5%;
        " class="container">
        <div class="row">

            <div class="row mt-1 pt-1 ">
                <div class="col-lg-6">
                    <div class="mt-4">
                        <img style="width: 100%" src="<?php echo base_url ()?>assets/img/<?php echo $detail['foto_wisata']?> " class="img-fluid" alt="" />
                    </div>




                </div>

                <div class="col-lg-6">
                    <div class="mt-4">
                        <div class="custom-form mt-4">
                            <div id="message"></div>
                            <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                                <h3><?php echo $detail['nama_wisata']?> </h3>
                                <p>
                                    <?php echo $detail['deskripsi']?>
                                </p>
                                <div class="row mt-2">
                                    <div class="col-lg-12">
                                        <p class="mb-2 mt-3 text-muted"><i class="mdi mdi-map-marker mr-2 text-primary"></i><?php echo $detail['alamat']?></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div style="margin-top: 40px" class="col-md-6">

                    <?= form_open_multipart('data_eks/komentar/'.$detail['id_wisata']); ?>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mt-1">
                                    <label class="contact-lable">First Name</label>
                                    <input name="first" id="name" class="form-control" type="text" />
                                    <input type="hidden" value="<?php echo $detail['id_wisata']?>" name="idw">
                                    <?php 
                                    $tgl=date('d-m-y');
                                    ?>
                                    <input type="hidden" value="<?php echo $tgl?>" name="tgl">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mt-1">
                                    <label class="contact-lable">Last Name</label>
                                    <input name="last" id="lastname" class="form-control" type="text" />
                                </div>
                            </div>
                        </div>




                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-1">
                                    <label class="contact-lable">Your Message</label>
                                    <textarea name="isi" id="comments" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 mt-3 text-right">
                                <button id="submit" name="kirim" class="submitBnt btn btn-primary btn-round">Send</button>
                                <div id="simple-msg"></div>
                            </div>
                        </div>
                        <?= form_close(); ?>
                </div>
                <?php
                $id= $detail['id_wisata'];
                 $komentar   = $this->M_data_eks->komentar($id);
                 ?>
                <div style="margin-top: 40px" class="col-md-6">
                    <?php foreach ($komentar as $kk) {?>
                        <div  class="blog-box mt-4 bg-white">
                            <div class="card p-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="user d-flex flex-row align-items-center"> <img src="http://localhost/pelo/ewe.jpg" width="30" class="user-img rounded-circle mr-2"> <span><small class="font-weight-bold text-primary"><?php echo $kk->first?> <?php echo $kk->last?></small> <small class="font-weight-bold"></small></span> </div> <small><?php echo $kk->tanggal?></small>
                                </div>
                                <div class="action d-flex justify-content-between mt-2 align-items-center">
                                    <div class="reply px-4"> <small><?php echo $kk->isi?> </small></div>
                                </div>
                            </div></div>


                        <?php }?>
                    </div>


                </div>
            </div>



        </div>
    </section>