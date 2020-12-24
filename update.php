<html>
<head>
<meta http-equiv = 'Content-type' contennt = 'text/html'; charset = 'utf-8'>
<meta http-equiv = 'Pragma' contennt = 'No-cache'>
<title>修改評鑑</title>
<style type ="text/css">
#Menu {
	margin:0px;
	border-bottom:0px #cdcdcd solid;
	background-color:#000000;
	border:0px #ccc solid;
}
#Menu ul{
	margin:0px;
	margin-left:16px;
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
	padding:10px;
}
#Menu ul li a:hover{
	display:block;
	text-decoration:none;
	font-size:14px;
	color:black;
	padding:7px 8px 8px 8px;
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
<center>
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
<table class="lebt"cellpadding = '36'>
<tr>
<th>sID</th>
<th>course_id</th>
<th>course_name</th>
<th>prof_name</th>
<th>rating</th>
<th>comment</th>
<th>grading_policy</th>
<th>takes_attendance</th>
<th>previous_years_test_question</th>
<th>upvotes</th>
<th>review_date</th>
<th>操作</th>
</tr>
<?php
header("Content-type:text/html;charset=utf-8");
include_once "db_conn.php";

$sID = $_POST["sID"];
$query = ("select * from reviews where sID=?");
$stmt = $db->prepare($query);
$stmt->execute(array($sID));
$result = $stmt->fetchAll();
 
for($i=0;$i<count($result);$i++){
	echo "<tr>";
	echo "<td>".$result[$i]['sID']."</td>";
	echo "<td>".$result[$i]['course_id']."</td>";
	echo "<td>".$result[$i]['course_name']."</td>";
	echo "<td>".$result[$i]['prof_name']."</td>";
	echo "<td>".$result[$i]['rating']."</td>";
	echo "<td>".$result[$i]['comment']."</td>";
	echo "<td>".$result[$i]['grading_policy']."</td>";
	echo "<td>".$result[$i]['takes_attendance']."</td>";
	echo "<td>".$result[$i]['previous_years_test_question']."</td>";
	echo "<td>".$result[$i]['upvotes']."</td>";
	echo "<td>".$result[$i]['review_date']."</td>";
	$course_id = $result[$i]['course_id'];
	$course_name = $result[$i]['course_name'];
	$prof_name = $result[$i]['prof_name'];
	$rating = $result[$i]['rating'];
	$comment = $result[$i]['comment'];
	$grading_policy = $result[$i]['grading_policy'];
	$takes_attendance = $result[$i]['takes_attendance'];
	$previous_years_test_question = $result[$i]['previous_years_test_question'];
   session_start();
   $_SESSION['sID']=$sID;
   $_SESSION['$i']=$course_id;
    echo '<td><a href="update2.php?i='.$i.'">修改</a></td>';
	echo "</tr>";
}
?>
</body>
</center>
</html>
