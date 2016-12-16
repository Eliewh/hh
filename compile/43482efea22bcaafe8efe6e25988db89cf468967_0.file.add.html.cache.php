<?php
/* Smarty version 3.1.30, created on 2016-12-15 10:55:50
  from "D:\wamp\Demo\dream_upgrade\template\company\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58520636972d61_58341300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '43482efea22bcaafe8efe6e25988db89cf468967' => 
    array (
      0 => 'D:\\wamp\\Demo\\dream_upgrade\\template\\company\\add.html',
      1 => 1481706019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58520636972d61_58341300 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '2923158520636925786_09652463';
?>
<!DOCTYPE HTML>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

  <title>添加企业资料</title>

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
/company/save" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="">公司名称：</label>
        <input type="text"  class="form-control"  name="company_name" required></div>
      <div class="form-group">
        电话：
        <input type="text" class="form-control"  name="telphone" required></div>
      <div class="form-group">
        公司地址：
        <input type="text" class="form-control"  name="address" required>
      </div>
      <div class="form-group">
        公司照片：
        <input type="file" class="form-control"  name="photo" required>
      </div>
      <div class="form-group">

        <input type="submit" class="btn btn-success" value="添加资料">
      
        
        <a  href="javascript:history.go(-1);" class="btn">返回</a>


        </div>
    </form>
  </div>
</body>
</html><?php }
}
