<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:42:32
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\admincp\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac8182e0b96_70179763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b624fd2f086768c05fec16d64a0a74627a58fad3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\admincp\\themes\\new-theme\\template\\content.tpl',
      1 => 1708980256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac8182e0b96_70179763 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
