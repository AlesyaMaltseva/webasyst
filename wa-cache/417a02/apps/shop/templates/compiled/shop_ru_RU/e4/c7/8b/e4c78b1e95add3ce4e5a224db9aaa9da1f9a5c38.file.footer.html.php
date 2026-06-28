<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 22:48:10
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\shop\themes\default\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:6472466426a417a7a0b48a5-76429254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4c78b1e95add3ce4e5a224db9aaa9da1f9a5c38' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\shop\\themes\\default\\footer.html',
      1 => 1765875363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6472466426a417a7a0b48a5-76429254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'wa' => 0,
    'frontend_footer' => 0,
    '_' => 0,
    'currencies' => 0,
    'theme_settings' => 0,
    'c_code' => 0,
    'currency' => 0,
    'c' => 0,
    'language' => 0,
    'lang_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417a7a0f4276_48357206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417a7a0f4276_48357206')) {function content_6a417a7a0f4276_48357206($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\OSPanel\\home\\webasyst.local\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
?><div class="copyright small">
    &copy; <?php echo smarty_modifier_wa_datetime(time(),"Y");?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</a>
</div>

<!-- shop plugin hook: 'frontend_footer' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_footer']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

<?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1||!empty($_smarty_tpl->tpl_vars['theme_settings']->value['language_toggle'])){?>
    <aside class="currency-toggle">
        <?php if (count($_smarty_tpl->tpl_vars['currencies']->value)>1){?>
            <select id="currency">
                <?php $_smarty_tpl->tpl_vars['currency'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->currency(), null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_smarty_tpl->tpl_vars['c_code'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
 $_smarty_tpl->tpl_vars['c_code']->value = $_smarty_tpl->tpl_vars['c']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['c_code']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['c_code']->value==$_smarty_tpl->tpl_vars['currency']->value){?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['c']->value['title'];?>
</option>
                <?php } ?>
            </select>
            <script>
                $("#currency").change(function () {
                    var url = location.href;
                    if (url.indexOf('?') == -1) {
                        url += '?';
                    } else {
                        url += '&';
                    }
                    location.href = url + 'currency=' + $(this).val();
                });
            </script>
        <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['language_toggle'])){?>
            <select id="language">
                <?php  $_smarty_tpl->tpl_vars['lang_name'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['lang_name']->_loop = false;
 $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable;
 $_from = waLocale::getAll('name'); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['lang_name']->key => $_smarty_tpl->tpl_vars['lang_name']->value){
$_smarty_tpl->tpl_vars['lang_name']->_loop = true;
 $_smarty_tpl->tpl_vars['language']->value = $_smarty_tpl->tpl_vars['lang_name']->key;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['language']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['wa']->value->locale()==$_smarty_tpl->tpl_vars['language']->value){?> selected<?php }?>><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['lang_name']->value, ENT_QUOTES, 'UTF-8', true);?>
</option>
                <?php } ?>
            </select>
            <script>
                $("#language").change(function () {
                    let url = location.href;
                    if (url.indexOf('?') == -1) {
                        url += '?';
                    } else {
                        url += '&';
                    }
                    location.href = url + 'locale=' + $(this).val();
                });
            </script>
        <?php }?>
    </aside>
<?php }?>
<?php }} ?>