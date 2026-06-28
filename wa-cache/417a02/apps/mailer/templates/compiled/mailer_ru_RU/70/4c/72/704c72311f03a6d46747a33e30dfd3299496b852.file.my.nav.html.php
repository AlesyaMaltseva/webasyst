<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:06:10
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\mailer\themes\default\my.nav.html" */ ?>
<?php /*%%SmartyHeaderCode:19514569706a417eb25b67f2-51964273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '704c72311f03a6d46747a33e30dfd3299496b852' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\mailer\\themes\\default\\my.nav.html',
      1 => 1540900260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19514569706a417eb25b67f2-51964273',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'my_nav_selected' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417eb25c0373_70283945',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417eb25c0373_70283945')) {function content_6a417eb25c0373_70283945($_smarty_tpl) {?>

<li class="mailer <?php if ($_smarty_tpl->tpl_vars['my_nav_selected']->value=='subscriptions'){?>selected<?php }?>">
    <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/mySubscriptions');?>
">Мои подписки</a>
</li>

<?php echo $_smarty_tpl->tpl_vars['wa']->value->globals('isMyAccount',true);?>

<?php }} ?>