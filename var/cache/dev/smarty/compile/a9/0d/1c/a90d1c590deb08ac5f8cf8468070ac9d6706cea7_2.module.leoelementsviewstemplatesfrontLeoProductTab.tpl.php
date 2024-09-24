<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:15
  from 'module:leoelementsviewstemplatesfrontLeoProductTab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac843f12cf7_89856800',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a90d1c590deb08ac5f8cf8468070ac9d6706cea7' => 
    array (
      0 => 'module:leoelementsviewstemplatesfrontLeoProductTab.tpl',
      1 => 1704337191,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac843f12cf7_89856800 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/modules//leoelements/views/templates/front/LeoProductTab.tpl --><div class="elementor-LeoProductTab" data-toggle=tabs-widget data-active-tab="1">
    <?php $_smarty_tpl->_assignInScope('_counter', 1);?>
    
    <div class="widget-tabs-wrapper">
	
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
	    <?php if ($_smarty_tpl->tpl_vars['_counter']->value < 2) {?>
		<?php $_smarty_tpl->_assignInScope('_active', 'active');?>
	    <?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('_active', '');?>
	    <?php }?>
	    
	    
	    
	    
	    <div class="widget-tab-title <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_active']->value, ENT_QUOTES, 'UTF-8');?>
" data-tab="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_counter']->value, ENT_QUOTES, 'UTF-8');?>
">
			<?php if ($_smarty_tpl->tpl_vars['item']->value['icon_type'] == 'icon') {?>
				<i class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['item_icon_title']['value'], ENT_QUOTES, 'UTF-8');?>
"></i>
			<?php } elseif ($_smarty_tpl->tpl_vars['item']->value['icon_type'] == 'image') {?>
				<img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['item_image_title']['url'], ENT_QUOTES, 'UTF-8');?>
">
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['item']->value['item_title']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['item_title'], ENT_QUOTES, 'UTF-8');
}?>
	    </div>
	    
	    <?php $_smarty_tpl->_assignInScope('_counter', $_smarty_tpl->tpl_vars['_counter']->value+1);?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    
    
    <div class="widget-tabs-content-wrapper">
	<?php $_smarty_tpl->_assignInScope('_counter', 1);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
	    <?php if ($_smarty_tpl->tpl_vars['_counter']->value < 2) {?>
		<?php $_smarty_tpl->_assignInScope('_active', 'active');?>
	    <?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('_active', '');?>
	    <?php }?>
	    <div class="widget-tab-content <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_active']->value, ENT_QUOTES, 'UTF-8');?>
" data-tab="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['_counter']->value, ENT_QUOTES, 'UTF-8');?>
">
		<?php echo $_smarty_tpl->tpl_vars['apwidget']->value->renderProduct($_smarty_tpl->tpl_vars['settings']->value,$_smarty_tpl->tpl_vars['item']->value);?>

	    </div>
	    
	    <?php $_smarty_tpl->_assignInScope('_counter', $_smarty_tpl->tpl_vars['_counter']->value+1);?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>
<!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/modules//leoelements/views/templates/front/LeoProductTab.tpl --><?php }
}
