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

<br><br>
<h3>
<form action="select_proc.php" method="post">
輸入內容<input type="text" name="val" id="val">
<p><select name="mode" required="required" id="year">
<option value="" selected disabled>請選擇模式</option>
                    <option value="1">依課名</option>
                    <option value="2">依教授名</option>
                    <option value="3">依評價(由高到低)(不須入內容)</option>
                    <option value="4">依日期(由新到舊)(不須入內容)</option>
					<option value="5">依按讚數(由多到少)(不須入內容)</option>
</select>

<p><input type="submit" value="提交"></p>

</form>
</h3>
</body>
</html>
