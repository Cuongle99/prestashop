<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:44:04
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\themes\vt_axetor\templates\catalog\_partials\miniatures\leo_col_products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac8745eaee3_11956561',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1faabb1ec0208b74cfb6afcc73b9802ee67d523' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\themes\\vt_axetor\\templates\\catalog\\_partials\\miniatures\\leo_col_products.tpl',
      1 => 1694501119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_66bac8745eaee3_11956561 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),1=>array('file'=>'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\vendor\\smarty\\smarty\\libs\\plugins\\function.math.php','function'=>'smarty_function_math',),));
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if (((isset($_smarty_tpl->tpl_vars['page']->value['page_name'])) && $_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') || ((isset($_smarty_tpl->tpl_vars['leo_page']->value)) && $_smarty_tpl->tpl_vars['leo_page']->value == 'index')) {?>
    <?php $_smarty_tpl->_assignInScope('nbItemsPerLine', $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_column_module']);?>
    <?php if ($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_column_module'] == "5") {
$_smarty_tpl->_assignInScope('col_cat_product_xl', "col-xl-2-4");
} else {
$_smarty_tpl->_assignInScope('col_cat_product_xl', "col-xl-".((string)(12/$_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_column_module'])));
}
} else { ?>
    <?php $_smarty_tpl->_assignInScope('nbItemsPerLine', $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_column']);?>
    <?php if ($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_column'] == "5") {?>       <?php $_smarty_tpl->_assignInScope('col_cat_product_xl', "col-xl-2-4");
} else {
$_smarty_tpl->_assignInScope('col_cat_product_xl', "col-xl-".((string)(12/$_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_column'])));
}
}?>

<?php if ($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_largedevice'] == "5") {?>  <?php $_smarty_tpl->_assignInScope('col_cat_product_lg', "col-lg-2-4");
} else {
$_smarty_tpl->_assignInScope('col_cat_product_lg', "col-lg-".((string)(12/$_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_largedevice'])));
}
$_smarty_tpl->_assignInScope('colValue', "col-sp-".((string)(12/$_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_mobile']))." col-xs-".((string)(12/$_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_mobile']))." col-sm-".((string)(12/$_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_extrasmalldevice']))." col-md-".((string)(12/$_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_tablet']))." ".((string)$_smarty_tpl->tpl_vars['col_cat_product_lg']->value)." ".((string)$_smarty_tpl->tpl_vars['col_cat_product_xl']->value) ,false ,32);?>
        
<?php $_smarty_tpl->_assignInScope('nbItemsPerLineTablet', $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_tablet']);
$_smarty_tpl->_assignInScope('nbItemsPerLineMobile', $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_mobile']);
$_smarty_tpl->_assignInScope('nbLi', smarty_modifier_count($_smarty_tpl->tpl_vars['products']->value));
echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLine",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'nbLines'),$_smarty_tpl);?>

<?php echo smarty_function_math(array('equation'=>"nbLi/nbItemsPerLineTablet",'nbLi'=>$_smarty_tpl->tpl_vars['nbLi']->value,'nbItemsPerLineTablet'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'nbLinesTablet'),$_smarty_tpl);?>

<!-- Products list -->
<div <?php if ((isset($_smarty_tpl->tpl_vars['id']->value)) && $_smarty_tpl->tpl_vars['id']->value) {?> id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8');?>
"<?php }?> class="product_list <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_mode']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['listing_product_mode'], ENT_QUOTES, 'UTF-8');
}?> <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['class'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['class'] != '') {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['class'], ENT_QUOTES, 'UTF-8');
}?> ">
    <div class="row leo-product-ajax">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product', false, NULL, 'products', array (
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>

            <?php echo smarty_function_math(array('equation'=>"(total%perLine)",'total'=>smarty_modifier_count($_smarty_tpl->tpl_vars['products']->value),'perLine'=>$_smarty_tpl->tpl_vars['nbItemsPerLine']->value,'assign'=>'totModulo'),$_smarty_tpl);?>


            <?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>smarty_modifier_count($_smarty_tpl->tpl_vars['products']->value),'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value,'assign'=>'totModuloTablet'),$_smarty_tpl);?>

            <?php echo smarty_function_math(array('equation'=>"(total%perLineT)",'total'=>smarty_modifier_count($_smarty_tpl->tpl_vars['products']->value),'perLineT'=>$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value,'assign'=>'totModuloMobile'),$_smarty_tpl);?>

            <?php if ($_smarty_tpl->tpl_vars['totModulo']->value == 0) {
$_smarty_tpl->_assignInScope('totModulo', $_smarty_tpl->tpl_vars['nbItemsPerLine']->value);
}?>
            <?php if ($_smarty_tpl->tpl_vars['totModuloTablet']->value == 0) {
$_smarty_tpl->_assignInScope('totModuloTablet', $_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value);
}?>
            <?php if ($_smarty_tpl->tpl_vars['totModuloMobile']->value == 0) {
$_smarty_tpl->_assignInScope('totModuloMobile', $_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value);
}?>  

            <div class="ajax_block_product <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['colValue']->value, ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 0) {?> last-in-line<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLine']->value == 1) {?> first-in-line<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) > ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total'] : null)-$_smarty_tpl->tpl_vars['totModulo']->value)) {?> last-line<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value == 0) {?> last-item-of-tablet-line<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineTablet']->value == 1) {?> first-item-of-tablet-line<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value == 0) {?> last-item-of-mobile-line<?php } elseif ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null)%$_smarty_tpl->tpl_vars['nbItemsPerLineMobile']->value == 1) {?> first-item-of-mobile-line<?php }
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) > ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['total'] : null)-$_smarty_tpl->tpl_vars['totModuloMobile']->value)) {?> last-mobile-line<?php }?>">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116410614766bac8745e1ee1_77070875', 'product_miniature');
?>

            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<?php }
/* {block 'product_miniature'} */
class Block_116410614766bac8745e1ee1_77070875 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature' => 
  array (
    0 => 'Block_116410614766bac8745e1ee1_77070875',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_url'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_url']) {?>
                        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['profile_params']->value['pl_url'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                    <?php } else { ?>
                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                    <?php }?>
                <?php
}
}
/* {/block 'product_miniature'} */
}
