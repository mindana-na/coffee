<?php
class Shop{
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



    public function getPosts(){
        $sql="select posts.*,users.name from posts left join users on users.id=posts.user_id order by id desc";
        return $this->db->query($sql);
    }

    public function coffeeOrder($f_name, $phone, $address){
        $email=$_SESSION['login']['email'];

        $sql_order="insert into orders (full_name, email, phone, address, order_at) values ('$f_name', '$email', '$phone', '$address', now())";
        $this->db->query($sql_order);
        $order_id=$this->db->lastInsertId();

        foreach($_SESSION['cart'] as $id=>$qty){
            $posts="select * from posts where id='$id'";
            $items=$this->db->query($posts);

            foreach($items as $i){
                $coffee_name=$i['coffee_name'];
                $price=$i['price'];

                $sql="insert into coffee_order (coffee_name, price, qty, order_id) values('$coffee_name', '$price', '$qty', '$order_id')";
                $this->db->query($sql);
            }
        }

        unset($_SESSION['cart']);

        header("location:thank.php");
    }

}