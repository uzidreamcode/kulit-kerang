<section class="home-slider" id="home">
    <div class="container-fluid">
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-image:url('images/e1.jpg');">
                        <div class="bg-overlay"></div>
                        <div class="home-center">
                            <div class="home-desc-center">
                                <div class="container">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-lg-10">
                                            <div class="home-content text-center text-white">
                                                <h1 class="home-title">Eksplorasi Daerah Di Indonesia</h1>
                                                <p class="text-white-50 mt-4 f-16"> Indonesia adalah negara kepulauan terbesar di Indonesia dengan garis pantai terpanjang keempat di dunia. Hal ini tentu menjadi potensi untuk dikembangkan, khususnya bidang pariwisata. Dengan kekuatan ekonomi kerakyatan, niscanya sektor ini bisa jadi salah satu penggerak ekonomi bangsa.<br> 
                                                    <div class="mt-5">
                                                        <div class="mt-4 pt-2">
                                                            <a href="#portfolio" class="btn btn-primary btn-rounded mr-3" >Contact Us <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                    </div>


                </div>
            </div>
        </div>
    </section>
    <section class="section" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">


                        <h2 class="title-heading">
                        </h2>

                    </div>
                    <div class="row justify-content-center">
                        <div class="row">
                            <div class="col-lg-8">


                                <label class="contact-lable">Total (<?php echo $hw?>) </label>
                                <div class="form-group mt-1">
                                    <div class="input-icon">

                                        <input  placeholder="Cari Tempat" style="height: 45px" name="name" id="myInput" onkeyup="myFunction()" class="form-control" type="text" />


                                    </div>
                                </div>
                            </div>

                            <div align="center" class="col-lg-4">
                                <div class="form-group mt-1">
                                    <label class="contact-lable">Kategori</label>
                                    <select  style="height: 45px; width: max-content;" id="inputState" class="form-control">
                                        <option selected>Semua</option>
                                        <option>...</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-2">
                <div class="col-lg-12">
                    <div class="text-center">
                        <ul class="col container-filter portfolioFilte list-unstyled mb-0" id="filter">
                            <li><a class="categories active" data-filter="*">Pantai</a></li>
                            <li><a class="categories" data-filter=".Brand">Gunung</a></li>
                            <li><a class="categories" data-filter=".Design">Monumen</a></li>
                            <li><a class="categories" data-filter=".Graphic">Museum</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- End portfolio  -->

            <ul id="myUL">

                <div class="row mt-5 pt-5" >
                <?php foreach ($tampil as $s) {?>
                   



                       <li>
                        <div style="margin: 20px" class="blog-box mt-4 bg-white">
                            <img style="height: 220px; width: 320px" src="<?php echo base_url ()?>assets/img/<?php echo $s->foto_wisata?>" class="img-fluid rounded" alt="" />

                            <div class="blog-contain p-4">
                                <div class="blog-user-box bg-white rounded">
                                  <?php echo $s->kategori?>
                              </div>

                              <h5 class="mt-4">
                                <a href="" class="text-dark f-18">
                                    <?php echo $s->nama_wisata?>
                                </a></h5>
                                <p>

                                </p>
                                <?php
                                $idd=$s->id_wisata;
                                $hkomen = $this->M_data_eks->hkomen($idd);
                                ?>

                                <div class="mt-4 f-14">
                                    <p class="mb-0">
                                        <a href="" class="text-dark"><i class="mdi mdi-forum-outline ml-2 text-primary mr-2 f-16"></i><?php echo $hkomen?> Ulasan</a>
                                        <a href="" class="text-dark ml-4"><i class="mdi mdi-eye-outline ml-2 text-primary mr-2 f-16"></i>256 Dilihat</a>
                                    </p>
                                </div>

                                <div class="mt-4">
                                    <a href="<?php echo base_url('data_eks/detail/'. $s->id_wisata) ?>" class="btn btn-primary btn-sm">Read more <i class="mdi mdi-arrow-right ml-2"></i></a>
                                </div>
                            </div>
                        </div>
                        </li>

                <?php }?>
            
        </div>

    </ul>

</div>
</section>
<section class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <img style="width: inherit;" src="images/e3.png">
            </div>
        </div>

    </div>
</section>

<script>
    function myFunction() {
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName("li");
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
                li[i].style.display = "none";
            }
        }
    }
</script>