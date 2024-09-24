<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:20
  from 'module:leoelementsviewstemplatesfrontLeoBlog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac848c58bf5_10992586',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23b14550db649edc7af5a87b58354bb88a07a056' => 
    array (
      0 => 'module:leoelementsviewstemplatesfrontLeoBlog.tpl',
      1 => 1711640723,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac848c58bf5_10992586 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
?>
<!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/themes/vt_axetor/modules//leoelements/views/templates/front/LeoBlog.tpl --><?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>

    <div id="blog-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" data-runjs="1" data-form_id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['form_id'], ENT_QUOTES, 'UTF-8');?>
" class="autojs block latest-blogs exclusive elementor-slick-slider <?php echo htmlspecialchars((string) (isset($_smarty_tpl->tpl_vars['formAtts']->value['class'])) ? $_smarty_tpl->tpl_vars['formAtts']->value['class'] : call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( '','html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['show_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['show_title'] && (isset($_smarty_tpl->tpl_vars['formAtts']->value['title'])) && !empty($_smarty_tpl->tpl_vars['formAtts']->value['title'])) {?>
        <h4 class="title_block">
            <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( rtrim($_smarty_tpl->tpl_vars['formAtts']->value['title']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

        </h4>
        <?php }?>
        <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['show_sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['show_sub_title'] && (isset($_smarty_tpl->tpl_vars['formAtts']->value['sub_title'])) && $_smarty_tpl->tpl_vars['formAtts']->value['sub_title']) {?>
            <div class="sub-title-widget"><?php echo $_smarty_tpl->tpl_vars['formAtts']->value['sub_title'];?>
</div>
        <?php }?>
        <div class="block_content">
            <?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['formAtts']->value['view_type'] == "slickcarousel") {
if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_has_error']) {?>
    <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['lib_error'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lib_error']) {?>
        <div class="alert alert-warning leo-lib-error"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['lib_error'], ENT_QUOTES, 'UTF-8');?>
</div>
    <?php }
} else { ?>
	<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
		<div class="slick-row">
			<div class="timeline-wrapper clearfix prepare"
				data-item="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['number_fake_item'], ENT_QUOTES, 'UTF-8');?>
" 
				data-xl="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['xl']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['xl'], ENT_QUOTES, 'UTF-8');
}?>" 
				data-lg="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['lg']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['lg'], ENT_QUOTES, 'UTF-8');
}?>" 
				data-md="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['md']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['md'], ENT_QUOTES, 'UTF-8');
}?>" 
				data-sm="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['sm']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['sm'], ENT_QUOTES, 'UTF-8');
}?>" 
				data-m="<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['m']))) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['array_fake_item']['m'], ENT_QUOTES, 'UTF-8');
}?>"
			>
				<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['formAtts']->value['number_fake_item']+1 - (1) : 1-($_smarty_tpl->tpl_vars['formAtts']->value['number_fake_item'])+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration === 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration === $_smarty_tpl->tpl_vars['foo']->total;?>			
					<div class="timeline-parent">
						<?php
