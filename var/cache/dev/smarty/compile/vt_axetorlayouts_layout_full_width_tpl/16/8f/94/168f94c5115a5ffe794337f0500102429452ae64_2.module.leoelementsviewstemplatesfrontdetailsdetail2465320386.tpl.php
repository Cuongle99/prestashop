<?php
/* Smarty version 4.3.4, created on 2024-09-17 22:41:44
  from 'module:leoelementsviewstemplatesfrontdetailsdetail2465320386.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ea3de85cb2c3_88364384',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '168f94c5115a5ffe794337f0500102429452ae64' => 
    array (
      0 => 'module:leoelementsviewstemplatesfrontdetailsdetail2465320386.tpl',
      1 => 1719479328,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-images-modal.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 1,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:sub/product_info/tab.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_66ea3de85cb2c3_88364384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/themes/vt_axetor/modules//leoelements/views/templates/front/details/detail2465320386.tpl -->
<section id="main" class="product-detail product_image_thumbs_bottom product-image-thumbs product-thumbs-bottom"><div class="row"><div class="col-form_id-form_9367402777406408 col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-sp-12">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23138435466ea3de854f288_02108253', 'page_content_container');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_189745197866ea3de857bfe5_70005646', 'product_images_modal');
?>


                            </div><div class="col-form_id-form_15874367062488778 col-md-6 col-lg-6 col-xl-6 col-sm-12 col-xs-12 col-sp-12"><?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
              <span class="percentage"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %percentage%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%percentage%'=>$_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'])),$_smarty_tpl ) );?>
</span>
            <?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_183991156566ea3de8580d75_14131323', 'page_header_container');
?>
<div class="product_after_title"><?php if ((isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id))) {?>
		<div class="product-manufacturer">   
          	<label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
:</label>
          	<span>
            	<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
          	</span>
      	</div>
    <?php }
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeoProductReviewExtra','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>
<div class="p-reference">
     <div class="product-quantities"></div>
</div></div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130360210466ea3de8588a95_32299969', 'product_description_short');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185909750166ea3de858b603_34600369', 'product_prices');
?>

<div class="leo-more-cdown in_detail" data-idproduct="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"></div>
<?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172325696466ea3de858fe42_63509805', 'product_customization');
?>

<?php }?>
<div class="product-actions">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_187271643466ea3de8592d31_36163511', 'product_buy');
?>

</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151685517766ea3de85a4619_69350855', 'hook_display_reassurance');
?>
<div class="line">


<div class="productcats">
    <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
: </label>
    <ul>
    
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Product::getProductCategoriesFull(Tools::getValue('id_product')), 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
    
        <li><a href="<?php ob_start();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cat']->value['id_category'], ENT_QUOTES, 'UTF-8');
$_prefixVariable1 = ob_get_clean();
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_prefixVariable1), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cat']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a></li>
    
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    
    </ul>
</div>

<div class="p-reference">
			      	<div class="product-reference">				        
			      	</div>
</div>	
</div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159160905666ea3de85ad6e9_81936485', 'product_additional_info');
?>

                            </div><div class="col-form_id-form_4666379129988496 col-md-12 col-lg-12 col-xl-12 col-sm-12 col-xs-12 col-sp-12">
<?php $_smarty_tpl->_subTemplateRender("file:sub/product_info/tab.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44618976966ea3de85b0326_50897151', 'product_accessories');
?>

<?php echo '<script'; ?>
 type="text/javascript">

  products_list_functions.push(
    function(){
        // https://stackoverflow.com/questions/5339876/how-to-check-jquery-plugin-and-functions-exists
        if($().slick) {
            $('#category-products2').slick({
                centerMode: false,
                centerPadding: '0px',
                dots: false,
                infinite: true,
                vertical: false,
                verticalSwiping : false,
                autoplay: false,
                pauseonhover: false,
                autoplaySpeed: 5000,
                speed: 500,
                arrows: true,
                rows: 1,
                slidesToShow: 4,
                slidesToScroll: 4,
                rtl: <?php if ((isset($_smarty_tpl->tpl_vars['IS_RTL']->value)) && $_smarty_tpl->tpl_vars['IS_RTL']->value) {?>true<?php } else { ?>false<?php }?>,
                responsive:
                [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    },
					{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        }
    }
  ); 

<?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125120472766ea3de85c6082_15668024', 'product_footer');
?>

                            </div></div>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211471064966ea3de85c85e8_18831214', 'page_footer_container');
?>

</section>

<!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/themes/vt_axetor/modules//leoelements/views/templates/front/details/detail2465320386.tpl --><?php }
/* {block 'product_flags'} */
class Block_172488822266ea3de85516c6_49541701 extends Smarty_Internal_Block
{
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
/* {block 'product_cover'} */
class Block_151370304666ea3de8550eb4_66139114 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-cover">
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172488822266ea3de85516c6_49541701', 'product_flags', $this->tplIndex);
?>

