<html>
    <head>
    <title>首頁</title>
        <style>
        body {
            font-size:16px;font-family:"微軟正黑體";
            background-image: url('https://i.imgur.com/ez4ikxc.jpg');
            background-repeat:no-repeat;
            background-color: #30FFFF;
            background-position: center;
            background-size: cover;
        }
        </style>
    </head>
    <body>
        <td width=120 valign=top> 
        <table width=120 border=0>
        <h2>
        <form action = "delete.php" method = "post">
            請輸入學號:<input type = "text" name = "sID">
        <input type="submit" name = "submit" value = "刪除"><br><br>
        </form>
        <form action = "update.php" method = "post">
            請輸入學號:<input type = "text" name = "sID">
        <input type="submit" name = "submit" value = "修改">
        </form>

        <form action = "insert.php" method = "post">
        <br>
        新增評鑑<br>
            學號:<input type = "text" name = "sID"><br>
            課號:<input type = "text" name = "course_id"><br>
            課名:<input type = "text" name = "course_name"><br>
            教授姓名:<input type = "text" name = "prof_name"><br>
            評分:<input type = "text" name = "rating"><br>
            評價:<input type = "text" name = "comment"><br>
            評分標準:<input type = "text" name = "grading_policy"><br>
            是否有出席成績:<input type = "text" name = "takes_attendance"><br>
            是否有考古題:<input type = "text" name = "previous_years_test_question">
        <input type="submit" name = "submit" value = "送出">
        </form>

        <form action = "select.php" method = "post">
        <br>
            依課名查詢:<input type = "text" name = "course_name">
        <input type="submit" name = "submit" value = "送出">
        </form>
        </h2>
        </table>
        </td>
    </body>
</html>