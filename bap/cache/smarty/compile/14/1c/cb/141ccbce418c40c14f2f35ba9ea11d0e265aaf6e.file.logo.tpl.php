<?php /* Smarty version Smarty-3.1.19, created on 2015-12-16 15:26:12
         compiled from "/home/activeciuk/www/bap/themes/pos_optima_fashion2/modules/poslogo/logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2132095469567174841802b1-83808606%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '141ccbce418c40c14f2f35ba9ea11d0e265aaf6e' => 
    array (
      0 => '/home/activeciuk/www/bap/themes/pos_optima_fashion2/modules/poslogo/logo.tpl',
      1 => 1450275911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2132095469567174841802b1-83808606',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'logos' => 0,
    'logo' => 0,
    'slideOptions' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_567174841c5194_59485558',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567174841c5194_59485558')) {function content_567174841c5194_59485558($_smarty_tpl) {?><div class="pos-logo-container">
	<div class="container">	
		<div class="container-inner">
			<div class="pos-logo">
					<ul class="bxslider">
						<?php  $_smarty_tpl->tpl_vars['logo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['logo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['logo']->key => $_smarty_tpl->tpl_vars['logo']->value) {
$_smarty_tpl->tpl_vars['logo']->_loop = true;
?>
							<li>
							    <a href ="<?php echo $_smarty_tpl->tpl_vars['logo']->value['link'];?>
">
									<img src ="<?php echo $_smarty_tpl->tpl_vars['logo']->value['image'];?>
" alt ="<?php echo smartyTranslate(array('s'=>'Logo','mod'=>'poslogo'),$_smarty_tpl);?>
" />
							    </a>
							</li>
						<?php } ?>
					</ul>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		  $('.pos-logo .bxslider').bxSlider({
            auto: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['auto']!=1) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['auto'];?>
<?php } else { ?>1<?php }?>,
            slideWidth:<?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['width_item']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['width_item'];?>
<?php } else { ?>190<?php }?>,
			slideMargin: 30,
			minSlides: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['min_item']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['min_item'];?>
<?php } else { ?>1<?php }?>,
			maxSlides: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['max_item']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['max_item'];?>
<?php } else { ?>8<?php }?>,
			speed:  <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['speed_slide']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['speed_slide'];?>
<?php } else { ?>5000<?php }?>,
			pause: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['a_speed']!='') {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['a_speed'];?>
<?php } else { ?>1000<?php }?>,
			controls: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_nexback']!=0) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['show_nexback'];?>
<?php } else { ?>false<?php }?>,
            pager: <?php if ($_smarty_tpl->tpl_vars['slideOptions']->value['show_control']!=0) {?><?php echo $_smarty_tpl->tpl_vars['slideOptions']->value['show_control'];?>
<?php } else { ?>false<?php }?>,
		});
	</script>
		 
</div><?php }} ?>
