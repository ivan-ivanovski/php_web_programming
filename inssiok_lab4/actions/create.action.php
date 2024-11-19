<!--expense_name TEXT NOT NULL,-->
<!--expense_price TEXT NOT NULL,-->
<!--expense_type TEXT NOT NULL,-->
<!--expense_createdAt DATE DEFAULT CURRENT_TIMESTAMP-->
<?php
    require_once "../config.php";
    global $conn;
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        $expenseName=htmlspecialchars(trim($_POST['expenseName'])) ?: '';
        $expenseDate=htmlspecialchars(trim($_POST['expenseDate'])) ?: '';
        $expensePrice=intval(htmlspecialchars(trim($_POST['expensePrice']))) ?: '';
        $expenseType=$_POST['type'] ?: '';

        $sql="INSERT INTO expenses(expense_name,expense_price,expense_type,expense_createdAt) VALUES (:name,:price,:type,:date)";
        $stmp = $conn->prepare($sql);
        $stmp->bindValue(':name',$expenseName,SQLITE3_TEXT);
        $stmp->bindValue(':price',$expensePrice,SQLITE3_INTEGER);
        $stmp->bindValue(':type',$expenseType,SQLITE3_TEXT);
        $stmp->bindValue(':date',$expenseDate,SQLITE3_TEXT);
        if(!$stmp->execute()){
            echo "Greska pri dodavanje na trosok vo tableata";
            $conn->close();
            die();
        }
        header("location:../index.php");
    }