<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:42:44
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\modules\ps_facetedsearch\views\templates\admin\_partials\messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac824ba8365_44324646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '937a3a455406ae3d964ba51b07d5147f638b4b8e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\modules\\ps_facetedsearch\\views\\templates\\admin\\_partials\\messages.tpl',
      1 => 1708380524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac824ba8365_44324646 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['message']->value))) {
echo $_smarty_tpl->tpl_vars['message']->value;
}?>

<div id="ajax-message-ok" class="conf ajax-message alert alert-success" style="display: none">
	<span class="message"></span>
</div>
<div id="ajax-message-ko" class="error ajax-message alert alert-danger" style="display: none">
	<span class="message"></span>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['limit_warning']->value)) {?>
	<div class="alert alert-danger">
		<?php if ($_smarty_tpl->tpl_vars['limit_warning']->value['error_type'] == 'suhosin') {?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning! Your hosting provider is using the Suhosin patch for PHP, which limits the maximum number of fields allowed in a form:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>


			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['post.max_vars'];?>
</b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'for suhosin.post.max_vars.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
<br/>
			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['request.max_vars'];?>
</b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'for suhosin.request.max_vars.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
<br/>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please ask your hosting provider to increase the Suhosin limit to','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

		<?php } else { ?>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Warning! Your PHP configuration limits the maximum number of fields allowed in a form:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
<br/>
			<b><?php echo $_smarty_tpl->tpl_vars['limit_warning']->value['max_input_vars'];?>
</b> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'for max_input_vars.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
<br/>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please ask your hosting provider to increase this limit to','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

		<?php }?>
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%s at least, or you will have to edit the translation files manually.','sprintf'=>$_smarty_tpl->tpl_vars['limit_warning']->value['needed_limit'],'d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

	</div>
<?php }
}
}
