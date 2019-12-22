<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:41:"template/default_pc/html/public/jump.html";i:1525856620;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no">
    <title>系统提示......</title>
    <link rel="stylesheet" href="/static/css/home.css">
    <style>
        body{background:#F9FAFD;color:#818181;}
    </style>
</head>
<body>
<div class="mac_msg_jump">
    <div class="msg_jump_tit">系统提示...</div>
    <div class="title">亲爱的：</div>
    <div class="text"><?php echo $msg; ?></div>
    <div class="jump">
        页面自动 <a id="href" href="<?php echo($url);?>">跳转</a> 等待时间： <b id="wait"><?php echo($wait);?></b>
    </div>
</div>
<script type="text/javascript">
    (function(){
        var wait = document.getElementById('wait'),
                href = document.getElementById('href').href;
        var interval = setInterval(function(){
            var time = --wait.innerHTML;
            if(time <= 0) {
                location.href = href;
                clearInterval(interval);
            };
        }, 1000);
    })();
</script>
</body>
</html>