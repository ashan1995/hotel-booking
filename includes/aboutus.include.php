<?php
session_start();
include 'Database.include.php';
date_default_timezone_set("Asia/Colombo");

$Database = new Database();
$conn = $Database->getConnection();

if (isset($_POST['para1'])) {
    $context=$_POST['para1'];
    $sql = "UPDATE aboutus SET path='', context='" . $context . "'  WHERE `name`='para1'";
    $result = $conn->query($sql);
    if ($result) {
        echo "done";
        header("Location: ../about-us.php?status=done");
    } else {
        echo "error";
        header("Location: ../about-us.php?error=notSaved");
    }
}
else if (isset($_POST['para2'])) {
    $context=$_POST['para2'];
    $sql = "UPDATE aboutus SET path='', context='" . $context . "'  WHERE `name`='para2'";
    $result = $conn->query($sql);
    if ($result) {
        echo "done";
        header("Location: ../about-us.php?status=done");
    } else {
        echo "error";
        header("Location: ../about-us.php?error=notSaved");
    }
}