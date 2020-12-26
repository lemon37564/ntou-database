<html> 
    <head> 
        <meta http-equiv = 'Content-type' contennt = 'text/html'; charset = 'utf-8'>
        <meta http-equiv = 'Pragma' contennt = 'No-cache'>
        <title>登入後介面</title>
        <style type ="text/css">
            #Menu {
                margin:0px;
                border-bottom:0px #cdcdcd solid;
                background-color:#000000;
                border:0px #ccc solid;
            }
            #Menu ul{
                margin:0px;
                margin-left:-10px;
                padding:0px;
            }
            #Menu ul li{
                list-style:none;
                margin-left:0px;
            }
            #Menu ul li a{
                text-decoration:none;
                font-size:12px;
                color:#fff;
                padding:3px 18px;
                background-color:#000000;
                border-bottom:0px solid #ccc;
                float:left;
                padding:12px;
            }
            #Menu ul li a:hover{
                display:block;
                text-decoration:none;
                font-size:16px;
                color:black;
                padding:8px 8px 8px 8px;
                background-color:#fff;
                border-top:1px solid #ccc;
                border-bottom:0px solid #ccc;
            }
            body{
                font-size:16px;font-family:"微軟正黑體";
                background-image: url('https://miro.medium.com/max/2560/1*p71y3xbb0mafdt85amJghA.jpeg');
                background-repeat:no-repeat;
                background-color: #30FFFF;
                background-position: center;
                background-size: cover;
            }

            table{
                width:400px;;
                border-collapse:collapse;
            }
            td{
                border-bottom:1px solid #888888;padding:20px;
            }
            tr:nth-child(odd){
                background-color:#e8e8e8;
            }
            tr:nth-child(even){
                background-color:#e8e8e8;
            }
            tr:nth-child(1){
                background-color:#000000;color:#ffffff;
            }
            .lebt {
                position: absolute;
                left: 10px;
                Top: 80px;
            }
        </style>
    </head> 
    <body>
        <div id='Menu'>
            <ul>
                <li><a href='welcome.php'>首頁</a></li>
                <li><a href='delete.php'>刪除評鑑</a></li>
                <li><a href='update.php'>修改評鑑</a></li>
                <li><a href='insert.php'>新增評鑑</a></li>
                <li><a href='select.php'>查詢評鑑</a></li>
                <li><a href='upvote.php'>評鑑投票</a></li>
                <li><a href='trending.php'>各系熱門課程</a></li>
                <div style='clear:both;'></div>
            </ul>
        </div>
        <?php
        session_start();
        if (isset($_SESSION ["verificationNum"])) {//判斷code存不存在，如果不存在，說明異常登入 
            ?> 
            歡迎<?php
            echo "${_SESSION["username"]}"; //顯示使用者名稱 
            ?><br>
            <a href="exit.php">登出</a> 
            <?php
        } else {//異常存取，不給你看
            ?> 
            <script type="text/javascript">
                alert("異常登入!");
                location.href = "exit.php";
            </script> 
            <?php
        }
        ?> 
        <br> 
        <a href="alter_password.html">修改密碼</a> 
    </body> 
</html>
<!--完成-->