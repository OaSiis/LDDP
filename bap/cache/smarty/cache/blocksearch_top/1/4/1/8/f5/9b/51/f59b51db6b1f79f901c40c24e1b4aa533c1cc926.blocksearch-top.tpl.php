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
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5671752a31c3f4_18135524',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5671752a31c3f4_18135524')) {function content_5671752a31c3f4_18135524($_smarty_tpl) {?><!-- Block search module TOP -->
		<div id="search_block_top">
			<form id="searchbox" method="get" action="http://active-citrus.fr/bap/index.php?controller=search" >
				<input type="hidden" name="controller" value="search" />
				<input type="hidden" name="orderby" value="position" />
				<input type="hidden" name="orderway" value="desc" />
				
				<input class="search_query form-control" type="text" id="search_query_top" name="search_query" value="Search..." value="" />
				<button type="submit" name="submit_search" class="btn btn-default button-search">
					<span>Rechercher</span>
				</button>
			</form>
		</div>
<script type="text/javascript">
	$('#search_query_top').on('focus', function(){
		    var $this = $(this);
		    if($this.val() == 'Search...'){
			$this.val('');
		    }
		}).on('blur', function(){
		    var $this = $(this);
		    if($this.val() == ''){
			$this.val('Search...');
		    }
		});
</script>
<!-- /Block search module TOP --><?php }} ?>
