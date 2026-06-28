<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:08:11
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\hub\themes\default\header.html" */ ?>
<?php /*%%SmartyHeaderCode:15781144466a417f2b526208-98000264%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc7c9e75002543d8b30c4449be4cb2335dade4e5' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\hub\\themes\\default\\header.html',
      1 => 1680170709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15781144466a417f2b526208-98000264',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_url' => 0,
    'theme_settings' => 0,
    'wa' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417f2b53f237_70808449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417f2b53f237_70808449')) {function content_6a417f2b53f237_70808449($_smarty_tpl) {?><!-- info pages -->
<ul class="pages">
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
">Все темы</a></li>
    <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']!='hub-pages'){?>
        
        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->hub->pages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
            <li<?php if (strlen($_smarty_tpl->tpl_vars['page']->value['url'])>1&&strstr($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),$_smarty_tpl->tpl_vars['page']->value['url'])){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
</a></li>
        <?php } ?>
    <?php }?>
</ul>

<!-- topic search form -->
<form method="get" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/search');?>
" class="search wa-flex-fill">
    <div class="search-wrapper">
        <input type="search" name="query" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['wa']->value->request('query'), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Найти ответ">
        <button type="submit">
            <svg width="28" height="28" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin">
                <use xlink:href="#img-find"></use>
            </svg>
        </button>
    </div>
</form>
<?php }} ?>