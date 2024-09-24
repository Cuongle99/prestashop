<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:15
  from 'module:leoelementsviewstemplatesfrontLeoSlideshow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac843d63295_45115906',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eeb3d59bd6509178f98a95844382ed033ee4a16d' => 
    array (
      0 => 'module:leoelementsviewstemplatesfrontLeoSlideshow.tpl',
      1 => 1676345970,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac843d63295_45115906 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/modules//leoelements/views/templates/front/LeoSlideshow.tpl --><?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>
    <div id="slideshow-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="LeoSlideshow">
	<?php if ((isset($_smarty_tpl->tpl_vars['content_slider']->value))) {?>
		<?php echo $_smarty_tpl->tpl_vars['content_slider']->value;?>
	<?php }?>
    </div>
<?php }?><!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/modules//leoelements/views/templates/front/LeoSlideshow.tpl --><?php }
}
