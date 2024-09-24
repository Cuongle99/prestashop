<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:28
  from 'module:ps_customersigninps_customersignin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac85043ff45_90150216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5f8f570180f74d1dbdd1a1d2af0445e90a6650c' => 
    array (
      0 => 'module:ps_customersigninps_customersignin.tpl',
      1 => 1710754485,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac85043ff45_90150216 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/themes/vt_axetor/modules/ps_customersignin/ps_customersignin.tpl --><div class="userinfo-selector links dropdown js-dropdown popup-over float-xs-left float-md-right">
  <a href="javascript:void(0)" data-toggle="dropdown" class="popup-title" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
">
    <i class="fa fa-user"></i>
    <span class="hidden-xs-down hidden"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
    <i class="material-icons hidden">&#xE5C5;</i>
 </a>
  <ul class="popup-content dropdown-menu user-info">
    <?php if ($_smarty_tpl->tpl_vars['logged']->value) {?>
      <li>
        <a
          class="account dropdown-item" 
          href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['my_account'], ENT_QUOTES, 'UTF-8');?>
"
          title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View my customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
          rel="nofollow"
        >
          <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hello','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['customerName']->value, ENT_QUOTES, 'UTF-8');?>
</span>
        </a>
      </li>
      <li>
        <a
          class="logout dropdown-item"
          href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['actions']['logout'], ENT_QUOTES, 'UTF-8');?>
"
          rel="nofollow"
        >
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

        </a>
      </li>
    <?php } else { ?>
      <?php if (Configuration::get('LEOQUICKLOGIN_ENABLE')) {?>
			<li>
				<a
				class="signin leo-quicklogin"
				data-enable-sociallogin="enable"
				data-type="popup"
				data-layout="login"
				href="javascript:void(0)"
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
				rel="nofollow"
				>
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				</a>
			</li>
			<li>
				<a
				class="register leo-quicklogin"
				data-enable-sociallogin="enable"
				data-type="popup"
				data-layout="register"
				href="javascript:void(0)"
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
				rel="nofollow"
				>
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				</a>
			</li>
			<?php } else { ?>
			<li>
				<a class="signin"
					href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
?back=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'urlencode' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['current_url'] )), ENT_QUOTES, 'UTF-8');?>
"
					title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your customer account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
					rel="nofollow"
				  >
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				</a>
			</li>
			<li>
				<a
				href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" 
				title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
				rel="nofollow"
				>
					<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Register','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
				</a>
			</li>
		<?php }?>
    <?php }?>
    <li>
      <a
        class="myacount dropdown-item"
        href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['authentication'], ENT_QUOTES, 'UTF-8');?>
?back=<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'urlencode' ][ 0 ], array( $_smarty_tpl->tpl_vars['urls']->value['current_url'] )), ENT_QUOTES, 'UTF-8');?>
"
        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
        rel="nofollow"
      >
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My account','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
      </a>
    </li>
	<?php if (Configuration::get('LEOFEATURE_ENABLE_PRODUCTWISHLIST')) {?>
    <li>
      <a
        class="ap-btn-wishlist dropdown-item"
        href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'leofeature','controller'=>'mywishlist'),$_smarty_tpl ) );?>
"
        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
        rel="nofollow"
      >
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
		<span class="ap-total-wishlist ap-total"></span>
      </a>
    </li>
	<?php }?>
	<?php if (Configuration::get('LEOFEATURE_ENABLE_PRODUCTCOMPARE')) {?>
	<li>
      <a
        class="ap-btn-compare dropdown-item"
        href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'leofeature','controller'=>'productscompare'),$_smarty_tpl ) );?>
"
        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
"
        rel="nofollow"
      >
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
		<span class="ap-total-compare ap-total"></span>
      </a>
    </li>
	<?php }?>
    <li>
      <a
        class="checkout dropdown-item"
        href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'cart','params'=>array('action'=>'show')),$_smarty_tpl ) );?>
"
        title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
"
        rel="nofollow"
      >
        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span>
      </a>
    </li>
  </ul>
</div>
<!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/themes/vt_axetor/modules/ps_customersignin/ps_customersignin.tpl --><?php }
}
