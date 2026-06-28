<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:06:09
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\hub\themes\default\my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:11584244536a417eb11c38e2-60952739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9866f20bcd7e3fbe61feea73ff372dd15248930' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\hub\\themes\\default\\my.nav.html',
      1 => 1540900260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11584244536a417eb11c38e2-60952739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_app' => 0,
    'wa' => 0,
    'my_nav_selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417eb11cdc85_91914833',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417eb11cdc85_91914833')) {function content_6a417eb11cdc85_91914833($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="hub <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/my');?>
">Мой профиль</a>
    </li>
<?php }?><?php }} ?>