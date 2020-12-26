<!doctype html> 
<html> 
    <head> 
        <meta charset="UTF-8"> 
        <title>登入系統後端驗證</title> 
    </head> 
    <body> 
        <?php
        session_start(); //登入系統開啟一個session內容 
        $username = $_REQUEST["account"]; //獲取html中的使用者名稱（通過post請求） 
        $password = $_REQUEST["password"]; //獲取html中的密碼（通過post請求) 
        include "db_conn.php";
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
        if (is_null($account)) {//使用者名稱在資料庫中不存在時跳回index.php介面
            $db = null; //關閉資料庫連線
            ?> 
            <script type="text/javascript">
                alert("無此帳號");
                location.href = "index.php";
            </script> 
            <?php
        } else {
            if ($userPassword != $password) {//當對應密碼不對時跳回index.php介面
                $db = null; //關閉資料庫連線
                ?> 
                <script type="text/javascript">
                    alert("密碼錯誤");
                    location.href = "index.php";
                </script> 
                <?php
            } else {
                $_SESSION["username"] = $username;
                $_SESSION["verificationNum"] = mt_rand(0, 1000000); //防止未經登入就直接存取登入後頁面
                $db = null; //關閉資料庫連線
                ?> 
                <script type="text/javascript">
                    alert("登入成功!");
                    location.href = "welcome.php";
                </script> 
                <?php
            }
        }
        ?> 
    </body> 
</html>
<!--完成-->