<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:06:10
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\photos\themes\default\my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:11564857316a417eb264d0e5-84846472%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76a3fffe564c8cdb4012a353ed3c8a7402aba84d' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\photos\\themes\\default\\my.nav.html',
      1 => 1540900260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11564857316a417eb264d0e5-84846472',
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
  'unifunc' => 'content_6a417eb265dec4_39844412',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417eb265dec4_39844412')) {function content_6a417eb265dec4_39844412($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['my_app']->value==$_smarty_tpl->tpl_vars['wa']->value->app()){?>
    <li class="photos <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='profile'){?>selected<?php }?>">
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/my');?>
">Мой профиль</a>
    </li>
<?php }?><?php }} ?>