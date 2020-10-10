<?php
/* Smarty version 3.1.33, created on 2020-09-29 04:07:34
  from '/home/cookiewo/public_html/tienda/store/themes/new-theme/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f72eb468d2b32_23326366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd170c0f77d218256a3f2d5943e03ca92cde7c2c' => 
    array (
      0 => '/home/cookiewo/public_html/tienda/store/themes/new-theme/template/content.tpl',
      1 => 1600972048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f72eb468d2b32_23326366 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
