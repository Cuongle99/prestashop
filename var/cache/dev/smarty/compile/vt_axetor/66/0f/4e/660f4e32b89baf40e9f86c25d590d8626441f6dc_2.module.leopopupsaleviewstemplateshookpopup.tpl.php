<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:31
  from 'module:leopopupsaleviewstemplateshookpopup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac853808605_71408711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '660f4e32b89baf40e9f86c25d590d8626441f6dc' => 
    array (
      0 => 'module:leopopupsaleviewstemplateshookpopup.tpl',
      1 => 1719472792,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac853808605_71408711 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/themes/vt_axetor/modules/leopopupsale/views/templates/hook/popup.tpl -->	<section class="product-notification leo-<?php if ($_smarty_tpl->tpl_vars['theme']->value == '') {?>basic<?php } else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['theme']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['position']->value) {?> position<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" data-time="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['leotime']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-interval="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['leointerval']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
	<a href="javascript:void(0);" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Close','mod'=>'leopopupsale'),$_smarty_tpl ) );?>
" class="close-notifi">×</a>

	<?php if (!empty($_smarty_tpl->tpl_vars['product']->value)) {?>		
		<div class="product-suggest"<?php if ($_smarty_tpl->tpl_vars['box_style']->value) {?> style="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['box_style']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
			
			<div class="product-suggest-content">
				<a class="product-image" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
					<img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['img'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
				</a>

			    <div class="column-right">
					<label class="time-ago"<?php if ($_smarty_tpl->tpl_vars['lable_style']->value) {?> style="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lable_style']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
						<?php if ($_smarty_tpl->tpl_vars['showname']->value) {?>
							  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Purchased By','mod'=>'leopopupsale'),$_smarty_tpl ) );?>

							  <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

						  <?php } else { ?>
							  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Have a customer purchase product','mod'=>'leopopupsale'),$_smarty_tpl ) );?>

						<?php }?>
						  <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( rand(1,59),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'minutes ago','mod'=>'leopopupsale'),$_smarty_tpl ) );?>

					</label>
			      	<a class="product-name" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['url'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php if ($_smarty_tpl->tpl_vars['text_style']->value) {?> style="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['text_style']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
			      	<?php if ($_smarty_tpl->tpl_vars['showphone']->value) {?>
			      	<p class="leo-phone"<?php if ($_smarty_tpl->tpl_vars['text_style']->value) {?> style="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['text_style']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
			      		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Phone: ','mod'=>'leopopupsale'),$_smarty_tpl ) );
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer']->value['phone'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
			      		
			      	</p>
			      	<?php }?>
			      	<?php if ($_smarty_tpl->tpl_vars['showaddress']->value) {?>
			      	<p class="leo-address"<?php if ($_smarty_tpl->tpl_vars['text_style']->value) {?> style="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['text_style']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
			      		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Address: ','mod'=>'leopopupsale'),$_smarty_tpl ) );
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['customer']->value['address'],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

			      	</p>
			      	<?php }?>
			    </div>
		    </div>
		</div>
	<?php }?>
</section><!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/themes/vt_axetor/modules/leopopupsale/views/templates/hook/popup.tpl --><?php }
}
