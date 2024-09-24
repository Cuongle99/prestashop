<?php
/* Smarty version 4.3.4, created on 2024-09-17 22:42:02
  from 'module:leoelementsviewstemplatesfrontproductsplist2679939487.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ea3dfacd8917_85340795',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f28bc719ac40c208dbf488221b9d259ea92a5023' => 
    array (
      0 => 'module:leoelementsviewstemplatesfrontproductsplist2679939487.tpl',
      1 => 1717638425,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ea3dfacd8917_85340795 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/themes/vt_axetor/modules//leoelements/views/templates/front/products/plist2679939487.tpl --><article class="product-miniature js-product-miniature" data-id-product="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
  <div class="thumbnail-container">
    <div class="product-image">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5764664666ea3dfacb2587_67832983', 'product_thumbnail');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_144772175466ea3dfacc8310_31034847', 'product_flags');
?>

<div class="functional-buttons clearfix">
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoWishlistButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoCompareButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


<div class="quickview<?php if (!$_smarty_tpl->tpl_vars['product']->value['main_variants']) {?> no-variants<?php }?> hidden-sm-down">
<a
  href="#"
  class="quick-view"
  data-link-action="quickview" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
>
	<span class="leo-quickview-bt-loading cssload-speeding-wheel"></span>
	<span class="leo-quickview-bt-content">
		<i class="material-icons search">&#xE8B6;</i>
		<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
	</span>
</a>
</div>
</div></div>
    <div class="product-meta">
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProductListReview','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_148104347366ea3dfaccc8c5_71784690', 'product_name');
?>

<div class="price-group">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_84406557066ea3dfacce370_06696845', 'product_price_and_shipping');
?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoCartButton','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>


<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoCartAttribute','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div></div>
  </div>
</article>
<!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/themes/vt_axetor/modules//leoelements/views/templates/front/products/plist2679939487.tpl --><?php }
/* {block 'product_thumbnail'} */
class Block_5764664666ea3dfacb2587_67832983 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_thumbnail' => 
  array (
    0 => 'Block_5764664666ea3dfacb2587_67832983',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_multi_product_img'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_multi_product_img']) {?>
		<div class="leo-more-info" data-idproduct="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
		<?php if ($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['lmobile_swipe'] == 1 && $_smarty_tpl->tpl_vars['isMobile']->value) {?>
		    <div class="product-list-images-mobile">
		    	<div>
		<?php }?>
			    	<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
					  <img
						class="img-fluid"
						src = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
						alt = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
						data-full-size-image-url = "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
					  >
					  <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_more_product_img'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_more_product_img'] && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_more_product_img_option'] == 1) {?>
							<span class="second-image-style product-additional" data-idproduct="<?php if ($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['lmobile_swipe'] && $_smarty_tpl->tpl_vars['isMobile']->value) {?>0<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');
}?>"></span>
						<?php } elseif ((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_more_product_img'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_more_product_img'] && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_more_product_img_option'] == 2) {?>
							<span class="second-image-style product-attribute-additional" data-idproduct="<?php if ($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['lmobile_swipe'] && $_smarty_tpl->tpl_vars['isMobile']->value) {?>0<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');
}?>" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" data-id-image="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['id_image'], ENT_QUOTES, 'UTF-8');?>
"></span>
						<?php } elseif ((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_more_product_img'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_more_product_img'] && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['plist_load_more_product_img_option'] == 3) {?>
							<span class="second-image-style product-all-additional" data-idproduct="<?php if ($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['lmobile_swipe'] && $_smarty_tpl->tpl_vars['isMobile']->value) {?>0<?php } else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');
}?>" data-id-product-attribute="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
" data-id-image="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['cover']['id_image'], ENT_QUOTES, 'UTF-8');?>
"></span>
					  <?php }?>
					</a>
		<?php if ($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['lmobile_swipe'] == 1 && $_smarty_tpl->tpl_vars['isMobile']->value) {?>
				</div>
		    	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
			    	<?php if ($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'] != $_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url']) {?>
			            <div>
					    	<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
			                    <img
			                      class="thumb js-thumb img-fluid <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['cover']['id_image']) {?> selected <?php }?>"
			                      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
			                      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
			                      title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
								  loading="lazy"
			                    >
			                </a>
						</div>	
					<?php }?>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		<?php }?>
	<?php } else { ?>
	  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail leo-noimage">
	 <img class="img-fluid" src= "<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" >
	  </a>
	<?php }
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_flags'} */
class Block_144772175466ea3dfacc8310_31034847 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_144772175466ea3dfacc8310_31034847',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<ul class="product-flags">
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
	<li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php
}
}
/* {/block 'product_flags'} */
/* {block 'product_name'} */
class Block_148104347366ea3dfaccc8c5_71784690 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_name' => 
  array (
    0 => 'Block_148104347366ea3dfaccc8c5_71784690',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h3 class="h3 product-title"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],70,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h3>
<?php
}
}
/* {/block 'product_name'} */
/* {block 'product_price_and_shipping'} */
class Block_84406557066ea3dfacce370_06696845 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price_and_shipping' => 
  array (
    0 => 'Block_84406557066ea3dfacce370_06696845',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
    <div class="product-price-and-shipping <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>product-discount<?php }?>">
<span class="price" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'custom_price', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'custom_price','hook_origin'=>'products_list'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
        <?php if ('' !== $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price')) {?>
          <?php echo $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'custom_price');?>

        <?php } else { ?>
          <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>

        <?php }?>
      </span>
      <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>


        <span class="regular-price" aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Regular price','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
          <span class="discount-percentage discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_percentage'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'amount') {?>
          <span class="discount-amount discount-product"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['discount_amount_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>
      <?php }?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>


      

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>


      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

    </div>
  <?php }
}
}
/* {/block 'product_price_and_shipping'} */
}
