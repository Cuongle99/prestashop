<?php
/* Smarty version 4.3.4, created on 2024-09-17 22:42:04
  from 'module:leonextpreviousviewstemplatesfrontleonextprevious.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ea3dfc00e904_98238621',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e86703f86796f98f463e277345da75395f96d2e7' => 
    array (
      0 => 'module:leonextpreviousviewstemplatesfrontleonextprevious.tpl',
      1 => 1715154810,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ea3dfc00e904_98238621 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/themes/vt_axetor/modules/leonextprevious/views/templates/front/leonextprevious.tpl -->
<?php if ($_smarty_tpl->tpl_vars['position']->value != 3 || ((isset($_smarty_tpl->tpl_vars['buttons']->value)) && $_smarty_tpl->tpl_vars['buttons']->value)) {?><div class="leonextprevious-container clearfix"><?php }?>
	<?php if ($_smarty_tpl->tpl_vars['prev']->value) {?>
		<div class="leo-button-prev">
			<a  title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prev']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary text-left leonextprevious-btn" href="<?php echo htmlspecialchars((string) Context::getContext()->link->getProductLink($_smarty_tpl->tpl_vars['prev']->value['id_product'],$_smarty_tpl->tpl_vars['prev']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
">
				<p <?php if (!$_smarty_tpl->tpl_vars['display_image']->value || !$_smarty_tpl->tpl_vars['display_names']->value || !$_smarty_tpl->tpl_vars['display_price']->value) {?>style="margin: 0"<?php }?>><i class="material-icons">&#xE314;</i></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Prev','mod'=>'leonextprevious'),$_smarty_tpl ) );?>
</p>

				<div class="leonextprevious_info">
				<?php if ($_smarty_tpl->tpl_vars['display_image']->value) {?><img src="<?php echo htmlspecialchars((string) Context::getContext()->link->getImageLink($_smarty_tpl->tpl_vars['prev']->value['link_rewrite'],$_smarty_tpl->tpl_vars['prev']->value['id_image'],'small_default'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prev']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['display_names']->value || $_smarty_tpl->tpl_vars['display_price']->value) {?><div class="small">
				<p class="name"><?php if ($_smarty_tpl->tpl_vars['display_names']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prev']->value['name'], ENT_QUOTES, 'UTF-8');
}?></p>
				<p class="price"><?php if ($_smarty_tpl->tpl_vars['display_price']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['prev']->value['price_static'], ENT_QUOTES, 'UTF-8');
}?></p></div class="small"><?php }?>
				</div>
			</a>
		</div>
	<?php } elseif (!$_smarty_tpl->tpl_vars['prev']->value && (isset($_smarty_tpl->tpl_vars['buttons']->value)) && $_smarty_tpl->tpl_vars['buttons']->value) {?>
		<div class="leo-button-prev"></div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['next']->value) {?>
		<div class="leo-button-next">
			<a title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['next']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="btn btn-primary leonextprevious-btn" href="<?php echo htmlspecialchars((string) Context::getContext()->link->getProductLink($_smarty_tpl->tpl_vars['next']->value['id_product'],$_smarty_tpl->tpl_vars['next']->value['link_rewrite']), ENT_QUOTES, 'UTF-8');?>
">
			
				<p <?php if (!$_smarty_tpl->tpl_vars['display_image']->value || !$_smarty_tpl->tpl_vars['display_names']->value || !$_smarty_tpl->tpl_vars['display_price']->value) {?>style="margin: 0"<?php }?>><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Next','mod'=>'leonextprevious'),$_smarty_tpl ) );?>
 <i class="material-icons">&#xE315;</i></p>

				<div class="leonextprevious_info">
				<?php if ($_smarty_tpl->tpl_vars['display_image']->value) {?><img src="<?php echo htmlspecialchars((string) Context::getContext()->link->getImageLink($_smarty_tpl->tpl_vars['next']->value['link_rewrite'],$_smarty_tpl->tpl_vars['next']->value['id_image'],'small_default'), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['next']->value['legend'], ENT_QUOTES, 'UTF-8');?>
"><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['display_names']->value || $_smarty_tpl->tpl_vars['display_price']->value) {?><div class="small">
				<p class="name"><?php if ($_smarty_tpl->tpl_vars['display_names']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['next']->value['name'], ENT_QUOTES, 'UTF-8');
}?></p>
				<p class="price"><?php if ($_smarty_tpl->tpl_vars['display_price']->value) {
echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['next']->value['price_static'], ENT_QUOTES, 'UTF-8');
}?></p>
				</div class="small"><?php }?>
				</div>
			</a>
		</div>
	<?php } elseif (!$_smarty_tpl->tpl_vars['next']->value && (isset($_smarty_tpl->tpl_vars['buttons']->value)) && $_smarty_tpl->tpl_vars['buttons']->value) {?>
		<div class="leo-button-next"></div>
	<?php }
if ($_smarty_tpl->tpl_vars['position']->value != 3 || ((isset($_smarty_tpl->tpl_vars['buttons']->value)) && $_smarty_tpl->tpl_vars['buttons']->value)) {?></div><?php }?>

<?php if ($_smarty_tpl->tpl_vars['position']->value > 0 && $_smarty_tpl->tpl_vars['position']->value < 3) {
echo '<script'; ?>
 type="text/javascript">
<?php if ($_smarty_tpl->tpl_vars['position']->value == 1) {?>
	
		document.addEventListener("DOMContentLoaded", function() {
			$('.leonextprevious-container').prependTo('#main');
		});
	
<?php } elseif ($_smarty_tpl->tpl_vars['position']->value == 2) {?>
	
		document.addEventListener("DOMContentLoaded", function() {
			$('.leonextprevious-container').clone().prependTo('#main');
		});
	
<?php }
echo '</script'; ?>
>
<?php }?>
<!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/themes/vt_axetor/modules/leonextprevious/views/templates/front/leonextprevious.tpl --><?php }
}
