<?php /* Smarty version Smarty-3.1.19, created on 2015-11-14 13:23:47
         compiled from "/home/activeciuk/www/bap/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175836536564727d3af4350-13959344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0023b887b472e8b83d498adb809c1a0813564a41' => 
    array (
      0 => '/home/activeciuk/www/bap/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1447503594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175836536564727d3af4350-13959344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564727d3b15a74_59531531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564727d3b15a74_59531531')) {function content_564727d3b15a74_59531531($_smarty_tpl) {?>


<?php if (Configuration::get('PS_INVOICE')) {?>
	<span style="width:20px; margin-right:5px;">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
	</span>
<?php }?><?php }} ?>
