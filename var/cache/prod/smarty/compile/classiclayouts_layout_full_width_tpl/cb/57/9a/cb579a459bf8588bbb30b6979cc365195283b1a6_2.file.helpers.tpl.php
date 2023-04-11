<?php
/* Smarty version 4.2.1, created on 2023-04-08 16:44:20
  from 'C:\wamp64\www\test\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_64317dc4df4949_25523848',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb579a459bf8588bbb30b6979cc365195283b1a6' => 
    array (
      0 => 'C:\\wamp64\\www\\test\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1671890850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64317dc4df4949_25523848 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\test\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\cb\\57\\9a\\cb579a459bf8588bbb30b6979cc365195283b1a6_2.file.helpers.tpl.php',
    'uid' => 'cb579a459bf8588bbb30b6979cc365195283b1a6',
    'call_name' => 'smarty_template_function_renderLogo_19023328064317dc4deb058_16314310',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_19023328064317dc4deb058_16314310 */
if (!function_exists('smarty_template_function_renderLogo_19023328064317dc4deb058_16314310')) {
function smarty_template_function_renderLogo_19023328064317dc4deb058_16314310(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_19023328064317dc4deb058_16314310 */
}
