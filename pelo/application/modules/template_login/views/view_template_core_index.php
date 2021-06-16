<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Kulit Kerang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Themesdesign" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon22.ico" />
    <!-- css -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url(); ?>css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <!-- magnific pop-up -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/magnific-popup.css" />
    <!-- magnific pop-up -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/ion.rangeSlider.min.css" />
    <!-- Pe-icon-7 icon -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/pe-icon-7-stroke.css" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/swiper.min.css" />
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="index.php">
                <img src="images/kerang.png" alt=""  height="22" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                <?php if($this->uri->segment('1') == 'data_index'){ ?>
                    <li class="nav-item active">
                        <a href="data_index" class="nav-link">Beranda</a>
                    </li>
                <?php } else{ ?>
                    <li class="nav-item">
                        <a href="data_index" class="nav-link">Beranda</a>
                    </li>
                <?php } ?>

                   <?php if($this->uri->segment('1') == 'data_eks'){ ?>
                    <li class="nav-item active">
                        <a href="data_index" class="nav-link">Eksplorasi</a>
                    </li>
                <?php } else{ ?>
                    <li class="nav-item">
                        <a href="data_eks" class="nav-link">Eksplorasi</a>
                    </li>
                <?php } ?>
                     <?php if($this->uri->segment('1') == 'data_wisata'){ ?>
                    <li class="nav-item active">
                        <a href="data_wisata" class="nav-link">Wisata Daerah</a>
                    </li>
                <?php } else{ ?>
                    <li class="nav-item">
                        <a href="data_wisata" class="nav-link">Wisata Daerah</a>
                    </li>
                <?php } ?>
                   <?php if($this->uri->segment('1') == 'data_peta'){ ?>
                    <li class="nav-item active">
                        <a href="data_peta" class="nav-link">Peta Wisata</a>
                    </li>
                <?php } else{ ?>
                    <li class="nav-item">
                        <a href="data_peta" class="nav-link">Peta Wisata</a>
                    </li>
                <?php } ?>
                   <?php if($this->uri->segment('1') == 'data_virtual'){ ?>
                    <li class="nav-item active">
                        <a href="data_virtual" class="nav-link">Virtual Tour</a>
                    </li>
                <?php } else{ ?>
                    <li class="nav-item">
                        <a href="data_virtual" class="nav-link">Virtual Tour</a>
                    </li>
                <?php } ?>
                    <?php if($this->uri->segment('1') == 'data_kontak'){ ?>
                    <li class="nav-item active">
                        <a href="data_kontak" class="nav-link">Kontak</a>
                    </li>
                <?php } else{ ?>
                    <li class="nav-item">
                        <a href="data_kontak" class="nav-link">Kontak</a>
                    </li>
                <?php } ?>
                    <!-- <li class="nav-item">
                        <a href="" class="nav-link">Testimonial</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">Contact</a>
                    </li> -->
                </ul>
                <div class="navbar-button d-none d-lg-inline-block">
                    <a href="admin" class="btn btn-sm btn-primary btn-round">Signin</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- START HOME -->
    <?php
                    $this->load->view($namamodule .'/'.$namafileview);
                    ?>
    <!-- END HOME -->

    <!-- START FEATURES -->
    
<!-- END SERVICES -->

<!-- START WORK -->

<!-- END WORK -->

<!-- START COUNTER -->

    <div class="container">
        

        <div class="row align-items-center mt-4 pt-3" id="counter"></div>
    </div>

<!-- END COUNTER -->

<!-- START PRICING -->

<!-- END PRICING -->

<!-- START TEAM -->

<!-- END TEAM -->

<!-- START CTA -->

<!-- END CTA -->

<!-- START TESTIMONIAL -->

<!-- END TESTIMONIAL -->

<!-- START BLOG -->

<!-- END BLOG -->

<!-- START CONTACT -->

<!-- END CONTACT -->

<!-- START FOOTER -->
<section class="section bg-light pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-info mt-4">
                    <img style="margin-top: -75px" src="images/kerang2.png" alt="" height="120" />
                    <p style="margin-top: 20px">
                        Kulit Kerang adalah project website yang dibuat untuk tugas akhir Pemograman Website. Saya dari kelas XI RPL 3 mempersembahkan website ini<br />
                        Tetapi mohon maaf masih banyak yang belum selesai <br />
                       
                    </p>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="mt-4">
                            <h5 class="f-18">Fitur</h5>
                            <ul class="list-unstyled footer-link mt-3">
                                <li><a href="">Beranda </a></li>
                                <li><a href="">Eksplorasi</a></li>
                                <li><a href="">Wisata Daerah</a></li>
                                <li><a href="">Virtual Tour</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mt-4">
                            <h5 class="f-18">Wisata</h5>
                            <ul class="list-unstyled footer-link mt-3">
                                <li><a href="">Gunung</a></li>
                                <li><a href="">Monumen</a></li>
                                <li><a href="">Pantai</a></li>
                                <li><a href="">Museum</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="mt-4">
                            <h5 class="f-18">Makanan</h5>
                            <ul class="list-unstyled footer-link mt-3">
                                <li><a href=""></a></li>
                                <li><a href="">Careers</a></li>
                                <li><a href="">Contact us</a></li>
                                <li><a href="">Maps</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="mt-4 pl-0 pl-lg-4">
                    <h5 class="f-18">Follow Us</h5>
                    <ul class="list-inline social-icons-list pt-3">
                        <li class="list-inline-item">
                            <a href="#"><i class="mdi mdi-facebook"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="mdi mdi-twitter"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="mdi mdi-linkedin"></i></a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#"><i class="mdi mdi-google-plus"></i></a>
                        </li>
                    </ul>

                    
                    
                </div>
            </div>
        </div>

        <hr class="my-5" />

        
    </div>
</section>
<!-- END FOOTER -->

<!-- javascript -->
<script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>js/scrollspy.min.js"></script>

<!-- Portfolio -->
<script src="<?php echo base_url(); ?>js/ion.rangeSlider.min.js"></script>

<!-- Portfolio -->
<script src="<?php echo base_url(); ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>js/isotope.js"></script>

<!-- counter init -->
<script src="<?php echo base_url(); ?>js/counter.init.js"></script>

<!-- Swiper JS -->
<script src="<?php echo base_url(); ?>js/swiper.min.js"></script>

<!--flex slider plugin-->
<script src="<?php echo base_url(); ?>js/jquery.flexslider-min.js"></script>

<!-- yt player -->
<script src="<?php echo base_url(); ?>js/jquery.mb.YTPlayer.js"></script>

<!-- contact init -->
<script src="<?php echo base_url(); ?>js/contact.init.js"></script>

<!-- Main Js -->
<script src="<?php echo base_url(); ?>js/app.js"></script>
</body>
</html>
