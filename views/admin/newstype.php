<div class="container content">

<ol class="breadcrumb">
    <li><a href="index.php?r=admin/index">Home</a></li>
    <li class="active">User</li>
</ol>


<div class="panel panel-default">
    <div class="panel-heading" >
<!--        <span class="pull-left"><img src="images/home.png"></span>-->
<!--        <span class="label pull-right label-danger">Danger</span> -->
        <a type="button" href="index.php?r=admin/newstypeset" class="btn-u btn-u-xs rounded btn-u-red pull-right">เพิ่ม</a>

        <h5 class="panel-title">หน้าหลัก ประเภทข่าว</h5>
    </div>

</div>





<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><font color="red">ประเภทข่าว</font></h3>
    </div>
    <div class="panel-body">

        <div class="bs-example" data-example-id="contextual-table">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th width=10>ลำดับ</th>
                        <th width=10>รหัส</th>
                        <th>ประเภทข่าว</th>
                        <th text-align="right" width=100>จัดการ</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 1;
                    $list = Yii::$app->db->createCommand($sql)->queryAll();
                    foreach ($list as $ds) {
                        ?>
                        <tr class="">
                            <td align="left"><span class="badge pull-left btn-danger"><?= $i ?></span></td>
                            <td> <?php echo $ds['NEWS_TYPE_ID'] ?></td>
                            <td> <?php echo $ds['NEWS_TYPE_NAME'] ?></td>
                            <td align="right">
                                <a href="index.php?r=admin/newstypeset&id=<?= $ds['NEWS_TYPE_ID'] ?>"><img src="images/edit.png"></a>
                                <a onClick="javascript:return confirm('ต้องการลบ?')" href="index.php?r=admin/newstypedel&id=<?= $ds['NEWS_TYPE_ID'] ?>"><img src="images/del.png"></a>
                            </td>
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
