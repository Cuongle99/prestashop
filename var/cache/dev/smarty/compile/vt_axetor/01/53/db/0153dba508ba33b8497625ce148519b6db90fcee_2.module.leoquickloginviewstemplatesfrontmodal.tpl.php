<?php
/* Smarty version 4.3.4, created on 2024-08-12 22:43:34
  from 'module:leoquickloginviewstemplatesfrontmodal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_66bac856223815_61666280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0153dba508ba33b8497625ce148519b6db90fcee' => 
    array (
      0 => 'module:leoquickloginviewstemplatesfrontmodal.tpl',
      1 => 1690855552,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66bac856223815_61666280 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin D:\xampp\htdocs\prestashop\custom\vt_axetor/modules/leoquicklogin/views/templates/front/modal.tpl -->
<div class="modal leo-quicklogin-modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo $_smarty_tpl->tpl_vars['html_form']->value;?>
            </div> 
            <div class="modal-footer"></div>
        </div>
    </div>
</div><!-- end D:\xampp\htdocs\prestashop\custom\vt_axetor/modules/leoquicklogin/views/templates/front/modal.tpl --><?php }
}
