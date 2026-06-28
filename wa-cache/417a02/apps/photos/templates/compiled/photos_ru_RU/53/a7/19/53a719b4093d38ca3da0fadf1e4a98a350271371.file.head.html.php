<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 22:48:19
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\photos\themes\default\head.html" */ ?>
<?php /*%%SmartyHeaderCode:923731566a417a83f20a47-20436871%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53a719b4093d38ca3da0fadf1e4a98a350271371' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\photos\\themes\\default\\head.html',
      1 => 1540900260,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '923731566a417a83f20a47-20436871',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_active_theme_url' => 0,
    'wa_theme_version' => 0,
    'wa' => 0,
    'wa_static_url' => 0,
    'nofollow' => 0,
    'frontend_assets' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417a83f378b5_45099002',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417a83f378b5_45099002')) {function content_6a417a83f378b5_45099002($_smarty_tpl) {?><!-- photos app css -->
<link href="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
default.photos.css?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
" rel="stylesheet" type="text/css">

<!-- js -->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
js/jquery.wookmark.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
js/jquery.waitforimages.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
default.photos.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<?php if ($_smarty_tpl->tpl_vars['wa']->value->photos->config('enable_2x')){?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['wa_static_url']->value;?>
wa-content/js/jquery-plugins/jquery.retina.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script type="text/javascript">$(window).load(function(){ $('#photo-list img,.photo img,.albums img').retina()});</script>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['nofollow']->value){?>
    <!-- "nofollow" for duplicate photo pages (context dependent) -->
    <meta name="robots" content="nofollow" />
<?php }?>


<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_assets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['item']->value)){?><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<?php }?><?php } ?>
<?php }} ?>