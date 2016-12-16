<?php
/* Smarty version 3.1.30, created on 2016-12-14 17:03:49
  from "D:\wamp\www\20160926\1212\dream_upgrade\template\company\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58510af53fe5a0_80266656',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d6365325c2f84f5ef9b2870fe816403dfcd7eae' => 
    array (
      0 => 'D:\\wamp\\www\\20160926\\1212\\dream_upgrade\\template\\company\\edit.html',
      1 => 1481706035,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58510af53fe5a0_80266656 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <title>修改企业资料</title>

  <!-- 引用jQuery -->
  <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo URL_PATH;?>
/public/js/jquery.1.11.1.min.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="<?php echo URL_PATH;?>
/public/bootstrap-3.3.0/css/bootstrap.min.css"></head>
  <link rel="stylesheet" href="<?php echo URL_PATH;?>
/public/css/common.css">

<body>
  <div class="container">
    
    <form action="<?php echo URL_PATH;?>
/company/update" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="">公司名称：</label>
        <input type="text"  class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['info_arr']->value['company_name'];?>
"  name="company_name" required></div>
      <div class="form-group">
        电话：
        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['info_arr']->value['telphone'];?>
"   name="telphone" required></div>
      <div class="form-group">
        公司地址：
        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['info_arr']->value['address'];?>
"   name="address" required>
      </div>
      <div class="form-group">
        公司照片：
        <input type="file" class="form-control"  name="photo" required>
      </div>
      <div class="form-group">

        <input type="submit" class="btn btn-success" value="修改资料">
        <input type="hidden" name="id"  value="<?php echo $_smarty_tpl->tpl_vars['info_arr']->value['id'];?>
" >
        
        <a  href="javascript:history.go(-1);" class="btn">返回</a>


        </div>
    </form>
  </div>
</body>
</html><?php }
}
