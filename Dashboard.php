

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffeeshop| Dashboard</title>
    <link href="bst/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php include "navigation.php"; ?>

<div class="container">
    <?php
    if(isset($_SESSION['login']['role'])){
        ?>
        <div class="row">
            <div class="col-xs-6 col-sm-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-body bg-success">
                        <h4>
                            <i class="glyphicon glyphicon-tags"></i> Posts
                        </h4>
                        <hr>
                        <a style="display: block; color: black" href="posts.php">More>></a>
                    </div>
                </div>
            </div>

            <hr style="color: white">


            <div class="col-xs-6 col-sm-offset-3">
                <div class="panel panel-success">
                    <div class="panel-body bg-info">
                        <h4>
                            <i class="glyphicon glyphicon-qrcode"></i> Orders
                        </h4>
                        <hr>
                        <a style="display: block; color:black" href="#">More>></a>
                    </div>
                </div>
            </div>
        </div>

        <?php
    } ?>



<script src="bst/js/jquery.js"></script>
<script src="bst/js/bootstrap.js"></script>
</body>
</html>