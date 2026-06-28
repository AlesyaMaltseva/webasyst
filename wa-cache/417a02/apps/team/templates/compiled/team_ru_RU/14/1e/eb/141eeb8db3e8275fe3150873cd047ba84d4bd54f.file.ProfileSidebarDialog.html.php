<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:06:58
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\team\templates\actions\profile\ProfileSidebarDialog.html" */ ?>
<?php /*%%SmartyHeaderCode:3548857236a417ee208a545-11288082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '141eeb8db3e8275fe3150873cd047ba84d4bd54f' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\team\\templates\\actions\\profile\\ProfileSidebarDialog.html',
      1 => 1637225471,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3548857236a417ee208a545-11288082',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'options' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417ee20ad532_98821142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417ee20ad532_98821142')) {function content_6a417ee20ad532_98821142($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['options']->value['sectionId'])||empty($_smarty_tpl->tpl_vars['options']->value['userId'])){?>
    <p class="text-red">Отсутствует обязательный параметр.</p>
<?php }elseif($_smarty_tpl->tpl_vars['options']->value['sectionId']!=='calendar'){?>
    <?php echo $_smarty_tpl->tpl_vars['wa']->value->contactProfileSidebar($_smarty_tpl->tpl_vars['options']->value['userId'],array('active_section'=>$_smarty_tpl->tpl_vars['options']->value['sectionId']));?>

<?php }?>

<?php }} ?>