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
	<li><a href='/index.php'>主畫面</a></li>
		<li><a href='https://www.xvideos.com/'>Xvideo</a></li>
		<li><a href='https://www.xvideos.com/'>Xvideo</a></li>
		<li><a href='https://www.xvideos.com/'>Xvideo</a></li>
		<div style='clear:both;'></div>
	</ul>
</div>
<table class="lebt"cellpadding = '36'>

<center>
<body>
<?php
header("Content-type:text/html;charset=utf-8");
include_once "db_conn.php";

$sID = $_POST["sID"];
$course_id = $_POST["course_id"];
$course_name = $_POST["course_name"];
$prof_name = $_POST["prof_name"];
$rating = $_POST["rating"];
$comment = $_POST["comment"];
$grading_policy = $_POST["grading_policy"];
$takes_attendance = $_POST["takes_attendance"];
$previous_years_test_question = $_POST["previous_years_test_question"];

// check sID
//if($sID)

// check prof_name
try{
$query = ("INSERT INTO reviews VALUES(?,?,?,?,?,?,?,?,?,?,?)");
$stmt = $db->prepare($query);
$stmt->execute(array($sID, $course_id, $course_name, $prof_name, $rating, $comment, $grading_policy, $takes_attendance, $previous_years_test_question, 0, date("Y-m-d")));
}catch(PDOException $e){
    echo $e;
    die();
}

?>

<h1>新增成功!
<form action = "index.php" method = "post">
<input type="submit" value = "回到上一頁">
</form>
</h1>
</body>
</center>
</html>