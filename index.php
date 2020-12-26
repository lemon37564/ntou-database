<p> 
</p><pre name="code" class="html"> 
<html> 
    <head> 
        <meta charset="UTF-8"> 
        <title>課程評鑑首頁</title> 
        <style type="text/css"> 
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
                form{ 
                    text-align: center; 
                } 
        </style> 
    </head> 
    <body> 
        <form action="verification.php" method="post" onsubmit="return enter()">
                帳號<input type="text" name="account" required="required" id="account">
                密碼<input type="password" name="password" required="required" id="password">
                                <input type="button" value="註冊" onclick="register();"><input type="submit" value="登入">  
        </form> 
        <script type="text/javascript">
            function enter() {
                var account = document.getElementById("account").value;//獲取使用者名稱 
                var password = document.getElementById("password").value;
                var regex = /^[/s] $/;//宣告一個判斷使用者名稱前後是否有空格
                if (regex.test(account)) {//判定使用者名稱的是否前後有空格或者使用者名稱是否為空 
                    alert("帳號格式不合法");
                    return false;
                }
                if (regex.test(password)) {//同上述內容  
                    alert("密碼格式不合法");
                    return false;
                }
                return true;
            }
            function register() {
                location.href = "register.html";//跳轉到註冊頁面 
            }
            </script> 
    </body> 
</html>
<!--完成-->
