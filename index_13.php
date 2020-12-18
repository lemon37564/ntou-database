<p> 
</p><pre name="code" class="html"> 
<!DOCTYPE html> 
<html> 
    <head> 
        <meta charset="UTF-8"> 
        <title>課程評鑑首頁</title> 
        <style type="text/css"> 
                form{ 
                    text-align: center; 
                } 
        </style> 
    </head> 
    <body> 
        <form action="verification_2.php" method="post" onsubmit="return enter()">
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
                location.href = "register_2.html";//跳轉到註冊頁面 
            }
        </script> 
    </body> 
</html>
<!--完成-->