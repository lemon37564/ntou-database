<html>
<head>
<meta http-equiv = 'Content-type' contennt = 'text/html'; charset = 'utf-8'>
<meta http-equiv = 'Pragma' contennt = 'No-cache'>
<title>查詢評鑑</title>
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
  background-image: url('https://i.imgur.com/DVlwQFN.jpg');
　background-repeat:no-repeat;
　background-color: #30FFFF;
  background-position: center;
  background-size: cover;
}

table{
	width:200px;
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
<!-- <tr>
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
</tr> -->
<br><br>
<?php
header("Content-type:text/html;charset=utf-8");
include_once "db_conn.php";

echo "<table border = '1'>
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
</tr>";

$mode = $_POST["mode"]

if($mode == 1) {
	// 依課名
	$name = $_POST["course_name"];
	$query = ("SELECT * FROM reviews WHERE course_name=?;");
	$stmt = $db->prepare($query);
	$stmt->execute(array($name));
	$result = $stmt->fetchAll();
	
	for($i=0;$i<count($result);$i++){
		echo "<tr>";
		for($j = 0; $j < 11; $j++) {
			echo "<td>".$result[$i][$j]."</td>";
		}
		echo "</tr>";
	}
} else if($mode == 2) {
	// 依教授
	$name = $_POST["prof_name"];
	$query = ("SELECT * FROM reviews WHERE prof_name=?;");
	$stmt = $db->prepare($query);
	$stmt->execute(array($name));
	$result = $stmt->fetchAll();
	
	for($i=0;$i<count($result);$i++){
		echo "<tr>";
		for($j = 0; $j < 11; $j++) {
			echo "<td>".$result[$i][$j]."</td>";
		}
		echo "</tr>";
	}
} else if($mode == 3) {
	// 依評價(由高到低)
	$query = ("SELECT * FROM reviews ORDER BY rating DESC;");
	$stmt = $db->prepare($query);
	$stmt->execute();
	$result = $stmt->fetchAll();
	
	for($i=0;$i<count($result);$i++){
		echo "<tr>";
		for($j = 0; $j < 11; $j++) {
			echo "<td>".$result[$i][$j]."</td>";
		}
		echo "</tr>";
	}
} else if($mode == 4) {
	// 依日期(由新到舊)
	$query = ("SELECT * FROM reviews ORDER BY review_date DESC;");
	$stmt = $db->prepare($query);
	$stmt->execute();
	$result = $stmt->fetchAll();
	
	for($i=0;$i<count($result);$i++){
		echo "<tr>";
		for($j = 0; $j < 11; $j++) {
			echo "<td>".$result[$i][$j]."</td>";
		}
		echo "</tr>";
	}
} else if($mode == 5) {
	// 依按讚數(由多到少)
	$query = ("SELECT * FROM reviews ORDER BY upvotes DESC;");
	$stmt = $db->prepare($query);
	$stmt->execute();
	$result = $stmt->fetchAll();
	
	for($i=0;$i<count($result);$i++){
		echo "<tr>";
		for($j = 0; $j < 11; $j++) {
			echo "<td>".$result[$i][$j]."</td>";
		}
		echo "</tr>";
	}
}
?>
</body>
</html>
