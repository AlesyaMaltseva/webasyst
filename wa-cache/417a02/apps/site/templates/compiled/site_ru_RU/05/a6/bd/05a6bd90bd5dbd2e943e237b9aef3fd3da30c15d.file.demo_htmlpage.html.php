<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 22:50:14
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\site\templates\actions\frontend\includes\demo_htmlpage.html" */ ?>
<?php /*%%SmartyHeaderCode:12624543566a417af646def3-15691100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05a6bd90bd5dbd2e943e237b9aef3fd3da30c15d' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\site\\templates\\actions\\frontend\\includes\\demo_htmlpage.html',
      1 => 1734434941,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12624543566a417af646def3-15691100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'wa_backend_url' => 0,
    'page_id' => 0,
    'domain_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417af6482907_66011312',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417af6482907_66011312')) {function content_6a417af6482907_66011312($_smarty_tpl) {?><figure><img src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-apps/site/img/magic-wand.png"></figure>

<p><?php echo sprintf_wp('Start filling your site with content by <a href="%s">editing this page</a>.',((string)$_smarty_tpl->tpl_vars['wa_backend_url']->value)."site/htmleditor/page/".((string)$_smarty_tpl->tpl_vars['page_id']->value)."/?domain_id=".((string)$_smarty_tpl->tpl_vars['domain_id']->value));?>
</p>
<?php }} ?>