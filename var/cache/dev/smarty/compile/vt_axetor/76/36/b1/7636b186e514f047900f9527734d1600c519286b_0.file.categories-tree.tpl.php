<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:42:45
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\modules\ps_facetedsearch\views\templates\admin\_partials\categories-tree.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac82589ffb2_46417287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7636b186e514f047900f9527734d1600c519286b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\modules\\ps_facetedsearch\\views\\templates\\admin\\_partials\\categories-tree.tpl',
      1 => 1708380524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac82589ffb2_46417287 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group form-group-categories">
  <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories used for this template:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
  <div class="col-lg-9">
    <?php if (trim($_smarty_tpl->tpl_vars['categories_tree']->value) != '') {?>
      <?php echo $_smarty_tpl->tpl_vars['categories_tree']->value;?>

    <?php } else { ?>
      <div class="alert alert-warning">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories selection is disabled because you have no categories or you are in a "all shops" context.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>

      </div>
    <?php }?>
    <p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Effective only if category pages are selected above.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</p>
  </div>
</div>
<?php }
}
