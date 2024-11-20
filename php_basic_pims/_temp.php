<?php
    $databaseName="dbProducts.sqlite";
    if($dsn = new PDO('sqlite:'.$databaseName)){
        echo "Uspesno kreirana baza na podatoci";
    }
    else{

        echo @"Ne uspesno kreiranje na baza na podatoci ili bazata vekje postoi";
    }