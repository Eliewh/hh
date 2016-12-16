<?php
/* Smarty version 3.1.30, created on 2016-12-14 17:00:49
  from "D:\wamp\www\20160926\1212\dream_upgrade\template\job\edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58510a412c0c62_60932829',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cde881a12456568ae9dbb3d802002af7032f2c35' => 
    array (
      0 => 'D:\\wamp\\www\\20160926\\1212\\dream_upgrade\\template\\job\\edit.html',
      1 => 1481706036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:public/header.html' => 1,
    'file:public/footer.html' => 1,
  ),
),false)) {
function content_58510a412c0c62_60932829 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_subTemplateRender("file:public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




  <div class="container">
    
    <form action="<?php echo URL_PATH;?>
/job/update" method="post">
      <div class="form-group">
        <label for="">岗位名称：</label>
        <input type="text"  class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['info_arr']->value['job_name'];?>
"  name="job_name" required></div>
      <div class="form-group">
        工资：
        <input type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['info_arr']->value['money'];?>
" name="money" required></div>
      <div class="form-group">
        岗位要求：
        <textarea class="form-control"   name="job_require" id="" cols="30" rows="10"><?php echo $_smarty_tpl->tpl_vars['info_arr']->value['job_require'];?>
</textarea>
      </div>
      <div class="form-group">

        <input type="submit" class="btn btn-success" value="修改招聘">
        <!-- 这个是编辑的条件 -->
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
        
        <a  href="javascript:history.go(-1);" class="btn">返回</a>


        </div>
    </form>
  </div>
 
<?php $_smarty_tpl->_subTemplateRender("file:public/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
 <?php }
}
