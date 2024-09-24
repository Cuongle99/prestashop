<?php
/* Smarty version 4.3.4, created on 2024-09-17 22:41:53
  from 'module:leosizechartviewstemplateshooksizechart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66ea3df1922e55_59887872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c88a0b8ce6ba82830bc3295f9c6e4969ec67fa8e' => 
    array (
      0 => 'module:leosizechartviewstemplateshooksizechart.tpl',
      1 => 1690855552,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66ea3df1922e55_59887872 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'sizeGuide' => 
  array (
    'compiled_filepath' => 'D:\\xampp\\htdocs\\prestashop\\custom\\vt_axetor\\var\\cache\\dev\\smarty\\compile\\vt_axetor\\c8\\8a\\0b\\c88a0b8ce6ba82830bc3295f9c6e4969ec67fa8e_2.module.leosizechartviewstemplateshooksizechart.tpl.php',
    'uid' => 'c88a0b8ce6ba82830bc3295f9c6e4969ec67fa8e',
    'call_name' => 'smarty_template_function_sizeGuide_132538594066ea3df11abbf5_47511854',
  ),
));
?><!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/modules/leosizechart/views/templates/hook/sizechart.tpl -->

<?php if ($_smarty_tpl->tpl_vars['sh_popup']->value && $_smarty_tpl->tpl_vars['numberhook']->value == 1) {?>
	<button type="button" class="show_sizechart btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Size Guide','mod'=>'leosizechart'),$_smarty_tpl ) );?>
</button>
	<div id="moda_sizechart" class="moda_sizechart popup modal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document" <?php if ($_smarty_tpl->tpl_vars['width']->value) {?>style="max-width: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['width']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
px;"<?php }?>>
		    <div class="modal-content">
		    	<div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			          	<span aria-hidden="true"><i class="material-icons">close</i></span>
			        </button>
			        <h4 class="modal-title text-sm-center" id="myModalLabel"><i class="material-icons rtl-no-flip"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Size Guide','mod'=>'leosizechart'),$_smarty_tpl ) );?>
</h4>
		      	</div>
				<div id="leosizechart" class="modal-body">
					<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'sizeGuide', array(), true);?>

				</div>
		    </div>
		</div>
	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['sh_popup']->value) {?>
	<button type="button" class="show_sizechart btn btn-default"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Size Guide','mod'=>'leosizechart'),$_smarty_tpl ) );?>
</button>
<?php } elseif (!$_smarty_tpl->tpl_vars['sh_popup']->value) {?>
	<div class="moda_sizechart no-popup">
		<h4 class="modal-title">
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Size Guide','mod'=>'leosizechart'),$_smarty_tpl ) );?>

		</h4>
		<?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'sizeGuide', array(), true);?>

	</div>
<?php }?><!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/modules/leosizechart/views/templates/hook/sizechart.tpl --><?php }
/* smarty_template_function_sizeGuide_132538594066ea3df11abbf5_47511854 */
if (!function_exists('smarty_template_function_sizeGuide_132538594066ea3df11abbf5_47511854')) {
function smarty_template_function_sizeGuide_132538594066ea3df11abbf5_47511854(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

<div class="leosizechart-content">
	<?php if ($_smarty_tpl->tpl_vars['sh_measure']->value) {?>   
		<ul class="nav nav-tabs">
			<?php if ((isset($_smarty_tpl->tpl_vars['guide']->value->description)) && (isset($_smarty_tpl->tpl_vars['guide']->value->description)) != '') {?>
			<li class="nav-item"><a class="nav-link-size active" href="#leosizechart-guide"  title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['guide']->value->title,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 " data-toggle="tab" role="tab" aria-controls="leosizechart-guide"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['guide']->value->title,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a></li>
			<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['sh_global']->value) {?><li class="nav-item"><a class="nav-link-size active" href="#leosizechart-global"  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guide','mod'=>'leosizechart'),$_smarty_tpl ) );?>
" data-toggle="tab" role="tab" aria-controls="leosizechart-global"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Guide','mod'=>'leosizechart'),$_smarty_tpl ) );?>
</a></li><?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['sh_measure']->value) {?><li class="nav-item"><a class="nav-link-size" href="#leosizechart-how"  title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How to measure','mod'=>'leosizechart'),$_smarty_tpl ) );?>
" data-toggle="tab" role="tab" aria-controls="leosizechart-how"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'How to measure','mod'=>'leosizechart'),$_smarty_tpl ) );?>
</a></li><?php }?>
		</ul>
	<?php }?>
	<div class="tab-content">
		<?php if ((isset($_smarty_tpl->tpl_vars['guide']->value->description)) && (isset($_smarty_tpl->tpl_vars['guide']->value->description)) != '') {?>
			<div id="leosizechart-guide" role="tabpanel" class="tab-pane rte fade active in">
				<?php echo $_smarty_tpl->tpl_vars['guide']->value->description;?>
 
			</div>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['sh_global']->value) {?>
				<div id="leosizechart-global"  class="tab-pane rte fade active in" role="tabpanel">
					<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'stripslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['global']->value ));?>

				</div>
			<?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['sh_measure']->value) {?>
			<div id="leosizechart-how"  class="tab-pane rte fade" role="tabpanel">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'stripslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['howto']->value ));?>

			</div>
		<?php }?>
	</div>
</div>
<?php
}}
/*/ smarty_template_function_sizeGuide_132538594066ea3df11abbf5_47511854 */
}
