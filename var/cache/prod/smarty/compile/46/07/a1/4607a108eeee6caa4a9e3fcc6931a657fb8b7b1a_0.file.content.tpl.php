<?php
/* Smarty version 4.2.1, created on 2023-04-08 16:50:15
  from 'C:\wamp64\www\test\admin733iexp5jhh9rqu6fvd\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64317f279af293_37199730',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4607a108eeee6caa4a9e3fcc6931a657fb8b7b1a' => 
    array (
      0 => 'C:\\wamp64\\www\\test\\admin733iexp5jhh9rqu6fvd\\themes\\default\\template\\content.tpl',
      1 => 1678447298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64317f279af293_37199730 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
