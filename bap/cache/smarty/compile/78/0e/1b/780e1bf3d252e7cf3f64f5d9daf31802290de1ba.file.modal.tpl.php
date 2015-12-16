<?php /* Smarty version Smarty-3.1.19, created on 2015-11-14 13:23:44
         compiled from "/home/activeciuk/www/bap/admin/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1348589310564727d077e9b7-13765932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '780e1bf3d252e7cf3f64f5d9daf31802290de1ba' => 
    array (
      0 => '/home/activeciuk/www/bap/admin/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1447503597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1348589310564727d077e9b7-13765932',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_564727d0791368_15665084',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564727d0791368_15665084')) {function content_564727d0791368_15665084($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
