<!doctype html> 
<html> 
    <head> 
        <meta charset="UTF-8"> 
    </head> 
    <body> 
        <?php
        session_start(); //將session銷燬時呼叫destroy 
        session_destroy();
        ?> 
        <script type="text/javascript">
            location.href = "index.php";
        </script> 
    </body> 
</html>
<!--完成-->