<?php
/* Smarty version 4.3.4, created on 2024-09-17 22:41:46
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\modules\leogallery\views\templates\hook\gallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ea3dea613503_55103206',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5ed9519070ca645871f84b3435848a3059b6b8d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\modules\\leogallery\\views\\templates\\hook\\gallery.tpl',
      1 => 1690855551,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./head.tpl' => 1,
  ),
),false)) {
function content_66ea3dea613503_55103206 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.replace.php','function'=>'smarty_modifier_replace',),));
?>

<?php $_smarty_tpl->_subTemplateRender("file:./head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('config'=>$_smarty_tpl->tpl_vars['config']->value,'quickview'=>$_smarty_tpl->tpl_vars['quickview']->value), 0, false);
?>
<style type="text/css">
    .lSAction > a{
        <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->control_bg) {?>
            background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->control_bg,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->control_color) {?>
            color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->control_color,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
        <?php }?>
    }
    .lSAction > a:hover{
        <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->control_hbg) {?>
            background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->control_hbg,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->control_hcolor) {?>
            color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->control_hcolor,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
        <?php }?>
    }
    .lSSlideOuter .lSPager.lSGallery li{
        border-width: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->thumb_border )), ENT_QUOTES, 'UTF-8');?>
px;
        <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->thumb_border_color) {?>
            border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->thumb_border_color,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
        border-style: solid;
    }
    .lSSlideOuter .lSPager.lSGallery li.active{
        border-width: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->active_thumb_border )), ENT_QUOTES, 'UTF-8');?>
px;
        <?php if ($_smarty_tpl->tpl_vars['sliderConfig']->value->active_thumb_border_color) {?>
            border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['sliderConfig']->value->active_thumb_border_color,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
;
        <?php }?>
        border-style: solid;
    }
</style>

<?php echo '<script'; ?>
>
    var $quickview = <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['quickview']->value, ENT_QUOTES, 'UTF-8');?>
;
    if (typeof leogallery === 'undefined'){
        window.addEventListener('load', function(){
            leogalleryUpdateImages();
        });
    }else{
        setTimeout(function(){
            leogalleryUpdateImages();
        }, $quickview ? 200 : 0);
    }
    function leogalleryUpdateImages() {
        leogallery.images = [];
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
$_smarty_tpl->tpl_vars['image']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->do_else = false;
?>
            <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['bySize']['_orig']['url'] = $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value->link_rewrite,$_smarty_tpl->tpl_vars['image']->value['id_image'],'');
$_smarty_tpl->_assignInScope('image', $_tmp_array);?>
            leogallery.images.push({
                original: '<?php echo $_smarty_tpl->tpl_vars['image']->value['bySize']['_orig']['url'];?>
',
                thumb: '<?php echo $_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['sliderConfig']->value->thumb_size]['url'];?>
',
                slider_img: '<?php echo $_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['sliderConfig']->value->img_size]['url'];?>
',
                <?php if ($_smarty_tpl->tpl_vars['isMobile']->value) {?>
                    gallery_img: '<?php echo $_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['config']->value->m_img_size]['url'];?>
',
                <?php } else { ?>
                    gallery_img: '<?php echo $_smarty_tpl->tpl_vars['image']->value['bySize'][$_smarty_tpl->tpl_vars['config']->value->img_size]['url'];?>
',
                <?php }?>
                title: "<?php echo htmlspecialchars((string) smarty_modifier_replace(smarty_modifier_replace(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['image']->value['legend'],'htmlall','UTF-8' )),"\r\n",''),"\n",''), ENT_QUOTES, 'UTF-8');?>
"
            });
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if ($_smarty_tpl->tpl_vars['config']->value->img_captions) {?>
            leogallery.displayCaption = true;
        <?php }?>

        leogallery.buildSlider();
    }
<?php echo '</script'; ?>
><?php }
}
