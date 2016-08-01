<div class="container content">
<ol class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li class="active">News</li>
</ol>


<div class="panel panel-default">
    <div class="panel-heading" >
<!--        <span class="pull-left"><img src="images/home.png"></span>-->
<!--        <span class="label pull-right label-danger">Danger</span> -->
        <span class="badge pull-right btn-success"> Print..</span>

        <h5 class="panel-title">หน้าหลัก N E W S</h5>
    </div>

</div>



<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><font color="red">N E W S &nbsp;&nbsp;&nbsp;</font>
        <?php
        echo Yii::$app->db->createCommand("SELECT NEWS_TYPE_NAME FROM hos_news_type WHERE NEWS_TYPE_ID=".$_GET["type"]."")->queryScalar();
        ?>
        </h3>
    </div>
    <div class="panel-body">

        <div class="bs-example" data-example-id="contextual-table">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ลำดับ</th>
                        <th>หัวข้อข่าว</th>
                        <th>โดย</th>
                        <th>อ่าน</th>
                        <th align="right">###</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 1;
                    $board = Yii::$app->db->createCommand($sql)->queryAll();
                    foreach ($board as $ds) {
                        ?>
                        <tr class="">
                            <th scope="row"><span class="badge pull-right btn-danger"><?= $i ?></span></th>
                            <td> <?php echo $ds['NEWS_HEAD'] ?></td>
                            <td> <span class="label label-info"><?php echo $ds['USER_POST'] ?></span></td>
                            <td align="center"> <?php echo $ds['USER_VIEW'] ?></td>
                            <td><a type="button" href="index.php?r=news/views&id=<?= $ds['NEWS_ID'] ?>" class="btn btn-primary btn-sm">อ่าน.</a></td>
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
