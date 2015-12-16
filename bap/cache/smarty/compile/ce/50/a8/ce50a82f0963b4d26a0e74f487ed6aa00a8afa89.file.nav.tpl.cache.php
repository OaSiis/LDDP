<?php /* Smarty version Smarty-3.1.19, created on 2015-12-16 15:26:11
         compiled from "/home/activeciuk/www/bap/themes/pos_optima_fashion2/modules/blockcontact/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104522600556717483d7b2e4-06483902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce50a82f0963b4d26a0e74f487ed6aa00a8afa89' => 
    array (
      0 => '/home/activeciuk/www/bap/themes/pos_optima_fashion2/modules/blockcontact/nav.tpl',
      1 => 1450275911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104522600556717483d7b2e4-06483902',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'logged' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56717483d99293_04805373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56717483d99293_04805373')) {function content_56717483d99293_04805373($_smarty_tpl) {?>
<!--<div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>-->
<div class="msg">
	<span class="welcome-msg">
		<?php echo smartyTranslate(array('s'=>'Default welcome msg !','mod'=>'blockcontact'),$_smarty_tpl);?>

	</span>
	<?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow"><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</0span></a>
	<?php }?>
</div>
<?php }} ?>
