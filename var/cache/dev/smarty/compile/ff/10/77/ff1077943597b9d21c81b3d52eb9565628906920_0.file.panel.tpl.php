<?php
/* Smarty version 4.3.4, created on 2024-09-17 22:28:45
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\modules\leofeature\views\templates\admin\panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ea3add9c6e49_43297600',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ff1077943597b9d21c81b3d52eb9565628906920' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\modules\\leofeature\\views\\templates\\admin\\panel.tpl',
      1 => 1690855550,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ea3add9c6e49_43297600 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel form-horizontal">
	<div class="form-group">					
		<div class="col-lg-1">
			<a class="megamenu-correct-module btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['url_admin']->value;?>
&success=correct&correctmodule=1">
				<i class="icon-AdminParentPreferences"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Correct module','mod'=>'leofeature'),$_smarty_tpl ) );?>

			</a>
		</div>
		<label class="control-label col-lg-3">* <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please backup the database before run correct module to safe','mod'=>'leofeature'),$_smarty_tpl ) );?>
</label>							
	</div>
</div>

<div id="leofeature-group">

	<div class="panel panel-default">
		<div class="panel-heading"><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leo Feature Global Config','mod'=>'leofeature'),$_smarty_tpl ) );?>
</div>
		
		<div class="panel-content" id="leofeature-setting">
			<ul class="nav nav-tabs leofeature-tablist" role="tablist">
				<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_0') {?> active<?php }?>">
					<a class="nav-link" href="#fieldset_0" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ajax Cart','mod'=>'leofeature'),$_smarty_tpl ) );?>
</a>
				</li>
				<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_1_1') {?> active<?php }?>">
					<a class="nav-link" href="#fieldset_1_1" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Review','mod'=>'leofeature'),$_smarty_tpl ) );?>
</a>
				</li>
				<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_2_2') {?> active<?php }?>">
					<a class="nav-link" href="#fieldset_2_2" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Compare','mod'=>'leofeature'),$_smarty_tpl ) );?>
</a>
				</li>
				<li class="nav-item<?php if ($_smarty_tpl->tpl_vars['default_tab']->value == '#fieldset_3_3') {?> active<?php }?>">
					<a class="nav-link" href="#fieldset_3_3" role="tab" data-toggle="tab"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Wishlist','mod'=>'leofeature'),$_smarty_tpl ) );?>
</a>
				</li>
				
			</ul>
			<div class="tab-content">
				<?php echo $_smarty_tpl->tpl_vars['globalform']->value;?>
			</div>
		</div>	

	</div>
		
</div><?php }
}
