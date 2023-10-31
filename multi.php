<?php
include 'db-conn.php';

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $INSERT = "INSERT INTO multi (fname, lname, phone, email, message) VALUES ('$fname', '$lname', '$phone', '$email', '$message')";
    $run = mysqli_query($conn, $INSERT);

    if ($run) {
        echo "<script>alert('Submitted successfully!');</script>";
        echo "<script>window.location.assign('multi-form/')</script>";
    }
}
?>