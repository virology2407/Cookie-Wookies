<?php
/* Smarty version 3.1.33, created on 2020-10-01 22:00:27
  from '/home/cookiewo/public_html/tienda/themes/classic/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f767bab090d92_51985056',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd164a20ac13bba71a6394bd68dda9f539749bb23' => 
    array (
      0 => '/home/cookiewo/public_html/tienda/themes/classic/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1600972048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f767bab090d92_51985056 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
