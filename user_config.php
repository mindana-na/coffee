<?php
session_start();
class User{
    public $db;
    public function __construct()
    {
        try{
            $this->db=new PDO("mysql:host=localhost; dbname=coffeeshop",
                "root", "password");
        }catch (PDOException $e){
            die("Connection failed to database. " . $e);
        }
    }

    public function login($email, $password){

        $sql="select * from users where email='$email'";
        $row=$this->db->query($sql)->fetch(PDO::FETCH_ASSOC);
        if(!empty($row)){
            $old_password=$row['password'];
            $new_password=md5($password);
            if($new_password==$old_password){

                $_SESSION['login']=$row;
                header("location:index.php");

            }else{
                $_SESSION['error']="Authentication failedl";
                header("location:login.php");

            }

        }else
        {
            $_SESSION['error']="The selected email is invalid.";
            header("location: login.php");
        }
    }

    public function register($name, $email, $password, $confirm_password){
        $old_sql="select email from users where email='$email'";
        $old_row=$this->db->query($old_sql)->fetch(PDO::FETCH_ASSOC);
        if(empty($old_row)){

            if($password==$confirm_password){
                $enc_password=md5($password);
                $sql="insert into users (name, email, password, created_at) 
                    values ('$name', '$email', '$enc_password', now())";
                $this->db->query($sql);
                $_SESSION['success']="The user account have been created.";
                header("location: register.php");

            }else{
                $_SESSION['error']="The password and confirm password must match.";
                header("location: register.php");
            }


        }else{
            $_SESSION['error']="The selected email is exists.";
            header("location: register.php");
        }

    }

}

