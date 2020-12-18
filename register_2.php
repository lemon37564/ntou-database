<!doctype html> 
<html> 
    <head> 
        <meta charset="UTF-8"> 
        <title>註冊系統後端</title> 
    </head> 
    <body> 
        <?php
        session_start();
        $username = $_REQUEST["account"];
        $studentName = $_REQUEST["studentName"];
        $year = $_REQUEST["year"];
        $password = $_REQUEST["password"];
        include "db_conn_2.php";
        $account = null;
        $userPassword = null;
        $query = ("select * from student where sID=?");
        $stmt = $db->prepare($query);
        $error = $stmt->execute(array($username));
        $result = $stmt->fetchAll();
        for ($i = 0; $i < count($result); $i++) {
            $account = $result[$i]['sID'];
            $userPassword = $result[$i]['password'];
        }
        if (!is_null($account)) {
            $db = null; //關閉資料庫連線
            ?> 
            <script type="text/javascript">
                alert("此學號已註冊過!");
                location.href = "register_2.html";
            </script>  
            <?php
        }
        $query = ("insert into student values(?,?,?,?)");
        $stmt=$db->prepare($query);
        $result=$stmt->execute(array($username,$studentName,$password,$year));
        $db = null; //關閉資料庫連線
        ?> 
        <script type="text/javascript">
            alert("註冊成功!");
            location.href = "index.php";
        </script> 
    </body> 
</html>
<!--完成-->