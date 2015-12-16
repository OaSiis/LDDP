<?php /* Smarty version Smarty-3.1.19, created on 2015-11-14 13:23:49
         compiled from "/home/activeciuk/www/bap/admin/themes/default/template/controllers/request_sql/list_action_export.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1063419122564727d5cce468-59384522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e020b57196047cf7b5e356619687315800c56d13' => 
    array (
      0 => '/home/activeciuk/www/bap/admin/themes/default/template/controllers/request_sql/list_action_export.tpl',
      1 => 1447503595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1063419122564727d5cce468-59384522',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564727d5d217a3_51155767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564727d5d217a3_51155767')) {function content_564727d5d217a3_51155767($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" class="btn btn-default">
	<i class="icon-cloud-upload"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