              <?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
            		<img id="zoom_product" data-type-zoom="" class="js-qv-product-cover img-fluid" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['default_image']['legend'])) {?>
            			alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
            			title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['default_image']['legend'], ENT_QUOTES, 'UTF-8');?>
"
            		   <?php } else { ?>
            			alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
            		    <?php }?>
            			loading="lazy"
            		>
                <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                  <i class="material-icons zoom-in">&#xE8FF;</i>
                </div>
              <?php } else { ?>
                <img id="zoom_product" data-type-zoom="" class="js-qv-product-cover img-fluid" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"  loading="lazy" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
			  <?php }?>
            </div>
          <?php
}
}
/* {/block 'product_cover'} */
/* {block 'product_images'} */
class Block_49011759766ea3de855faf2_56985782 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>

            <div id="thumb-gallery" class="product-thumb-images elementor-slick-slider">
              <?php if ($_smarty_tpl->tpl_vars['product']->value['default_image']) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
                  <div class="thumb-container <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['default_image']['id_image']) {?> active <?php }?>">
                    <a href="javascript:void(0)" data-image="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" data-zoom-image="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"> 
                      <img
                        class="thumb img-fluid js-thumb <?php if ($_smarty_tpl->tpl_vars['image']->value['id_image'] == $_smarty_tpl->tpl_vars['product']->value['default_image']['id_image']) {?> selected <?php }?>"
                        data-image-medium-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        data-image-large-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
                        title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['image']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"
			                  loading="lazy"
                      >
                    </a>
                  </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
              <?php } else { ?>
                <div class="thumb-container">
                  <a href="javascript:void(0)" data-image="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
" data-zoom-image="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"> 
                    <img 
                      class="thumb js-thumb img-fluid" 
                      data-image-medium-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                      data-image-large-src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                      title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
		                  loading="lazy"
                    >
                  </a>
                </div>
              <?php }?>
            </div>
            
            <?php if (smarty_modifier_count($_smarty_tpl->tpl_vars['product']->value['images']) > 1) {?>
              <div class="arrows-product-fake slick-arrows">
                <button class="slick-prev slick-arrow" aria-label="Previous" type="button" ><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</button>
                <button class="slick-next slick-arrow" aria-label="Next" type="button"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</button>
              </div>
            <?php }?>
          <?php
}
}
/* {/block 'product_images'} */
/* {block 'product_cover_thumbnails'} */
class Block_52191312066ea3de8550666_75181491 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_151370304666ea3de8550eb4_66139114', 'product_cover', $this->tplIndex);
?>


          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49011759766ea3de855faf2_56985782', 'product_images', $this->tplIndex);
