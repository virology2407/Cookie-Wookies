<?php
/* Smarty version 3.1.33, created on 2020-10-01 22:03:35
  from '/home/cookiewo/public_html/tienda/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/language.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f767c67e3edf0_49476151',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c8cba8755c97f364575d1fbe5879c001fbccd95' => 
    array (
      0 => '/home/cookiewo/public_html/tienda/modules/blockreassurance/views/templates/admin/tabs/content/config_elements/language.tpl',
      1 => 1601393314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f767c67e3edf0_49476151 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
<div class="form-group">
    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-3">
        <div class="text-right">
            <label class="control-label">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Languages','d'=>'Modules.Blockreassurance.Admin'),$_smarty_tpl ) );?>

            </label>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-4">
        <div class="input-group col-lg-12">
            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-12">
                <select class="custom-select" name="psr-language">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'lang');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['lang']->value) {
?>
                        <option <?php if ($_smarty_tpl->tpl_vars['lang']->value['id_lang'] == $_smarty_tpl->tpl_vars['defaultFormLanguage']->value) {?>selected="selected"<?php }?>
                                value="<?php echo $_smarty_tpl->tpl_vars['lang']->value['id_lang'];?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['lang']->value['name'],'htmlall','UTF-8' ));?>
</option>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?php }
}
}
