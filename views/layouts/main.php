<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en"> <!--<![endif]-->
<head>
    <title>Suwankhuha Hospital</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="theme/mytheme/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="theme/mytheme/assets/css/style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="theme/mytheme/assets/css/headers/header-default.css">
    <link rel="stylesheet" href="theme/mytheme/assets/css/footers/footer-v1.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="theme/mytheme/assets/plugins/animate.css">
    <link rel="stylesheet" href="theme/mytheme/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="theme/mytheme/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="theme/mytheme/assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="theme/mytheme/assets/plugins/revolution-slider/rs-plugin/css/settings.css" type="text/css" media="screen">
    <!--[if lt IE 9]><link rel="stylesheet" href="theme/mytheme/assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css" type="text/css" media="screen"><![endif]-->

    <!-- CSS Customization -->
    <link rel="stylesheet" href="theme/mytheme/assets/css/custom.css">

        <script src="ckeditor/ckeditor.js"></script>
</head>

<body>

  <!-- Fixed navbar
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Bootstrap theme</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

-->

<div class="wrapper">

    <nav class="navbar navbar-inverse navbar-fixed-top">
    <!--=== Header ===-->
    <div class="header">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="index.php">
                <img src="images/swh_logo.jpg" alt="Logo">
            </a>
            <!-- End Logo -->

            <!-- Topbar
            <div class="topbar">
                <ul class="loginbar pull-right">

                    <li class="topbar-devider"></li>
                    <li><a href="page_faq.html">Help</a></li>
                    <li class="topbar-devider"></li>
                    <li><a href="index.php?r=user/login">Login</a></li>
                </ul>
            </div>-->
            <!-- End Topbar -->

            <!-- Toggle get grouped for better mobile display -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="fa fa-bars"></span>
            </button>
            <!-- End Toggle -->
        </div><!--/end container-->

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mega-menu navbar-responsive-collapse">
            <div class="container">
                <ul class="nav navbar-nav">
                    <!-- Home -->
                    <li class="active">
                        <a href="index.php" class="stoggle" data-toggle="">
                            หน้าหลัก
                        </a>
                    </li>
                    <!-- End Home -->



                    <!-- Blog -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            หน่วยงาน
                        </a>
                        <ul class="dropdown-menu">
                          <?php
                          $depList = Yii::$app->db->createCommand("SELECT * FROM hos_department ")->queryAll();
                          foreach ($depList as $ds) {
                              ?>
                        <li>  <a href="index.php?r=dep/index&id=<?= $ds['ID'] ?>" class="list-group-item"><?=$ds['DEPARTMENT']?></a></li>
                           <?php
                           }
                            ?>

                        </ul>
                    </li>
                    <!-- End Blog -->





                    <!-- Features -->
        <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            เกี่ยวกับโรงพยาบาล
                        </a>
                        <ul class="dropdown-menu">
                          <?php
                          $depList = Yii::$app->db->createCommand("SELECT * FROM hos_about ")->queryAll();
                          foreach ($depList as $ds) {
                              ?>
                        <li>  <a href="index.php?r=about/index&id=<?= $ds['ID'] ?>" class="list-group-item"><?=$ds['ABOUT']?></a></li>
                           <?php
                           }
                            ?>

                        </ul>
                    </li>
        <!-- End Features -->


                    <!-- Misc Pages -->
                    <li class="">
                        <a href="index.php?r=news/index" class="dropdown-toggle" data-toggle="">
                            ข่าวสาร
                        </a>
                    </li>

                    <li class="">
                        <a href="index.php?r=board/index" class="dropdown-toggle" data-toggle="">
                            เว็บบอร์ด
                        </a>
                    </li>
                    <!-- End Misc Pages -->
