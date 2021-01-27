<?php
include "post_config.php";

$p=new Post();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>coffeeshop/posts</title>
    <link href="bst/css/bootstrap.css" rel="stylesheet">
</head>
<body>
<?php include "navigation.php";?>
<div class="container">

    <div class="page-header">
        <h5>
            <i class="glyphicon glyphicon-plus-sign"></i> New Post
        </h5>
    </div>
    <div class="row">
        <div class="col-sm-6 col-sm-offset-3">

            <?php include "message.php"?>

            <form enctype="multipart/form-data" method="post" action="add-post.php">
                <div class="form-group">
                    <label for="image">Image</label>
                    <input required accept="image/*" type="file" name="image" id="image">
                </div>

                <div class="form-group">
                    <label for="coffee_name">Coffee Name</label>
                    <input required type="text" name="coffee_name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input required type="number" name="price" id="price" class="form-control">
                </div>


                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg"> Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script src="bst/js/jquery.js"></script>
<script src="bst/js/bootstrap.js"></script>
</body>
</html>


