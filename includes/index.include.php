<?php
session_start();
include 'Database.include.php';
date_default_timezone_set("Asia/Colombo");

$Database = new Database();
$conn = $Database->getConnection();

if (isset($_POST['welcome'])) {
    $context=$_POST['welcome'];
    $sql = "UPDATE `index` SET path='', context='" . $context . "'  WHERE `name`='welcome'";
    $result = $conn->query($sql);
    if ($result) {
        echo "done";
        header("Location: ../index.php?status=done");
    } else {
        echo "error";
        header("Location: ../index.php?error=notSaved");
    }
}