<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:08:11
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\hub\themes\default\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:13009756266a417f2b65d113-57204135%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '800242a5f8235ea12d2acf706972f4922e5c0c39' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\hub\\themes\\default\\footer.html',
      1 => 1765875363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13009756266a417f2b65d113-57204135',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'wa' => 0,
    'frontend_footer' => 0,
    '_' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417f2b66cf95_72450702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417f2b66cf95_72450702')) {function content_6a417f2b66cf95_72450702($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\OSPanel\\home\\webasyst.local\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
?><div class="copyright small">
    &copy; <?php echo smarty_modifier_wa_datetime(time(),"Y");?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</a>
</div>

<!-- hub plugin hook: 'frontend_footer' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_footer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>
<?php }} ?>