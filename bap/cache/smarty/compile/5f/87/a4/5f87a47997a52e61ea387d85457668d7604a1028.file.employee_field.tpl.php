<?php /* Smarty version Smarty-3.1.19, created on 2015-11-14 13:23:46
         compiled from "/home/activeciuk/www/bap/admin/themes/default/template/controllers/logs/employee_field.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1661634945564727d2571f08-64055036%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f87a47997a52e61ea387d85457668d7604a1028' => 
    array (
      0 => '/home/activeciuk/www/bap/admin/themes/default/template/controllers/logs/employee_field.tpl',
      1 => 1447503592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1661634945564727d2571f08-64055036',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee_image' => 0,
    'employee_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564727d25e0644_23953174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564727d25e0644_23953174')) {function content_564727d25e0644_23953174($_smarty_tpl) {?>
<span class="employee_avatar_small">
	<img class="imgm img-thumbnail" alt="" src="<?php echo $_smarty_tpl->tpl_vars['employee_image']->value;?>
" width="32" height="32" />
</span>
<?php echo $_smarty_tpl->tpl_vars['employee_name']->value;?>
<?php }} ?>
