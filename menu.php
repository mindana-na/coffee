<?php
$totalQty=0;
if(isset($_SESSION['cart'])){
    foreach ($_SESSION['cart'] as $id=>$qty){
        $totalQty +=$qty;
    }
}
?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <i class="glyphicon glyphicon-home"></i>

            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">

            <ul class="nav navbar-nav">
                <li class="active" >
                    <a href="coffee-cart.php">
                        <?php echo $totalQty; ?>
                        <i class="glyphicon glyphicon-shopping-cart">Order</i>

                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>