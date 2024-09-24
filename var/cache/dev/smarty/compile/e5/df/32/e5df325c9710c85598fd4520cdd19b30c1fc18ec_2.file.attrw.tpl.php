<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:26
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\modules\leobootstrapmenu\views\templates\hook\attrw.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac84eaec836_45471683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e5df325c9710c85598fd4520cdd19b30c1fc18ec' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\modules\\leobootstrapmenu\\views\\templates\\hook\\attrw.tpl',
      1 => 1690855548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac84eaec836_45471683 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['menu']->value['megaconfig']->subwidth)) && $_smarty_tpl->tpl_vars['menu']->value['megaconfig']->subwidth) {?>
    <?php if ($_smarty_tpl->tpl_vars['group_type']->value == 'horizontal') {?>
        style="width:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['megaconfig']->subwidth, ENT_QUOTES, 'UTF-8');?>
px;"
    <?php } else { ?>
        <?php if (((isset($_smarty_tpl->tpl_vars['typesub']->value)) && $_smarty_tpl->tpl_vars['typesub']->value == 'left')) {?>
            style="width:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['megaconfig']->subwidth, ENT_QUOTES, 'UTF-8');?>
px; left: -<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['megaconfig']->subwidth, ENT_QUOTES, 'UTF-8');?>
px;"
        <?php } else { ?>
            style="width:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['menu']->value['megaconfig']->subwidth, ENT_QUOTES, 'UTF-8');?>
px; left: 100%;"
        <?php }?>
    <?php }
}
}
}
