<?php
    const ROOT_DIR=__DIR__."/";

    include ROOT_DIR."database/db.connect.php";

    global $conn;

    session_start();

    $conn=connect_db();

    if(!$conn) {
        echo "Ne uspesna konekcija so baza na podatoci";
        $conn->close();
        die();
    }
