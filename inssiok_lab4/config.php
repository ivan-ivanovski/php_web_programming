<?php
    const ROOT_DIR=__DIR__."/";
    session_start();

    include ROOT_DIR."database/db.connect.php";

    global $conn;

    $conn=connect_db();

    if(!$conn){
        echo "Ne uspesna konekcija so baza na podatoci";
        $conn->close();
        die();
    }
//    echo "Uspensna konekcja so baza na podatoci";