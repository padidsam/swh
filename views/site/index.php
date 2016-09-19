<!--=== Slider ===-->
<div class="tp-banner-container">
    <div class="tp-banner">
        <ul>
            <!-- SLIDE -->
            <?php
            $i = 1;
            $list = Yii::$app->db->createCommand('SELECT NEWS_ID,NEWS_S,IMAGE_DESC,NEWS_HEAD,USER_VIEW
              FROM hos_news where NEWS_TYPE_ID=1 ORDER BY NEWS_ID DESC LIMIT 30')->queryAll();
            foreach ($list as $ds) {
                ?>
                <li class="revolution-mch-1" data-transition="fade" data-slotamount="5" data-masterspeed="1000" data-title="Slide 1">
                    <!-- MAIN IMAGE -->
                    <img src="<?= $ds['IMAGE_DESC'] ?>"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">

                    <div class="tp-caption revolution-ch1 sft start"
                         data-x="center"
                         data-hoffset="0"
                         data-y="100"
                         data-speed="1500"
                         data-start="500"
                         data-easing="Back.easeInOut"
                         data-endeasing="Power1.easeIn"
                         data-endspeed="300">
                             <?= $ds['NEWS_S'] ?>
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption revolution-ch2 sft"
                         data-x="center"
                         data-hoffset="0"
                         data-y="190"
                         data-speed="1400"
                         data-start="2000"
                         data-easing="Power4.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="z-index: 6">
                        <!--                    We are creative technology company providing <br/>
                                            key digital services on web and mobile.-->
                    </div>

                    <!-- LAYER -->
                    <div class="tp-caption sft"
                         data-x="center"
                         data-hoffset="0"
                         data-y="310"
                         data-speed="1600"
                         data-start="2800"
                         data-easing="Power4.easeOut"
                         data-endspeed="300"
                         data-endeasing="Power1.easeIn"
                         data-captionhidden="off"
                         style="z-index: 6">
                        <a href="index.php?r=news/views&id=<?= $ds['NEWS_ID'] ?>" class="btn-u btn-brd btn-brd-hover btn-u-light">Read More..</a>
                        <a href="#" class="btn-u btn-brd btn-brd-hover btn-u-light"><?= $ds['USER_VIEW'] ?></a>
                    </div>
                </li>
                <?php
            }
            ?>

            <!-- END SLIDE -->

        </ul>
        <div class="tp-bannertimer tp-bottom"></div>
    </div>
</div>
<!--=== End Slider ===-->










<div class="container content">



    <div class="row">

        <div class="col-sm-4 ">
            <div class="list-group panel-danger">
                <a href="index.php?r=news/index&type=1" class="list-group-item active">
                    <span class="badge pull-right rounded btn-danger">More..</span>
                    <h4 class="list-group-item-heading">N E W S !! RECEPSION</h4>
                    <p class="list-group-item-text">ข่าวประชาสัมพันธ์</p>
                </a>
                <?php
                $newsList = Yii::$app->db->createCommand("SELECT * FROM hos_news
                      WHERE NEWS_TYPE_ID='1' AND ACTIVE='True'
                      ORDER BY NEWS_ID DESC LIMIT 3")->queryAll();
                foreach ($newsList as $ds) {
                    ?>
                    <a href="index.php?r=news/views&id=<?= $ds['NEWS_ID'] ?>" class="list-group-item ">
                        <h5 class="list-group-item-heading"><B><font color='#3775dd'><?php echo $ds['NEWS_S'] ?></font></b></h5>

                        <span class="label pull-right rounded btn-success">อ่าน : <?php echo number_format($ds['USER_VIEW']); ?></span>&nbsp;&nbsp;
                        <span class="label pull-right btn-default"><font color="#969794"><?php echo $ds['USER_POST'] ?></font></span>
                        <span class="label pull-right btn-default"><font color="#2f7086"><?php echo $ds['DATE_TIME_POST'] ?></font></span>
                        <img src="<?= $ds['IMAGE_DESC'] ?>" width="100" height="48">
                        <p class="list-group-item-text">

                            <?php echo $ds['NEWS_HEAD'] ?>
                        </p>

                    </a>

                    <?php
                }
                ?>


            </div>
        </div><!-- /.col-sm-4 -->

        <div class="col-sm-4">
            <div class="list-group">
                <a href="index.php?r=news/index&type=2" class="list-group-item active">
                    <span class="badge pull-right rounded btn-danger">More..</span>
                    <h4 class="list-group-item-heading">N E W S !! PRICES</h4>
                    <p class="list-group-item-text">ข่าวประกวดราคา จัดซื้อจัดจ้าง</p>
                </a>
                <?php
                $newsList = Yii::$app->db->createCommand("SELECT * FROM hos_news
                      WHERE NEWS_TYPE_ID='2' AND ACTIVE='True'
                      ORDER BY NEWS_ID DESC LIMIT 3")->queryAll();
                foreach ($newsList as $ds) {
                    ?>
                    <a href="index.php?r=news/views&id=<?= $ds['NEWS_ID'] ?>" class="list-group-item ">
                        <h5 class="list-group-item-heading"><B><font color='#3775dd'><?php echo $ds['NEWS_S'] ?></font></b></h5>

                        <span class="label pull-right rounded btn-success">อ่าน : <?php echo number_format($ds['USER_VIEW']); ?></span>&nbsp;&nbsp;
                        <span class="label pull-right btn-default"><font color="#969794"><?php echo $ds['USER_POST'] ?></font></span>
                        <span class="label pull-right btn-default"><font color="#2f7086"><?php echo $ds['DATE_TIME_POST'] ?></font></span>
                        <img src="<?= $ds['IMAGE_DESC'] ?>" width="100" height="45">
                        <p class="list-group-item-text">

                            <?php echo $ds['NEWS_HEAD'] ?>
                        </p>

                    </a>
                    <?php
                }
                ?>
            </div>
        </div><!-- /.col-sm-4 -->



        <div class="col-sm-4">
            <div class="list-group">
                <a href="index.php?r=news/index&type=3" class="list-group-item active">
                    <span class="badge pull-right rounded btn-danger">More..</span>
                    <h4 class="list-group-item-heading">N E W S !! WORKS</h4>
                    <p class="list-group-item-text">ข่าวรับสมัครงาน</p>
                </a>
                <?php
                $newsList = Yii::$app->db->createCommand("SELECT * FROM hos_news
                      WHERE NEWS_TYPE_ID='3' AND ACTIVE='True'
                      ORDER BY NEWS_ID DESC LIMIT 3")->queryAll();
                foreach ($newsList as $ds) {
                    ?>
                    <a href="index.php?r=news/views&id=<?= $ds['NEWS_ID'] ?>" class="list-group-item ">
                        <h5 class="list-group-item-heading"><B><font color='#3775dd'><?php echo $ds['NEWS_S'] ?></font></b></h5>

                        <span class="label pull-right rounded btn-success">อ่าน : <?php echo number_format($ds['USER_VIEW']); ?></span>&nbsp;&nbsp;
                        <span class="label pull-right btn-default"><font color="#969794"><?php echo $ds['USER_POST'] ?></font></span>
                        <span class="label pull-right btn-default"><font color="#2f7086"><?php echo $ds['DATE_TIME_POST'] ?></font></span>
                        <img src="<?= $ds['IMAGE_DESC'] ?>" width="100" height="45">
                        <p class="list-group-item-text">

                            <?php echo $ds['NEWS_HEAD'] ?>
                        </p>

                    </a>
                    <?php
                }
                ?>
            </div>
        </div><!-- /.col-sm-4 -->
    </div>












    <div class="row">


        <div class="col-md-3">
            <div class="list-group">
                <a href="#" class="list-group-item active">Department</a>
                <?php
                $depList = Yii::$app->db->createCommand("SELECT * FROM hos_department ")->queryAll();
                foreach ($depList as $ds) {
                    ?>
                    <a href="index.php?r=dep/index&id=<?= $ds['ID'] ?>" class="list-group-item"><?= $ds['DEPARTMENT'] ?></a>
                    <?php
                }
                ?>
            </div>
        </div>

        <!-- Begin Content -->
        <div class="col-md-9">





            <div class = "panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading"><font color="red">D O W N L O A D - D O C U M E N T</font>
                    <span class="badge pull-right"></span>
                </div>
                <!-- Table -->
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ชื่อรายการโหลด</th>
                            <th>ประเภท</th>
                            <th align="center">Views</th>
                            <th align="center">โหลด</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        //$list = Yii::$app->db->createCommand($sql)->queryAll();

                        $list = Yii::$app->db->createCommand("SELECT * FROM hos_download yd
                                       LEFT OUTER JOIN hos_download_type ydt ON yd.DOWNLOAD_TYPE_ID=ydt.DOWNLOAD_TYPE_ID
                                       ORDER BY ID DESC LIMIT 9")->queryAll();
                        $row = 1;
                        foreach ($list as $ds) {
                            ?>
                            <tr>
                                <td><?php echo $row ?></td>
                                <td><?php echo $ds['DOWNLOAD_NAME'] ?></td>
                                <td><?php echo $ds['DOWNLOAD_TYPE_NAME'] ?></td>
                                <td><span class="label rounded label-success"><?php echo number_format($ds['USER_VIEW']); ?></span></td>
                                <td><a href="index.php?r=load/views&id=<?php echo $ds['ID'] ?>"><img src="images/load.png"></a></td>
                            </tr>
                            <?php
                            $row++;
                        }
                        ?>

                    </tbody>
                </table>
            </div>





        </div>


        <div class="col-lg-9">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
                        </h4>
                    </div>
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus?</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>



                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">Aenean consequat lorem ut felis ullamcorper?</a>
                        </h4>
                    </div>
                    <div id="collapseSix" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</a>
                        </h4>
                    </div>
                    <div id="collapseSeven" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseEight">Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus?</a>
                        </h4>
                    </div>
                    <div id="collapseEight" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <!-- /.panel -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseNine">Aenean consequat lorem ut felis ullamcorper?</a>
                        </h4>
                    </div>
                    <div id="collapseNine" class="panel-collapse collapse">
                        <div class="panel-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div>

            <!-- End Content -->

        </div><!--/container-->
        <!--=== End Content Part ===-->

    </div>







    <div class = "panel panel-default">
        <div class = "panel-heading">
            <h3 class = "panel-title"><font color = "red">W E B B O A R D</font></h3>
        </div>
        <div class = "panel-body">

            <div class = "bs-example" data-example-id = "contextual-table">
                <table class = "table table-hover">
                    <thead>
                        <tr>
                            <th>ลำดับ</th>
                            <th>หัวข้อกระทู้</th>
                            <th>ผู้ตั้ง</th>
                            <th>อ่าน</th>
                            <th align = "right">ตอบ</th>
                            <th align = "right">###</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $i = 1;
                        $board = Yii::$app->db->createCommand("SELECT * FROM hos_board
                       ORDER BY ID DESC LIMIT 10")->queryAll();
                        foreach ($board as $ds) {
                            ?>
                            <tr class="">
                                <th scope="row"><span class="badge pull-right btn-danger"><?= $i ?></span></th>
                                <td> <?php echo $ds['BOARD_TITLE'] ?></td>
                                <td> <span class="label label-info"><?php echo $ds['USER_POST'] ?></span></td>
                                <td align="center"> <?php echo $ds['USER_READ'] ?></td>
                                <td align="center"><?= Yii::$app->db->createCommand("SELECT count(*) FROM hos_board_ans WHERE BOARD_ID='" . $ds['ID'] . "'")->queryScalar(); ?></td>
                                <td><a href="index.php?r=board/views&id=<?= $ds['ID'] ?>" type="button" class="btn btn-xs btn-default">อ่าน.</a></td>
                            </tr>
                            <?php
                            $i++;
                        }
                        ?>
                    </tbody>
                </table>
            </div><!-- /example -->
        </div>
    </div>






    <!-- Service List -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <div class="row">
        <div class="col-lg-12">
            <h2 class="page-header">Service List</h2>
        </div>
        <div class="col-md-4">
            <div class="media">
                <div class="pull-left">
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">ระบบบริหารความเสี่ยงโรงพยาบาล</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                </div>
            </div>
            <div class="media">
                <div class="pull-left">
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-car fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Service Two</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                </div>
            </div>
            <div class="media">
                <div class="pull-left">
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-support fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Service Three</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="media">
                <div class="pull-left">
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-database fa-stack-1x fa-inverse"></i>
                    </span>
                </div>

                <div class="media-body">
                    <a href="/dchsuwan/web/" target="_blank">
                        <h4 class="media-heading">Data Center Hospital</h4>
                        <p>ศูนย์ข้อมูลโรงพยาบาล เป็นการรายงานข้อมูลผ่านเว็บบราวเซอร์ จากฐานข้อมูล Hosxp เพื่อคืนข้อมูลให้หน่วยงานบริการ</p>
                    </a>
                </div>

            </div>
            <div class="media">
                <div class="pull-left">
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-bomb fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Service Five</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                </div>
            </div>
            <div class="media">
                <div class="pull-left">
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-bank fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Service Six</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="media">
                <div class="pull-left">
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-paper-plane fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Service Seven</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                </div>
            </div>
            <div class="media">
                <div class="pull-left">
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-space-shuttle fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Service Eight</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                </div>
            </div>
            <div class="media">
                <div class="pull-left">
                    <span class="fa-stack fa-2x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-recycle fa-stack-1x fa-inverse"></i>
                    </span>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Service Nine</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->

</div><!--/container-->
