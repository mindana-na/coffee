<?php
session_start();
class Post
{
    public $db;

    public function __construct()
    {
        try {
            $this->db = new PDO("mysql:host=localhost; dbname=coffeeshop",
                "root", "password");
        } catch (PDOException $e) {
            die("Connection failed to database. " . $e);
        }
    }

    public function newPost($image, $coffee_name, $price)
    {
        $img_name = date("d-m-y-h-i-s") . "-" . $image['name'];
        $img_tmp = $image['tmp_name'];
        $user_id = $_SESSION['login']['id'];

        $sql = "insert into posts (coffee_name, price, image,user_id,post_at) 
               values('$coffee_name','$price','$img_name','$user_id', now())";
        $r = $this->db->query($sql);
        if($r){

            move_uploaded_file($img_tmp, "posts/$img_name");
            $_SESSION['success']="The post have been created.";

        }else{
            $L_SESSION['error']="The post created failed.";
        }
        header("location: posts.php");


    }


}




