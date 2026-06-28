<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 22:46:17
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\site\themes\default\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:11846644436a417a095f2087-68450130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdc0d3250a20830df07f3ec8576a5cdbb752efa8' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\site\\themes\\default\\footer.html',
      1 => 1765875363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11846644436a417a095f2087-68450130',
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
  'unifunc' => 'content_6a417a09605da7_30165282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417a09605da7_30165282')) {function content_6a417a09605da7_30165282($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\OSPanel\\home\\webasyst.local\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
?><div class="copyright small">
    &copy; <?php echo smarty_modifier_wa_datetime(time(),"Y");?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</a>
</div>
<?php }} ?>