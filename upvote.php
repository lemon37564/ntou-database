<html>
<head>
<meta http-equiv = 'Content-type' content = 'text/html'; charset = 'utf-8'>
<meta http-equiv = 'Pragma' content = 'No-cache'>
<title>upvote</title>
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
	padding:20px;
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
	<li><a href='https://www.youtube.com/?gl=TW&hl=zh-TW'>Pornhub</a></li>
		<li><a href='https://www.youtube.com/?gl=TW&hl=zh-TW'>Pornhub</a></li>
		<li><a href='https://www.youtube.com/?gl=TW&hl=zh-TW'>Pornhub</a></li>
		<li><a href='https://www.youtube.com/?gl=TW&hl=zh-TW'>Pornhub</a></li>
		<li><a href='https://www.youtube.com/?gl=TW&hl=zh-TW'>Pornhub</a></li>
		<li><a href='https://www.youtube.com/?gl=TW&hl=zh-TW'>Pornhub</a></li>
		<li><a href='https://www.youtube.com/?gl=TW&hl=zh-TW'>Pornhub</a></li>
		<li><a href='https://www.youtube.com/?gl=TW&hl=zh-TW'>Pornhub</a></li>
		<li><a href='https://www.youtube.com/?gl=TW&hl=zh-TW'>Pornhub</a></li>
		<li><a href='https://www.youtube.com/?gl=TW&hl=zh-TW'>Pornhub</a></li>
		<div style='clear:both;'></div>
	</ul>
</div>

<form action = "updatevote.php" method = "post">
請輸入學號:<input type = "text" name = "sID">
請輸入要按讚的課號:<input type = "text" name = "course_id">
<input type= "submit" name = "submit" value = "投票">
</form>
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

$query = ("select * from reviews");
$stmt = $db->prepare($query);
$stmt->execute();
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

	
	echo "</tr>";
}



	  
?>
</body>
</center>
</html>