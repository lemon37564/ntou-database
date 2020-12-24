<html>
<center>
<style type ="text/css">
h3{
	font-weight:bold;font-size:40px;color:#000000
}
.title{font-weight:bold;font-size:20px;font-family:"微軟正黑體"}
body{
  font-size:16px;font-family:"微軟正黑體";
  background-image: url('https://pic1.zhimg.com/v2-598c835b5bfeb2e9818380390ceade6c_1440w.jpg?source=172ae18b');
　background-repeat:no-repeat;
　background-color: #30FFFF;
  background-position: center;
  background-size: cover;
}
</style>
<body>
<?php
$i = $_GET['i'];
session_start();
$course_id = $_SESSION['$i'];
?>
<form action = "update3.php" method = "post">
<h3>修改評鑑</h3>
<span class = "title">課程名稱 : </span>
<input type = "text" name = "course_name2">
<br>
<br>
<span class = "title">教授名稱 : </span>
<input type = "text" name = "prof_name2">
<br>
<br>
<span class = "title">課程評分 : </span>
<input type = "text" name = "rating2">
<br>
<br>
<span class = "title">課程評論 : </span>
<input type = "text" name = "comment2">
<br>
<br>
<span class = "title">評分標準 : </span>
<input type = "text" name = "grading_policy2">
<br>
<br>
<span class = "title">是否點名 : </span>
<input type = "text" name = "takes_attendance2">
<br>
<br>
<span class = "title">是否有考古題 : </span>
<input type = "text" name = "previous_years_test_question2">
<br>
<br>
<input type='submit' value='送出'>
</form>
</body>
</center>
</html>
