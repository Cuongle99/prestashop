<?php
/* Smarty version 4.3.4, created on 2024-08-26 05:22:18
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\themes\vt_axetor\templates\layouts\layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66cc494a78f0d3_35449330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'efa0c7e6cc0825e91a163b700935911271b8f108' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\themes\\vt_axetor\\templates\\layouts\\layout-both-columns.tpl',
      1 => 1724291835,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/helpers.tpl' => 1,
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'module:leoelements/views/templates/front/info/paneltool.tpl' => 1,
    'file:_partials/password-policy-template.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_66cc494a78f0d3_35449330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:_partials/helpers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<!doctype html>
<html lang="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['language']->value['locale'], ENT_QUOTES, 'UTF-8');?>
" <?php if ((isset($_smarty_tpl->tpl_vars['IS_RTL']->value)) && $_smarty_tpl->tpl_vars['IS_RTL']->value) {?> dir="rtl"<?php if ((isset($_smarty_tpl->tpl_vars['LEO_RTL']->value)) && $_smarty_tpl->tpl_vars['LEO_RTL']->value) {?> class="rtl<?php if ((isset($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value))) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value, ENT_QUOTES, 'UTF-8');
}?>"<?php }
} else { ?> class="<?php if ((isset($_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['LEO_DEFAULT_SKIN']->value, ENT_QUOTES, 'UTF-8');
}?>" <?php }?>>

  <head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_123593905666cc494a655dd2_88271086', 'head');
?>

  </head>

  <body id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');
if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['layout_mode']))) {?> <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_params']->value['layout_mode'], ENT_QUOTES, 'UTF-8');
}
if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['header_sticky'])) && $_smarty_tpl->tpl_vars['profile_params']->value['header_sticky']) {?> keep-header<?php }
if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['footer_fixed'])) && $_smarty_tpl->tpl_vars['profile_params']->value['footer_fixed']) {?> keep-footer<?php }?>">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_111181657166cc494a6a2499_76937774', 'hook_after_body_opening_tag');
?>


    <main id="page">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_159358600866cc494a6ee348_87858563', 'product_activation');
?>


      <header id="header">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_48462974566cc494a6ef254_64868198', 'header');
?>

      </header>

      <section id="wrapper">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180213008566cc494a6eff14_34220346', 'notifications');
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

      <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayHome'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayHome'] == 0) {?>
        <div class="container">
      <?php }?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39272323866cc494a7791a9_23677866', 'breadcrumb');
?>


          <div class="row">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120567300466cc494a77a121_77371880', "left_column");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105637499866cc494a781207_30427799', "content_wrapper");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4000349766cc494a7833d4_06489635', "right_column");
?>

          </div>
      <?php if ((isset($_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayHome'])) && $_smarty_tpl->tpl_vars['fullwidth_hook']->value['displayHome'] == 0) {?>
        </div>
      <?php }?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

      </section>

      <footer id="footer" class="footer-container js-footer<?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['footer_clinks'])) && $_smarty_tpl->tpl_vars['profile_params']->value['footer_clinks']) {?> close-link<?php }?>">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125546377266cc494a78a2d8_73807536', "footer");
?>

      </footer>
      <?php if ((isset($_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value)) && $_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value) {?>
          <?php $_smarty_tpl->_subTemplateRender("module:leoelements/views/templates/front/info/paneltool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php }?>

      <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['backtop'])) && $_smarty_tpl->tpl_vars['profile_params']->value['backtop']) {?>
          <div id="back-top"><a href="#" class="fa fa-angle-double-up"></a></div>
      <?php }?>
    </main>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139464223366cc494a78cac3_72743339', 'javascript_bottom');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_166129874266cc494a78e137_19615973', 'hook_before_body_closing_tag');
?>

  </body>

</html>
<?php }
/* {block 'head'} */
class Block_123593905666cc494a655dd2_88271086 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_123593905666cc494a655dd2_88271086',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_111181657166cc494a6a2499_76937774 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_111181657166cc494a6a2499_76937774',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_159358600866cc494a6ee348_87858563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_159358600866cc494a6ee348_87858563',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_48462974566cc494a6ef254_64868198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_48462974566cc494a6ef254_64868198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_180213008566cc494a6eff14_34220346 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_180213008566cc494a6eff14_34220346',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'notifications'} */
/* {block 'breadcrumb'} */
class Block_39272323866cc494a7791a9_23677866 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_39272323866cc494a7791a9_23677866',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
          <?php
}
}
/* {/block 'breadcrumb'} */
/* {block "left_column"} */
class Block_120567300466cc494a77a121_77371880 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_120567300466cc494a77a121_77371880',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="left-column" class="sidebar col-xs-12 col-sm-12 col-md-4 col-lg-3<?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config']['use_button_toggle'])) && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['use_button_toggle']) {
if ($_smarty_tpl->tpl_vars['profile_params']->value['c_config']['filter_position'] == 2) {?> hidden-md-up<?php } else { ?> filter-toggle<?php }
}?>">
                <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config']['use_button_toggle'])) && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['use_button_toggle'] && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['filter_position'] == 1 && (((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-left-column'])) && $_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-left-column']) || ((isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-full-width'])) && $_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-full-width']))) {?>
                  <button class="close">×</button>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayLeftColumnProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

                <?php }?>
              </div>
            <?php
}
}
/* {/block "left_column"} */
/* {block "content"} */
class Block_185371901566cc494a782313_66888243 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                  <p>Hello world! This is HTML5 Boilerplate.</p>
                <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_105637499866cc494a781207_30427799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_105637499866cc494a781207_30427799',
  ),
  'content' => 
  array (
    0 => 'Block_185371901566cc494a782313_66888243',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="content-wrapper" class="js-content-wrapper left-column right-column col-md-4 col-lg-3">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185371901566cc494a782313_66888243', "content", $this->tplIndex);
?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

              </div>
            <?php
}
}
/* {/block "content_wrapper"} */
/* {block "right_column"} */
class Block_4000349766cc494a7833d4_06489635 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_4000349766cc494a7833d4_06489635',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <div id="right-column" class="sidebar col-xs-12 col-sm-12 col-md-4 col-lg-3<?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config']['use_button_toggle'])) && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['use_button_toggle'] && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['filter_position'] == 1) {?> filter-toggle<?php }?>">
                <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config']['use_button_toggle'])) && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['use_button_toggle'] && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['filter_position'] == 1 && (isset($_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-right-column'])) && $_smarty_tpl->tpl_vars['page']->value['body_classes']['layout-right-column']) {?>
                  <button class="close">×</button>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'product') {?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>

                <?php } else { ?>
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

                <?php }?>
              </div>
            <?php
}
}
/* {/block "right_column"} */
/* {block "footer"} */
class Block_125546377266cc494a78a2d8_73807536 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_125546377266cc494a78a2d8_73807536',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_139464223366cc494a78cac3_72743339 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_139464223366cc494a78cac3_72743339',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php $_smarty_tpl->_subTemplateRender("file:_partials/password-policy-template.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
      <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
?>
    <?php
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_166129874266cc494a78e137_19615973 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_166129874266cc494a78e137_19615973',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
