<?php /* Smarty version Smarty-3.1.19, created on 2015-11-14 13:23:44
         compiled from "/home/activeciuk/www/bap/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1803066507564727d0d9d1a6-43446824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9610c86cd161077ed3b63ba13bd0dd3ec3152005' => 
    array (
      0 => '/home/activeciuk/www/bap/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl',
      1 => 1447503780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1803066507564727d0d9d1a6-43446824',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564727d0dab1b1_09036226',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564727d0dab1b1_09036226')) {function content_564727d0dab1b1_09036226($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>
