<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
    <link rel="stylesheet" href="css/base.css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
</head>
<body>
<div class="container">
    <?php include 'side-left.php' ?>
    <div class="right">
        <?php include 'side-right.php' ?>
        <div class="header">
            <a class="item hour-icon icon"><span>钟点工</span></a>
            <a href="index.php" class="back"><span>返回</span></a>
        </div>
        <div class="content">
            <div class="img-wrapper">
                <img src="images/page-hour.png" />
            </div>
        </div>
    </div>
</div>
<?php include 'vscroll.php'; ?>
</body>
</html>

