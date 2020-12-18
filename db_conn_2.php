<?php
$user = 'root'; //資料庫使用者名稱
$dbpassword = 'andy0922128099'; //資料庫的密碼
try {
    $db = new
            PDO('mysql:host=localhost;dbname=course_review;charset=utf8', $user, $dbpassword);
    //之後若要結束與資料庫的連線，則使用「$db = null;」
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) { //若上述程式碼出現錯誤，便會執行以下動作
    Print "ERROR!: " . $e->getMessage();
    die();
}
?>
<!--完成-->