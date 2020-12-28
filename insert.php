<html>
<head>
<meta http-equiv = 'Content-type' contennt = 'text/html'; charset = 'utf-8'>
<meta http-equiv = 'Pragma' contennt = 'No-cache'>
<title>新增評鑑</title>
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

<center>
<body>

<form action="insert_proc.php" method="post"><br><br>
課號<input type="text" name="course_id"><br><br>
課名<input type="text" name="course_name"><br><br>
教授名<input type="text" name="prof_name"><br><br>
評分<input type="text" name="rating"><br><br>
評價<input type="text" name="comment"><br><br>
評分標準<input type="text" name="grading_policy"><br><br>
<select name="takes_attendance" required="required">
<option value="" selected disabled>是否計算出席成績</option>
                    <option value="是">是</option>
                    <option value="否">否</option>
</select><br><br>
<select name="previous_years_test_question" required="required">
<option value="" selected disabled>是否有歷屆考古題</option>
                    <option value="有">有</option>
                    <option value="沒有">沒有</option>
</select><br><br>
<p><input type="submit" value="新增"></p>


</body>
</center>
</html>