$_smarty_tpl->tpl_vars['foo_child'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo_child']->step = 1;$_smarty_tpl->tpl_vars['foo_child']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo_child']->step > 0 ? $_smarty_tpl->tpl_vars['formAtts']->value['per_col']+1 - (1) : 1-($_smarty_tpl->tpl_vars['formAtts']->value['per_col'])+1)/abs($_smarty_tpl->tpl_vars['foo_child']->step));
if ($_smarty_tpl->tpl_vars['foo_child']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo_child']->value = 1, $_smarty_tpl->tpl_vars['foo_child']->iteration = 1;$_smarty_tpl->tpl_vars['foo_child']->iteration <= $_smarty_tpl->tpl_vars['foo_child']->total;$_smarty_tpl->tpl_vars['foo_child']->value += $_smarty_tpl->tpl_vars['foo_child']->step, $_smarty_tpl->tpl_vars['foo_child']->iteration++) {
$_smarty_tpl->tpl_vars['foo_child']->first = $_smarty_tpl->tpl_vars['foo_child']->iteration === 1;$_smarty_tpl->tpl_vars['foo_child']->last = $_smarty_tpl->tpl_vars['foo_child']->iteration === $_smarty_tpl->tpl_vars['foo_child']->total;?>
							<div class="timeline-item">
								<div class="animated-background">					
									<div class="background-masker content-top"></div>							
									<div class="background-masker content-second-line"></div>							
									<div class="background-masker content-third-line"></div>							
									<div class="background-masker content-fourth-line"></div>
								</div>
							</div>
						<?php }
}
?>
					</div>
				<?php }
}
?>
			</div>
			<div class="list-blog-slick-carousel slick-slider slick-loading" id="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['form_id'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'blog', false, NULL, 'mypLoop', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['blog']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['blog']->value) {
$_smarty_tpl->tpl_vars['blog']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']++;
?>					
					<div class="slick-slide <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_mypLoop']->value['index'] : null) == 0) {?> first<?php }?>">
						<div class="item">		                    	
<div class="blog-container">
    <div class="left-block">
        <div class="blog-image-container">
            <a class="blog_img_link" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
			<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_sima'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_sima']) {?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value)) && (isset($_smarty_tpl->tpl_vars['formAtts']->value['lazyload'])) && $_smarty_tpl->tpl_vars['formAtts']->value['lazyload']) {?>
                                    				<img loading="lazy" class="img-fluid lazyOwl" src="" data-src="<?php if (((isset($_smarty_tpl->tpl_vars['blog']->value['preview_thumb_url'])) && $_smarty_tpl->tpl_vars['blog']->value['preview_thumb_url'] != '')) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blog']->value['preview_thumb_url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blog']->value['preview_url'], ENT_QUOTES, 'UTF-8');
}?>" 
					 alt="<?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['legend'])) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['legend'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" 
					 title="<?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['legend'])) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['legend'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" 
					 <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_width']))) {?>width="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_width'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
					 <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_height']))) {?> height="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_height'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
					  />
                            <?php } else { ?>
				<img loading="lazy" class="img-fluid" src="<?php if (((isset($_smarty_tpl->tpl_vars['blog']->value['preview_thumb_url'])) && $_smarty_tpl->tpl_vars['blog']->value['preview_thumb_url'] != '')) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blog']->value['preview_thumb_url'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blog']->value['preview_url'], ENT_QUOTES, 'UTF-8');
}?>" 
					 alt="<?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['legend'])) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['legend'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" 
					 title="<?php if (!empty($_smarty_tpl->tpl_vars['blog']->value['legend'])) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['legend'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" 
					 <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_width']))) {?>width="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_width'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" <?php }?>
					 <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_height']))) {?> height="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_height'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>
					  />
                            <?php }?>
			<?php }?>
            </a>
        </div>
    </div>
    <div class="right-block">
        
        <div class="blog-meta">
			<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_saut'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_saut']) {?>
				<div class="author">
					<span class="icon-author"><i class="fa-light fa-user"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By','mod'=>'leoelements'),$_smarty_tpl ) );?>
:</span><?php if ((isset($_smarty_tpl->tpl_vars['blog']->value['author_name'])) && $_smarty_tpl->tpl_vars['blog']->value['author_name'] != '') {?> <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['author_name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?> <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['author'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>
				</div>
			<?php }?>
			
			<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scat'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scat']) {?>
				<div class="cat"> 
									<a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blog']->value['category_link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['category_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['category_title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
				</div>
			<?php }?>

			<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scre'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scre']) {?>
			<div class="created">
						<time class="date" datetime="<?php echo htmlspecialchars((string) smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"), ENT_QUOTES, 'UTF-8');?>
