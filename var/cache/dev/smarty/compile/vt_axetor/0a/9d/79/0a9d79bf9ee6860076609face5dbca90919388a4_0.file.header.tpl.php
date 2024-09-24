<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:42:45
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\modules\ps_facetedsearch\views\templates\admin\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac825595926_19615911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a9d79bf9ee6860076609face5dbca90919388a4' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\modules\\ps_facetedsearch\\views\\templates\\admin\\_partials\\header.tpl',
      1 => 1708380524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac825595926_19615911 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
  <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Template name:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
  <div class="col-lg-9">
    <input type="text" id="layered_tpl_name" name="layered_tpl_name" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['template_name']->value;?>
" />
    <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Only as a reminder','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</p>
  </div>
</div>
<?php }
}
