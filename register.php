<?php
require_once('conn.php');

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT `username` FROM `users` WHERE `username`='$username'";
$result = $conn->query($sql);

if ($username === '' or $passord === '') {
    echo '帳號或密碼沒有填入';
} else if ($result->num_rows > 0) {
    echo '這個 username:' . $username . ' 已經註冊過';
} else {
    $sql ="INSERT INTO `users`(`username`, `password`) VALUES ('$username', '$password')"; 
    $conn->query($sql);
    echo '你的帳號已成功新增。username：'. $username;
}
?>