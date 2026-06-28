<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:08:17
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\blog\themes\default\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1516295356a417f3186e5a5-47006579%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c143b208686598708e16dc8be0a776be9e5da98' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\blog\\themes\\default\\header.html',
      1 => 1678097371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1516295356a417f3186e5a5-47006579',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'blog' => 0,
    'is_search' => 0,
    'theme_settings' => 0,
    'page' => 0,
    'wa_app_url' => 0,
    'blog_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417f318a4ee3_49479194',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417f318a4ee3_49479194')) {function content_6a417f318a4ee3_49479194($_smarty_tpl) {?><ul class="pages">

    <?php  $_smarty_tpl->tpl_vars['blog'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['blog']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->blog->blogs(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['blog']->key => $_smarty_tpl->tpl_vars['blog']->value){
$_smarty_tpl->tpl_vars['blog']->_loop = true;
?>
        <li class="<?php if ($_smarty_tpl->tpl_vars['wa']->value->globals('blog_id')==$_smarty_tpl->tpl_vars['blog']->value['id']&&empty($_smarty_tpl->tpl_vars['is_search']->value)){?>selected<?php }?>">
            <a href="<?php echo $_smarty_tpl->tpl_vars['blog']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['blog']->value['name'];?>
</a>
        </li>
        <?php }
if (!$_smarty_tpl->tpl_vars['blog']->_loop) {
?>
        <li>
            <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->blog->url();?>
">Все записи</a>
        </li>
    <?php } ?>

    <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['header_links']!='blog-pages'){?>
        
        <?php  $_smarty_tpl->tpl_vars['page'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['page']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['wa']->value->blog->pages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['page']->key => $_smarty_tpl->tpl_vars['page']->value){
$_smarty_tpl->tpl_vars['page']->_loop = true;
?>
            <li<?php if (strlen($_smarty_tpl->tpl_vars['page']->value['url'])>1&&strstr($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),$_smarty_tpl->tpl_vars['page']->value['url'])){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
</a></li>
        <?php } ?>
    <?php }?>

</ul>

<!-- search -->
<form method="get" action="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
" class="search wa-flex-fill">
    <div class="search-wrapper">
        <input type="search" name="query" <?php if (!empty($_smarty_tpl->tpl_vars['blog_query']->value)){?>value="<?php echo $_smarty_tpl->tpl_vars['blog_query']->value;?>
"<?php }?> placeholder="Найти запись">
        <button type="submit">
            <svg width="28" height="28" viewBox="0 0 28 28" xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin">
                <use xlink:href="#img-find"></use>
            </svg>
        </button>
    </div>
</form>


<?php }} ?>