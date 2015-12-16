<?php /* Smarty version Smarty-3.1.19, created on 2015-11-14 13:23:45
         compiled from "/home/activeciuk/www/bap/themes/default-bootstrap/modules/loyalty/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2043191285564727d1c8add5-72995577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '685dd79b68ffc87ac6c5bda73bedf166b9d3f65a' => 
    array (
      0 => '/home/activeciuk/www/bap/themes/default-bootstrap/modules/loyalty/views/templates/hook/my-account.tpl',
      1 => 1447503780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2043191285564727d1c8add5-72995577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564727d1c9c6b5_38900173',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564727d1c9c6b5_38900173')) {function content_564727d1c9c6b5_38900173($_smarty_tpl) {?>

<!-- MODULE Loyalty -->
<li class="loyalty">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('loyalty','default',array('process'=>'summary'),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-flag"></i><span><?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
</span></a>
</li>
<!-- END : MODULE Loyalty --><?php }} ?>
