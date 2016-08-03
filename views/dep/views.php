<div class="container content">
aaaaa
<ol class="breadcrumb">
    <li><a href="index.php">Home</a></li>
    <li><a href="index.php?r=news/index">News</a></li>
    <li class="active">Detail</li>
</ol>

<?php
$list = Yii::$app->db->createCommand($sql)->queryAll();
foreach ($list as $ds) {
    ?>

    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <font color="#3e680b"><?php echo $ds['DEPARTMENT'] ?></font>
                </a>
            </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <?php echo $ds['DETAIL'] ?>
            </div>
        </div>
    </div>

    <?php
}
?>

</div>
