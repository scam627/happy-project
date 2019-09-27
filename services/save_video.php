<?php
    $conn = mysqli_connect("localhost", "root", "1234", "freelancer");
    $title = $_POST['title'];
    $token = $_POST['token'];
    $description = $_POST['description'];
    $result = $conn->query("INSERT INTO videos (token, description, title) VALUES ('$token','$description','$title')");
    if($result){
        header("Location: ../histories.php");
    };
?>