<?php
/* Smarty version 3.1.33, created on 2020-10-01 22:03:36
  from '/home/cookiewo/public_html/tienda/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/url.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f767c683f7835_91671634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee32283bcf622f44c7ae46efcd3ecc97c6078c5a' => 
    array (
      0 => '/home/cookiewo/public_html/tienda/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/url.tpl',
      1 => 1601393314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f767c683f7835_91671634 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="form-group psr-url <?php if ((isset($_smarty_tpl->tpl_vars['block']->value) && $_smarty_tpl->tpl_vars['block']->value['type_link'] != $_smarty_tpl->tpl_vars['LINK_TYPE_URL']->value) || !isset($_smarty_tpl->tpl_vars['block']->value)) {?> inactive<?php }?>" data-type="url">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
        <div class="text-right">
            <label class="control-label">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'URL','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

            </label>
        </div>
    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
?>
        <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4 content_by_lang lang-<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
 <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] != $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>inactive<?php }?>"
             data-type="url" data-lang="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['language']->value['id_lang'],'htmlall','UTF-8' ));?>
">
            <div class="input-group col-xs-12 col-sm-12 col-md-7 col-lg-12 psrea-flex">
                <div class="input-group-append">
                    <span class="input-group-text picto-url"><i class="material-icons">link</i></span>
                </div>
                <input class="block_url form-control" type="text" name="URL"
                       value="<?php if (isset($_smarty_tpl->tpl_vars['block']->value)) {
ob_start();
echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];
$_prefixVariable4 = ob_get_clean();
echo $_smarty_tpl->tpl_vars['allblockByShop']->value[$_prefixVariable4][$_smarty_tpl->tpl_vars['block']->value['id_psreassurance']]['url'];
}?>">
            </div>
        </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <div class="clearfix"></div>
</div>
<?php }
}
