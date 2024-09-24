<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:58
  from 'module:leoproductsearchviewstemplatesfrontsearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac86e732734_17988882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '308cfbdf09d4c1f7a5629bd090417ae80b0efa38' => 
    array (
      0 => 'module:leoproductsearchviewstemplatesfrontsearch.tpl',
      1 => 1690855552,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/products-top.tpl' => 1,
    'file:catalog/_partials/products.tpl' => 1,
  ),
),false)) {
function content_66bac86e732734_17988882 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>
<!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/modules/leoproductsearch/views/templates/front/search.tpl -->


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128793539666bac86e6bbf49_76365195', 'content');
?>

<!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/modules/leoproductsearch/views/templates/front/search.tpl --><?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'product_list_top'} */
class Block_167938901466bac86e722f52_11512984 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

				<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['search_products']->value), 0, false);
?>
			  <?php
}
}
/* {/block 'product_list_top'} */
/* {block 'product_list_active_filters'} */
class Block_92917333066bac86e72c101_38005862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

			  <div id="" class="hidden-sm-down">
				<?php echo $_smarty_tpl->tpl_vars['search_products']->value['rendered_active_filters'];?>
			  </div>
			<?php
}
}
/* {/block 'product_list_active_filters'} */
/* {block 'product_list'} */
class Block_11890402266bac86e72e581_26478914 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

					<?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['search_products']->value), 0, false);
?>
				<?php
}
}
/* {/block 'product_list'} */
/* {block 'content'} */
class Block_128793539666bac86e6bbf49_76365195 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_128793539666bac86e6bbf49_76365195',
  ),
  'product_list_top' => 
  array (
    0 => 'Block_167938901466bac86e722f52_11512984',
  ),
  'product_list_active_filters' => 
  array (
    0 => 'Block_92917333066bac86e72c101_38005862',
  ),
  'product_list' => 
  array (
    0 => 'Block_11890402266bac86e72e581_26478914',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'path', null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'leoproductsearch'),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

	<h1 
	<?php if ((isset($_smarty_tpl->tpl_vars['instant_search']->value)) && $_smarty_tpl->tpl_vars['instant_search']->value) {?>id="instant_search_results"<?php }?> 
	class="page-heading <?php if (!(isset($_smarty_tpl->tpl_vars['instant_search']->value)) || ((isset($_smarty_tpl->tpl_vars['instant_search']->value)) && !$_smarty_tpl->tpl_vars['instant_search']->value)) {?> product-listing<?php }?>">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
&nbsp;
		<?php if ($_smarty_tpl->tpl_vars['nbProducts']->value > 0) {?>
			<span class="lighter">
				"<?php if ((isset($_smarty_tpl->tpl_vars['search_query']->value)) && $_smarty_tpl->tpl_vars['search_query']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_query']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['search_tag']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_tag']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['ref']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ref']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"
			</span>
		<?php }?>
		<?php if ((isset($_smarty_tpl->tpl_vars['instant_search']->value)) && $_smarty_tpl->tpl_vars['instant_search']->value) {?>
			<a href="#" class="close">
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Return to the previous page','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>

			</a>
		<?php } else { ?>
			<span class="heading-counter">
				<?php if ($_smarty_tpl->tpl_vars['nbProducts']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d result has been found.','sprintf'=>array(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['nbProducts']->value ))),'mod'=>'leoproductsearch'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d results have been found.','sprintf'=>array(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['nbProducts']->value ))),'mod'=>'leoproductsearch'),$_smarty_tpl ) );
}?>
			</span>
		<?php }?>
	</h1>
	
	<?php if ($_smarty_tpl->tpl_vars['search_products']->value['suggest'] || $_smarty_tpl->tpl_vars['search_products']->value['category']) {?>
		<div class="head-leosearch-product">
			<?php if ($_smarty_tpl->tpl_vars['search_products']->value['suggest']) {?>
				<div class="search-in-suggest">
					<div class="search-value-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suggestion','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
</div>
					<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_products']->value['suggest'], 'suggest');
$_smarty_tpl->tpl_vars['suggest']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['suggest']->value) {
$_smarty_tpl->tpl_vars['suggest']->do_else = false;
?>
					    <li><a class="suggest-item" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suggest']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['suggest']->value['word'], ENT_QUOTES, 'UTF-8');?>
</a></li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			<?php }?>

			<?php if ($_smarty_tpl->tpl_vars['search_products']->value['category']) {?>
				<div class="search-in-cat">
					<div class="search-value-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search in category','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
</div>
					<ul>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['search_products']->value['category'], 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
					    <li><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['link'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'in category','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
: <strong><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</strong> (<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['count'], ENT_QUOTES, 'UTF-8');?>
)</a></li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</ul>
				</div>
			<?php }?>

		</div>
	<?php }?>

	<?php if (!$_smarty_tpl->tpl_vars['nbProducts']->value) {?>
		<p class="alert alert-warning">
			<?php if ((isset($_smarty_tpl->tpl_vars['search_query']->value)) && $_smarty_tpl->tpl_vars['search_query']->value) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No results were found for your search','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
&nbsp;"<?php if ((isset($_smarty_tpl->tpl_vars['search_query']->value))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_query']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>"
			<?php } elseif ((isset($_smarty_tpl->tpl_vars['search_tag']->value)) && $_smarty_tpl->tpl_vars['search_tag']->value) {?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No results were found for your search','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>
&nbsp;"<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search_tag']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
			<?php } else { ?>
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please enter a search keyword','mod'=>'leoproductsearch'),$_smarty_tpl ) );?>

			<?php }?>
		</p>
	<?php } else { ?>
		<?php if ((isset($_smarty_tpl->tpl_vars['instant_search']->value)) && $_smarty_tpl->tpl_vars['instant_search']->value) {?>
			<p class="alert alert-info">
				<?php if ($_smarty_tpl->tpl_vars['nbProducts']->value == 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d result has been found.','sprintf'=>array(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['nbProducts']->value ))),'mod'=>'leoproductsearch'),$_smarty_tpl ) );
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%d results have been found.','sprintf'=>array(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['nbProducts']->value ))),'mod'=>'leoproductsearch'),$_smarty_tpl ) );
}?>
			</p>
		<?php }?>
		
		<section id="products">
			<div id="">
			  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_167938901466bac86e722f52_11512984', 'product_list_top', $this->tplIndex);
?>

			</div>

			<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_92917333066bac86e72c101_38005862', 'product_list_active_filters', $this->tplIndex);
?>

			<div id="">
				<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11890402266bac86e72e581_26478914', 'product_list', $this->tplIndex);
?>

			</div>
		</section>
		
	<?php }
}
}
/* {/block 'content'} */
}
