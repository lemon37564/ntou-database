<?php
header("Content-type:text/html;charset=utf-8");
include_once "db_conn.php";
session_start();
$course_name2 = $_POST["course_name2"];
$prof_name2 = $_POST["prof_name2"];
$rating2 = $_POST["rating2"];
$comment2 = $_POST["comment2"];
$grading_policy2 = $_POST["grading_policy2"];
$takes_attendance2 = $_POST["takes_attendance2"];
$previous_years_test_question2 = $_POST["previous_years_test_question2"];
 
$sID = $_SESSION['sID'];
$course_id = $_SESSION['$i'];
$query = ("update reviews set course_name=?,prof_name=?,rating=?,comment=?,grading_policy=?,takes_attendance=?,previous_years_test_question=? where sID=? and course_id=?");
$stmt = $db->prepare($query);
$stmt->execute(array($course_name2,$prof_name2,$rating2,$comment2,$grading_policy2,$takes_attendance2,$previous_years_test_question2,$sID,$course_id));
unset($_SESSION['sID']);
header("Location:update.php");
?>
