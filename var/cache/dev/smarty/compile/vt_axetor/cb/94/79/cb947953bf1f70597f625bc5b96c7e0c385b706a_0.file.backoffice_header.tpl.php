<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:42:31
  from 'D:\xampp\htdocs\prestashop\custom\vt_axetor\modules\leoelements\views\templates\admin\backoffice_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac817eef018_13660587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb947953bf1f70597f625bc5b96c7e0c385b706a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\modules\\leoelements\\views\\templates\\admin\\backoffice_header.tpl',
      1 => 1701920329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac817eef018_13660587 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/template" id="btn-edit-page-builder-category">
    <div>
		<?php if ($_smarty_tpl->tpl_vars['urlPageBuilder']->value) {?>
			<br />
			<a href="<?php echo $_smarty_tpl->tpl_vars['urlPageBuilder']->value;?>
" target="_blank" class="button button-primary button-hero edit_with_button_link">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['icon_url']->value;?>
" alt="Leo Elements Logo">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit with Leo Elements Creator','mod'=>'leoelements'),$_smarty_tpl ) );?>

			</a>
		<?php } else { ?>
			<br />
			<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save page first to enable Leoelements','mod'=>'leoelements'),$_smarty_tpl ) );?>
</div>
		<?php }?>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="btn-edit-page-builder-product">
    <div>
		<?php if ($_smarty_tpl->tpl_vars['urlPageBuilder']->value) {?>
                    <br />
                    <a href="<?php echo $_smarty_tpl->tpl_vars['urlPageBuilder']->value;?>
" target="_blank" class="button button-primary button-hero edit_with_button_link">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['icon_url']->value;?>
" alt="Leo Elements Logo">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit with Leo Elements Creator','mod'=>'leoelements'),$_smarty_tpl ) );?>

                    </a>
		<?php } else { ?>
                    <br />
                    <div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save page first to enable Leoelements','mod'=>'leoelements'),$_smarty_tpl ) );?>
</div>
		<?php }?>
    </div>
<?php echo '</script'; ?>
>
	
<?php echo '<script'; ?>
 type="text/template" id="btn-edit-page-builder-cms">
    <div>
		<?php if ($_smarty_tpl->tpl_vars['urlPageBuilder']->value) {?>
			<br />
                        <a href="<?php echo $_smarty_tpl->tpl_vars['urlPageBuilder']->value;?>
" target="_blank" class="button button-primary button-hero edit_with_button_link">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['icon_url']->value;?>
" alt="Leo Elements Logo">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit with Leo Elements Creator','mod'=>'leoelements'),$_smarty_tpl ) );?>

                        </a>
		<?php } else { ?>
			<br />
			<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save page first to enable Leoelements','mod'=>'leoelements'),$_smarty_tpl ) );?>
</div>
		<?php }?>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="btn-edit-page-builder-blog">
    <div class="form-group">
        <label class="control-label col-lg-3"></label>
        <div class="col-lg-9">
			<?php if ($_smarty_tpl->tpl_vars['urlPageBuilder']->value) {?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['urlPageBuilder']->value;?>
" class="btn btn-info leo-btn-edit"><i class="icon-external-link"></i>
					<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit content with - LeoElements','mod'=>'leoelements'),$_smarty_tpl ) );?>

				</a>
			<?php } else { ?>
				<div class="alert alert-info">&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save page first to enable Leoelements','mod'=>'leoelements'),$_smarty_tpl ) );?>
</div>
			<?php }?>
		</div>
    </div>
<?php echo '</script'; ?>
>
	 
