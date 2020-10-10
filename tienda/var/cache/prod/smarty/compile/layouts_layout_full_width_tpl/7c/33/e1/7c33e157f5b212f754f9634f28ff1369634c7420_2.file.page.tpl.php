<?php
/* Smarty version 3.1.33, created on 2020-09-29 04:05:45
  from '/home/cookiewo/public_html/tienda/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f72ead9da11e1_15383512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c33e157f5b212f754f9634f28ff1369634c7420' => 
    array (
      0 => '/home/cookiewo/public_html/tienda/themes/classic/templates/page.tpl',
      1 => 1600972048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f72ead9da11e1_15383512 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18952093225f72ead9d93131_60647085', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_73431955f72ead9d94f24_55608267 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_20436385825f72ead9d93eb7_97535898 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73431955f72ead9d94f24_55608267', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_5163054815f72ead9d99b38_96884395 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_19322271375f72ead9d9b243_32127145 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_19979774885f72ead9d989a2_36962047 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5163054815f72ead9d99b38_96884395', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19322271375f72ead9d9b243_32127145', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_12795679235f72ead9d9d8f5_37505042 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_7079488605f72ead9d9cc84_69005227 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12795679235f72ead9d9d8f5_37505042', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_18952093225f72ead9d93131_60647085 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_18952093225f72ead9d93131_60647085',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_20436385825f72ead9d93eb7_97535898',
  ),
  'page_title' => 
  array (
    0 => 'Block_73431955f72ead9d94f24_55608267',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_19979774885f72ead9d989a2_36962047',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_5163054815f72ead9d99b38_96884395',
  ),
  'page_content' => 
  array (
    0 => 'Block_19322271375f72ead9d9b243_32127145',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7079488605f72ead9d9cc84_69005227',
  ),
  'page_footer' => 
  array (
    0 => 'Block_12795679235f72ead9d9d8f5_37505042',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20436385825f72ead9d93eb7_97535898', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19979774885f72ead9d989a2_36962047', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7079488605f72ead9d9cc84_69005227', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
