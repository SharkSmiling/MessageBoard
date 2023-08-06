<?php
require_once('conn.php');

$comment = $_POST['comment'];

$sql = "SELECT `comment` FROM `comm` WHERE `comment`='$comment'";
$result = $conn->query($sql);

if ($comment === '' ) {
    echo '請輸入留言...';
} else {
    $sql ="INSERT INTO `comm`(`comment`) VALUES ('$comment')"; 
    $conn->query($sql);
}

?>
<h1>留言板</h1>
    <form action='add.php' method='POST'>
        <input type="text" style="width:1000px;height:100px;font-size:25px" name='comment' />
        <input type='submit' value="留言"/><br>
        <br>
        <input type="button" value="查詢留言" onclick="location='list.php'" />
        <input type="button" value="返回登入" onclick="location='index.php'" />
    </form>