<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:09:10
         compiled from "C:\OSPanel\home\webasyst.local\wa-system\webasyst\templates\actions\dashboard\DashboardSidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:17419647326a417f663f0396-67743088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75c48b3ba4f70ff3786539c65fc7fba60bd2a888' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-system\\webasyst\\templates\\actions\\dashboard\\DashboardSidebar.html',
      1 => 1725103514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17419647326a417f663f0396-67743088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'widgets' => 0,
    'app_id' => 0,
    'apps' => 0,
    'app_widgets' => 0,
    'widget' => 0,
    'wa_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417f664328b2_47499247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417f664328b2_47499247')) {function content_6a417f664328b2_47499247($_smarty_tpl) {?><script>( function($) {let $widgets_list_wrapper = $('.widgets-list-wrapper');$widgets_list_wrapper.on('hover', function () {let $element = $(this),element_class = 'hide-scrollbar';if($element.hasClass(element_class)){$element.removeClass(element_class)}else{$element.addClass(element_class)}});$(document).trigger('wa_dashboard_sidebar_loaded');})(jQuery);</script><div data-installed-widgets><h2 class="flexbox">Добавить виджеты</h2><p class="widgets-list-header hint align-center">Перетащите виджеты на дашборд и расположите их так, как удобно лично вам. Расположение виджетов у каждого пользователя Webasyst индивидуально.</p><p class="align-center custom-mt-0 custom-mb-32"><?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->getRights('installer','backend')){?> <a class="button webasyst-magic-wand" href="./installer/store/?filters%5Btype%5D=widget"><i class="icon"></i> Виджеты в Инсталлере</a><?php }?></p><section class="d-widgets-list-block"><?php  $_smarty_tpl->tpl_vars['app_widgets'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['app_widgets']->_loop = false;
 $_smarty_tpl->tpl_vars['app_id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['app_widgets']->key => $_smarty_tpl->tpl_vars['app_widgets']->value){
$_smarty_tpl->tpl_vars['app_widgets']->_loop = true;
 $_smarty_tpl->tpl_vars['app_id']->value = $_smarty_tpl->tpl_vars['app_widgets']->key;
?><div class="list-group-wrapper <?php echo $_smarty_tpl->tpl_vars['app_id']->value;?>
-list-group"><?php if ($_smarty_tpl->tpl_vars['app_id']->value!='webasyst'){?><header class="group-header-wrapper"><h5 class="group-header heading"><?php echo $_smarty_tpl->tpl_vars['apps']->value[$_smarty_tpl->tpl_vars['app_id']->value]['name'];?>
</h5></header><?php }?><div class="list-wrapper"><?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['app_widgets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['widget']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['widget']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value){
$_smarty_tpl->tpl_vars['widget']->_loop = true;
 $_smarty_tpl->tpl_vars['widget']->iteration++;
 $_smarty_tpl->tpl_vars['widget']->last = $_smarty_tpl->tpl_vars['widget']->iteration === $_smarty_tpl->tpl_vars['widget']->total;
?><div class="widget-item-wrapper<?php if ($_smarty_tpl->tpl_vars['widget']->last){?> custom-mr-auto<?php }?>"id="list-widget-<?php echo $_smarty_tpl->tpl_vars['widget']->value['widget'];?>
"data-app_id="<?php echo $_smarty_tpl->tpl_vars['widget']->value['app_id'];?>
"data-size="<?php echo $_smarty_tpl->tpl_vars['widget']->value['size'];?>
"data-widget="<?php echo $_smarty_tpl->tpl_vars['widget']->value['widget'];?>
"><div class="image-wrapper"><div class="image-block"><?php if (!empty($_smarty_tpl->tpl_vars['widget']->value['img'])){?><img class="image-item" src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['widget']->value['img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['widget']->value['name'];?>
"><?php }?></div></div><div class="text-block"><?php echo $_smarty_tpl->tpl_vars['widget']->value['name'];?>
</div><a class="add-widget-link" href="javascript:void(0);" title="Добавить виджет"><i class="fas fa-plus"></i></a></div><?php } ?></div></div><?php } ?></section></div>
<?php }} ?>