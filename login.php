<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffeeshop>>login</title>
    <link href="bst/css/bootstrap.css" rel="stylesheet">
    <style>
        h4{
            color: steelblue;
            margin-bottom: 50px;
        }
    </style>
</head>
<body>
<?php include "navigation.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-4">
            <?php include "message.php"; ?>
            <h4 class="text-center">Login to continued ...</h4>
            <form method="post" action="post-login.php">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg">Login</button>
                </div>

            </form>
            Don't have an account ? <a href="register.php">Signup</a>
        </div>
    </div>
</div>



<script src="bst/js/jquery.js"></script>
<script src="bst/js/bootstrap.js"></script>
</body>
</html>