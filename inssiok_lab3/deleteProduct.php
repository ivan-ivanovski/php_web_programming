<?php
    global $db;
    require_once "templates/header.php";
    if (isset($_GET['id'])) {

        $id=intval($_GET['id']);
        $sql="DELETE FROM produkti WHERE id=:id";
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':id', $id, SQLITE3_INTEGER);
        $stmt->execute();

        // Redirect back to the view page
        header("Location: index.php");
        exit();
    } else {
        echo "Invalid request.";
    }