<?php
    require_once 'conn.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = [
        'username' => $username,
        'password' => $password
    ]
    $sql = "INSERT INTO users (username, password) VALUES (:username, ':password ')";
    $stmt= $conn->prepare($sql);
    $stmt->execute($data);
    // echo $username . " " . $password;        header('Location: index.php')           
    header('Location: index.php') 
    ?>