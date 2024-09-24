<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:42:45
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\modules\ps_facetedsearch\views\templates\admin\_partials\controllers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac8256e3695_21345626',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '52760469080b33263c39d881ad9c0b16d36f90d5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\modules\\ps_facetedsearch\\views\\templates\\admin\\_partials\\controllers.tpl',
      1 => 1708380524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac8256e3695_21345626 (Smarty_Internal_Template $_smarty_tpl) {
?> <div class="form-group">
 <label class="control-label col-lg-3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pages using this template:','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</label>
 <div class="col-lg-9">
   <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['controller_options']->value, 'data', false, 'controller');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['controller']->value => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?>
     <div class="checkbox">
       <label for="fs_controller_<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
"><input id="fs_controller_<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
" type="checkbox" name="controllers[]" value="<?php echo $_smarty_tpl->tpl_vars['controller']->value;?>
"
       <?php if ((isset($_smarty_tpl->tpl_vars['data']->value['checked'])) && $_smarty_tpl->tpl_vars['data']->value['checked'] == true) {?> checked <?php }?>><?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
</label>
     </div>
   <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
 </div>
</div>
<?php }
}
