<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:42
  from 'module:leofeatureviewstemplatesfrontmodal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac85ecc4739_78630146',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b2b08f3e7cd22b2aad86e184d6bdfdc8b3802cf' => 
    array (
      0 => 'module:leofeatureviewstemplatesfrontmodal.tpl',
      1 => 1690855550,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac85ecc4739_78630146 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/modules/leofeature/views/templates/front/modal.tpl --><div class="modal leo-modal leo-modal-cart fade" tabindex="-1" role="dialog" aria-hidden="true">
	<!--
	<div class="vertical-alignment-helper">
	-->
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
			<h4 class="modal-title h6 text-xs-center leo-warning leo-alert">
				<i class="material-icons">info_outline</i>				
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must enter a quantity','mod'=>'leofeature'),$_smarty_tpl ) );?>
		
			</h4>
			
			<h4 class="modal-title h6 text-xs-center leo-info leo-alert">
				<i class="material-icons">info_outline</i>				
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is ','mod'=>'leofeature'),$_smarty_tpl ) );?>
<strong class="alert-min-qty"></strong>		
			</h4>	
			
			<h4 class="modal-title h6 text-xs-center leo-block leo-alert">				
				<i class="material-icons">block</i>				
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are not enough products in stock','mod'=>'leofeature'),$_smarty_tpl ) );?>

			</h4>
		  </div>
		  <!--
		  <div class="modal-body">
			...
		  </div>
		  <div class="modal-footer">
			
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
			
		  </div>
		  -->
		</div>
	  </div>
	<!--
	</div>
	-->
</div><!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/modules/leofeature/views/templates/front/modal.tpl --><?php }
}
