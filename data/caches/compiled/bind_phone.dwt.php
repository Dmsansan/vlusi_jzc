<!DOCTYPE html>
<html lang="en">
<head>
<meta name="Generator" content="ECTouch 2.11.30" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>绑定手机号</title>
    <link rel="stylesheet" href="__TPL__/bind/assets/mui/css/mui.min.css">
    <link rel="stylesheet" href="__TPL__/bind/css/bind-phone.css"/>
    <link rel="stylesheet" href="__TPL__/bind/css/common.css"/>
</head>
<body>
<div class="mui-content" id="app">
    <header class="mui-bar mui-bar-nav">
        <a href="javascript:;" onclick="history.go(-1);" class="mui-icon mui-icon-left-nav mui-pull-left"></a>
        <h1 class="mui-title">绑定手机号</h1>
    </header>
    <form class="mui-input-group">
        <div class="mui-input-row">
            <label>手机号</label>
            <input type="text" maxlength="11" v-model="phone" class="mui-input-clear" placeholder="请输入手机号">
        </div>
        <div class="mui-input-row">
            <label>验证码</label>
            <input type="text" v-model="code" maxlength="6" placeholder="请输入验证码">
            <button @click="sendCode()" type="button" class="sendCode">{{sendCodeText}}</button>
        </div>
        <div class="mui-button-row">
            <button type="button" @click="submitForm()" class="mui-btn mui-btn-submit">提交</button>
        </div>
    </form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="__TPL__/bind/assets/mui/js/mui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.17-beta.0/vue.min.js"></script>
<script src="__TPL__/bind/js/bind-phone.js" type="text/javascript"></script>
</body>
</html>