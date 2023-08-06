<?php
require_once 'conn.php';

$id = $_POST['id'];
$comment = $_POST['comment'];

$sql = "UPDATE  `comm` SET `comment` = '$comment' WHERE `id` = $id;";
$result = mysqli_query($conn, $sql);
?>
<h1>更新留言</h1>
    <form action='update.php' method='POST'>
        請輸入要更新的留言編號:<input name='id' />
        <br>
        更新留言內容:
        <br>
        <input type="text" style="width:1000px;height:100px;font-size:25px" name='comment' />
        <input type='submit' value="更新留言"/> <br>
        <br>
        <input type="button" value="回查詢留言" onclick="location='list.php'" />
    </form>