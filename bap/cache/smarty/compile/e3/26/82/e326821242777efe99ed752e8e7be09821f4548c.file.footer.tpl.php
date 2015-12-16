<?php /* Smarty version Smarty-3.1.19, created on 2015-12-16 15:26:12
         compiled from "/home/activeciuk/www/bap/themes/pos_optima_fashion2/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7110259735671748410ee00-75284371%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e326821242777efe99ed752e8e7be09821f4548c' => 
    array (
      0 => '/home/activeciuk/www/bap/themes/pos_optima_fashion2/footer.tpl',
      1 => 1450275909,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7110259735671748410ee00-75284371',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'page_name' => 0,
    'HOOK_PRODUCT_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56717484132d80_69024165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56717484132d80_69024165')) {function content_56717484132d80_69024165($_smarty_tpl) {?>
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			
			<div class ="container">
				<?php if ($_smarty_tpl->tpl_vars['page_name']->value=='product') {?>
				<?php echo $_smarty_tpl->tpl_vars['HOOK_PRODUCT_FOOTER']->value;?>

				<?php }?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockPosition1"),$_smarty_tpl);?>

			</div>
			
			
			<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"brandSlider"),$_smarty_tpl);?>

			<!-- Footer -->
			<div id="footer" class="footer-container">
				
				<div class="pos-footer-top">
					<div class="container">
						<div class="footer-top">
						    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockFooter3"),$_smarty_tpl);?>

						</div>	
					</div>
				</div>
				<div class="pos-footer-center">
					<div class="container">
					    <div class="footer-center">
						<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockFooter1"),$_smarty_tpl);?>

					    </div>
					</div>
				</div>
				<div class="pos-footer-bottom">
					<div class="container">
						<div class="footer-bottom">
						    <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>"blockFooter2"),$_smarty_tpl);?>

						</div>
					</div>
				</div>
			</div><!-- #footer -->
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="back-top"><a href= "#" class="mypresta_scrollup hidden-phone"></a></div>
	</body>
</html><?php }} ?>
