<?php
    require_once 'conn.php';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users (username, password) VALUES (' $username ', ' $password ')";
    $conn->exec($sql);
    // echo $username . " " . $password;        header('Location: index.php')           
    header('Location: index.php') 
    ?>