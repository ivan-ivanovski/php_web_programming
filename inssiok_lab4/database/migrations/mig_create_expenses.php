<?php
    include "./database/db.connect.php";
    $conn=connect_db();

    $sql = "CREATE TABLE IF NOT EXISTS expenses(
        id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
        expense_name TEXT NOT NULL,
        expense_price TEXT NOT NULL,
        expense_type TEXT NOT NULL,
        expense_createdAt DATE DEFAULT CURRENT_TIMESTAMP
    );";
    if($conn->exec($sql)){
        echo "USPESNO KREIRANJE NA TABELA expense";
    }
    else{
        echo "NE USPESNO KREIRAENJ NA TABELA expense";
        $conn->close();
        die();
    }