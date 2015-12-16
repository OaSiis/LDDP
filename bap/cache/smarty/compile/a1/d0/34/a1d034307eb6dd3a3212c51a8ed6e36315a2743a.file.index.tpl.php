<?php /* Smarty version Smarty-3.1.19, created on 2015-12-16 15:26:11
         compiled from "/home/activeciuk/www/bap/themes/pos_optima_fashion2/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28325816056717483a6a9d5-80087932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1d034307eb6dd3a3212c51a8ed6e36315a2743a' => 
    array (
      0 => '/home/activeciuk/www/bap/themes/pos_optima_fashion2/index.tpl',
      1 => 1450275909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28325816056717483a6a9d5-80087932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
    'HOOK_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56717483a88092_04977535',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56717483a88092_04977535')) {function content_56717483a88092_04977535($_smarty_tpl) {?>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"displaySimpleBlogRelatedPosts"),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
					<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
					    <ul id="home-page-tabs" class="nav nav-tabs clearfix">
							    <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

						    </ul>
					    <div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
					 <?php }?>
				
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
	<div class="clearfix"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>
</div>
<?php }?>
<?php }} ?>
