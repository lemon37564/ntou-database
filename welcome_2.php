<!doctype html> 
<html> 
    <head> 
        <meta charset="UTF-8"> 
        <title>登入後介面</title> 
    </head> 
    <body> 
        <?php
        session_start();
        if (isset($_SESSION ["verificationNum"])) {//判斷code存不存在，如果不存在，說明異常登入 
            ?> 
            歡迎<?php
            echo "${_SESSION["username"]}"; //顯示使用者名稱 
            ?><br>
            <a href="exit_2.php">登出</a> 
            <?php
        } else {//異常存取，不給你看
            ?> 
            <script type="text/javascript">
                alert("異常登入!");
                location.href = "exit_2.php";
            </script> 
            <?php
        }
        ?> 
        <br> 
        <a href="alter_password_2.html">修改密碼</a> 
    </body> 
</html>
<!--完成-->