<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:23
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\themes\vt_axetor\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac84ba1f7c1_13929199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec1b8d802bc0432769965457a678d9d8a6d27db0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\themes\\vt_axetor\\templates\\_partials\\helpers.tpl',
      1 => 1694501119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac84ba1f7c1_13929199 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\var\\cache\\dev\\smarty\\compile\\vt_axetorlayouts_layout_full_width_tpl\\ec\\1b\\8d\\ec1b8d802bc0432769965457a678d9d8a6d27db0_2.file.helpers.tpl.php',
    'uid' => 'ec1b8d802bc0432769965457a678d9d8a6d27db0',
    'call_name' => 'smarty_template_function_renderLogo_194247397066bac84b9e5618_59331409',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_194247397066bac84b9e5618_59331409 */
if (!function_exists('smarty_template_function_renderLogo_194247397066bac84b9e5618_59331409')) {
function smarty_template_function_renderLogo_194247397066bac84b9e5618_59331409(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      loading="lazy"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_194247397066bac84b9e5618_59331409 */
}