?>

        
        <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_156699623566ea3de854fd24_38461910 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="images-container">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_52191312066ea3de8550666_75181491', 'product_cover_thumbnails', $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs'),$_smarty_tpl ) );?>

      </div>
    <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_23138435466ea3de854f288_02108253 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_23138435466ea3de854f288_02108253',
  ),
  'page_content' => 
  array (
    0 => 'Block_156699623566ea3de854fd24_38461910',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_52191312066ea3de8550666_75181491',
  ),
  'product_cover' => 
  array (
    0 => 'Block_151370304666ea3de8550eb4_66139114',
  ),
  'product_flags' => 
  array (
    0 => 'Block_172488822266ea3de85516c6_49541701',
  ),
  'product_images' => 
  array (
    0 => 'Block_49011759766ea3de855faf2_56985782',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section class="page-content" id="content" data-templateview="bottom" data-numberimage="5" data-numberimage1200="5" data-numberimage992="4" data-numberimage768="4" data-numberimage576="4" data-numberimage480="4" data-numberimage360="2" data-templatemodal="0" data-templatezoomtype="in_scrooll" data-zoomposition="right" data-zoomwindowwidth="400" data-zoomwindowheight="400" data-use_leo_gallery="1">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156699623566ea3de854fd24_38461910', 'page_content', $this->tplIndex);
?>

  </section>
<?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_images_modal'} */
class Block_189745197866ea3de857bfe5_70005646 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_images_modal' => 
  array (
    0 => 'Block_189745197866ea3de857bfe5_70005646',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_title'} */
class Block_4858164266ea3de8581f99_34765170 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_206269205766ea3de8581706_70331765 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

		<h1 class="h1 product-detail-name"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4858164266ea3de8581f99_34765170', 'page_title', $this->tplIndex);
?>
</h1>
	<?php
}
}
/* {/block 'page_header'} */
/* {block 'page_header_container'} */
class Block_183991156566ea3de8580d75_14131323 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_header_container' => 
  array (
    0 => 'Block_183991156566ea3de8580d75_14131323',
  ),
  'page_header' => 
  array (
    0 => 'Block_206269205766ea3de8581706_70331765',
  ),
  'page_title' => 
  array (
    0 => 'Block_4858164266ea3de8581f99_34765170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206269205766ea3de8581706_70331765', 'page_header', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_description_short'} */
class Block_130360210466ea3de8588a95_32299969 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_description_short' => 
  array (
    0 => 'Block_130360210466ea3de8588a95_32299969',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div id="product-description-short-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" class="description-short"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
<?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_prices'} */
class Block_185909750166ea3de858b603_34600369 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_prices' => 
  array (
    0 => 'Block_185909750166ea3de858b603_34600369',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_prices'} */
/* {block 'product_customization'} */
class Block_172325696466ea3de858fe42_63509805 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization' => 
  array (
    0 => 'Block_172325696466ea3de858fe42_63509805',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	 	<?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
	<?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_136868545766ea3de85962d1_95867678 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_115259723566ea3de859b0e8_88862145 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value,'showPackProductsPrice'=>$_smarty_tpl->tpl_vars['product']->value['show_price']), 0, true);
?>
              <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_147610873766ea3de8597e42_51008063 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
          <section class="product-pack">
            <h3 class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h3>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
$_smarty_tpl->tpl_vars['product_pack']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
$_smarty_tpl->tpl_vars['product_pack']->do_else = false;
?>
              <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115259723566ea3de859b0e8_88862145', 'product_miniature', $this->tplIndex);
?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </section>
        <?php }?>
      <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_discounts'} */
class Block_205200118566ea3de859ea01_03082030 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_add_to_cart'} */
class Block_91001663866ea3de85a0455_38129288 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_refresh'} */
class Block_15733023366ea3de85a1e15_91434072 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Refresh','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
      <?php
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_187271643466ea3de8592d31_36163511 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_buy' => 
  array (
    0 => 'Block_187271643466ea3de8592d31_36163511',
  ),
  'product_variants' => 
  array (
    0 => 'Block_136868545766ea3de85962d1_95867678',
  ),
  'product_pack' => 
  array (
    0 => 'Block_147610873766ea3de8597e42_51008063',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_115259723566ea3de859b0e8_88862145',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_205200118566ea3de859ea01_03082030',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_91001663866ea3de85a0455_38129288',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_15733023366ea3de85a1e15_91434072',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
      <input type="hidden" name="token" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
      <input type="hidden" name="id_product" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
" id="product_page_product_id">
      <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" id="product_customization_id">

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_136868545766ea3de85962d1_95867678', 'product_variants', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147610873766ea3de8597e42_51008063', 'product_pack', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205200118566ea3de859ea01_03082030', 'product_discounts', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_91001663866ea3de85a0455_38129288', 'product_add_to_cart', $this->tplIndex);
?>


      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15733023366ea3de85a1e15_91434072', 'product_refresh', $this->tplIndex);
?>

    </form>
  <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_151685517766ea3de85a4619_69350855 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_display_reassurance' => 
  array (
    0 => 'Block_151685517766ea3de85a4619_69350855',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_additional_info'} */
class Block_159160905666ea3de85ad6e9_81936485 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_additional_info' => 
  array (
    0 => 'Block_159160905666ea3de85ad6e9_81936485',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_miniature'} */
class Block_133281880366ea3de85bacc5_92917121 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_url'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_url']) {?>
                        <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['profile_params']->value['pl_url'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'position'=>$_smarty_tpl->tpl_vars['position']->value), 0, true);
?>
                    <?php } else { ?>
                      <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                    <?php }?>
                  <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories'} */
class Block_44618976966ea3de85b0326_50897151 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_accessories' => 
  array (
    0 => 'Block_44618976966ea3de85b0326_50897151',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_133281880366ea3de85bacc5_92917121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
      <section class="product-accessories clearfix">
        <p class="h5 products-section-title text-uppercase"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
        <div class="products">
          <div class="slick-row <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['class'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['class'] != '') {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['class'], ENT_QUOTES, 'UTF-8');
}?>">
            <div id="category-products2" class="leoslick slick-slider slick-loading">
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory', false, 'position');
$_smarty_tpl->tpl_vars['product_accessory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['position']->value => $_smarty_tpl->tpl_vars['product_accessory']->value) {
$_smarty_tpl->tpl_vars['product_accessory']->do_else = false;
?>
                <div class="slick-slide item<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index'] : null) == 0) {?> first<?php }?>">
                  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133281880366ea3de85bacc5_92917121', 'product_miniature', $this->tplIndex);
?>

                </div>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
          </div>
        </div>
      </section>
    <?php }
}
}
/* {/block 'product_accessories'} */
/* {block 'product_footer'} */
class Block_125120472766ea3de85c6082_15668024 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_footer' => 
  array (
    0 => 'Block_125120472766ea3de85c6082_15668024',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'product_footer'} */
/* {block 'page_footer'} */
class Block_92002725666ea3de85c9010_75968717 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	    	<!-- Footer content -->
	    <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_211471064966ea3de85c85e8_18831214 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_footer_container' => 
  array (
    0 => 'Block_211471064966ea3de85c85e8_18831214',
  ),
  'page_footer' => 
  array (
    0 => 'Block_92002725666ea3de85c9010_75968717',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	  <footer class="page-footer">
	    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92002725666ea3de85c9010_75968717', 'page_footer', $this->tplIndex);
?>

	  </footer>
	<?php
}
}
/* {/block 'page_footer_container'} */
}
