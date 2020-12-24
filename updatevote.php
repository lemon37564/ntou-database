<?php
header("Content-type:text/html;charset=utf-8");
include_once "db_conn.php";
session_start();


$course_id=$_POST["course_id"];
$sID=$_POST["sID"];

$query = ("update reviews set upvotes = upvotes+1 where sID=? and course_id=?");
$stmt = $db->prepare($query);
$stmt->execute(array($sID,$course_id));
unset($_SESSION['sID']);
header("Location:upvote.php");
?>
