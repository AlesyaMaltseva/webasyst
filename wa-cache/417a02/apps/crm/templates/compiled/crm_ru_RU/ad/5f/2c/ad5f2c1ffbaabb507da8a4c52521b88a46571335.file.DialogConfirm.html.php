<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:10:17
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\crm\templates\actions\DialogConfirm.html" */ ?>
<?php /*%%SmartyHeaderCode:7184886736a417fa9188459-11155550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad5f2c1ffbaabb507da8a4c52521b88a46571335' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\crm\\templates\\actions\\DialogConfirm.html',
      1 => 1697178878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7184886736a417fa9188459-11155550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'text' => 0,
    'ok_button' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417fa9198478_10300731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417fa9198478_10300731')) {function content_6a417fa9198478_10300731($_smarty_tpl) {?><div class="dialog crm-confirm-dialog" id="crm-confirm-dialog"><div class="dialog-background"></div><div class="dialog-body"><header class="dialog-header"><h1><?php if (!empty($_smarty_tpl->tpl_vars['title']->value)){?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }else{ ?>%title%<?php }?></h1></header><div class="dialog-content js-content"><?php if (!empty($_smarty_tpl->tpl_vars['text']->value)){?><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<?php }else{ ?>%text%<?php }?></div><footer class="dialog-footer"><div class="crm-actions"><button class="button red crm-button js-confirm-dialog js-confirm-button custom-mr-8"><?php if (!empty($_smarty_tpl->tpl_vars['ok_button']->value)){?><?php echo $_smarty_tpl->tpl_vars['ok_button']->value;?>
<?php }else{ ?>%button%<?php }?></button><a class="button light-gray js-close-dialog js-cancel-dialog" href="javascript:void(0);">Отмена</a><span class="icon loading crm-loading" style="margin-top: 7px; margin-left: 2px; display: none;"><i class="fas fa-spinner fa-spin" ></i></span></div></footer></div></div>
<?php }} ?>