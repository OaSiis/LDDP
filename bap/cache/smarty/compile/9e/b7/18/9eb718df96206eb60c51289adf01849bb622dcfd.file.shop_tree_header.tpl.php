<?php /* Smarty version Smarty-3.1.19, created on 2015-11-14 13:23:46
         compiled from "/home/activeciuk/www/bap/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1987246721564727d29bdce4-88015769%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9eb718df96206eb60c51289adf01849bb622dcfd' => 
    array (
      0 => '/home/activeciuk/www/bap/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl',
      1 => 1447503609,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1987246721564727d29bdce4-88015769',
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
  'unifunc' => 'content_564727d29ceb82_41128192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564727d29ceb82_41128192')) {function content_564727d29ceb82_41128192($_smarty_tpl) {?>
<div class="panel-heading">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-sitemap"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<div class="pull-right">
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
	</div>
</div><?php }} ?>
