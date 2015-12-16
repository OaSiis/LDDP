<?php /* Smarty version Smarty-3.1.19, created on 2015-11-14 13:29:14
         compiled from "/home/activeciuk/www/bap/admin2015/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:835204785647291aa92c31-62796681%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5b66863e001cf0550417a107e6916ba1073dcb1' => 
    array (
      0 => '/home/activeciuk/www/bap/admin2015/themes/default/template/content.tpl',
      1 => 1447503584,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '835204785647291aa92c31-62796681',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5647291aa9cb73_37237039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5647291aa9cb73_37237039')) {function content_5647291aa9cb73_37237039($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
