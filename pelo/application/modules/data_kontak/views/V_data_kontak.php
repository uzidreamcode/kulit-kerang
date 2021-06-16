<section class="section" id="contact">
    <div class="text-center">

        <h1 style="margin-bottom: -30px" class="title-heading">Hubungi Kami</h1>
    </div>
    <div class="container">
        <div class="row">

        </div>

        <div class="row mt-5 pt-5">
            <div class="col-lg-6">
                <div class="mt-4">
                    <img src="images/img-1.png" class="img-fluid" alt="" />
                </div>

                <div class="row mt-3">
                    <div class="col-lg-6">
                        <div class="mt-4">
                            <h5 class="f-18">Online Services</h5>
                            <p class="mb-2 mt-3 text-muted"><i class="mdi mdi-email mr-2 text-primary"></i>uzisrengenge@gmail.com</p>
                            <p class="text-muted"><i class="mdi mdi-email mr-2 text-primary"></i>meninggal.tech</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mt-4">
                            <h5 class="f-18">Online Contact</h5>
                            <p class="mb-2 mt-3 text-muted"><i class="mdi mdi-phone mr-2 text-primary"></i> +628818423260</p>
                            <p class="text-muted"><i class="mdi mdi-phone mr-2 text-primary"></i>+6281332211706</p>
                        </div>
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-lg-12">
                        <h5 class="f-18">Office Address</h5>
                        <p class="mb-2 mt-3 text-muted">Tanya bagaimana cara kami membantu anda:

                            Bagaimana cara memakai fitur Kulit kerang

                            Anda bisa menjelajahi fitureksplorasiwisata daerahdan fiturvirtual touruntuk menikmati fitur Kulit kerang.

                            Jika anda merupakan pengelola tempat pariwisata

                            Jika tempat anda tidak terdaftar di Database kami, anda dapat memasukan nya secara manual dengan fitur mitra pariwisata.

                            Mengalami kesalahan dan bug

                        Anda dapat menghubungi kami dengan mengisi form di sebelah kanan anda, lalu akan kami balas secepatnya.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="mt-4">
                    <div class="custom-form mt-4">
                        <div id="message"></div>

                        <?= form_open_multipart('data_kontak/send/'); ?>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group mt-1">
                                    <label class="contact-lable">First Name</label>
                                    <input required="" name="awal" id="name" class="form-control" type="text" />
                                    <?php
                                    $tgl=date('y-m-d')
                                    ?>
                                    <input type="hidden" value="<?php echo $tgl?>" name="tgl">
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group mt-1">
                                    <label class="contact-lable">Last Name</label>
                                    <input required="" name="akhir" id="lastname" class="form-control" type="text" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-1">
                                    <label class="contact-lable">Email Address</label>
                                    <input required="" name="email" id="email" class="form-control" type="text" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-1">
                                    <label class="contact-lable">Subject</label>
                                    <input required="" name="judul" id="subject" class="form-control" type="text" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group mt-1">
                                    <label class="contact-lable">Your Message</label>
                                    <textarea required="" name="isi" id="comments" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 mt-3 text-right">
                                <button type="submit" class="submitBnt btn btn-primary btn-round">Send    </button>
                                <div id="simple-msg"></div>
                            </div>
                        </div>

                        <?= form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>