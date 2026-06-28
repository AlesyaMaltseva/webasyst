<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:10:17
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\crm\templates\actions\DialogAlert.html" */ ?>
<?php /*%%SmartyHeaderCode:10546572226a417fa91b0eb0-07744538%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '062af94c4a9bc3262a6a8725b6fe811b20ad1c12' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\crm\\templates\\actions\\DialogAlert.html',
      1 => 1692700275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10546572226a417fa91b0eb0-07744538',
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
  'unifunc' => 'content_6a417fa91c1398_36880632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417fa91c1398_36880632')) {function content_6a417fa91c1398_36880632($_smarty_tpl) {?><div class="dialog crm-confirm-dialog" id="crm-confirm-dialog"><div class="dialog-background"></div><div class="dialog-body"><header class="dialog-header"><h1><?php if (!empty($_smarty_tpl->tpl_vars['title']->value)){?><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
<?php }else{ ?>%title%<?php }?></h1></header><div class="dialog-content js-content"><?php if (!empty($_smarty_tpl->tpl_vars['text']->value)){?><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<?php }else{ ?>%text%<?php }?></div><footer class="dialog-footer"><div class="crm-actions"><button class="button js-close-dialog"><?php if (!empty($_smarty_tpl->tpl_vars['ok_button']->value)){?><?php echo $_smarty_tpl->tpl_vars['ok_button']->value;?>
<?php }else{ ?>%button%<?php }?></button></div></footer></div></div>
<?php }} ?>