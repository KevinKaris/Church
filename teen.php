<?php
include 'db-conn.php';

if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $INSERT = "INSERT INTO teen (name, phone) VALUES ('$name','$phone')";
    $run = mysqli_query($conn, $INSERT);

    if ($run) {
        echo "<script>alert('Sent successfully!');</script>";
        echo "<script>window.location.assign('teen-ministry/')</script>";
    }
}
?>