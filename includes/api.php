<?php

    include "connect.php";

    $select = "SELECT * FROM addp";
    $result = mysqli_query($connect, $select);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($data);
    header("Content-Type: JSON");
?>