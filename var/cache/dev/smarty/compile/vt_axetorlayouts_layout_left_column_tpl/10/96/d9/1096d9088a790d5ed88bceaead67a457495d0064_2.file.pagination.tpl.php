<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:44:06
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\themes\vt_axetor\templates\_partials\pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac87662d0c0_79255950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1096d9088a790d5ed88bceaead67a457495d0064' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\themes\\vt_axetor\\templates\\_partials\\pagination.tpl',
      1 => 1708937914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac87662d0c0_79255950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav class="pagination<?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']))) {
if ($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['pg_type'] == 2) {?> scroll<?php } elseif ($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['pg_type'] == 3) {?> loadmore<?php }
}?>" data-total="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['pagination']->value['total_items'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if (((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['pg_count'] == 1) || !(isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']))) {?>
  <div id="pagination_summary" class="col-md-4<?php if ($_smarty_tpl->tpl_vars['pagination']->value['total_items'] == $_smarty_tpl->tpl_vars['pagination']->value['items_shown_to']) {?> done<?php }?>">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_86965420166bac8765aa548_80035098', 'pagination_summary');
?>

  </div>
  <?php }?>
  <?php if (((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['pg_type'] == 1) || !(isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config']))) {?>
  <div class="col-md-6 offset-md-2 pr-0">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178415477366bac8765e0d48_85223757', 'pagination_page_list');
?>

  </div>
  <?php }?>
  <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['pg_type'] == 3) {?>
  <div class="col-md-12 offset-md-2 pr-0">
      <a class="btn btn-primary btn-leloadmorep">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Load More Products','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
<i class="material-icons">&#xE315;</i>
      </a>
  </div>
  <?php }?>

</nav>
<?php }
/* {block 'pagination_summary'} */
class Block_86965420166bac8765aa548_80035098 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_summary' => 
  array (
    0 => 'Block_86965420166bac8765aa548_80035098',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['pl_config'])) && $_smarty_tpl->tpl_vars['profile_params']->value['pl_config']['pg_type'] != 1) {?>
      <?php $_smarty_tpl->_assignInScope('items_shown_from', 1);?>
      <?php } else { ?>
      <?php $_smarty_tpl->_assignInScope('items_shown_from', $_smarty_tpl->tpl_vars['pagination']->value['items_shown_from']);?>
      <?php }?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Showing %from%-%to% of %total% item(s)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%from%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_from'],'%to%'=>$_smarty_tpl->tpl_vars['pagination']->value['items_shown_to'],'%total%'=>$_smarty_tpl->tpl_vars['pagination']->value['total_items'])),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'pagination_summary'} */
/* {block 'pagination_page_list'} */
class Block_178415477366bac8765e0d48_85223757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_page_list' => 
  array (
    0 => 'Block_178415477366bac8765e0d48_85223757',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

     <?php if ($_smarty_tpl->tpl_vars['pagination']->value['should_be_displayed']) {?>
        <ul class="page-list clearfix text-sm-right">
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['pages'], 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>


            <li <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> class="current" <?php }?>>
              <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?>
                <span class="spacer">&hellip;</span>
              <?php } else { ?>
                <a
                  rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next<?php } else { ?>nofollow<?php }?>"
                  href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                  class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next <?php }
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
                >
                  <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>
                    <i class="material-icons">&#xE314;</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Previous','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                  <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
<i class="material-icons">&#xE315;</i>
                  <?php } else { ?>
                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

                  <?php }?>
                </a>
              <?php }?>
            </li>
          <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
      <?php }?>
    <?php
}
}
/* {/block 'pagination_page_list'} */
}
