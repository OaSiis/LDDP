<?php /* Smarty version Smarty-3.1.19, created on 2015-11-14 13:23:43
         compiled from "/home/activeciuk/www/bap/admin/themes/default/template/helpers/list/list_action_supply_order_change_state.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3752238564727cfa73c98-88237569%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c955418ecd8c66712e38ef50aeb484cac8865d5' => 
    array (
      0 => '/home/activeciuk/www/bap/admin/themes/default/template/helpers/list/list_action_supply_order_change_state.tpl',
      1 => 1447503597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3752238564727cfa73c98-88237569',
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
  'unifunc' => 'content_564727cfa86273_57113755',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564727cfa86273_57113755')) {function content_564727cfa86273_57113755($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-time"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
