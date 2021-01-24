<?php session_start(); ?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <i class="glyphicon glyphicon-shopping-cart"></i> WELCOME TO MY COFFEESHOP
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <?php
                if(!isset($_SESSION['login'])){
                    ?>
                    <li><a href="about.php"><i class="glyphicon glyphicon-info-sign"></i>  About</a></li>

                    <li><a href="login.php"><i class="glyphicon glyphicon-log-in"></i>  Sign In</a></li>

                    <?php

                }else{
                    ?>
                    <li><a href="about.php"><i class="glyphicon glyphicon-info-sign"></i>  About</a></li>

                    <li>       </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['login']['name'] ?> <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="logout.php">Logout    <i class="glyphicon glyphicon-log-out"></i></a></li>
                        </ul>
                    </li>

                    <?php

                }
                ?>

            </ul>
        </div>
    </div>
</nav>