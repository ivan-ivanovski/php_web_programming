<?php
    require_once "../config.php";
    global $conn;
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id=intval($_POST['id']);
        $expenseName = htmlspecialchars(trim($_POST['expenseName'])) ?: '';
        $expenseDate = htmlspecialchars(trim($_POST['expenseDate'])) ?: '';
        $expensePrice = intval(htmlspecialchars(trim($_POST['expensePrice']))) ?: '';
        $expenseType = $_POST['type'] ?: '';

        $sql = "UPDATE expenses SET expense_name=:name,expense_price=:price,expense_type=:type,expense_createdAt=:date WHERE id=:id";
        $stmp = $conn->prepare($sql);
        $stmp->bindValue(':id',$id,SQLITE3_INTEGER);
        $stmp->bindValue(':name', $expenseName, SQLITE3_TEXT);
        $stmp->bindValue(':price', $expensePrice, SQLITE3_INTEGER);
        $stmp->bindValue(':type', $expenseType, SQLITE3_TEXT);
        $stmp->bindValue(':date', $expenseDate, SQLITE3_TEXT);
        if (!$stmp->execute()) {
            echo "Greska pri azuriranje na trosok vo tableata";
            $conn->close();
            die();
        }
        header("location:../index.php");
    }