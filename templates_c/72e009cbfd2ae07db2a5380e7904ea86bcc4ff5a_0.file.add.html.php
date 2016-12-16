<?php
/* Smarty version 3.1.30, created on 2016-12-15 09:50:00
  from "D:\wamp\Demo\dream_upgrade\template\job\add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5851f6c8cca020_72288599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '72e009cbfd2ae07db2a5380e7904ea86bcc4ff5a' => 
    array (
      0 => 'D:\\wamp\\Demo\\dream_upgrade\\template\\job\\add.html',
      1 => 1481706019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
    'file:public/footer.html' => 1,
  ),
),false)) {
function content_5851f6c8cca020_72288599 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 
  <div class="container">
    
    <form action="<?php echo URL_PATH;?>
/job/save" method="post">
      <div class="form-group">
        <label for="">岗位名称：</label>
        <input type="text"  class="form-control"  name="job_name" required></div>
      <div class="form-group">
        工资：
        <input type="text" class="form-control"  name="money" required></div>
      <div class="form-group">
        岗位要求：
        <textarea class="form-control"   name="job_require" id="" cols="30" rows="10"></textarea>
      </div>
      <div class="form-group">

        <input type="submit" class="btn btn-success" value="添加招聘">
      
        
        <a  href="javascript:history.go(-1);" class="btn">返回</a>


        </div>
    </form>
  </div>
 
<?php $_smarty_tpl->_subTemplateRender("file:public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }
}
