<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:45
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\modules\leoelements\views\templates\hook\product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac8617c3f73_32492916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0814e0760f03bdb244fa1c0901bcdb961e553016' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\modules\\leoelements\\views\\templates\\hook\\product.tpl',
      1 => 1676345971,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac8617c3f73_32492916 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="col-1">
	<?php $_smarty_tpl->_assignInScope('images', $_smarty_tpl->tpl_vars['product']->value['images']);?>
	<?php if ((isset($_smarty_tpl->tpl_vars['images']->value)) && count($_smarty_tpl->tpl_vars['images']->value) > 0) {?>
		<!-- thumbnails -->
		<div class="views_block" class="clearfix <?php if ((isset($_smarty_tpl->tpl_vars['images']->value)) && count($_smarty_tpl->tpl_vars['images']->value) < 2) {?>hidden<?php }?>">
		<?php if ((isset($_smarty_tpl->tpl_vars['images']->value)) && count($_smarty_tpl->tpl_vars['images']->value) > 3) {?><span class="view_scroll_spacer">
		<a class="view_scroll_left view_scroll_left_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
" rel="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
" class="hidden" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Other views','mod'=>'leoelements'),$_smarty_tpl ) );?>
" href="javascript:{}"><em class="fa fa-chevron-up"></em></a></span><?php }?>
		<div class="thumbs_list thumbs_list_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
">
			<ul class="thumbs_list_frame">
				<?php if ((isset($_smarty_tpl->tpl_vars['images']->value))) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image', false, NULL, 'thumbnails', array (
  'first' => true,
  'index' => true,
));
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['index']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['first'] = !$_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['index'];
?>
						<?php $_smarty_tpl->_assignInScope('imageIds', ((string)$_smarty_tpl->tpl_vars['product']->value['id_product'])."-".((string)$_smarty_tpl->tpl_vars['image']->value['id_image']));?>
						<li id="thumbnail_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['id_image'] )), ENT_QUOTES, 'UTF-8');?>
">
							<a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageIds']->value,'large_default'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-idproduct="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');?>
" rel="other-views" class="thickbox-ajax-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'] )), ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_thumbnails']->value['first'] : null)) {?> shown<?php }?>" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'htmlspecialchars' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['legend'] )), ENT_QUOTES, 'UTF-8');?>
">
								<img id="thumb_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['id_image'] )), ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageIds']->value,'cart_default'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'htmlspecialchars' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['legend'] )), ENT_QUOTES, 'UTF-8');?>
" rel="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['imageIds']->value,'home_default'), ENT_QUOTES, 'UTF-8');?>
" class="img-fluid leo-hover-image" loading="lazy"/>
							</a>
						</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				<?php }?>
			</ul>
		</div>
	<?php if ((isset($_smarty_tpl->tpl_vars['images']->value)) && count($_smarty_tpl->tpl_vars['images']->value) > 3) {?><a class="view_scroll_right view_scroll_right_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" rel="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['id_product'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Other views','mod'=>'leoelements'),$_smarty_tpl ) );?>
" href="javascript:{}"><em class="fa fa-chevron-down"></em></a><?php }?>
	</div>
	<?php }?>
</div><?php }
}
