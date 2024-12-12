<?php
    include "./database/db.connect.php";
    $conn=connect_db();

//    $sql="ALTER TABLE user ADD 'token_hashed' VARCHAR(60) NULL DEFAULT NULL";
    $sql="ALTER TABLE user ADD 'token_expire_date' DATETIME NULL DEFAULT NULL";

    $stmp=$conn->prepare($sql);
    if(!$stmp->execute()){
        echo "Ne uspesno dodavanje na koloni";
        die();
    }
    echo "uspesno dodavanje koloni";
