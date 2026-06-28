<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:08:11
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\hub\themes\default\head.html" */ ?>
<?php /*%%SmartyHeaderCode:12734078906a417f2b49e944-48802551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c7d553ec0c8ce3e5f5bc3791c2722f97bcd0b95' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\hub\\themes\\default\\head.html',
      1 => 1770819010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12734078906a417f2b49e944-48802551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_active_theme_url' => 0,
    'wa_theme_version' => 0,
    'wa_static_url' => 0,
    'wa' => 0,
    'wa_app_static_url' => 0,
    'frontend_head' => 0,
    '_' => 0,
    'theme_settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417f2b4bd9e5_59387162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417f2b4bd9e5_59387162')) {function content_6a417f2b4bd9e5_59387162($_smarty_tpl) {?><link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
default.hub.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" type="text/css">
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-apps/hub/css/glyphs.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet" type="text/css">

<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/redactor/2/redactor.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
">
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/redactor/2/redactor.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<?php if (substr($_smarty_tpl->tpl_vars['wa']->value->locale(),0,2)!='en'){?><script src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/redactor/2/<?php echo substr($_smarty_tpl->tpl_vars['wa']->value->locale(),0,2);?>
.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><?php }?>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/lazy.load.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
default.hub.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
"></script>
<script type="text/javascript">
    $.hub.locale = $.extend($.hub.locale || {}, {
        'Insert code block': "Вставить блок кода",
        'Insert quote': "Вставить цитату",
        'Insert': "Вставить"
    });
</script>

<!-- plugin hook: 'frontend_head' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_head']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['color_scheme']!='light'){?>
    <style>
        @media (prefers-color-scheme: dark) {
            i.h-glyph16:not(.selected), i.h-glyph32:not(.selected) {
                filter: invert(1);
            }
        }
    </style>
<?php }?>
<?php }} ?>