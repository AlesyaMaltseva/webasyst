<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 22:48:20
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\photos\themes\default\header.html" */ ?>
<?php /*%%SmartyHeaderCode:10134015316a417a840a5075-12908830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '377c96e8a839e7f14062c1595abc04d0a3eeb7aa' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\photos\\themes\\default\\header.html',
      1 => 1540900260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10134015316a417a840a5075-12908830',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_url' => 0,
    'frontend_sidebar' => 0,
    'item' => 0,
    'theme_settings' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417a840c6305_98293278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417a840c6305_98293278')) {function content_6a417a840c6305_98293278($_smarty_tpl) {?><ul class="pages">
    
    <li <?php if ($_smarty_tpl->tpl_vars['wa']->value->currentUrl()==$_smarty_tpl->tpl_vars['wa_app_url']->value){?> class="selected"<?php }?>>
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
">Все фотографии</a>
    </li>
    <li <?php if ($_smarty_tpl->tpl_vars['wa']->value->param('action')!='page'&&$_smarty_tpl->tpl_vars['wa']->value->param('action')!='album'&&$_smarty_tpl->tpl_vars['wa']->value->param('hash')=='favorites'){?> class="selected"<?php }?>>
        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
favorites/">Избранное</a>
    </li>
    
    <!-- plugins -->
    
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin_id']->value = $_smarty_tpl->tpl_vars['item']->key;
?><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['menu'])){?>
        <li><?php echo $_smarty_tpl->tpl_vars['item']->value['menu'];?>
</li>
    <?php }?><?php } ?>

    
    <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']!='photos-pages'){?>
        
        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->photos->pages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
            <li<?php if (strlen($_smarty_tpl->tpl_vars['page']->value['url'])>1&&strstr($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),$_smarty_tpl->tpl_vars['page']->value['url'])){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
</a></li>
        <?php } ?>
    <?php }?>

</ul>
<?php }} ?>