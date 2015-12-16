<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 16:12:13
         compiled from "/home/activeciuk/www/bap/admin2015/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2015463742564c954d4d02c1-84177355%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a43ce4bd4a3d294b6d0d6dc5c3a77c2f49a0e591' => 
    array (
      0 => '/home/activeciuk/www/bap/admin2015/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1447503608,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2015463742564c954d4d02c1-84177355',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c954d5204c4_42160655',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c954d5204c4_42160655')) {function content_564c954d5204c4_42160655($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