">	

				<span class="b-daycount">
					<?php $_smarty_tpl->_assignInScope('blog_day', smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%e"));?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['blog_day']->value,'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

									</span>
				<span class="b-month">
					<?php $_smarty_tpl->_assignInScope('blog_month', smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%b"));?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['blog_month']->value,'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

					<?php $_smarty_tpl->_assignInScope('blog_date_add', smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%d"));?>
					<!-- day of month -->
				</span>									
				
				
				<span class="b-year">
					<?php $_smarty_tpl->_assignInScope('blog_year', smarty_modifier_date_format(strtotime($_smarty_tpl->tpl_vars['blog']->value['date_add']),"%Y"));?>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['blog_year']->value,'mod'=>'appagebuilder'),$_smarty_tpl ) );?>

					<!-- year -->
				</span>
			</time>
		</div>
		<?php }?>

			
			
			<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scoun'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_scoun']) {?>
				<span class="nbcomment">
					<span class="icon-comment"><i class="fa-light fa-messages"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment','mod'=>'leoelements'),$_smarty_tpl ) );?>
:</span> <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['comment_count'] )), ENT_QUOTES, 'UTF-8');?>

				</span>
			<?php }?>
			
			<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_shits'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_shits']) {?>
				<div class="hits">
					<span class="icon-hits"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hits','mod'=>'leoelements'),$_smarty_tpl ) );?>
:</span> <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['hits'] )), ENT_QUOTES, 'UTF-8');?>

				</div>	
			<?php }?>
		</div>

		<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['show_blog_name'])) && $_smarty_tpl->tpl_vars['formAtts']->value['show_blog_name']) {?>
        	<h5 class="blog-title"><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['blog']->value['title']),80,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h5>
        <?php }?>

		<?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['show_desc'])) && $_smarty_tpl->tpl_vars['formAtts']->value['show_desc']) {?>
	        <p class="blog-desc">
	            <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['blog']->value['description']),160,'...' )), ENT_QUOTES, 'UTF-8');?>

	        </p>
                <?php }?>
                <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_readmore'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_readmore']) {?>
                    <div class="blog-readmore">
                        <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['blog']->value['link'], ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read more','mod'=>'leoelements'),$_smarty_tpl ) );?>
</a>
                    </div>
                <?php }?>
    </div>
	
	<div class="hidden-xl-down hidden-xl-up datetime-translate">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sunday','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Monday','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tuesday','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wednesday','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Thursday','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Friday','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Saturday','mod'=>'leoelements'),$_smarty_tpl ) );?>

		
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'January','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'February','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'March','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'April','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'May','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'June','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'July','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'August','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'September','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'October','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'November','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'December','mod'=>'leoelements'),$_smarty_tpl ) );?>

		
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'st','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'nd','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'rd','mod'=>'leoelements'),$_smarty_tpl ) );?>

		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'th','mod'=>'leoelements'),$_smarty_tpl ) );?>

	</div>
</div>                                
						</div>
					</div>	               
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				
			</div>
		</div>
	<?php } else { ?>
		<p class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No products at this time.','mod'=>'leoelements'),$_smarty_tpl ) );?>
</p>	
	<?php }
}?>

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
} else { ?>2000<?php }?>,
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
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['slides_to_scroll'], ENT_QUOTES, 'UTF-8');
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
                <?php }?>
            <?php } else { ?>
                <p class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No blog at this time.','mod'=>'leoelements'),$_smarty_tpl ) );?>
</p>	
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_show'])) && $_smarty_tpl->tpl_vars['formAtts']->value['bleoblogs_show']) {?>
                <div class="blog-viewall">
                    <a class="btn btn-primary btn-viewall" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['formAtts']->value['leo_blog_helper']->getFontBlogLink(), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View All','mod'=>'leoelements'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View All','mod'=>'leoelements'),$_smarty_tpl ) );?>
</a>
                </div>
            <?php }?>
        </div>
    </div>
<?php }?>



<!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/themes/vt_axetor/modules//leoelements/views/templates/front/LeoBlog.tpl --><?php }
}
