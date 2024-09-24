<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:28
  from 'module:leoelementsviewstemplatesfrontLeoBlockLink.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac850d74c42_00222820',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a51a429be33f0670945229b47bffc59c56768851' => 
    array (
      0 => 'module:leoelementsviewstemplatesfrontLeoBlockLink.tpl',
      1 => 1676345970,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac850d74c42_00222820 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/modules//leoelements/views/templates/front/LeoBlockLink.tpl --><div class="LeoBlockLink">
	<div class="linklist-toggle h6" data-toggle="linklist-widget">
		<?php if ($_smarty_tpl->tpl_vars['settings']->value['link']['url']) {?>
		    <a 
			href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['link']['url'], ENT_QUOTES, 'UTF-8');?>
"
			<?php if ($_smarty_tpl->tpl_vars['settings']->value['link']['is_external']) {?> target="_blank"<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['settings']->value['link']['nofollow']) {?> rel="nofollow"<?php }?>
		    >
			<div class="title_block"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['title'], ENT_QUOTES, 'UTF-8');?>
</div>
			<span class="icon-toggle fa fa-angle-down"></span>
		    </a>
                        
                        
			
		<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['settings']->value['show_title']) {?>
			<div class="title_block"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['settings']->value['title'], ENT_QUOTES, 'UTF-8');?>
</div>
			<?php }?>
			<span class="icon-toggle fa fa-angle-down"></span>
                        
		<?php }?>
	</div>
        
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
        <div class="sub-title-widget"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'], ENT_QUOTES, 'UTF-8');?>
</div>
        <?php }?>
                        
                        
	<div class="linklist-menu">
            <?php if ((isset($_smarty_tpl->tpl_vars['items']->value)) && $_smarty_tpl->tpl_vars['items']->value) {?>
                <ul class="list-items <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['type'])) && $_smarty_tpl->tpl_vars['formAtts']->value['type']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['type'], ENT_QUOTES, 'UTF-8');
}?>">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['items']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['item_link']['url']) {?>
                            <li class="list-item <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['type'])) && $_smarty_tpl->tpl_vars['formAtts']->value['type']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['type'], ENT_QUOTES, 'UTF-8');
}?>">
                                <a class='item-text' href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['item_link']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['item_link']['is_external']) {?> target="_blank"<?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['item_link']['nofollow']) {?> rel="nofollow"<?php }?>
                                    <?php if ($_smarty_tpl->tpl_vars['item']->value['item_link']['nofollow']) {?> rel="nofollow"<?php }?>>
                                    <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['item_title'], ENT_QUOTES, 'UTF-8');?>

                                </a>
                            </li>
                    <?php } else { ?>
                            <li class="list-item">
                                <span class='item-text'><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['item']->value['item_title'], ENT_QUOTES, 'UTF-8');?>
</span>
                            </li>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            <?php }?>
	</div>
</div>
<!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/modules//leoelements/views/templates/front/LeoBlockLink.tpl --><?php }
}
