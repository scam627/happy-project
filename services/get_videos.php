<?php
    $conn = mysqli_connect("localhost", "root", "1234", "freelancer");
    $reponse = [];
    $result = $conn->query("SELECT token, description, title FROM videos");
    while($row = $result->fetch_array(MYSQLI_ASSOC))
        $response[] = $row;
    echo json_encode($response);
?>