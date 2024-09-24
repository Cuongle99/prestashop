<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:42:35
  from 'module:ps_mboviewstemplateshookrecommendedthemes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac81bcb4951_51002724',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aef50eadf9abeb8d20509de70fb0b017b600cbc3' => 
    array (
      0 => 'module:ps_mboviewstemplateshookrecommendedthemes.tpl',
      1 => 1708980256,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac81bcb4951_51002724 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/modules/ps_mbo/views/templates/hook/recommended-themes.tpl -->
<?php echo '<script'; ?>
>
  if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
    if (typeof renderCdcError === 'function') {
      window.$(document).ready(function() {
        renderCdcError($('#cdc-explore-themes-catalog'));
      });
    }
  } else {
    const renderExploreThemesCatalog = window.mboCdc.renderExploreThemeCatalog

    const exploreThemesCatalogContext = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;

    renderExploreThemesCatalog(exploreThemesCatalogContext, '#cdc-explore-themes-catalog')
  }
<?php echo '</script'; ?>
>

<div id="cdc-explore-themes-catalog" class="col-lg-3 col-md-4 col-sm-6 theme-card-container cdc-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></div>

<!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/modules/ps_mbo/views/templates/hook/recommended-themes.tpl --><?php }
}
