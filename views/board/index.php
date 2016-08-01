
<div class="container content">
<ol class="breadcrumb">
  <li><a href="index.php">Home</a></li>
  <li class="active">Webboard</li>
</ol>


<div class="panel panel-default">
    <div class="panel-heading" >
<!--        <span class="pull-left"><img src="images/home.png"></span>-->
<!--        <span class="label pull-right label-danger">Danger</span> -->

               <?php
                    if (Yii::$app->session->get("my_user_id") != '')  {
                        ?>
       <a type="button" href="index.php?r=board/boardset"  class="btn-u btn-u-xs rounded btn-u-red pull-right">เพิ่มกระทู้.</a>
     <?php
                    }else{
                    ?>

            <a type="button" href="#"  class="btn-u btn-u-xs rounded btn-u-default pull-right">เข้าระบบก่อนเพิ่มกระทู้.</a>

       <?php
                    }
       ?>

        <h5 class="panel-title">หน้าหลัก W E B B O A R D</h5>
    </div>

</div>



            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><font color="red">W E B B O A R D</font></h3>
                </div>
                <div class="panel-body">

                    <div class="bs-example" data-example-id="contextual-table">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ลำดับ</th>
                                    <th>หัวข้อกระทู้</th>
                                    <th>ผู้ตั้ง</th>
                                    <th>อ่าน</th>
                                    <th align="right">ตอบ</th>
                                    <th align="right">###</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $i=1;
                                $board = Yii::$app->db->createCommand($sql)->queryAll();
                                foreach ($board as $ds) {

                                    ?>
                                    <tr class="">
                                        <th scope="row"><span class="badge pull-right btn-danger"><?=$i?></span></th>
                                        <td> <?php echo $ds['BOARD_TITLE'] ?></td>
                                        <td> <span class="label label-info"><?php echo $ds['USER_POST'] ?></span></td>
                                        <td align="center"> <?php echo $ds['USER_READ'] ?></td>
                                        <td align="center"><?= Yii::$app->db->createCommand("SELECT count(*) FROM hos_board_ans WHERE BOARD_ID='" . $ds['ID'] . "'")->queryScalar(); ?></td>
                                        <td><a type="button" href="index.php?r=board/views&id=<?=$ds['ID']?>" class="btn btn-primary btn-sm">อ่าน.</a></td>
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

</div>
