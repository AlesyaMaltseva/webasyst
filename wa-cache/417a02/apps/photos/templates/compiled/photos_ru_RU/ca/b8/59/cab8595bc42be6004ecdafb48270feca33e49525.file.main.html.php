<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 22:48:20
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\photos\themes\default\main.html" */ ?>
<?php /*%%SmartyHeaderCode:10818168716a417a840e5ff2-86677325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cab8595bc42be6004ecdafb48270feca33e49525' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\photos\\themes\\default\\main.html',
      1 => 1678097371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10818168716a417a840e5ff2-86677325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontend_layout' => 0,
    'item' => 0,
    'action' => 0,
    'breadcrumbs' => 0,
    'wa' => 0,
    'breadcrumb' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417a840fe8a4_16179207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417a840fe8a4_16179207')) {function content_6a417a840fe8a4_16179207($_smarty_tpl) {?><!-- plugin hook -->

<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_layout']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><?php if (!empty($_smarty_tpl->tpl_vars['item']->value['header'])){?><?php echo $_smarty_tpl->tpl_vars['item']->value['header'];?>
<?php }?><?php } ?>

<article class="content" itemscope itemtype="http://schema.org/<?php if ($_smarty_tpl->tpl_vars['action']->value=='photo'){?>Photograph<?php }else{ ?>WebPage<?php }?>">
    <?php if (!empty($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?>
        <?php if ($_smarty_tpl->tpl_vars['wa']->value->globals('isMyAccount')){?>
            
            <?php $_smarty_tpl->createLocalArrayVariable('breadcrumbs', null, 0);
$_smarty_tpl->tpl_vars['breadcrumbs']->value[0] = null;?>
        <?php }?>
        <div class="breadcrumbs" itemprop="breadcrumb">
            <?php  $_smarty_tpl->tpl_vars['breadcrumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['breadcrumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['breadcrumbs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['breadcrumb']->key => $_smarty_tpl->tpl_vars['breadcrumb']->value){
$_smarty_tpl->tpl_vars['breadcrumb']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['breadcrumb']->value){?>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['breadcrumb']->value['url'];?>
"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['breadcrumb']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</a> <span class="chevron right"></span>
                <?php }?>
            <?php } ?>
        </div>
    <?php }?>

    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


</article>
<?php }} ?>