<?php if (Yii::$app->session->get('my_user_id') == null) { ?>
                    <li class="">
                        <a href="index.php?r=regis/index" class="dropdown-toggle" data-toggle="">
                            ลงทะเบียน
                        </a>
                    </li>
<?php } ?>


              <?php if (Yii::$app->session->get('my_user_id') == null) { ?>
                    <li class="">

                        <a href="index.php?r=user/login" class="dropdown-toggle" data-toggle="">
                            เข้าสู่ระบบ
                        </a>
                    </li>
  <?php   } else { ?>
                                        <!-- Blog -->
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                                <?php
                                                echo  Yii::$app->session->get('my_fullname');
                                                 ?>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a href="javascript:void(0);">Blog Large Image</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="blog_large_right_sidebar1.html">Right Sidebar</a></li>
                                                        <li><a href="blog_large_left_sidebar1.html">Left Sidebar</a></li>
                                                        <li><a href="blog_large_full_width1.html">Full Width</a></li>
                                                    </ul>
                                                </li>

                                                <li class="dropdown-submenu">
                                                    <a href="javascript:void(0);">Blog Item Pages</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="blog_large_right_sidebar_item1.html">Right Sidebar Item</a></li>
                                                        <li><a href="blog_large_left_sidebar_item1.html">Left Sidebar Item</a></li>
                                                        <li><a href="blog_large_full_width_item1.html">Full Width Item</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a href="javascript:void(0);">Blog Simple Pages</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="blog_large_right_sidebar.html">Right Sidebar Large</a></li>
                                                        <li><a href="blog_medium_right_sidebar.html">Right Sidebar Medium</a></li>
                                                        <li><a href="blog_large_full_width.html">Full Width</a></li>
                                                        <li><a href="blog_large_right_sidebar_item.html">Right Sidebar Item</a></li>
                                                        <li><a href="blog_large_full_width_item.html">Full Width Item</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="index.php?r=admin/index">หน้าหลัก ADMIN</a></li>
                                                <li>

                                                  <a href="index.php?r=user/logout" class="dropdown-toggle" data-toggle="">
                                                      LOGOUT
                                                  </a>

                                                </li>
                                            </ul>
                                        </li>
                                        <!-- End Blog -->
<?php  } ?>


                </ul>
            </div><!--/end container-->
        </div><!--/navbar-collapse-->
    </div>
    <!--=== End Header ===-->
  </nav>


    <!--=== Content Part ===-->

      <br><br>
      <br>
    <?php
        echo $content;
     ?>


    <!--=== Footer Version 1 ===-->
    <div class="footer-v1">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <a href="">วิสัยทัศน์</a>
                        <p>โรงพยาบาลสุวรรณคูหาเป็นโรงพยาบาลชุมชนที่มีคุณภาพ มาตรฐาน
                        มีเครือข่ายชุมชนที่เข้มแข็ง</p>
                    </div><!--/col-md-3-->
                    <!-- End About -->

                    <!-- Latest -->
<!--                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="posts">
                            <div class="headline"><h2>Latest Posts</h2></div>
                            <ul class="list-unstyled latest-list">
                                <li>
                                    <a href="#">Incredible content</a>
                                    <small>May 8, 2014</small>
                                </li>
                                <li>
                                    <a href="#">Best shoots</a>
                                    <small>June 23, 2014</small>
                                </li>
                                <li>
                                    <a href="#">New Terms and Conditions</a>
                                    <small>September 15, 2014</small>
                                </li>
                            </ul>
                        </div>
                    </div>-->
                    <!--/col-md-3-->
                    <!-- End Latest -->

                    <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>Web Links</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="http://wwwnpo.moph.go.th" target="_blank">สสจ.หนองบัวลำภู</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="http://udonthani.nhso.go.th/" target="_blank">สปสช เขต 8</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="http://www.nhso.go.th" target="_blank">สปสช.</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="https://www.moph.go.th" target="_blank">กระทรวงสาธารณสุข</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="http://bps.moph.go.th/" target="_blank">สนย.</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->

                    <!-- Address -->
                    <div class="col-md-3 map-img md-margin-bottom-40">
                        <div class="headline"><h2>Contact Us</h2></div>
                        <address class="md-margin-bottom-40">
                            โรงพยาบาลสุวรรณคูหา
                            400 ต.สุวรรณคูหา อ.สุวรรณคูหา <br />
                            จ. หนองบัวลำภู 39270 <br />
                            Phone: 042372209,042372169 <br />
                            Fax: 04232209 ต่อ 113 <br />
                            Email: <a href="mailto:info@swh.go.th" class="">info@swh.go.th</a>
                        </address>
                    </div><!--/col-md-3-->
                    <!-- End Address -->
                </div>
            </div>
        </div><!--/footer-->

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            2016 &copy; All Rights Reserved.
                           <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
                        </p>
                    </div>

                    <!-- Social Links -->
                    <div class="col-md-6">
                        <ul class="footer-socials list-inline">
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                                    <i class="fa fa-skype"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Social Links -->
                </div>
            </div>
        </div><!--/copyright-->
    </div>
    <!--=== End Footer Version 1 ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->
<script type="text/javascript" src="theme/mytheme/assets/plugins/jquery/jquery.min.js"></script>
<script type="text/javascript" src="theme/mytheme/assets/plugins/jquery/jquery-migrate.min.js"></script>
<script type="text/javascript" src="theme/mytheme/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- JS Implementing Plugins -->
<script type="text/javascript" src="theme/mytheme/assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="theme/mytheme/assets/plugins/smoothScroll.js"></script>
<script type="text/javascript" src="theme/mytheme/assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="theme/mytheme/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="theme/mytheme/assets/plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<!-- JS Customization -->
<script type="text/javascript" src="theme/mytheme/assets/js/custom.js"></script>
<!-- JS Page Level -->
<script type="text/javascript" src="theme/mytheme/assets/js/app.js"></script>
<script type="text/javascript" src="theme/mytheme/assets/js/plugins/owl-carousel.js"></script>
<script type="text/javascript" src="theme/mytheme/assets/js/plugins/revolution-slider.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        OwlCarousel.initOwlCarousel();
        RevolutionSlider.initRSfullWidth();
    });
</script>
<!--[if lt IE 9]>
    <script src="theme/mytheme/assets/plugins/respond.js"></script>
    <script src="theme/mytheme/assets/plugins/html5shiv.js"></script>
    <script src="theme/mytheme/assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->

</body>
</html>
