<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:44:02
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\themes\vt_axetor\templates\_partials\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac8728e6b31_26986022',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa3eec4c43f375de9275f9776991124ac27eb4d5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\themes\\vt_axetor\\templates\\_partials\\breadcrumb.tpl',
      1 => 1694501120,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac8728e6b31_26986022 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['leobcimg'])) && ($_smarty_tpl->tpl_vars['profile_params']->value['leobcimg'] || $_smarty_tpl->tpl_vars['profile_params']->value['breadcrumb']['bgcolor'])) {?>
  <div data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb-bg <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_params']->value['breadcrumb']['textposition'], ENT_QUOTES, 'UTF-8');?>
 <?php if ($_smarty_tpl->tpl_vars['profile_params']->value['breadcrumb']['bgfull']) {?>breadcrumb-full<?php }?>" style="<?php if ($_smarty_tpl->tpl_vars['profile_params']->value['breadcrumb']['bgcolor']) {?> background-color:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_params']->value['breadcrumb']['bgcolor'], ENT_QUOTES, 'UTF-8');?>
;<?php }
if ($_smarty_tpl->tpl_vars['profile_params']->value['breadcrumb']['use_background']) {?>background-image: url(<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'category' && $_smarty_tpl->tpl_vars['profile_params']->value['breadcrumb']['category'] == 'catimg' && (isset($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'])) && $_smarty_tpl->tpl_vars['category']->value['image']['large']['url'] != '') {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');
} elseif ($_smarty_tpl->tpl_vars['profile_params']->value['leobcimg']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_params']->value['leobcimg'], ENT_QUOTES, 'UTF-8');
}?>);<?php }
if ($_smarty_tpl->tpl_vars['profile_params']->value['breadcrumb']['height']) {?> min-height:<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['profile_params']->value['breadcrumb']['height'], ENT_QUOTES, 'UTF-8');?>
;<?php }?> ">
    <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['breadcrumb']['bgfull'])) && $_smarty_tpl->tpl_vars['profile_params']->value['breadcrumb']['bgfull']) {?>
    <div class="container">
    <?php }?>
    <nav data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
    <ol>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200376156366bac8728db9c2_32200198', 'breadcrumb');
?>

      </ol>
    </nav>
    <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['breadcrumb']['bgfull'])) && $_smarty_tpl->tpl_vars['profile_params']->value['breadcrumb']['bgfull']) {?>
    </div>
    <?php }?>
  </div>
<?php } else { ?>
  <nav data-depth="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['breadcrumb']->value['count'], ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
    <ol>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134225299766bac8728e24f7_89410886', 'breadcrumb');
?>

    </ol>
  </nav>
<?php }
}
/* {block 'breadcrumb_item'} */
class Block_172590257366bac8728dd252_46939656 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <li>
              <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?>
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span></a>
              <?php } else { ?>
                <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
              <?php }?>
              </li>
            <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_200376156366bac8728db9c2_32200198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_200376156366bac8728db9c2_32200198',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_172590257366bac8728dd252_46939656',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['total'];
?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_172590257366bac8728dd252_46939656', 'breadcrumb_item', $this->tplIndex);
?>

          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
}
/* {/block 'breadcrumb'} */
/* {block 'breadcrumb_item'} */
class Block_53449721766bac8728e3664_90257676 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <li>
              <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?>
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span></a>
              <?php } else { ?>
                <span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span>
              <?php }?>
            </li>
          <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_134225299766bac8728e24f7_89410886 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_134225299766bac8728e24f7_89410886',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_53449721766bac8728e3664_90257676',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['total'];
?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53449721766bac8728e3664_90257676', 'breadcrumb_item', $this->tplIndex);
?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
/* {/block 'breadcrumb'} */
}
