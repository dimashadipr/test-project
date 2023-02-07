<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>SMP Xaverius 1 Bandar Lampung</title>
    <link rel="shorcut icon" href="<?php echo base_url().'theme/images/icon.png'?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/bootstrap.min.css'?>">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/font-awesome.min.css'?>">
    <!-- Simple Line Font -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/simple-line-icons.css'?>">
    <!-- Slider / Carousel -->
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/slick-theme.css'?>">
    <link rel="stylesheet" href="<?php echo base_url().'theme/css/owl.carousel.min.css'?>">
    <!-- Main CSS -->
    <link href="<?php echo base_url().'theme/css/style.css'?>" rel="stylesheet" <?php echo date('l jS \of F Y h:i:s A'); ?>>
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

<body>
    <!--============================= HEADER About, News, Admission, Gallery, Contact Us =============================-->
    
    <div data-toggle="affix">
        <div class="container nav-menu2">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar2 navbar-toggleable-md navbar-light bg-faded">
                        <button class="navbar-toggler navbar-toggler2 navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <a href="<?php echo site_url('');?>" class="navbar-brand nav-brand2"><img class="img img-responsive" width="100px;" height="80px;" src="<?php echo base_url().'theme/images/logo-dark.png'?>"></a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('about');?>">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('blog');?>">News</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('pengumuman');?>">Admission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo site_url('galeri');?>">Gallery</a>
                                </li>
                                <li class="nav-item">
                                <a style="border-radius: 8px;" class="btn btn-primary" href="<?php echo site_url('contact');?>" role="button">Contact Us</a>
                                </li>
                             </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
      </div>
<section class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mt-5">
                <h2 style="font-weight: bold;">Mengembangkan Edukasi Dengan Semangat CHYBK</h2>
                <p class="mt-5">Selamat Datang Di Sekolah Menengah Pertama Xaverius 1 Bandar Lampung. Sebagai Sekolah Katolik, Kami Memiliki Visi dan Misi Yang Berlandaskan CHYBK (Cinta Hati Kudus Yesus yang Berbelas Kasih)</p>
                <a class="btn btn-primary" href="#" role="button">Apply Now</a>
                <a class="btn btn-secondary" href="#" role="button">Learn More</a>
            </div>
            <div class="col-md-5 mt-5">
                <img src="<?php echo base_url().'theme/images/cover.jpg'?>" class="img-fluid about-img" alt="#">
            </div>
        </div>
    </div>
</section>
<!--//END HEADER -->
<!--============================= OUR COURSES =============================-->
<section class="our_courses">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 style="text-align: center;">Berita Terbaru</h2>
            </div>
        </div>
        <div class="row">
          <?php foreach ($berita->result() as $row) :?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                <div class="courses_box mb-4">
                    <div class="course-img-wrap">
                        <img src="<?php echo base_url().'assets/images/'.$row->tulisan_gambar;?>" class="img-fluid" alt="courses-img">
                    </div>
                    <!-- // end .course-img-wrap -->
                    <a href="<?php echo site_url('artikel/'.$row->tulisan_slug);?>" class="course-box-content">
                        <h3 style="text-align:center;"><?php echo $row->tulisan_judul;?></h3>
                    </a>
                </div>
            </div>
          <?php endforeach;?>
        </div> <br>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="<?php echo site_url('artikel');?>" class="btn btn-default btn-courses">View More</a>
            </div>
        </div>
    </div>
</section>
<!--//END OUR COURSES -->
<!--============================= ABOUT =============================-->
<section class="clearfix about about-style2">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="<?php echo base_url().'theme/images/welcome.jpg'?>" class="img-fluid about-img" alt="#">
            </div>

            <div class="col-md-8">
               <h3 style="font-weight: bold;">Sambutan Kepala Sekolah</h3>
               <p>Selamat Datang</p>
               <p>Sebagai salah satu sekolah Katolik, kami mengutamakan layanan yang didasari oleh semangat Cinta Hati Yesus yang Berbelas Kasih. Semangat tersebut diwujudkan dalam aksi yang Berlandaskan pada nilai Cerdas, Humanis, Yakin akan Penyelenggaraan yang ilahi, Berkarakter, dan Kebersamaan.</p>
               <p>Salam CHYBK.</p>

            </div>
        </div>
    </div>
</section>
<!--//END ABOUT -->
<!--============================= DETAILED CHART =============================-->
<div class="detailed_chart">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_1.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_guru;?></span> Guru
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_bottom chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_2.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_siswa;?></span> Siswa
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 chart_top">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_3.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_files;?></span> Prestasi Sekolah
                    </p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="chart-img">
                    <img src="<?php echo base_url().'theme/images/chart-icon_4.png'?>" class="img-fluid" alt="chart_icon">
                </div>
                <div class="chart-text">
                    <p><span class="counter"><?php echo $tot_agenda;?></span> Agenda</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--//END DETAILED CHART -->
<!--============================= FOOTER =============================-->
<footer>
    <div class="container">
        <div class="row">
        <div class="col-md-3">
                <div class="foot-logo">
                    <a href="<?php echo site_url();?>">
                        <img src="<?php echo base_url().'theme/images/logo-white.png'?>" class="img-fluid" alt="footer_logo">
                    </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sitemap">
                        <h3></h3>
                        <ul>
                            <li><a href="<?php echo site_url();?>">About Us</a></li>
                            <li><a href="<?php echo site_url('about');?>">Admission</a></li>
                            <li><a href="<?php echo site_url('artikel');?>">News</a></li>
                            <li><a href="<?php echo site_url('galeri');?>">Gallery</a></li>
                            <li><a href="<?php echo site_url('contact');?>">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                <div class="address">
                        <h3 style="color: black;">Kontak</h3>
                            <ul class="footer-social-icons mt-5">
                                <li><a href="https://www.facebook.com/smpx1bl/" target="_blank"><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></a></i></li>
                                <li><a href="https://wa.me/6282232767878" target="_blank"><i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.instagram.com/smp_xavetebdl/" target="_blank"><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a></li>
                                <li><a href="https://www.youtube.com/@smpxaverius1bandarlampung21" target="_blank"><i class="fa fa-youtube-play fa-3x" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                </div>
                <div class="col-md-3">
                    <div class="address">
                        <h3 style="color: black;">Alamat</h3>
                        <ul class="mt-3">
                            <li><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.8370774937353!2d105.26467641534708!3d-5.441694596053515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dbd34552750f%3A0x7bf42bde3f8fb34e!2sSMP%20Xaverius%201%20Bandar%20Lampung!5e0!3m2!1sid!2sid!4v1675416104156!5m2!1sid!2sid" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></li>
                        </ul> 
                    </div>
                </div>
        </div>
        <p class="mt-4" style="color: black; text-align: center;"><?php echo date('Y');?> © copyright by SMP Xaverius 1 Bandar Lampung. <br>All rights reserved.</p>
            </div>
            
        </footer>
        <!--//END FOOTER -->
        <!-- jQuery, Bootstrap JS. -->
        <script src="<?php echo base_url().'theme/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tether.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/bootstrap.min.js'?>"></script>
        <!-- Plugins -->
        <script src="<?php echo base_url().'theme/js/slick.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/waypoints.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/counterup.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/owl.carousel.min.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/validate.js'?>"></script>
        <script src="<?php echo base_url().'theme/js/tweetie.min.js'?>"></script>
        <!-- Subscribe -->
        <script src="<?php echo base_url().'theme/js/subscribe.js'?>"></script>
        <!-- Script JS -->
        <script src="<?php echo base_url().'theme/js/script.js'?>"></script>
    </body>

    </html>
