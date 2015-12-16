<?php /* Smarty version Smarty-3.1.19, created on 2015-11-14 13:23:46
         compiled from "/home/activeciuk/www/bap/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:616705814564727d2907593-50743467%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47435ec0be0bdb4216603599bd7534647d87f695' => 
    array (
      0 => '/home/activeciuk/www/bap/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1447503595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '616705814564727d2907593-50743467',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564727d2932c19_68357648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564727d2932c19_68357648')) {function content_564727d2932c19_68357648($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
