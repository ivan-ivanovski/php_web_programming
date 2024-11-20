<?php
    session_start();
    $db="dbProducts.sqlite";
    global $conn;
    $conn=new PDO('sqlite:'.$db);
    if(!$conn){
        echo "Problem so konektiranj so baza na podataci";
    }
//    echo "Konecija uspesna";
