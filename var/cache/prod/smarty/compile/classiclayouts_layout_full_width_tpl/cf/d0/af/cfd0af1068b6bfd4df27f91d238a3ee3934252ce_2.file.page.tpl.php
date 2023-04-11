<?php
/* Smarty version 4.2.1, created on 2023-04-08 16:44:20
  from 'C:\wamp64\www\test\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64317dc4a7d4f5_15000058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cfd0af1068b6bfd4df27f91d238a3ee3934252ce' => 
    array (
      0 => 'C:\\wamp64\\www\\test\\themes\\classic\\templates\\page.tpl',
      1 => 1671890850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64317dc4a7d4f5_15000058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49455304164317dc4a73555_08976266', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_208960819064317dc4a74d18_65966820 extends Smarty_Internal_Block
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
class Block_174150587664317dc4a73ff0_10597862 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208960819064317dc4a74d18_65966820', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_67833065264317dc4a787f6_18305802 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_83655259864317dc4a79725_13039226 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_109346945364317dc4a77da0_20494371 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67833065264317dc4a787f6_18305802', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_83655259864317dc4a79725_13039226', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_23054958864317dc4a7b917_88538596 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_145577326164317dc4a7af28_22879363 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_23054958864317dc4a7b917_88538596', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_49455304164317dc4a73555_08976266 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_49455304164317dc4a73555_08976266',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_174150587664317dc4a73ff0_10597862',
  ),
  'page_title' => 
  array (
    0 => 'Block_208960819064317dc4a74d18_65966820',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_109346945364317dc4a77da0_20494371',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_67833065264317dc4a787f6_18305802',
  ),
  'page_content' => 
  array (
    0 => 'Block_83655259864317dc4a79725_13039226',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_145577326164317dc4a7af28_22879363',
  ),
  'page_footer' => 
  array (
    0 => 'Block_23054958864317dc4a7b917_88538596',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174150587664317dc4a73ff0_10597862', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109346945364317dc4a77da0_20494371', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_145577326164317dc4a7af28_22879363', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
