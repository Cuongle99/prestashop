<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:44:01
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\themes\vt_axetor\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac8719644a2_32860740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af5ba6cd4d015607995deb2de4c6e822ebe6ce80' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\themes\\vt_axetor\\templates\\_partials\\header.tpl',
      1 => 1694501119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac8719644a2_32860740 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_173308910166bac8719531e3_31521664', 'header_banner');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169396316166bac87195a029_74144624', 'header_nav');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_45096784066bac871960a88_37021416', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_173308910166bac8719531e3_31521664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_173308910166bac8719531e3_31521664',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner'] == 0) {?>
      <div class="container">
    <?php }?>
        <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>
</div>
    <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayBanner'] == 0) {?>
      </div>
    <?php }?>
  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_169396316166bac87195a029_74144624 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_169396316166bac87195a029_74144624',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
    <div class="topnav">
      <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'] == 0) {?>
      <div class="container">
      <?php }?>
        <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>
</div>
      <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav1'] == 0) {?>
      </div>
      <?php }?>
    </div>
    <div class="bottomnav">
      <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'] == 0) {?>
        <div class="container">
      <?php }?>
        <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>
</div>
      <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayNav2'] == 0) {?>
        </div>
      <?php }?>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_45096784066bac871960a88_37021416 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_45096784066bac871960a88_37021416',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'] == 0) {?>
          <div class="container">
        <?php }?>
      <div class="inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>
</div>
        <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayTop'] == 0) {?>
          </div>
        <?php }?>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
