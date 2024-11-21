<?php
    // table user with arg id, first_name, last_name, username, password

    include "./database/db.connect.php";
    $conn=connect_db();

    $sql = "CREATE TABLE IF NOT EXISTS user(
    id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL,
    first_name TEXT NOT NULL,
    last_name TEXT NOT NULL,
    user_email TEXT NOT NULL UNIQUE,
    username TEXT NOT NULL UNIQUE,
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