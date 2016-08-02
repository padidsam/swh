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
                            HOME
                        </a>
                    </li>
                    <!-- End Home -->



                    <!-- Blog -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            DEPARTMENT
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
                ABOUT-US
            </a>
            <ul class="dropdown-menu">
                <li class="dropdown-submenu">
                    <a href="javascript:void(0);">Headers</a>
                    <ul class="dropdown-menu">
                        <li><a href="feature_header_default.html">Header Default</a></li>
                        <li><a href="feature_header_default_no_topbar.html">Header Default without Topbar</a></li>
                        <li><a href="feature_header_default_centered.html">Header Default Centered</a></li>
                        <li><a href="feature_header_default_fixed.html">Header Default Fixed (Sticky)</a></li>
                        <li><a href="feature_header_default_login_popup.html">Header Default Login Popup</a></li>
                        <li><a href="feature_header_v1.html">Header v1</a></li>
                        <li><a href="feature_header_v2.html">Header v2</a></li>
                        <li><a href="feature_header_v3.html">Header v3</a></li>
                        <li><a href="feature_header_v4.html">Header v4</a></li>
                        <li><a href="feature_header_v4_logo_centered.html">Header v4 Centered Logo</a></li>
                        <li><a href="feature_header_v5.html">Header v5</a></li>
                        <li><a href="feature_header_v6_transparent.html">Header v6 Transparent</a></li>
                        <li><a href="feature_header_v6_semi_dark_transparent.html">Header v6 Dark Transparent</a></li>
                        <li><a href="feature_header_v6_semi_white_transparent.html">Header v6 White Transparent</a></li>
                        <li><a href="feature_header_v6_border_bottom.html">Header v6 Border Bottom</a></li>
                        <li><a href="feature_header_v6_classic_dark.html">Header v6 Classic Dark</a></li>
                        <li><a href="feature_header_v6_classic_white.html">Header v6 Classic White</a></li>
                        <li><a href="feature_header_v6_dark_dropdown.html">Header v6 Dark Dropdown</a></li>
                        <li><a href="feature_header_v6_dark_scroll.html">Header v6 Dark on Scroll</a></li>
                        <li><a href="feature_header_v6_dark_search.html">Header v6 Dark Search</a></li>
                        <li><a href="feature_header_v6_dark_res_nav.html">Header v6 Dark in Responsive</a></li>
                        <li><a href="page_home12.html">Header v7 Left Sidebar</a></li>
                        <li><a href="page_home13.html">Header v7 Right Sidebar</a></li>
                        <li><a href="feature_header_v8.html">Header v8</a></li>
                    </ul>
                </li>
                <li class="dropdown-submenu">
                    <a href="javascript:void(0);">Footers</a>
                    <ul class="dropdown-menu">
                        <li><a href="feature_footer_default.html#footer-default">Footer Default</a></li>
                        <li><a href="feature_footer_v1.html#footer-v1">Footer v1</a></li>
                        <li><a href="feature_footer_v2.html#footer-v2">Footer v2</a></li>
                        <li><a href="feature_footer_v3.html#footer-v3">Footer v3</a></li>
                        <li><a href="feature_footer_v4.html#footer-v4">Footer v4</a></li>
                        <li><a href="feature_footer_v5.html#footer-v5">Footer v5</a></li>
                        <li><a href="feature_footer_v6.html#footer-v6">Footer v6</a></li>
                        <li><a href="feature_footer_v7.html#footer-v7">Footer v7</a></li>
                        <li><a href="feature_footer_v8.html#footer-v8">Footer v8</a></li>
                    </ul>
                </li>
                <li><a href="feature_gallery.html">Gallery Examples</a></li>
                <li><a href="feature_animations.html">Animations on Scroll</a></li>
                <li><a href="feature_parallax_counters.html">Parallax Counters</a></li>
                <li><a href="feature_testimonials_quotes.html">Testimonials and Quotes</a></li>
                <li><a href="feature_icon_blocks.html">Icon Blocks</a></li>
                <li><a href="feature_team_blocks.html">Team Blocks</a></li>
                <li><a href="feature_news_blocks.html">News Blocks</a></li>
                <li><a href="feature_parallax_blocks.html">Parallax Blocks</a></li>
                <li><a href="feature_funny_boxes.html">Funny Boxes</a></li>
            </ul>
        </li>
        <!-- End Features -->


                    <!-- Misc Pages -->
                    <li class="">
                        <a href="index.php?r=news/index" class="dropdown-toggle" data-toggle="">
                            NEWS
                        </a>
                    </li>

                    <li class="">
                        <a href="index.php?r=board/index" class="dropdown-toggle" data-toggle="">
                            WEBBOARD
                        </a>
                    </li>
                    <!-- End Misc Pages -->
<?php if (Yii::$app->session->get('my_user_id') == null) { ?>
                    <li class="">
                        <a href="index.php?r=regis/index" class="dropdown-toggle" data-toggle="">
                            REGIS
                        </a>
                    </li>
<?php } ?>


              <?php if (Yii::$app->session->get('my_user_id') == null) { ?>
                    <li class="">

                        <a href="index.php?r=user/login" class="dropdown-toggle" data-toggle="">
                            LOGINS
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
                        <a href="index.html"><img id="logo-footer" class="footer-logo" src="theme/mytheme/assets/img/logo2-default.png" alt=""></a>
                        <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
                        <p>Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>
                    </div><!--/col-md-3-->
                    <!-- End About -->

                    <!-- Latest -->
                    <div class="col-md-3 md-margin-bottom-40">
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
                    </div><!--/col-md-3-->
                    <!-- End Latest -->

                    <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>Useful Links</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Portfolio</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Latest jobs</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Community</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->

                    <!-- Address -->
                    <div class="col-md-3 map-img md-margin-bottom-40">
                        <div class="headline"><h2>Contact Us</h2></div>
                        <address class="md-margin-bottom-40">
                            25, Lorem Lis Street, Orange <br />
                            California, US <br />
                            Phone: 800 123 3456 <br />
                            Fax: 800 123 3456 <br />
                            Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
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
                            2015 &copy; All Rights Reserved.
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
