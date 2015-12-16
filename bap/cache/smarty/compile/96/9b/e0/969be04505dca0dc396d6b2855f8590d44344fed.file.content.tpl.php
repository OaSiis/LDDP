<?php /* Smarty version Smarty-3.1.19, created on 2015-11-14 13:23:52
         compiled from "/home/activeciuk/www/bap/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1994228785564727d80f6296-53503524%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '969be04505dca0dc396d6b2855f8590d44344fed' => 
    array (
      0 => '/home/activeciuk/www/bap/admin/themes/default/template/content.tpl',
      1 => 1447503584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1994228785564727d80f6296-53503524',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564727d8108534_38698523',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564727d8108534_38698523')) {function content_564727d8108534_38698523($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
