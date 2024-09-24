<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:19
  from 'module:leoelementsviewstemplatesfrontLeoProductCarousel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac847070d17_86681104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'feacb51d972a5d8b1a74d4a2540dd89ee28bd2a6' => 
    array (
      0 => 'module:leoelementsviewstemplatesfrontLeoProductCarousel.tpl',
      1 => 1676345970,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac847070d17_86681104 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/modules//leoelements/views/templates/front/LeoProductCarousel.tpl --><?php if ((isset($_smarty_tpl->tpl_vars['leo_products']->value)) && $_smarty_tpl->tpl_vars['leo_products']->value && smarty_modifier_count($_smarty_tpl->tpl_vars['leo_products']->value) > 0) {?>
    
    
    
	<?php $_smarty_tpl->_assignInScope('i', 0);?>
    	<?php if ((isset($_smarty_tpl->tpl_vars['settings']->value['per_col'])) && $_smarty_tpl->tpl_vars['settings']->value['per_col']) {?>
		<?php $_smarty_tpl->_assignInScope('y', $_smarty_tpl->tpl_vars['settings']->value['per_col']);?>
	<?php } else { ?>
		<?php $_smarty_tpl->_assignInScope('y', 1);?>
	<?php }?>
	
	
	
	
            <?php if ((isset($_smarty_tpl->tpl_vars['settings']->value)) && (isset($_smarty_tpl->tpl_vars['settings']->value['view_type'])) && $_smarty_tpl->tpl_vars['settings']->value['view_type'] == 'carousel') {?>
		<div class="elementor-LeoProductCarousel-wrapper elementor-slick-slider <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['pl_class'], ENT_QUOTES, 'UTF-8');?>
">
            <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['title']) {?>
            <h4 class="title_block"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h4>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
                <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
            <?php }?>
            
	    <div class="elementor-LeoProductCarousel ApSlick products slick-arrows-inside slick-dots-outside" >
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leo_products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value % $_smarty_tpl->tpl_vars['y']->value == 0) {?>
		<div class="slick-slide item">
		<?php }?>
		    <?php $_smarty_tpl->_assignInScope('i', $_smarty_tpl->tpl_vars['i']->value+1);?>
		    		    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['theme_template_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
		<?php if ($_smarty_tpl->tpl_vars['i']->value % $_smarty_tpl->tpl_vars['y']->value == 0 || $_smarty_tpl->tpl_vars['i']->value == count($_smarty_tpl->tpl_vars['leo_products']->value)) {?>
		</div>
		<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	    </div>
	</div>
	    

    <?php } else { ?>
		<div class="elementor-LeoProductCarousel-wrapper <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['pl_class'], ENT_QUOTES, 'UTF-8');?>
">
	    <div class="elementor-LeoProductCarousel grid products" >
		
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leo_products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
		    <div class="swiper-slide item">
		  <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['theme_template_path']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
		  </div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	    </div>
	</div>
	    
    <style>
    .elementor-LeoProductCarousel.grid {
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    height: auto;
    width: auto;
    display: -webkit-box;
    }
    </style>
	    	    <?php }?>
	
    

    

<?php }?><!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/modules//leoelements/views/templates/front/LeoProductCarousel.tpl --><?php }
}
