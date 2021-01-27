<?php
session_start();
if(!isset($_SESSION['cart'])) {
    header("location: index.php");
    exit();
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffee/coffee-cart</title>
    <link href=" bst/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php include "navigation.php" ?>

<div class="container">

    <div class="row">
        <div class="col-sm-8 col-sm-offset-4">
            <?php
            if(!isset($_SESSION['login'])){
                ?>
                <p>
                    Please Login <i><a href="login.php">Here</a></i> To Continue Your Order.
                </p>

                <?php
            }else{
                ?>
                <p>Fill Your Address To Delivered</p>
                <form method="post" action="checkout-order.php">
                    <div class="form-group">
                        <label for="full_name">Full Name</label>
                        <input required type="text" name="full_name" id="full_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input required type="tel" name="phone" id="phone" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea required name="address" id="address" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-lg">Confirm</button>


                    </div>
                </form>

                <?php
            }
            ?>




        </div>

    </div>
</div>

<script src="bst/js/jquery.js"></script>
<script src="bst/js/bootstrap.js"></script>
</body>
</html>
