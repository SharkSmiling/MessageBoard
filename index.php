<?php
require_once('conn.php');
?>

<h1>登入</h1>
    <form action='login.php' method='POST'>
        使用者名稱:<input name='username' />
        密碼:<input name='password' type='password' />
        <input type='submit' value="登入"/>
    </form>

<h1>註冊</h1>
    <form action='register.php' method='POST'>
        使用者名稱:<input name='username' />
        密碼:<input name='password' type='password' />
        <input type='submit' value="註冊"/>
    </form>