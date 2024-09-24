<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:27
  from 'module:ps_currencyselectorps_currencyselector.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac84fd34758_10996004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b97756c07f8c7dd53da6530f78f67ddd242f77c9' => 
    array (
      0 => 'module:ps_currencyselectorps_currencyselector.tpl',
      1 => 1710753258,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac84fd34758_10996004 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/themes/vt_axetor/modules/ps_currencyselector/ps_currencyselector.tpl -->
<div id="_desktop_currency_selector" class="popup-over">
  <div class="currency-selector dropdown js-dropdown">
    <span id="currency-selector-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency:','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    <button data-toggle="dropdown" class="btn-unstyle popup-title" aria-haspopup="true" aria-expanded="false" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Currency dropdown','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
      <span class="expand-more _gray-darker"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['current_currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
</span>
      <i class="pe7s- pe-7s-angle-down"></i>
    </button>
    <ul class="dropdown-menu popup-content" aria-labelledby="currency-selector-label">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'currency');
$_smarty_tpl->tpl_vars['currency']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['currency']->value) {
$_smarty_tpl->tpl_vars['currency']->do_else = false;
?>
        <li <?php if ($_smarty_tpl->tpl_vars['currency']->value['current']) {?> class="current" <?php }?>>
          <a title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['name'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="dropdown-item"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['currency']->value['sign'] !== $_smarty_tpl->tpl_vars['currency']->value['iso_code']) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['currency']->value['sign'], ENT_QUOTES, 'UTF-8');
}?></a>
        </li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
</div>
<!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/themes/vt_axetor/modules/ps_currencyselector/ps_currencyselector.tpl --><?php }
}
