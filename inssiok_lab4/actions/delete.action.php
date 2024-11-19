<?php
    require_once "../config.php";
    global $conn;
    if($_GET['expenseId']){
        $id = intval($_GET['expenseId']);
        $sql="DELETE FROM expenses WHERE id=:id";
        $stm=$conn->prepare($sql);
        $stm->bindValue(":id",$id,SQLITE3_INTEGER);
        if(!$stm->execute()){
            echo "Greska pri brise na podatok";
            $conn->close();
            die();
        }
        header("location:../index.php");
    }