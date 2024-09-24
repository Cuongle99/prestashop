<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:20
  from 'module:leoelementsviewstemplatesfrontLeoManufacturersCarouselSlick.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac84833b3e3_31400763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ed0a5e3436591068e6a2bb53fa2ce48d06e1fc7' => 
    array (
      0 => 'module:leoelementsviewstemplatesfrontLeoManufacturersCarouselSlick.tpl',
      1 => 1676345970,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac84833b3e3_31400763 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/modules//leoelements/views/templates/front/LeoManufacturersCarouselSlick.tpl --><?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>
    <?php if (!empty($_smarty_tpl->tpl_vars['manufacturers']->value)) {?>
		<div class="slick-row">
			<div class="slick-manufacturers slick-slider slick-loading" id="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['manufacturers']->value, 'manu', false, NULL, 'mypLoop', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['manu']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['manu']->value) {
$_smarty_tpl->tpl_vars['manu']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']++;
?>
                            <div class="slick-slide <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index'] : null) == 0) {?> first<?php }?>">
                                <div class="item">
                                        <div class="manufacturer-container manufacturer-block">
		    				<div class="left-block">
		    					<div class="manufacturer-image-container image">
                                                            <a title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manu']->value['name'], ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manu']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manu']->value['link_rewrite']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" ><p class="name-manufacturer"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['manu']->value['name'], ENT_QUOTES, 'UTF-8');?>
</p>
                                                                <img class="img-fluid" 
                                                                    src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['img_manu_dir']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['manu']->value['id_manufacturer'] )), ENT_QUOTES, 'UTF-8');?>
-<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['imagetype'], ENT_QUOTES, 'UTF-8');?>
.jpg"
                                                                    alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['manu']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
                                                            </a>
		    					</div>
		    				</div>
		    			</div>
		    		</div>
                            </div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			</div>
		</div>
                        
                        
                  
                        
                        
                        
<?php echo '<script'; ?>
 type="text/javascript" class="autojs" data-form_id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8');?>
">
    var <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8');?>
 = (function(){
	$('#<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').imagesLoaded( function() {
		$('#<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').slick(
			<?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_custom_status']) {?>
				<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slick_custom'], ENT_QUOTES, 'UTF-8');?>

			<?php } else { ?>
			{
				centerMode: <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_centermode'])) && $_smarty_tpl->tpl_vars['formAtts']->value['slick_centermode']) {?>true<?php } else { ?>false<?php }?>,
				centerPadding: '<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding'])) && $_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slick_centerpadding'], ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>px',
				dots: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_dot']) {?>true<?php } else { ?>false<?php }?>,
				infinite: <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['infinite'])) && $_smarty_tpl->tpl_vars['formAtts']->value['infinite']) {?>true<?php } else { ?>false<?php }?>,
				vertical: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_vertical']) {?>true<?php } else { ?>false<?php }?>,
				verticalSwiping : <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_vertical']) {?>true<?php } else { ?>false<?php }?>,
				autoplay: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['autoplay']) {?>true<?php } else { ?>false<?php }?>,
				pauseonhover: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['pause_on_hover']) {?>true<?php } else { ?>false<?php }?>,
				autoplaySpeed: <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['autoplay_speed'])) && $_smarty_tpl->tpl_vars['formAtts']->value['autoplay_speed']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['autoplay_speed'], ENT_QUOTES, 'UTF-8');
} else { ?>5000<?php }?>,
                                speed: <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['speed'])) && $_smarty_tpl->tpl_vars['formAtts']->value['speed']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['speed'], ENT_QUOTES, 'UTF-8');
} else { ?>500<?php }?>,
				arrows: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_arrows']) {?>true<?php } else { ?>false<?php }?>,
				rows: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['per_col'], ENT_QUOTES, 'UTF-8');?>
,
				slidesToShow: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slides_to_show'], ENT_QUOTES, 'UTF-8');?>
,
				slidesToScroll: <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['slick_dot']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slides_to_show'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slides_to_show'], ENT_QUOTES, 'UTF-8');
}?>,
				rtl: <?php if ((isset($_smarty_tpl->tpl_vars['IS_RTL']->value)) && $_smarty_tpl->tpl_vars['IS_RTL']->value) {?>true<?php } else { ?>false<?php }?>,
                                responsive: [{
                                    breakpoint: 1025,
                                    settings: {
                                        slidesToShow: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slides_to_show_tablet'], ENT_QUOTES, 'UTF-8');?>
,
                                        slidesToScroll: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slides_to_scroll_tablet'], ENT_QUOTES, 'UTF-8');?>

                                    }
                                }, {
                                    breakpoint: 768,
                                    settings: {
                                        slidesToShow: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slides_to_show_mobile'], ENT_QUOTES, 'UTF-8');?>
,
                                        slidesToScroll: <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slides_to_scroll_mobile'], ENT_QUOTES, 'UTF-8');?>

                                    }
                                }]
			}
			<?php }?>
		);
		$('#<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
').removeClass('slick-loading').addClass('slick-loaded').parents('.slick-row').addClass('hide-loading');
	});
    });
    
<?php echo '</script'; ?>
>




    <?php } else { ?>
        <p class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No manufacturer at this time.','mod'=>'leoelements'),$_smarty_tpl ) );?>
</p>
    <?php }
}?>
<!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/modules//leoelements/views/templates/front/LeoManufacturersCarouselSlick.tpl --><?php }
}
