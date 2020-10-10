<?php
/* Smarty version 3.1.33, created on 2020-10-01 22:03:35
  from '/home/cookiewo/public_html/tienda/modules/blockreassurance/views/templates/admin/tabs/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f767c678b5101_16414892',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad99f4a338c271957bbfbcf75d51a41b668da980' => 
    array (
      0 => '/home/cookiewo/public_html/tienda/modules/blockreassurance/views/templates/admin/tabs/content.tpl',
      1 => 1601393314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_5f767c678b5101_16414892 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
