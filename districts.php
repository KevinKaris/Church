<?php
include 'db-conn.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    $INSERT = "INSERT INTO districts (name, phone) VALUES ('$name','$phone')";
    $run = mysqli_query($conn, $INSERT);

    if ($run) {
        echo "<script>alert('Sent successfully!');</script>";
        echo "<script>window.location.assign('districts/')</script>";
    }
}
?>