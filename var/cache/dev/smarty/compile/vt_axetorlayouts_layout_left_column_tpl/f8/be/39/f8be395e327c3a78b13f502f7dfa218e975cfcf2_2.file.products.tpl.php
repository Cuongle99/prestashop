<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:44:03
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\themes\vt_axetor\templates\catalog\_partials\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac873e7e402_43575903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8be395e327c3a78b13f502f7dfa218e975cfcf2' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\themes\\vt_axetor\\templates\\catalog\\_partials\\products.tpl',
      1 => 1694501119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/leo_col_products.tpl' => 1,
    'file:catalog/_partials/productlist.tpl' => 1,
    'file:_partials/pagination.tpl' => 1,
  ),
),false)) {
function content_66bac873e7e402_43575903 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="js-product-list">
 <?php if (!(isset($_smarty_tpl->tpl_vars['profile_params']->value)) || ((isset($_smarty_tpl->tpl_vars['profile_params']->value)) && !$_smarty_tpl->tpl_vars['profile_params']->value)) {?>
      <?php ob_start();
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"leoElementConfig",'configName'=>"productListParams"),$_smarty_tpl ) );
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('leoElementConfig', $_prefixVariable2);?>
      <?php $_smarty_tpl->_assignInScope('profile_params', json_decode($_smarty_tpl->tpl_vars['leoElementConfig']->value,true));?>
      <?php $_smarty_tpl->_assignInScope('isMobile', $_smarty_tpl->tpl_vars['profile_params']->value['isMobile']);?>
  <?php }?>
  
  <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value))) {?>
  <div class="products">  
    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/leo_col_products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['listing']->value['products']), 0, false);
?>   
  </div>
  <?php } else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/productlist.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('products'=>$_smarty_tpl->tpl_vars['listing']->value['products'],'cssClass'=>"row"), 0, false);
?>
  <?php }?>

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_87506202366bac873e7c733_08278025', 'pagination');
?>


  <div class="hidden-md-up text-xs-right up">
    <a href="#header" class="btn btn-secondary">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Back to top','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      <i class="material-icons">&#xE316;</i>
    </a>
  </div>
</div>
<?php }
/* {block 'pagination'} */
class Block_87506202366bac873e7c733_08278025 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination' => 
  array (
    0 => 'Block_87506202366bac873e7c733_08278025',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/pagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('pagination'=>$_smarty_tpl->tpl_vars['listing']->value['pagination']), 0, false);
?>
  <?php
}
}
/* {/block 'pagination'} */
}
