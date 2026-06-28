<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:08:11
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\site\themes\default\error.html" */ ?>
<?php /*%%SmartyHeaderCode:20418592426a417f2b14f9a5-05187730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a52e9ce6f977ce5eb990ea33f19968e72e028a71' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\site\\themes\\default\\error.html',
      1 => 1540900260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20418592426a417f2b14f9a5-05187730',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'error_code' => 0,
    'error_message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417f2b15e5f9_71859365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417f2b15e5f9_71859365')) {function content_6a417f2b15e5f9_71859365($_smarty_tpl) {?><h1>
	<?php if ($_smarty_tpl->tpl_vars['error_code']->value){?><?php echo $_smarty_tpl->tpl_vars['error_code']->value;?>
. <?php }?>
	<?php if ($_smarty_tpl->tpl_vars['error_message']->value){?><?php echo $_smarty_tpl->tpl_vars['error_message']->value;?>
<?php }else{ ?>Ошибка<?php }?>
</h1>
Запрашиваемый ресурс недоступен.
<?php }} ?>