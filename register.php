
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Coffeeshop>>register</title>
    <link href="bst/css/bootstrap.css" rel="stylesheet">
    <style>
        h4{
            color: #00bedb;
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
            <h4 class="text-center">Signup new user account..</h4>
            <form method="post" action="post-register.php">
                <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" required>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg">Signup</button>
                </div>

            </form>
            Already have an account ? <a href="login.php">Signin</a>
        </div>
    </div>
</div>



<script src="bst/js/jquery.js"></script>
<script src="bst/js/bootstrap.js"></script>
</body>
</html>