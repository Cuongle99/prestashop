<?php
/* Smarty version 4.3.4, created on 2024-09-17 23:26:38
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\modules\leoelements\views\templates\front\LeoGenCodeLeoGenCode_5ab820f.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ea486e11f962_70186374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3c2c816da30ea518f9e56e16d1c057c0b2d1cf3' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\modules\\leoelements\\views\\templates\\front\\LeoGenCodeLeoGenCode_5ab820f.tpl',
      1 => 1726629998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ea486e11f962_70186374 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">            
<img class="logo img-fluid" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
 <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'logo','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">          </a>
</div><?php }
}
