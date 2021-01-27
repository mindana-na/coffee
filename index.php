<?php include "config.php";
$shop=new Shop();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffeeshop>>index</title>
    <link href="bst/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php include 'navigation.php'; ?>
<div class="container">
    <?php include 'menu.php'; ?>
    <div class="row">
      <?php
        $posts=$shop->getPosts();
        foreach($posts as $p):
        ?>
        <div class="col-xs-6 col-sm-4 col-md-3">
            <div class="thumbnail">
                <img src="posts/<?php echo $p['image']?>">
                <p class="text-center" style="margin-top: 10px;">
                    <?php echo $p['coffee_name'] ?>
                </p>
                <div>
                    <small>
                        <i class="glyphicon glyphicon-user"></i> <?php echo $p['name']?>
                    </small>
                    <small class="badge" style="color: black">
                        $ <?php echo $p['price']?>
                    </small>

                </div>
               <?php
               if(isset($_SESSION['login'])){
                   ?>
                   <a href="add-to-cart.php?id=<?php echo $p['id']?>" class="btnAddCart">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                    <i class="glyphicon glyphicon-plus-sign"></i>
                </a>


                <?php
               }
               ?>


            </div>
        </div>

        <?php
        endforeach;
        ?>
    </div>
</div>
    </div>
</div>

<script src="bst/js/jquery.js"></script>
<script src="bst/js/bootstrap.js"></script>

</body>
</html>
