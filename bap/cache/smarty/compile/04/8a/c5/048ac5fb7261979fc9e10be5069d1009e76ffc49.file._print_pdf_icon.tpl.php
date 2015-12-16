<?php /* Smarty version Smarty-3.1.19, created on 2015-11-14 13:23:49
         compiled from "/home/activeciuk/www/bap/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77334883564727d5a9d7a6-13513517%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '048ac5fb7261979fc9e10be5069d1009e76ffc49' => 
    array (
      0 => '/home/activeciuk/www/bap/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl',
      1 => 1447503595,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77334883564727d5a9d7a6-13513517',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564727d5ad8710_78846822',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564727d5ad8710_78846822')) {function content_564727d5ad8710_78846822($_smarty_tpl) {?>



<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateOrderSlipPDF&amp;id_order_slip=<?php echo intval($_smarty_tpl->tpl_vars['order_slip']->value->id);?>
">
	<i class="icon-file-text"></i>
	<?php echo smartyTranslate(array('s'=>'Download credit slip'),$_smarty_tpl);?>

</a>

<?php }} ?>
