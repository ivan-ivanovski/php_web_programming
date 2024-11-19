<?php
    // table user with arg id, first_name, last_name, username, password

    include "./database/db.connect.php";
    $conn=connect_db();

    $sql = "CREATE TABLE IF NOT EXISTS user(
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    first_name TEXT NOT NULL,
    last_name TEXT NOT NULL,
    username TEXT NOT NULL,
    password TEXT NOT NULL,
    createdAt DATE DEFAULT CURRENT_TIMESTAMP
);";
    if($conn->exec($sql)){
        echo "USPESNO KREIRANJE NA TABELA user";
    }
    else{
        echo "NE USPESNO KREIRAENJ NA TABELA user";
        $conn->close();
        die();
    }