<?php /* Smarty version Smarty-3.1.19, created on 2015-12-16 15:34:21
         compiled from "/home/activeciuk/www/bap/themes/pos_optima_fashion2/modules/blockwishlist/blockwishlist_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12388726435671766d7a2235-55535153%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a9f1183828bb284aa4f5bb8045267cfa89d5246' => 
    array (
      0 => '/home/activeciuk/www/bap/themes/pos_optima_fashion2/modules/blockwishlist/blockwishlist_button.tpl',
      1 => 1450275911,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12388726435671766d7a2235-55535153',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5671766d7b06b4_63974647',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5671766d7b06b4_63974647')) {function content_5671766d7b06b4_63974647($_smarty_tpl) {?>

<div class="wishlist">
	<a class="addToWishlist wishlistProd_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" href="#" rel="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
" onclick="WishlistCart('wishlist_block_list', 'add', '<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product']);?>
', false, 1); return false;">
		<?php echo smartyTranslate(array('s'=>"Add to Wishlist",'mod'=>'blockwishlist'),$_smarty_tpl);?>

	</a>
</div><?php }} ?>
