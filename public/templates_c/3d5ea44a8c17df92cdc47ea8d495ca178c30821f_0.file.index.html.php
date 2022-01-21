<?php
/* Smarty version 4.0.4, created on 2022-01-21 06:53:22
  from 'C:\Users\asus\Desktop\laravel\resources\views\tmplates\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.4',
  'unifunc' => 'content_61ea5862778853_36214446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d5ea44a8c17df92cdc47ea8d495ca178c30821f' => 
    array (
      0 => 'C:\\Users\\asus\\Desktop\\laravel\\resources\\views\\tmplates\\index.html',
      1 => 1642748001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61ea5862778853_36214446 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/test.css">
<head>
    <meta charset="utf-8">
    <title>歷食記錄</title>
</head>

</head>
<body>
<img src="img/title.svg">
<!--<p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>-->
<div id=login_res>
    <p class="click open">登入</p><p class="click">註冊</p>
</div>
<form id="login" method="post">
    <div id="t0">
    <div class="t1">
        <div class="t2">
        <div class="t3">
        帳號：
        </div>
        <div class="t4"><input type="text" placeholder="請輸入帳號"></div>
        </div>
       </div>

       <div class="t1">
        <div class="t2">
        <div class="t3">
        密碼：
        </div>
        <div class="t4"><input type="text" placeholder="請輸入密碼"></div>
        </div>
    </div>

    <div class="t1">
        <div class="t2">
        <input  class="btn" type="submit" value="登入">
        </div>
    </div>
</div>
</form>


<form align="center" id="register" method="post">
    <div id="t0">
    <div class="t1" >
        
        <div class="t2">
            <div class="t3">
                信箱：
            </div>
            <div class="t4">
                <input type="email"placeholder="請輸入信箱" required="required">
            </div>
        
        </div>
    </div>
    <div class="t1">
        <div class="t2">
        <div class="t3">
            使用者名稱：
        </div>
        <div class="t4">
            <input required="required" placeholder="請輸入使用者名稱" >
        </div>
        
        </div>
    </div>
    <div class="t1">
        <div class="t2">
            <div class="t3">
                密碼：
            </div>
            <div class="t4">
                <input required="required"
                    type="password" placeholder="請輸入密碼">
            </div>
        </div>
    </div>
    <div class="t1">
        <div class="t2">
            <div class="t3">
                確認密碼：
            </div>
            <div class="t4">
                <input required="required"
                type="password"  placeholder="確認密碼">
            </div>
        
        </div>
    </div>
    <div class="t1">
        <div class="t2">
        <input class="btn" type='submit' value="註冊">
    </div>
    </div>
</div>

</form>

<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/test.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
