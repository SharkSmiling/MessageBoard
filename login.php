<?php
require_once('conn.php');

$username = mysqli_real_escape_string($conn,$_POST['username']);
$password = mysqli_real_escape_string($conn,$_POST['password']);

$sql = "SELECT * FROM users WHERE username='" . $username . "'and password='". $password ."' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header('Location: add.php');
} else {
    header('Location: index.php');
}
?>