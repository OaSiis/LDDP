<?php /* Smarty version Smarty-3.1.19, created on 2015-11-14 13:23:42
         compiled from "/home/activeciuk/www/bap/admin/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:866925530564727ce91fc22-67182119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b351c6843f751f3b397a69e4910e7eee87a6b80f' => 
    array (
      0 => '/home/activeciuk/www/bap/admin/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1447503598,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '866925530564727ce91fc22-67182119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564727ce931ae4_48974254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564727ce931ae4_48974254')) {function content_564727ce931ae4_48974254($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div><?php }} ?>
