<?php /* Smarty version Smarty-3.1.19, created on 2015-11-14 13:23:42
         compiled from "/home/activeciuk/www/bap/admin/themes/default/template/helpers/tree/tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1819932327564727ce9957a4-15152807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a0939ec18818b417ce8de68e127fed18b072693' => 
    array (
      0 => '/home/activeciuk/www/bap/admin/themes/default/template/helpers/tree/tree.tpl',
      1 => 1447503598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1819932327564727ce9957a4-15152807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'nodes' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564727ce9a9a36_38813333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564727ce9a9a36_38813333')) {function content_564727ce9a9a36_38813333($_smarty_tpl) {?>
<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	<ul id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div><?php }} ?>
