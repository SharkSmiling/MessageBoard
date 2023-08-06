<?php
require_once 'conn.php';

$id = $_POST['id'];

$sql = "DELETE FROM `comm` WHERE `id` = '$id';";
$result = mysqli_query($conn, $sql);

?>

<h1>刪除留言</h1>
    <form action='delete.php' method='POST'>
        請輸入要刪除的留言編號:<input name='id' />
        <input type='submit' value="刪除"/>	<br>
        <br>
        <input type="button" value="回查詢留言" onclick="location='list.php'" />
    </form>