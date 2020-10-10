<?php
/* Smarty version 3.1.33, created on 2020-10-01 22:03:36
  from '/home/cookiewo/public_html/tienda/modules/blockreassurance/views/templates/admin/addons-suggestion.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f767c687dfc40_62976652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2e0787fc0008355dcc9e0032cfcffbed9b7d738' => 
    array (
      0 => '/home/cookiewo/public_html/tienda/modules/blockreassurance/views/templates/admin/addons-suggestion.tpl',
      1 => 1601393314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f767c687dfc40_62976652 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="module-addons-suggestion">
    <div class="suggestion-icon">
    </div>
    <div class="suggestion-category-details">
        <div>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Want to go further?','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>

        </div>
        <div class="category-label">
            <?php echo $_smarty_tpl->tpl_vars['addons_category']->value['name'];?>

        </div>
        <div class="marketplace-label">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Addons Marketplace','d'=>'Admin.Global'),$_smarty_tpl ) );?>

        </div>
    </div>
    <div class="suggestion-category-description">
        <?php echo $_smarty_tpl->tpl_vars['addons_category']->value['description'];?>

    </div>
    <div class="suggestion-link">
        <a target="_blank" class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['addons_category']->value['link'];?>
">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Discover all modules','d'=>'Admin.Modules.Feature'),$_smarty_tpl ) );?>

        </a>
    </div>
</div>
<?php }
}
