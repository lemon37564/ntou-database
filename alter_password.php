<html> 
    <head> 
        <meta http-equiv = 'Content-type' contennt = 'text/html'; charset = 'utf-8'>
        <meta http-equiv = 'Pragma' contennt = 'No-cache'> 
        <title>正在修改密碼</title>
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
        <?php
        session_start();
        $username = $_REQUEST ["username"];
        $oldpassword = $_REQUEST ["oldpassword"];
        $newpassword = $_REQUEST ["newpassword"];
        include "db_conn.php";
        $account = null;
        $userPassword = null;
        $query = ("select sID,password from student where sID=?");
        $stmt=$db->prepare($query);
        $error = $stmt->execute(array($username));
        $result = $stmt->fetchAll();
        for ($i = 0; $i < count($result); $i++) {
            $account = $result[$i]['sID'];
            $userPassword = $result[$i]['password'];
        }
        if (is_null($account)) {
            $db = null; //關閉資料庫連線
            ?> 
            <script type="text/javascript">
                alert("帳號打錯了");
                location.href = "alter_password.html";
            </script>  
            <?php
        }
        if ($oldpassword != $userPassword) {
            $db = null;
            ?> 
            <script type="text/javascript">
                alert("舊密碼錯誤");
                location.href = "alter_password.html";
            </script> 
            <?php
        }
        $query = ("update student set password=? where sID=?");
        $stmt=$db->prepare($query);
        $result = $stmt->execute(array($newpassword,$account));
        $db = null;
        ?> 
        <script type="text/javascript">
            alert("密碼修改成功，請重新登入");
            location.href = "exit.php";
        </script> 
    </body> 
</html> 