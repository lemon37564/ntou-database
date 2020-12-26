<?php
header("Content-type:text/html;charset=utf-8");
include_once "db_conn.php";

$sID = $_GET["sID"];
$course_id = $_GET["course_id"];
$query = ("delete from reviews where sID=? and course_id=?");
$stmt = $db->prepare($query);
$stmt->execute(array($sID,$course_id));
header("Location:delete.php");
?>