<?php echo '<script'; ?>
 type="text/template" id="btn-edit-page-builder-manufacturer">
    <div>
		<?php if ($_smarty_tpl->tpl_vars['urlPageBuilder']->value) {?>
			<br />
			<a href="<?php echo $_smarty_tpl->tpl_vars['urlPageBuilder']->value;?>
" class="btn btn-info leo-btn-edit"><i class="icon-external-link"></i> 
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit content with - LeoElements','mod'=>'leoelements'),$_smarty_tpl ) );?>

			</a>
		<?php } else { ?>
			<br />
			<div class="alert alert-info">&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save page first to enable Leoelements','mod'=>'leoelements'),$_smarty_tpl ) );?>
</div>
		<?php }?>
    </div>
<?php echo '</script'; ?>
>
	 
<?php echo '<script'; ?>
 type="text/template" id="btn-edit-page-builder-supplier">
    <div>
		<?php if ($_smarty_tpl->tpl_vars['urlPageBuilder']->value) {?>
			<br />
			<a href="<?php echo $_smarty_tpl->tpl_vars['urlPageBuilder']->value;?>
" class="btn btn-info leo-btn-edit"><i class="icon-external-link"></i> 
				<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit content with - LeoElements','mod'=>'leoelements'),$_smarty_tpl ) );?>

			</a>
		<?php } else { ?>
			<br />
			<div class="alert alert-info">&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save page first to enable Leoelements','mod'=>'leoelements'),$_smarty_tpl ) );?>
</div>
		<?php }?>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/template" id="btn-edit-page-builder-leoguide">
    <div>
		<?php if ($_smarty_tpl->tpl_vars['urlPageBuilder']->value) {?>
			<br />
                        <a href="<?php echo $_smarty_tpl->tpl_vars['urlPageBuilder']->value;?>
" target="_blank" class="button button-primary button-hero edit_with_button_link">
                            <img src="<?php echo $_smarty_tpl->tpl_vars['icon_url']->value;?>
" alt="Leo Elements Logo">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit with Leo Elements Creator','mod'=>'leoelements'),$_smarty_tpl ) );?>

                        </a>
		<?php } else { ?>
			<br />
			<div class="alert alert-info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save page first to enable Leoelements','mod'=>'leoelements'),$_smarty_tpl ) );?>
</div>
		<?php }?>
    </div>
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function () {
		var $wrapperCategory = $('div#category_description, div#root_category_description').closest('.col-sm'),
			$wrapperProduct = $('#features'),
			$wrapperCms = $('#cms_page_content'),
			$wrapperBlog = $('#smart_blog_post_form').find("[name^=content_]").first().parents('.form-group').last(),
			$wrapperManufacturer = $('div#manufacturer_description').closest('.col-sm'),
			$wrapperSupplier = $('div#supplier_description').closest('.col-sm'),
                        $wrapperCms = $('#cms_page_content'),
                        $wrapperLeoGuide = $('.js_guide_content').closest('.col-lg-8'),

			$btnTemplateCategory = $('#btn-edit-page-builder-category'),
			$btnTemplateProduct = $('#btn-edit-page-builder-product'),
			$btnTemplateCms = $('#btn-edit-page-builder-cms'),
			$btnTemplateBlog = $('#btn-edit-page-builder-blog'),
			$btnTemplateManufacturer = $('#btn-edit-page-builder-manufacturer'),
			$btnTemplateSupplier = $('#btn-edit-page-builder-supplier'),
                        $btnTemplateLeoGuide = $('#btn-edit-page-builder-leoguide');

			$wrapperCategory.append($btnTemplateCategory.html());
			$wrapperProduct.prepend($btnTemplateProduct.html());
			$wrapperCms.after($btnTemplateCms.html());
			$wrapperBlog.after($btnTemplateBlog.html());
			$wrapperManufacturer.append($btnTemplateManufacturer.html());
			$wrapperSupplier.append($btnTemplateSupplier.html());
                        $wrapperLeoGuide.append($btnTemplateLeoGuide.html());
            if(!$wrapperProduct.length){
            	$wrapperProduct = $('#product_description_description').parent();
            	$wrapperProduct.append($btnTemplateProduct.html());
            }
	});
<?php echo '</script'; ?>
>
<?php }
}
