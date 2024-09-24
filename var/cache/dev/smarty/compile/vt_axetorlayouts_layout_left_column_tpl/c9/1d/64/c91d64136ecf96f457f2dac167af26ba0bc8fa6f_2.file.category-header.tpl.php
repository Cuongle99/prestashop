<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:44:27
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\themes\vt_axetor\templates\catalog\_partials\category-header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac88bd25ee5_94556948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c91d64136ecf96f457f2dac167af26ba0bc8fa6f' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\themes\\vt_axetor\\templates\\catalog\\_partials\\category-header.tpl',
      1 => 1694501119,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac88bd25ee5_94556948 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="js-product-list-header">
    <?php if ($_smarty_tpl->tpl_vars['listing']->value['pagination']['items_shown_from'] == 1) {?>
        <div class="block-category card card-block">
            <h1 class="h1"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');?>
</h1>
            <div class="block-category-inner">
                <?php if ((isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config'])) && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['category_des'] != 1 && preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['category']->value['description'], $tmp) > $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['category_dleng']) {?>
                    <?php if ($_smarty_tpl->tpl_vars['profile_params']->value['c_config']['category_des'] == 2) {?>
                        <div id="category-description" class="readmore-wrap" class="text-muted">
                            <div class="less">
                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['description'],$_smarty_tpl->tpl_vars['profile_params']->value['c_config']['category_dleng'],'...' )),'html','UTF-8' ));?>

                            </div>
                            <div class="more">
                                <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['category']->value['description'],'html','UTF-8' ));?>

                            </div>
                             <a class="readmore"  href="javascript:void(0)" data-more="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read More','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
" data-less="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read Less','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read More','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                        </div>
                    <?php }?>    
                <?php } else { ?>
                <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
                    <div id="category-description" class="text-muted"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
                <?php }?>
                <?php }?>

                <?php if (((isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config'])) && $_smarty_tpl->tpl_vars['profile_params']->value['c_config']['category_image'] == 1) || !(isset($_smarty_tpl->tpl_vars['profile_params']->value['c_config']))) {?>
                <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['large']['url'])) {?>
                    <div class="category-cover">
                        <picture>
                            <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['large']['sources']['avif'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['large']['sources']['avif'], ENT_QUOTES, 'UTF-8');?>
" type="image/avif"><?php }?>
                            <?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['large']['sources']['webp'])) {?><source srcset="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['large']['sources']['webp'], ENT_QUOTES, 'UTF-8');?>
" type="image/webp"><?php }?>
                            <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['large']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>" loading="lazy" width="141" height="180">
                        </picture>
                    </div>
                <?php }?>
                <?php }?>
            </div>
        </div>
    <?php }?>
</div>
<?php }
}
