<?php

if(!$_SESSION['login']['role']){
    header("location: Dashboard.php");
    exit();
}
