<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:28
  from 'module:ps_shoppingcartps_shoppingcart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac850bdc1b4_85976924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35655e6409b6198f29dd6e732ef9598dec599880' => 
    array (
      0 => 'module:ps_shoppingcartps_shoppingcart.tpl',
      1 => 1710898585,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac850bdc1b4_85976924 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/themes/vt_axetor/modules/ps_shoppingcart/ps_shoppingcart.tpl --><div id="_desktop_cart">
  <div class="blockcart cart-preview leo-blockcart show-leo-loading  <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>active<?php } else { ?>inactive<?php }?>" 
 data-refresh-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['refresh_url']->value, ENT_QUOTES, 'UTF-8');?>
" >
    <div class="header">
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
        <a rel="nofollow" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping cart link containing %nbProducts% product(s)','sprintf'=>array('%nbProducts%'=>$_smarty_tpl->tpl_vars['cart']->value['products_count']),'d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart_url']->value, ENT_QUOTES, 'UTF-8');?>
">
      <?php }?>
        <i class="material-icons shopping-cart" aria-hidden="true">shopping_cart</i>
        <span class="hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span>
        <span class="cart-products-count"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>
</span>
      <?php if ($_smarty_tpl->tpl_vars['cart']->value['products_count'] > 0) {?>
        </a>
      <?php }?>
    </div>
  </div>
</div>
<!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/themes/vt_axetor/modules/ps_shoppingcart/ps_shoppingcart.tpl --><?php }
}
