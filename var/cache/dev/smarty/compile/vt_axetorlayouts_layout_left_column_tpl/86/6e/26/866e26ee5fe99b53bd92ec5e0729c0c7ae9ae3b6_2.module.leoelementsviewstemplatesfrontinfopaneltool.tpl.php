<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:44:08
  from 'module:leoelementsviewstemplatesfrontinfopaneltool.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac8780e7994_60475582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '866e26ee5fe99b53bd92ec5e0729c0c7ae9ae3b6' => 
    array (
      0 => 'module:leoelementsviewstemplatesfrontinfopaneltool.tpl',
      1 => 1676345970,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac8780e7994_60475582 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/modules/leoelements/views/templates/front/info/paneltool.tpl --><?php if (class_exists("LeoFrameworkHelper")) {
$_smarty_tpl->_assignInScope('skins', LeoFrameworkHelper::getSkins($_smarty_tpl->tpl_vars['LEO_THEMENAME']->value));
$_smarty_tpl->_assignInScope('theme_customizations', LeoFrameworkHelper::getLayoutSettingByTheme($_smarty_tpl->tpl_vars['LEO_THEMENAME']->value));?>
<div id="leo-paneltool" class="hidden-md-down">
	<?php if ((isset($_smarty_tpl->tpl_vars['leo_panel']->value['positions'])) && count($_smarty_tpl->tpl_vars['leo_panel']->value['positions']) > 1) {?>
	<div class="paneltool multiproductdetailtool">
		<div class="panelbutton">
			<i class="fa fa-cog"></i>
		</div>
		<div class="panelcontent block-panelcontent block-multiproductdetailtool">
		    <div class="panelinner">
				<h4>Leo Elements Font End</h4>
				<div class="group-input row layout">
					<label class="col-sm-12 control-label"><span class="fa fa-desktop"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Multi Layout','mod'=>'leoelements'),$_smarty_tpl ) );?>
</label>
					<div class="col-sm-12">
						<?php if ((isset($_smarty_tpl->tpl_vars['leo_panel']->value['positions']['header']))) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leo_panel']->value['positions']['header'], 'header');
$_smarty_tpl->tpl_vars['header']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['header']->value) {
$_smarty_tpl->tpl_vars['header']->do_else = false;
?>
						<a class="product-detail-demo" href="<?php if ((isset($_smarty_tpl->tpl_vars['header']->value['demo_url'])) && $_smarty_tpl->tpl_vars['header']->value['demo_url']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header']->value['demo_url'], ENT_QUOTES, 'UTF-8');
}?>">
							<span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
						</a>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					</div>
				</div>
				<div class="group-input row layout">
					<label class="col-sm-12 control-label"><span class="fa fa-desktop"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Content','mod'=>'leoelements'),$_smarty_tpl ) );?>
</label>
					<div class="col-sm-12">
						<?php if ((isset($_smarty_tpl->tpl_vars['leo_panel']->value['positions']['content']))) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leo_panel']->value['positions']['content'], 'header');
$_smarty_tpl->tpl_vars['header']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['header']->value) {
$_smarty_tpl->tpl_vars['header']->do_else = false;
?>     
						<a class="product-detail-demo" href="<?php if ((isset($_smarty_tpl->tpl_vars['header']->value['demo_url'])) && $_smarty_tpl->tpl_vars['header']->value['demo_url']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header']->value['demo_url'], ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>">
							<span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
						</a>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					</div>
				</div>
				<div class="group-input row layout">
					<label class="col-sm-12 control-label"><span class="fa fa-desktop"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Footer','mod'=>'leoelements'),$_smarty_tpl ) );?>
</label>
					<div class="col-sm-12">
						<?php if ((isset($_smarty_tpl->tpl_vars['leo_panel']->value['positions']['footer']))) {?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leo_panel']->value['positions']['footer'], 'header');
$_smarty_tpl->tpl_vars['header']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['header']->value) {
$_smarty_tpl->tpl_vars['header']->do_else = false;
?>      
						<a class="product-detail-demo" href="<?php if ((isset($_smarty_tpl->tpl_vars['header']->value['demo_url'])) && $_smarty_tpl->tpl_vars['header']->value['demo_url']) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header']->value['demo_url'], ENT_QUOTES, 'UTF-8');
}?>">
							<span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
						</a>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<?php }?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php }?>
	
	<div class="paneltool themetool">
		<div class="panelbutton">
			<span>THEME OPTIONS</span>
		</div>
		<div class="block-panelcontent">
			<div class="panelcontent">
				<div class="panelinner">
					<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Panel Tool','mod'=>'leoelements'),$_smarty_tpl ) );?>
