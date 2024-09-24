<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:44:03
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\themes\vt_axetor\templates\catalog\_partials\products-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac873632696_71785497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb4127d7c9bdcf347ce562ee5d577fca779292c2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\themes\\vt_axetor\\templates\\catalog\\_partials\\products-top.tpl',
      1 => 1714099022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/sort-orders.tpl' => 1,
  ),
),false)) {
function content_66bac873632696_71785497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if (!(isset($_smarty_tpl->tpl_vars['profile_params']->value)) || ((isset($_smarty_tpl->tpl_vars['profile_params']->value)) && !$_smarty_tpl->tpl_vars['profile_params']->value)) {?>
    <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"leoElementConfig",'configName'=>"productListParams"),$_smarty_tpl ) );
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('pl_config', $_prefixVariable1);?>
    <?php $_smarty_tpl->_assignInScope('profile_params', json_decode($_smarty_tpl->tpl_vars['pl_config']->value,true));?>
    <?php $_smarty_tpl->_assignInScope('isMobile', $_smarty_tpl->tpl_vars['profile_params']->value['isMobile']);
}?>

<div id="js-product-list-top" class="products-selection">
  <div class="row">
    <?php $_smarty_tpl->_assignInScope('leocol', 6);?>
    <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']))) {?>
      <?php if ($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['top_total'] == 1 && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['top_sortby'] == 1 && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['top_grid'] == 1) {?>
      <?php $_smarty_tpl->_assignInScope('leocol', 6);?>
      <?php }?>
    <?php }?>
    <?php if (((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['top_total'] == 1) || !(isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config'])) || ((isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config']['use_button_toggle'])) && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['use_button_toggle'])) {?>
    <div class="col-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['leocol']->value, ENT_QUOTES, 'UTF-8');?>
 col-lg-3 hidden-md-down total-products <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config']['use_button_toggle'])) && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['use_button_toggle']) {?>filter-toggle<?php }?>">
      <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config']['use_button_toggle'])) && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['use_button_toggle']) {?>
        <a href="#" class="filter-toggle-button" aria-expanded="false">

          <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config']['use_button_toggle'])) && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['use_button_toggle'] && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['filter_position'] == 2) {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );
}?>
          <i class="las la-sliders-h"></i>
        </a>
      <?php }?>
      <?php if (((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['top_total'] == 1) || !(isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']))) {?>
        <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 1) {?>
          <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %product_count% products.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%product_count%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>
</p>
        <?php } elseif ($_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'] > 0) {?>
          <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There is 1 product.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
        <?php }?>
      <?php }?>
    </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['top_grid'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['top_grid'] == 1) {?>
  <div class="col-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['leocol']->value, ENT_QUOTES, 'UTF-8');?>
 col-lg-3" id="btn_view_product" data-mode="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_mode'], ENT_QUOTES, 'UTF-8');?>
" data-col-xl="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_column'], ENT_QUOTES, 'UTF-8');?>
" data-col-lg="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_largedevice'], ENT_QUOTES, 'UTF-8');?>
" data-col-md="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_tablet'], ENT_QUOTES, 'UTF-8');?>
" data-col-sm="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_extrasmalldevice'], ENT_QUOTES, 'UTF-8');?>
" data-col-xs="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_mobile'], ENT_QUOTES, 'UTF-8');?>
" data-col-sp="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_mobile'], ENT_QUOTES, 'UTF-8');?>
">
    <span class="grid-select grid-select-list view-list" data-col="list"></span>
      <span class="grid-select grid-select-grid view-1" data-col="12"></span>
      <span class="grid-select grid-select-grid view-2" data-col="6"></span>
      <span class="grid-select grid-select-grid view-3 active" data-col="4"></span>
      <span class="grid-select grid-select-grid view-4" data-col="3"></span>
      <span class="grid-select grid-select-grid view-5" data-col="2-4"></span>
    </div>
    <?php }?>

    <?php if (((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['top_sortby'] == 1) || !(isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']))) {?>
    <div class="col-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['leocol']->value, ENT_QUOTES, 'UTF-8');?>
 col-lg-6 grid-selecting">
      <div class="row sort-by-row">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28975825066bac8736095f4_48634054', 'sort_by');
?>


        <?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
          <div class="col-sm-3 col-xs-4 hidden-md-up filter-button">
            <button id="search_filter_toggler" class="btn btn-secondary js-search-toggler">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

            </button>
          </div>
        <?php }?>
      </div>
    </div>
    <?php } else { ?>
    <div class="col-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['leocol']->value, ENT_QUOTES, 'UTF-8');?>
 col-lg-6 grid-selecting">
      <div class="row sort-by-row">
        <?php if (!empty($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) {?>
          <div class="col-sm-12 col-xs-12 hidden-md-up filter-button">
            <button id="search_filter_toggler" class="btn btn-secondary js-search-toggler">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Filter','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

            </button>
          </div>
        <?php }?>
      </div>
    </div>

    <?php }?>
    <div class="col-sm-12 hidden-md-up text-sm-center text-xs-center showing">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']['total_items'])),$_smarty_tpl ) );?>

    </div>
  </div>
</div>
<?php }
/* {block 'sort_by'} */
class Block_28975825066bac8736095f4_48634054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'sort_by' => 
  array (
    0 => 'Block_28975825066bac8736095f4_48634054',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/sort-orders.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sort_orders'=>$_smarty_tpl->tpl_vars['listing']->value['sort_orders']), 0, false);
?>
        <?php
}
}
/* {/block 'sort_by'} */
}
