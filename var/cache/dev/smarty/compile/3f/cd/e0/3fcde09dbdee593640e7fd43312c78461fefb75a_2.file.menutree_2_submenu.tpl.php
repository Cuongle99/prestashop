<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:26
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\modules\leobootstrapmenu\views\templates\hook\menutree_2_submenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac84ec9d599_46847578',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fcde09dbdee593640e7fd43312c78461fefb75a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\modules\\leobootstrapmenu\\views\\templates\\hook\\menutree_2_submenu.tpl',
      1 => 1690855548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac84ec9d599_46847578 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['colums']->value)) && $_smarty_tpl->tpl_vars['colums']->value > 1) {?>
    <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
 level<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attrw']->value, ENT_QUOTES, 'UTF-8');?>
 >
        <div class="dropdown-menu-inner">
            <div class="row">
                <div class="col-sm-12 mega-col" data-colwidth="12" data-type="menu" >
                    <div class="inner">
                        <div class="row">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
                                <ul class="col-md-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['cols']->value, ENT_QUOTES, 'UTF-8');?>
">
                                    <?php echo $_smarty_tpl->tpl_vars['mod_menu']->value->renderMenuContent($_smarty_tpl->tpl_vars['menu']->value,$_smarty_tpl->tpl_vars['level']->value+1,$_smarty_tpl->tpl_vars['typesub']->value,$_smarty_tpl->tpl_vars['group_type']->value);?>

                                </ul>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } else { ?>
    <div class="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
 level<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['level']->value, ENT_QUOTES, 'UTF-8');?>
" <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['attrw']->value, ENT_QUOTES, 'UTF-8');?>
 >
        <div class="dropdown-menu-inner">
            <div class="row">
                <div class="col-sm-12 mega-col" data-colwidth="12" data-type="menu" >
                    <div class="inner">
                        <ul>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value, 'menu');
$_smarty_tpl->tpl_vars['menu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->do_else = false;
?>
                                <?php echo $_smarty_tpl->tpl_vars['mod_menu']->value->renderMenuContent($_smarty_tpl->tpl_vars['menu']->value,$_smarty_tpl->tpl_vars['level']->value+1,$_smarty_tpl->tpl_vars['typesub']->value,$_smarty_tpl->tpl_vars['group_type']->value);?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }
}
}
