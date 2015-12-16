<?php /* Smarty version Smarty-3.1.19, created on 2015-11-14 13:23:48
         compiled from "/home/activeciuk/www/bap/admin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:763160830564727d409abb6-84387927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9090893b7a628570adba533959727eeafd55e5b8' => 
    array (
      0 => '/home/activeciuk/www/bap/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1447503593,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '763160830564727d409abb6-84387927',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564727d40c2560_30776876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564727d40c2560_30776876')) {function content_564727d40c2560_30776876($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
