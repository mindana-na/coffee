<?php
include "post_config.php";

$image=$_FILES['image'];
$coffee_name=$_POST['coffee_name'];
$price=$_POST['price'];

$p=new Post();
$p->newPost($image,$coffee_name,$price);
