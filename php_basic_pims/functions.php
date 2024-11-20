<?php
    include "config.php";
    function fetchProducts(){
        global $conn;
        $sql="SELECT * from product";
        $stmp=$conn->prepare($sql);
        if($stmp->execute()){
            $ress = $stmp->fetchAll();
            return $ress;
        }
        return null;
    }
    function getProductById($id){
        global $conn;
        $sql="SELECT product_name,product_qty,product_price,product_notes,image_url FROM product WHERE id=:id";
        $stmp=$conn->prepare($sql);
        $stmp->bindValue(":id",$id,SQLITE3_INTEGER);
        if($stmp->execute()){
            return $stmp->fetch();
        }
        return null;
    }
    function getUserByUsername($username){
        global $conn;
        $sql="select userID from users WHERE username=:username";
        $stmp=$conn->prepare($sql);
        $stmp->bindValue(":username",$username,SQLITE3_TEXT);
        if($stmp->execute()){
            return $stmp->fetch();
        }
        return false;
    }