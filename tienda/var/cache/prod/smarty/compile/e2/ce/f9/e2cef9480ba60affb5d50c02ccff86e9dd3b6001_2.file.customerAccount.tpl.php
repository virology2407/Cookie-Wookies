<?php
/* Smarty version 3.1.33, created on 2020-10-01 22:08:25
  from '/home/cookiewo/public_html/tienda/modules/psgdpr/views/templates/front/customerAccount.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f767d89276c82_49857459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e2cef9480ba60affb5d50c02ccff86e9dd3b6001' => 
    array (
      0 => '/home/cookiewo/public_html/tienda/modules/psgdpr/views/templates/front/customerAccount.tpl',
      1 => 1601123436,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f767d89276c82_49857459 (Smarty_Internal_Template $_smarty_tpl) {
?>
<a class="col-lg-4 col-md-6 col-sm-6 col-xs-12" id="psgdpr-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['front_controller']->value, ENT_QUOTES, 'UTF-8');?>
">
    <span class="link-item">
        <i class="material-icons">account_box</i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'GDPR - Personal data','mod'=>'psgdpr'),$_smarty_tpl ) );?>

    </span>
</a>
<?php }
}
