<?php
/* Smarty version 3.1.33, created on 2020-09-29 04:05:45
  from '/home/cookiewo/public_html/tienda/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f72ead9d8c514_96450551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '778fbf9dc908649681abbc6d044b29c9c764efcc' => 
    array (
      0 => '/home/cookiewo/public_html/tienda/themes/classic/templates/index.tpl',
      1 => 1600972048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f72ead9d8c514_96450551 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6078685355f72ead9d86c56_02193968', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_4602023175f72ead9d876f9_29134068 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_10673739755f72ead9d895d7_68792312 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_5583679865f72ead9d88a05_41456927 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10673739755f72ead9d895d7_68792312', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_6078685355f72ead9d86c56_02193968 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_6078685355f72ead9d86c56_02193968',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4602023175f72ead9d876f9_29134068',
  ),
  'page_content' => 
  array (
    0 => 'Block_5583679865f72ead9d88a05_41456927',
  ),
  'hook_home' => 
  array (
    0 => 'Block_10673739755f72ead9d895d7_68792312',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4602023175f72ead9d876f9_29134068', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5583679865f72ead9d88a05_41456927', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
