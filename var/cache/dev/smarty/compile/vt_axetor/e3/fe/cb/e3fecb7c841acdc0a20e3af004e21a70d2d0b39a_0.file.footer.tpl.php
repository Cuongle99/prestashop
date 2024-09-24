<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:42:45
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\modules\ps_facetedsearch\views\templates\admin\_partials\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac825ba5753_55325032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e3fecb7c841acdc0a20e3af004e21a70d2d0b39a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\modules\\ps_facetedsearch\\views\\templates\\admin\\_partials\\footer.tpl',
      1 => 1708380524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac825ba5753_55325032 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="panel-footer" id="toolbar-footer">
  <button class="btn btn-default pull-right" id="submit-filter" name="SubmitFilter" type="submit"><i class="process-icon-save"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</span></button>
  <a class="btn btn-default" href="<?php echo $_smarty_tpl->tpl_vars['current_url']->value;?>
">
    <i class="process-icon-cancel"></i> <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl ) );?>
</span>
  </a>
</div>

<?php echo '<script'; ?>
 type="text/javascript">
  var translations = new Array();
  <?php if ((isset($_smarty_tpl->tpl_vars['filters']->value))) {?>var filters = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['filters']->value ));?>
';<?php }?>
  translations['no_selected_categories'] = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must select at least one category','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
";
  translations['no_selected_controllers'] = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must select at least one page','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
";
  translations['no_selected_filters'] = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You must select at least one filter','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
";
<?php echo '</script'; ?>
>
<?php }
}
