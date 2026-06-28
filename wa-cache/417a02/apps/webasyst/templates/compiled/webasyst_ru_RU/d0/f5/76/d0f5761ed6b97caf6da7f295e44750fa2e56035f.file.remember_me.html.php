<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:03:43
         compiled from "C:\OSPanel\home\webasyst.local\wa-system\login\templates\login\backend\remember_me.html" */ ?>
<?php /*%%SmartyHeaderCode:1699645576a417e1f22e300-04418645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0f5761ed6b97caf6da7f295e44750fa2e56035f' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-system\\login\\templates\\login\\backend\\remember_me.html',
      1 => 1541778420,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1699645576a417e1f22e300-04418645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_api_oauth' => 0,
    'is_onetime_password_auth_type' => 0,
    'input_name' => 0,
    'checked' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417e1f240384_61857821',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417e1f240384_61857821')) {function content_6a417e1f240384_61857821($_smarty_tpl) {?><?php if (empty($_smarty_tpl->tpl_vars['is_api_oauth']->value)){?>
<div class="field field-remember-me"<?php if ($_smarty_tpl->tpl_vars['is_onetime_password_auth_type']->value){?> style="display:none;"<?php }?>>
    <div class="value">
        <label>
            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="0">
            <input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
" value="1" <?php if ($_smarty_tpl->tpl_vars['checked']->value){?>checked="checked"<?php }?>> Запомнить меня
        </label>
    </div>
</div>
<?php }?>
<?php }} ?>