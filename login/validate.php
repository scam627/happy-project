<?php
    $conn = mysqli_connect("localhost", "root", "1234", "freelancer");
    session_start();
    $nickname = $_POST['nickname'];
    $password = $_POST['password'];
    $result = $conn->query("SELECT * FROM users WHERE nickname = '$nickname' AND password = '$password'");
    $user = $result->fetch_array(MYSQLI_ASSOC);
    
    if ($user) {
		header('Location: ../manage.html');
	} else {
		header('Location: login.php?error=1');
	}
?>