<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:26
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\modules\leobootstrapmenu\views\templates\hook\widgets\widget_html.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac84e073836_71926960',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc1cbccd1fc1a533713e1abf2ef0608685232027' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\modules\\leobootstrapmenu\\views\\templates\\hook\\widgets\\widget_html.tpl',
      1 => 1690855548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac84e073836_71926960 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="leo-widget" data-id_widget="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['id_widget']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php if ((isset($_smarty_tpl->tpl_vars['html']->value))) {?>
        <div class="widget-html">
            <?php if ((isset($_smarty_tpl->tpl_vars['widget_heading']->value)) && !empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
            <div class="menu-title">
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['widget_heading']->value, ENT_QUOTES, 'UTF-8');?>

            </div>
            <?php }?>
            <div class="widget-inner">
                    <?php echo $_smarty_tpl->tpl_vars['html']->value;?>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['show_widget_bo']->value == 'admin') {?>
        <div class="w-name">
            <select name="inject_widget" class="inject_widget_name">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['widgets']->value, 'w');
$_smarty_tpl->tpl_vars['w']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['w']->value) {
$_smarty_tpl->tpl_vars['w']->do_else = false;
?>
                    <option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['w']->value['key_widget'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['w']->value['name'], ENT_QUOTES, 'UTF-8');?>

                    </option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
    <?php }?>
</div><?php }
}
