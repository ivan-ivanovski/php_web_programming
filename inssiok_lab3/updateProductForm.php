<?php
    global $db;
    require_once "templates/header.php";

    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $id=intval($_POST['id']);
        var_dump($id);

        $imeProduct = trim($_POST['ime']);
        $opisProduct = trim($_POST['opis']);
        $cenaroduct = trim($_POST['cena']);
        if($imeProduct==="" || $opisProduct==="" || $cenaroduct===""){
            echo "Prazni polinja za ime opis ili cena na produkt";
        }
        else{
            $sql="UPDATE produkti SET ime=:ime, opis =:opis, cena=:cena WHERE id=:id";
            $stmp=$db->prepare($sql);
            $stmp->bindParam(':ime',$imeProduct,SQLITE3_TEXT);
            $stmp->bindParam(':opis',$opisProduct,SQLITE3_TEXT);
            $stmp->bindParam(':cena',$cenaroduct, SQLITE3_INTEGER);
            $stmp->bindParam(":id",$id,SQLITE3_INTEGER);
            if($stmp->execute()){
                header("location:index.php");
            } else{
                echo "Greska pri azuriranje na produkt vo tableata";
            }
        }
    }