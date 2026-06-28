<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:08:17
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\blog\themes\default\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:528559496a417f3194da18-23163465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f295f3cbcbdfc33c671c9bfbd5d3cde2743257d' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\blog\\themes\\default\\footer.html',
      1 => 1765875363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '528559496a417f3194da18-23163465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417f31964df9_02947347',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417f31964df9_02947347')) {function content_6a417f31964df9_02947347($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\OSPanel\\home\\webasyst.local\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
?><div class="copyright small">
    &copy; <?php echo smarty_modifier_wa_datetime(time(),"Y");?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</a>
</div>
<?php }} ?>