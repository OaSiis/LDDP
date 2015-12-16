<?php /* Smarty version Smarty-3.1.19, created on 2015-11-18 16:12:14
         compiled from "/home/activeciuk/www/bap/admin2015/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303523663564c954e91e0c9-38544996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2fdbde5c98bbc24dc9453af818d7a6432b1e603c' => 
    array (
      0 => '/home/activeciuk/www/bap/admin2015/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1447503597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303523663564c954e91e0c9-38544996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564c954e92ef71_50044058',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564c954e92ef71_50044058')) {function content_564c954e92ef71_50044058($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
