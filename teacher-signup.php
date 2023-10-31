<?php
include 'db-conn.php';

if (isset($_POST['signup'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $SELECT = "SELECT * FROM teacher_signup WHERE email = '$email'";
    $run = mysqli_query($conn, $SELECT);
    $rows = mysqli_num_rows($run);

    if ($rows == 0) {
        $INSERT = "INSERT INTO teacher_signup (name, phone, email) VALUES ('$name', '$phone', '$email')";
        $run = mysqli_query($conn, $INSERT);
        if ($run) {
            echo "<script>alert('signed up successfully!');</script>";
            echo "<script>window.location.assign('children-ministries/')</script>";
        }
    } else {
        echo "<script>alert('Your email exists! ');</script>";
        echo "<script>window.location.assign('children-ministries/')</script>";
    }
}
?>