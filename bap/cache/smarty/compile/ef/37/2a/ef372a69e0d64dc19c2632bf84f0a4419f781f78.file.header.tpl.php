<?php /* Smarty version Smarty-3.1.19, created on 2015-12-16 15:26:10
         compiled from "/home/activeciuk/www/bap/modules/homeslider/views/templates/hook/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1933395965567174827a3455-08514287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef372a69e0d64dc19c2632bf84f0a4419f781f78' => 
    array (
      0 => '/home/activeciuk/www/bap/modules/homeslider/views/templates/hook/header.tpl',
      1 => 1447503752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1933395965567174827a3455-08514287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5671748283cbc7_54037550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5671748283cbc7_54037550')) {function content_5671748283cbc7_54037550($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)) {?>
<script type="text/javascript">
     var homeslider_loop=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['loop']);?>
;
     var homeslider_width=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['width']);?>
;
     var homeslider_speed=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['speed']);?>
;
     var homeslider_pause=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['pause']);?>
;
</script>
<?php }?><?php }} ?>
