<?php /* Smarty version Smarty-3.1.19, created on 2015-12-16 15:26:10
         compiled from "/home/activeciuk/www/bap/themes/pos_optima_fashion2/modules/blocksearch/blocksearch-top.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1003132959567174829b4825-23947624%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f59b51db6b1f79f901c40c24e1b4aa533c1cc926' => 
    array (
      0 => '/home/activeciuk/www/bap/themes/pos_optima_fashion2/modules/blocksearch/blocksearch-top.tpl',
      1 => 1450275912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1003132959567174829b4825-23947624',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_567174829cde70_25606852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_567174829cde70_25606852')) {function content_567174829cde70_25606852($_smarty_tpl) {?>
<!-- Block search module TOP -->
		<div id="search_block_top">
			<form id="searchbox" method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" >
				<input type="hidden" name="controller" value="search" />
				<input type="hidden" name="orderby" value="position" />
				<input type="hidden" name="orderway" value="desc" />
				
				<input class="search_query form-control" type="text" id="search_query_top" name="search_query" value="<?php echo smartyTranslate(array('s'=>'Search...','mod'=>'blocksearch'),$_smarty_tpl);?>
" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
				<button type="submit" name="submit_search" class="btn btn-default button-search">
					<span><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
</span>
				</button>
			</form>
		</div>
<script type="text/javascript">
	$('#search_query_top').on('focus', function(){
		    var $this = $(this);
		    if($this.val() == '<?php echo smartyTranslate(array('s'=>'Search...','mod'=>'blocksearch'),$_smarty_tpl);?>
'){
			$this.val('');
		    }
		}).on('blur', function(){
		    var $this = $(this);
		    if($this.val() == ''){
			$this.val('<?php echo smartyTranslate(array('s'=>'Search...','mod'=>'blocksearch'),$_smarty_tpl);?>
');
		    }
		});
</script>
<!-- /Block search module TOP --><?php }} ?>