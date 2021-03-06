<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta charset="UTF-8">
    <title>注册</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Public/pintuer/pintuer.css">

</head>
<body>
<div class="container">
    <div class="line">
        <div class="xm3"></div>
        <div class="xm6">
            <h1 class="margin-large text-center">呵呵的个人网站-注册</h1>
            <form method="post" action="<?php echo U('User/registerVerify');?>">
                <div class="form-group">
                    <div class="field field-icon">
                        <span class="icon icon-user"></span>
                        <input type="text" class="input" id="username" name="username" placeholder="用户名" data-validate="required:必填"/>
                    </div>
                </div>
                <div class="form-group">
                    <div class="field field-icon">
                        <span class="icon icon-key"></span>
                        <input type="password" class="input" id="password" name="password" placeholder="密码" data-validate="required:必填"/>

                    </div>
                </div>
                <div class="form-group">
                    <div class="field field-icon">
                        <span class="icon icon-key"></span>
                        <input type="password" class="input" id="repassword" name="repassword" placeholder="确认密码" data-validate="required:必填,repeat#password:密码不一致"/>

                    </div>
                </div>
                <div class="form-group">
                    <div class="field field-icon">
                        <span class="icon icon-key"></span>
                        <input type="text" class="input" id="email" name="email" placeholder="电子邮箱,选填"/>
                    </div>
                </div>
                <?php if($_SESSION['register_info']!= null): ?><div class="alert alert-green">
                        <span class="close rotate-hover"></span><strong><?php echo (session('register_info')); ?></strong>
                    </div>
                    <?php
 session('register_info',null); endif; ?>

                <div class="form-button margin-big text-center">
                    <a class="margin-large-right text-main" href="<?php echo U('User/login');?>">已有账号，前往登录</a>
                    <a class="margin-large-right text-yellow" href="<?php echo U('Index/index');?>">回到首页</a>
                    <button class="button" type="submit">注册</button>
                </div>
            </form>
        </div>
        <div class="xm3"></div>
    </div>

</div>

<script src="/Public/pintuer/jquery.js"></script>
<script src="/Public/pintuer/pintuer.js"></script>

</body>
</html>