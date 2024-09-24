<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:12
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\modules\leoelements\views\templates\hook\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac8408ab8a8_02351863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a342066ef11e70f0b32654f836202b96d0d1452e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\modules\\leoelements\\views\\templates\\hook\\header.tpl',
      1 => 1676345971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac8408ab8a8_02351863 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
	/**
	 * List functions will run when document.ready()
	 */
	var ap_list_functions = [];
	/**
	 * List functions will run when window.load()
	 */
	var ap_list_functions_loaded = [];

	/**
	 * List functions will run when document.ready() for theme
	 */

	var products_list_functions = [];
<?php echo '</script'; ?>
>


<?php if ((isset($_smarty_tpl->tpl_vars['ajax_enable']->value)) && $_smarty_tpl->tpl_vars['ajax_enable']->value) {
echo '<script'; ?>
 type='text/javascript'>
	var leoOption = {
		category_qty:<?php if ($_smarty_tpl->tpl_vars['category_qty']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category_qty']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>,
		product_list_image:<?php if ($_smarty_tpl->tpl_vars['product_list_image']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_list_image']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>,
		product_one_img:<?php if ($_smarty_tpl->tpl_vars['product_one_img']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_one_img']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>,
		productCdown: <?php if ($_smarty_tpl->tpl_vars['productCdown']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productCdown']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>,
		productColor: <?php if ($_smarty_tpl->tpl_vars['productColor']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productColor']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>,
		homeWidth: <?php if ($_smarty_tpl->tpl_vars['homeSize']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homeSize']->value['width'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>,
		homeheight: <?php if ($_smarty_tpl->tpl_vars['homeSize']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['homeSize']->value['height'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>,
	}

	ap_list_functions.push(function(){
		if (typeof $.LeoCustomAjax !== "undefined" && $.isFunction($.LeoCustomAjax)) {
			var leoCustomAjax = new $.LeoCustomAjax();
			leoCustomAjax.processAjax();
		}
	});
<?php echo '</script'; ?>
>
<?php }
}
}
