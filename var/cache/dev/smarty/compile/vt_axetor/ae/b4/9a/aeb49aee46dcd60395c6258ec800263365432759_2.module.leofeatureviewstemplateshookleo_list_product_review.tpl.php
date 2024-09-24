<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:18
  from 'module:leofeatureviewstemplateshookleo_list_product_review.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac8461e2e90_14077344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeb49aee46dcd60395c6258ec800263365432759' => 
    array (
      0 => 'module:leofeatureviewstemplateshookleo_list_product_review.tpl',
      1 => 1690855550,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac8461e2e90_14077344 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/modules/leofeature/views/templates/hook/leo_list_product_review.tpl -->
<?php if (((isset($_smarty_tpl->tpl_vars['nbReviews']->value)) && $_smarty_tpl->tpl_vars['nbReviews']->value > 0) || $_smarty_tpl->tpl_vars['show_zero_product_review']->value) {?>
	<div class="leo-list-product-reviews">
		<div class="leo-list-product-reviews-wraper">
			<div class="star_content clearfix">
				<?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php if ($_smarty_tpl->tpl_vars['averageTotal']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
						<div class="star"></div>
					<?php } else { ?>
						<div class="star star_on"></div>
					<?php }?>
				<?php
}
}
?>
			</div>
			<?php if ((isset($_smarty_tpl->tpl_vars['nbReviews']->value)) && $_smarty_tpl->tpl_vars['nbReviews']->value > 0 && $_smarty_tpl->tpl_vars['show_number_product_review']->value) {?>
				<span class="nb-revews"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['nbReviews']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Review(s)','mod'=>'leofeature'),$_smarty_tpl ) );?>
</span>
			<?php }?>
		</div>
	</div>
<?php }?><!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/modules/leofeature/views/templates/hook/leo_list_product_review.tpl --><?php }
}
