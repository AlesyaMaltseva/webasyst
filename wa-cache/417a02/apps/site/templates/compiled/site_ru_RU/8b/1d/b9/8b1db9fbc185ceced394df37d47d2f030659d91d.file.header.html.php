<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 22:46:17
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\site\themes\default\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1009525866a417a094fd7c8-99275194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b1db9fbc185ceced394df37d47d2f030659d91d' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\site\\themes\\default\\header.html',
      1 => 1760511348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1009525866a417a094fd7c8-99275194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'pages' => 0,
    'p' => 0,
    'selected_node' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417a09537778_16268796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417a09537778_16268796')) {function content_6a417a09537778_16268796($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['pages'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->site->pages(), null, 0);?>
<?php if (count($_smarty_tpl->tpl_vars['pages']->value)){?>
    <ul class="pages">
        
        <?php $_smarty_tpl->tpl_vars['selected_node'] = new Smarty_variable(null, null, 0);?>
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <?php if (strstr($_smarty_tpl->tpl_vars['wa']->value->currentUrl(),$_smarty_tpl->tpl_vars['p']->value['url'])&&strlen($_smarty_tpl->tpl_vars['p']->value['url'])>=strlen(ifset($_smarty_tpl->tpl_vars['selected_node']->value,'url',''))){?>
                <?php $_smarty_tpl->tpl_vars['selected_node'] = new Smarty_variable($_smarty_tpl->tpl_vars['p']->value, null, 0);?>
            <?php }?>
        <?php } ?>
        <?php if (!$_smarty_tpl->tpl_vars['selected_node']->value){?><?php $_smarty_tpl->createLocalArrayVariable('selected_node', null, 0);
$_smarty_tpl->tpl_vars['selected_node']->value['id'] = null;?><?php }?>

        
        <?php  $_smarty_tpl->tpl_vars['p'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['p']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['p']->key => $_smarty_tpl->tpl_vars['p']->value){
$_smarty_tpl->tpl_vars['p']->_loop = true;
?>
            <?php if (ifset($_smarty_tpl->tpl_vars['p']->value,'full_url','')!=''){?> 
                <li<?php if ($_smarty_tpl->tpl_vars['p']->value['id']==$_smarty_tpl->tpl_vars['selected_node']->value['id']){?> class="selected"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['p']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['p']->value['name'];?>
</a></li>
            <?php }?>
        <?php } ?>
    </ul>
<?php }?>
<?php }} ?>