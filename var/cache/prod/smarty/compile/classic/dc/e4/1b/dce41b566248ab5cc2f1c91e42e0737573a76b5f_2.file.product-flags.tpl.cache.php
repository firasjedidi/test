<?php
/* Smarty version 4.2.1, created on 2023-04-08 16:44:20
  from 'C:\wamp64\www\test\themes\classic\templates\catalog\_partials\product-flags.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64317dc4580881_52433083',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dce41b566248ab5cc2f1c91e42e0737573a76b5f' => 
    array (
      0 => 'C:\\wamp64\\www\\test\\themes\\classic\\templates\\catalog\\_partials\\product-flags.tpl',
      1 => 1671890850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64317dc4580881_52433083 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '87375502364317dc457aad8_51431922';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128833427164317dc457c0b5_82392712', 'product_flags');
?>

<?php }
/* {block 'product_flags'} */
class Block_128833427164317dc457c0b5_82392712 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_128833427164317dc457c0b5_82392712',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <ul class="product-flags js-product-flags">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
$_smarty_tpl->tpl_vars['flag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
$_smarty_tpl->tpl_vars['flag']->do_else = false;
?>
            <li class="product-flag <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php
}
}
/* {/block 'product_flags'} */
}
