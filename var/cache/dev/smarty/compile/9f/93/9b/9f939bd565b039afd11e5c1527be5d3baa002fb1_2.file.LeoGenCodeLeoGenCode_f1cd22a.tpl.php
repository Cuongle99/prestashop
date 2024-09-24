<?php
/* Smarty version 4.3.4, created on 2024-09-17 23:26:37
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\modules\leoelements\views\templates\front\LeoGenCodeLeoGenCode_f1cd22a.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ea486d0ed257_78955507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f939bd565b039afd11e5c1527be5d3baa002fb1' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\modules\\leoelements\\views\\templates\\front\\LeoGenCodeLeoGenCode_f1cd22a.tpl',
      1 => 1726629997,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ea486d0ed257_78955507 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header_logo">
<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">            
<img class="logo img-fluid" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'logo','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">          </a>
</div><?php }
}