</h4>
					<!-- Theme layout mod section -->
					<?php if ($_smarty_tpl->tpl_vars['theme_customizations']->value && (isset($_smarty_tpl->tpl_vars['theme_customizations']->value['layout'])) && (isset($_smarty_tpl->tpl_vars['theme_customizations']->value['layout']['layout_mode'])) && (isset($_smarty_tpl->tpl_vars['theme_customizations']->value['layout']['layout_mode']['option']))) {?>
						<div class="group-input clearfix layout">
							<label class="col-sm-12 control-label paneltool-tab"><span class="fa fa-desktop"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Layout Mod','mod'=>'leoelements'),$_smarty_tpl ) );?>
</label>
							<div class="col-sm-12 paneltool-content">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['theme_customizations']->value['layout']['layout_mode']['option'], 'layout');
$_smarty_tpl->tpl_vars['layout']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['layout']->value) {
$_smarty_tpl->tpl_vars['layout']->do_else = false;
?>
									<span class="leo-dynamic-update-layout <?php if ($_smarty_tpl->tpl_vars['profile_params']->value['layout_mode'] == $_smarty_tpl->tpl_vars['layout']->value['id']) {?>current-layout-mod<?php }?>" data-layout-mod="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout']->value['id'], ENT_QUOTES, 'UTF-8');?>
">
										<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['layout']->value['name'], ENT_QUOTES, 'UTF-8');?>

									</span>
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</div>
						</div>
					<?php }?>
					<!-- Float Header -->
					<div class="group-input clearfix">
						<label class="col-sm-12 control-label paneltool-tab"><span class="fa fa-credit-card"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Float Header','mod'=>'leoelements'),$_smarty_tpl ) );?>
</label>
						<div class="col-sm-12 paneltool-content">
							<div class="btn_enable_fheader">
								<span class="enable_fheader btn_yes <?php if ($_smarty_tpl->tpl_vars['profile_params']->value['header_sticky']) {?>current<?php }?>" data-value="1">
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','mod'=>'leoelements'),$_smarty_tpl ) );?>
</span>
								</span>
								<span class="enable_fheader btn_no <?php if (!$_smarty_tpl->tpl_vars['profile_params']->value['header_sticky']) {?>current<?php }?>" data-value="0">
									<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','mod'=>'leoelements'),$_smarty_tpl ) );?>
</span>
								</span>
							</div>
						</div>
					</div>
					<!-- Font Config -->
					<div class="group-input clearfix">
						<label class="col-sm-12 control-label paneltool-tab"><span class="fa fa-credit-card"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Font option','mod'=>'leoelements'),$_smarty_tpl ) );?>
</label>
						<div class="col-sm-12 paneltool-content">
							<input type="hidden" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['leo_panel']->value['font_url'], ENT_QUOTES, 'UTF-8');?>
" id="font_url">

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leo_panel']->value['font_configs'], 'fontc', false, 'fontk');
$_smarty_tpl->tpl_vars['fontc']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fontk']->value => $_smarty_tpl->tpl_vars['fontc']->value) {
$_smarty_tpl->tpl_vars['fontc']->do_else = false;
?>
							<div class="col-sm-12">
								<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['fontc']->value, ENT_QUOTES, 'UTF-8');?>

							</div>

							<div class="col-sm-12">
							<select class="panel-font" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['fontk']->value, ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['fontk']->value, ENT_QUOTES, 'UTF-8');?>
">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leo_panel']->value['fonts'], 'fonts');
$_smarty_tpl->tpl_vars['fonts']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['fonts']->value) {
$_smarty_tpl->tpl_vars['fonts']->do_else = false;
?>
								<optgroup label="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['fonts']->value['label'], ENT_QUOTES, 'UTF-8');?>
">
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fonts']->value['options'], 'font');
$_smarty_tpl->tpl_vars['font']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['font']->value) {
$_smarty_tpl->tpl_vars['font']->do_else = false;
?>
									<option value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['font']->value['id'], ENT_QUOTES, 'UTF-8');?>
