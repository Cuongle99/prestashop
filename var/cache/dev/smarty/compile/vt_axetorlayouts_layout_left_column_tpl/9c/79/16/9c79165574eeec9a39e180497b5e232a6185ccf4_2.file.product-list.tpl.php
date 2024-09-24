<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:44:26
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\themes\vt_axetor\templates\catalog\listing\product-list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac88ace3a20_71725695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9c79165574eeec9a39e180497b5e232a6185ccf4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\themes\\vt_axetor\\templates\\catalog\\listing\\product-list.tpl',
      1 => 1694501118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/product-list-jsonld.tpl' => 1,
    'file:catalog/_partials/subcategories.tpl' => 2,
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
    'file:errors/not-found.tpl' => 1,
  ),
),false)) {
function content_66bac88ace3a20_71725695 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162745658366bac88acab9b9_30236291', 'head_microdata_special');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172863971066bac88acad954_98737712', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_microdata_special'} */
class Block_162745658366bac88acab9b9_30236291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_microdata_special' => 
  array (
    0 => 'Block_162745658366bac88acab9b9_30236291',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:_partials/microdata/product-list-jsonld.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'head_microdata_special'} */
/* {block 'product_list_header'} */
class Block_42899024966bac88acb4231_95645327 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <h1 id="js-product-list-header" class="h2"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['listing']->value['label'], ENT_QUOTES, 'UTF-8');?>
</h1>
    <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'subcategory_list'} */
class Block_131577405266bac88acb8d47_22828332 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['subcategories']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['subcategories']->value) > 0) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/subcategories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subcategories'=>$_smarty_tpl->tpl_vars['subcategories']->value), 0, false);
?>
      <?php }?>
    <?php
}
}
/* {/block 'subcategory_list'} */
/* {block 'product_list_top'} */
class Block_73677057166bac88acca2b3_59191929 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
        <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_189694463666bac88accbdf9_23777918 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="hidden-sm-down">
            <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_active_filters'];?>

          </div>
        <?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_53134199866bac88accd818_19885839 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'productClass'=>"col-xs-6 col-xl-4"), 0, false);
?>
        <?php
}
}
/* {/block 'product_list'} */
/* {block 'product_list_bottom'} */
class Block_56646726266bac88accf499_80598021 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
?>
        <?php
}
}
/* {/block 'product_list_bottom'} */
/* {block 'product_list_header'} */
class Block_44724626666bac88acd9a08_32199725 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <h1 id="js-product-list-header" class="h2"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['listing']->value['label'], ENT_QUOTES, 'UTF-8');?>
</h1>
    <?php
}
}
/* {/block 'product_list_header'} */
/* {block 'subcategory_list'} */
class Block_170863119466bac88acdd1d0_12388528 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['subcategories']->value)) && smarty_modifier_count($_smarty_tpl->tpl_vars['subcategories']->value) > 0) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/subcategories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('subcategories'=>$_smarty_tpl->tpl_vars['subcategories']->value), 0, true);
?>
      <?php }?>
    <?php
}
}
/* {/block 'subcategory_list'} */
/* {block 'product_list_footer'} */
class Block_202724231066bac88ace1194_61626646 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_list_footer'} */
/* {block 'content'} */
class Block_172863971066bac88acad954_98737712 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_172863971066bac88acad954_98737712',
  ),
  'product_list_header' => 
  array (
    0 => 'Block_42899024966bac88acb4231_95645327',
    1 => 'Block_44724626666bac88acd9a08_32199725',
  ),
  'subcategory_list' => 
  array (
    0 => 'Block_131577405266bac88acb8d47_22828332',
    1 => 'Block_170863119466bac88acdd1d0_12388528',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_73677057166bac88acca2b3_59191929',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_189694463666bac88accbdf9_23777918',
  ),
  'product_list' => 
  array (
    0 => 'Block_53134199866bac88accd818_19885839',
  ),
  'product_list_bottom' => 
  array (
    0 => 'Block_56646726266bac88accf499_80598021',
  ),
  'product_list_footer' => 
  array (
    0 => 'Block_202724231066bac88ace1194_61626646',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

  <section id="main"<?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config'])) && (isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config']['class']))) {?>class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['class'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
    
    <?php if (((isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config'])) && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['category_position'] == 1) || !(isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config']))) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42899024966bac88acb4231_95645327', 'product_list_header', $this->tplIndex);
?>

    <?php }?>

    <?php if (((isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config'])) && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['scategory_position'] == 1) || !(isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config']))) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_131577405266bac88acb8d47_22828332', 'subcategory_list', $this->tplIndex);
?>

    <?php }?>
    
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayHeaderCategory"),$_smarty_tpl ) );?>


    <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config'])) && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['filter_position'] == 2 && (isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets'])) && $_smarty_tpl->tpl_vars['listing']->value['rendered_facets']) {?>
      <div id="horizontal_filters">
        <?php if ($_smarty_tpl->tpl_vars['layout']->value == 'layouts/layout-full-width.tpl' || $_smarty_tpl->tpl_vars['layout']->value == 'layouts/layout-right-column.tpl') {?>
        <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

        <?php }?>
      </div>
    <?php }?>
    <?php if (((isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config'])) && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['filter_position'] != 2) || !(isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config']))) {?>
    <section id="products">
      <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['listing']->value['products'])) {?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73677057166bac88acca2b3_59191929', 'product_list_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189694463666bac88accbdf9_23777918', 'product_list_active_filters', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53134199866bac88accd818_19885839', 'product_list', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_56646726266bac88accf499_80598021', 'product_list_bottom', $this->tplIndex);
?>


      <?php } else { ?>
        <div id="js-product-list-top"></div>

        <div id="js-product-list">
          <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "errorContent", null);?>
            <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products available yet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
            <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Stay tuned! More products will be shown here as they are added.','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
          <?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

          <?php $_smarty_tpl->_subTemplateRender('file:errors/not-found.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errorContent'=>$_smarty_tpl->tpl_vars['errorContent']->value), 0, false);
?>
        </div>

        <div id="js-product-list-bottom"></div>
      <?php }?>
    </section>
    <?php }?>
    <?php if (((isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config'])) && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['category_position'] == 2)) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44724626666bac88acd9a08_32199725', 'product_list_header', $this->tplIndex);
?>

    <?php }?>

    <?php if (((isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config'])) && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['scategory_position'] == 2)) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_170863119466bac88acdd1d0_12388528', 'subcategory_list', $this->tplIndex);
?>

    <?php }?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202724231066bac88ace1194_61626646', 'product_list_footer', $this->tplIndex);
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayFooterCategory"),$_smarty_tpl ) );?>


  </section>
<?php
}
}
/* {/block 'content'} */
}
