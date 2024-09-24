<?php
/* Smarty version 4.3.4, created on 2024-09-17 22:41:48
  from 'module:leofeatureviewstemplateshookleo_product_review_extra.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ea3dec988e55_51674072',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4605e3d697a1d5d1454546d8e4581ebff643bcef' => 
    array (
      0 => 'module:leofeatureviewstemplateshookleo_product_review_extra.tpl',
      1 => 1714985176,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ea3dec988e55_51674072 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/themes/vt_axetor/modules/leofeature/views/templates/hook/leo_product_review_extra.tpl -->
<div id="leo_product_reviews_block_extra" class="no-print" <?php if (($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value == 0 && $_smarty_tpl->tpl_vars['too_early_extra']->value == false && ($_smarty_tpl->tpl_vars['customer']->value['is_logged'] || $_smarty_tpl->tpl_vars['allow_guests_extra']->value)) || ($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value != 0)) {
} else { ?>style="display: none;"<?php }?>>
	
		<div class="reviews_note clearfix" <?php if ($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value == 0) {?>style="display: none;"<?php }?>>
			
						<div class="star_content clearfix">
				<?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
					<?php if ($_smarty_tpl->tpl_vars['averageTotal_extra']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
						<div class="star"></div>
					<?php } else { ?>
						<div class="star star_on"></div>
					<?php }?>
				<?php
}
}
?>
				
			</div>
		</div>
	<ul class="reviews_advices">
				<?php if (($_smarty_tpl->tpl_vars['too_early_extra']->value == false && ($_smarty_tpl->tpl_vars['customer']->value['is_logged'] || $_smarty_tpl->tpl_vars['allow_guests_extra']->value)) && ($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value == 0)) {?>
			<li class="<?php if ($_smarty_tpl->tpl_vars['nbReviews_product_extra']->value != 0) {?>last<?php }?>">
				<a class="open-review-form" href="javascript:void(0)" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_product_review_extra']->value, ENT_QUOTES, 'UTF-8');?>
" data-is-logged="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customer']->value['is_logged'], ENT_QUOTES, 'UTF-8');?>
" data-product-link="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link_product_review_extra']->value, ENT_QUOTES, 'UTF-8');?>
">
					<i class="material-icons">&#xE150;</i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Write a review','mod'=>'leofeature'),$_smarty_tpl ) );?>

				</a>
			</li>
		<?php }?>
	</ul>
</div><!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/themes/vt_axetor/modules/leofeature/views/templates/hook/leo_product_review_extra.tpl --><?php }
}