"<?php if ((isset($_smarty_tpl->tpl_vars['font']->value['file']))) {?> data-file="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['font']->value['file'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ((isset($_smarty_tpl->tpl_vars['font']->value['font_family']))) {?> data-family="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['font']->value['font_family'], ENT_QUOTES, 'UTF-8');?>
" data-style="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['font']->value['font_style'], ENT_QUOTES, 'UTF-8');?>
" data-weight="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['font']->value['font_weight'], ENT_QUOTES, 'UTF-8');?>
" <?php }
if ((isset($_smarty_tpl->tpl_vars['font']->value['type']))) {?> data-type="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['font']->value['type'], ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['profile_params']->value[$_smarty_tpl->tpl_vars['fontk']->value] == $_smarty_tpl->tpl_vars['font']->value['id']) {?> selected="selected" data-load="1"<?php }?>><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['font']->value['name'], ENT_QUOTES, 'UTF-8');?>
</option>
									<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</optgroup>	
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</select>
							</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
					<!-- Color Config -->
					<div class="group-input clearfix" id="lecolor" data-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
						<label class="col-sm-12 control-label paneltool-tab"><span class="fa fa-edit"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Color Config','mod'=>'leoelements'),$_smarty_tpl ) );?>
</label>
						<div class="col-sm-12 paneltool-content">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leo_panel']->value['color_configs'], 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
							<div class="group-input clearfix" data-url="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
								<label class="col-sm-12 control-label paneltool-subtab"><span class="fa fa-credit-card"></span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['group']->value['label'], ENT_QUOTES, 'UTF-8');?>
</label>
								<div class="col-sm-12 paneltool-subcontent">
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['config'], 'color', false, 'colork');
$_smarty_tpl->tpl_vars['color']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['colork']->value => $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->do_else = false;
?>
								
									<div class="col-sm-12 title-subcontent">
										<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['color']->value, ENT_QUOTES, 'UTF-8');?>

									</div>
									<div class="col-sm-12 input-group">
										<input id="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['colork']->value, ENT_QUOTES, 'UTF-8');?>
" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['profile_params']->value[$_smarty_tpl->tpl_vars['colork']->value],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" size="10" name="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['colork']->value, ENT_QUOTES, 'UTF-8');?>
" type="text" class="leocolor"><a href="#" class="clear-bg label label-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear','mod'=>'leoelements'),$_smarty_tpl ) );?>
</a>
									</div>
								
								<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</div>
							</div>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Live Theme Editor -->
	<div class="paneltool editortool">
		<div class="panelbutton">
			<i class="fa fa-adjust"></i>
		</div>
		<div class="panelcontent editortool">
			<div class="panelinner">
				<h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Builder Page Demo','mod'=>'leoelements'),$_smarty_tpl ) );?>
</h4>
				<div class="group-input row layout">
					<label class="col-sm-12 control-label"><span class="fa fa-desktop"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Category','mod'=>'leoelements'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['leo_panel']->value['category_link'] == '#') {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Must add categories, products)','mod'=>'leoelements'),$_smarty_tpl ) );
}?></label>
					<div class="col-sm-12">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leo_panel']->value['category'], 'header');
$_smarty_tpl->tpl_vars['header']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['header']->value) {
$_smarty_tpl->tpl_vars['header']->do_else = false;
?>
						<a class="product-detail-demo" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['leo_panel']->value['category_link'], ENT_QUOTES, 'UTF-8');?>
?layout=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header']->value['clist_key'], ENT_QUOTES, 'UTF-8');?>
">
							<span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
						</a>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
				<div class="group-input row layout">
					<label class="col-sm-12 control-label"><span class="fa fa-desktop"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product List','mod'=>'leoelements'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['leo_panel']->value['category_link'] == '#') {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Must add categories, products)','mod'=>'leoelements'),$_smarty_tpl ) );
}?></label>
					<div class="col-sm-12">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leo_panel']->value['plist'], 'header');
$_smarty_tpl->tpl_vars['header']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['header']->value) {
$_smarty_tpl->tpl_vars['header']->do_else = false;
?>
						<a class="product-detail-demo" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['leo_panel']->value['category_link'], ENT_QUOTES, 'UTF-8');?>
?plist_key=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header']->value['plist_key'], ENT_QUOTES, 'UTF-8');?>
">
							<span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
						</a>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

					</div>
				</div>
				<div class="group-input row layout">
					<label class="col-sm-12 control-label"><span class="fa fa-desktop"></span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Detail','mod'=>'leoelements'),$_smarty_tpl ) );
if ($_smarty_tpl->tpl_vars['leo_panel']->value['product_link'] == '#') {?> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(Must add products)','mod'=>'leoelements'),$_smarty_tpl ) );
}?></label>
					<div class="col-sm-12">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leo_panel']->value['pdetail'], 'header');
$_smarty_tpl->tpl_vars['header']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['header']->value) {
$_smarty_tpl->tpl_vars['header']->do_else = false;
?>
						<a class="product-detail-demo" href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['leo_panel']->value['product_link'], ENT_QUOTES, 'UTF-8');?>
?layout=<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header']->value['plist_key'], ENT_QUOTES, 'UTF-8');?>
">
							<span><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['header']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
						</a>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>
			</div>
		</div>
		
	</div>
</div>
<?php }?><!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/modules/leoelements/views/templates/front/info/paneltool.tpl --><?php }
}
