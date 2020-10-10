<?php
/* Smarty version 3.1.33, created on 2020-09-29 04:07:26
  from '/home/cookiewo/public_html/tienda/store/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f72eb3e2cbbd8_98773358',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01480d13f3de1f6e029b79d5c5f53473ebefe9e6' => 
    array (
      0 => '/home/cookiewo/public_html/tienda/store/themes/default/template/content.tpl',
      1 => 1600972048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f72eb3e2cbbd8_98773358 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
