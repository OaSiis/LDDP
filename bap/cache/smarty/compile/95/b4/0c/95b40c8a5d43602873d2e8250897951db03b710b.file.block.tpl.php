<?php /* Smarty version Smarty-3.1.19, created on 2015-12-16 15:26:11
         compiled from "/home/activeciuk/www/bap/themes/pos_optima_fashion2/modules/posstaticblocks/block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2088364983567174835cb432-73472789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95b40c8a5d43602873d2e8250897951db03b710b' => 
    array (
      0 => '/home/activeciuk/www/bap/themes/pos_optima_fashion2/modules/posstaticblocks/block.tpl',
      1 => 1450275912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2088364983567174835cb432-73472789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_name' => 0,
    'staticblocks' => 0,
    'block' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_567174835e5d83_90424075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567174835e5d83_90424075')) {function content_567174835e5d83_90424075($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['page_name']->value=='index') {?>
<?php  $_smarty_tpl->tpl_vars['block'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['block']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['staticblocks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['block']->key => $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['block']->key;
?>
	  <?php if ($_smarty_tpl->tpl_vars['block']->value['active']==1) {?>
		  <p class ="title_block"> <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['block']->value['title'];?>
<?php $_tmp3=ob_get_clean();?><?php echo smartyTranslate(array('s'=>$_tmp3),$_smarty_tpl);?>
 </p>
		
	  <?php }?>
	  <?php echo $_smarty_tpl->tpl_vars['block']->value['description'];?>

	  <?php if ($_smarty_tpl->tpl_vars['block']->value['insert_module']==1) {?>
		<?php echo $_smarty_tpl->tpl_vars['block']->value['block_module'];?>

	   <?php }?>
     <?php } ?>
     
<?php }?><?php }} ?>
