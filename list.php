<h1>查詢留言</h1>
<?php
require_once('conn.php');

$sql = "SELECT * FROM comm ";
$result = mysqli_query($conn, $sql);
$per_total = mysqli_num_rows($result);
$per = 10;
$pages = ceil($per_total / $per);

if(!isset($_GET['page'])) {
    $page = 1;	  
} else {
    $page = $_GET['page'];
}

$start = ($page - 1) * $per;
$result = mysqli_query($conn, $sql . ' LIMIT ' . $start . ', ' . $per);

$page_start = $start +1;
$page_end = $start + $per;
if($page_end > $per_total) {
    $page_end = $per_total;
}

if(!empty($result)) {
    while($row = $result -> fetch_assoc()) {
        echo 'NO. '. $row['id'] . '<br>' . $row['comment'] . '<br>';
        echo '<br>';
    }
} else {
    echo "查無資料";
}
?>

<div class="col-md-6" align="center">
    <?php
    echo '顯示 ' . $page_start . ' 到 ' . $page_end . ' 筆 共 ' . $per_total . ' 筆，目前在第 ' . $page . ' 頁 共 ' . $pages . ' 頁'; 
    ?>
</div>

<div class="col-md-6" align="center">
    <?php
    if($pages > 1) {
        if($page == '1') {
            echo "首頁 ";
            echo "上一頁 ";		
        } else {
            echo "<a href=?page=1> 首頁 </a> ";
            echo "<a href=?page=" . ($page - 1) . "> 上一頁 </a> ";
        }
        for($i = 1 ; $i <= $pages ; $i++) {
            $lnum = 2;
            $rnum = 2;
            if($page <= $lnum) {
                $rnum = $rnum + ($lnum - $page + 1);
            }
            if($page + $rnum > $pages) {
                $lnum = $lnum + ($rnum - ($pages - $page));
            }
            if($page - $lnum <= $i && $i <= $page + $rnum) {
                if($i == $page) {
                    echo $i . ' ';
                } else {
                    echo '<a href=?page=' . $i . '>' . $i . '</a> ';
                }
            }
        }
        if($page == $pages) {
            echo " 下一頁";
            echo " 末頁";	
        } else {
            echo "<a href=?page=" . ($page + 1) . "> 下一頁</a>";
            echo "<a href=?page=" . $pages . "> 末頁</a>";		
        }
    }
    ?>	
</div>

<input type="button" value="新增留言" onclick="location='add.php'" />
<input type="button" value="刪除留言" onclick="location='delete.php'" />
<input type="button" value="更新留言" onclick="location='update.php'" />