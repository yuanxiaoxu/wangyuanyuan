<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
</head>
<body>
    <form action="/index.php/Home/Login/login.html" method="post" enctype="multipart/form-data">
        用户名：<input type="text" name="username"/>
        <div id="error" style="color: red;display: none;float: right;margin-left: 100px;">账号或密码不正确</div>
        <br>
        密&nbsp;&nbsp;&nbsp;码：<input type="password" name="password"/><br>
        <input type="submit" value="登录" onclick="send()"/>
    </form>
</body>
<script>
    var a="<?php echo ($info); ?>";
    if(a=="error"){
        var a=document.getElementById("error");
        a.style.display="block";
    }
</script>
</html>