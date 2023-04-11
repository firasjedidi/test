<?php
/* Smarty version 4.2.1, created on 2023-04-08 17:44:35
  from 'module:priceviewstemplatesadminc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64318be3c73fe2_12032131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d286bf9805c6b86173935255dfc70ce24572507' => 
    array (
      0 => 'module:priceviewstemplatesadminc',
      1 => 1680968670,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64318be3c73fe2_12032131 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['mesg']->value != null) {?>
    <div class="alert alert-success" role="alert">
     <p><?php echo $_smarty_tpl->tpl_vars['mesg']->value;?>
</p>
  </div>
<?php } else { ?>

<?php }?>
<form action="" method="post">

    <div class="form-group">
        <label  class="form-control-label" for="input1">price</label>
        <input type="number" name="price"  value="<?php echo $_smarty_tpl->tpl_vars['price']->value;?>
" class="form-control" id="input1" required />
    </div>
    <div class="form-group">
     <button type="submit" class="btn btn-primary">save</button>
    </div>
</form><?php }
}
