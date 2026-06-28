<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:08:17
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\blog\themes\default\main.html" */ ?>
<?php /*%%SmartyHeaderCode:12953466946a417f318c59f7-24184390%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01f69d657067fee594b2b9c2cf882b2ca5bcde02' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\blog\\themes\\default\\main.html',
      1 => 1765875363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12953466946a417f318c59f7-24184390',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'posts' => 0,
    'wa' => 0,
    'wa_app_url' => 0,
    'wa_backend_url' => 0,
    'breadcrumbs' => 0,
    'breadcrumb' => 0,
    'content' => 0,
    'frontend_action' => 0,
    'output' => 0,
    'rss' => 0,
    'timeline' => 0,
    'year' => 0,
    'item' => 0,
    'plugin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417f3192da83_41288399',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417f3192da83_41288399')) {function content_6a417f3192da83_41288399($_smarty_tpl) {?><div class="row gap32 cols2 cols1-mobile">
    <div class="col w9">
        <div class="content with-sidebar" itemscope itemtype="http://schema.org/WebPage">

            <?php if (empty($_smarty_tpl->tpl_vars['posts']->value)&&$_smarty_tpl->tpl_vars['wa']->value->currentUrl()==$_smarty_tpl->tpl_vars['wa_app_url']->value){?>

                <div class="welcome">
                    <h1>Добро пожаловать в ваш новый блог!</h1>
                    <p><?php echo sprintf('Начните с <a href="%s">создания записи</a> в бекенде блога.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('blog/'));?>
</p>
                </div>

            <?php }else{ ?>

                <!-- internal navigation breadcrumbs -->
                <?php if (isset($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?>
                    <div class="breadcrumbs" itemprop="breadcrumb">
                        <?php if ($_smarty_tpl->tpl_vars['wa']->value->globals('isMyAccount')){?>
                            
                            <?php $_smarty_tpl->createLocalArrayVariable('breadcrumbs', null, 0);
$_smarty_tpl->tpl_vars['breadcrumbs']->value[0] = null;?>
                        <?php }?>
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


            <?php }?>
        </div>
    </div>
    <div class="col w3">
        
        <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_action']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
            <?php if (!empty($_smarty_tpl->tpl_vars['output']->value['nav_before'])){?><?php echo $_smarty_tpl->tpl_vars['output']->value['nav_before'];?>
<?php }?>
        <?php } ?>

        <nav class="sidebar" role="navigation">

            <!-- SUBSCRIBE -->
            <?php $_smarty_tpl->tpl_vars['rss'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->rssUrl(), null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['rss']->value){?>
                <div class="subscribe">
                    <ul>
                        <li><a class="wa-flex align-items-center" href="<?php echo $_smarty_tpl->tpl_vars['rss']->value;?>
" title="RSS"><i class="icon16 rss"></i>RSS</a></li>
                        
                    </ul>
                </div>
            <?php }?>

            <!-- TIMELINE navigation -->
            <?php $_smarty_tpl->tpl_vars['timeline'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->timeline(), null, 0);?>
            <?php if (!empty($_smarty_tpl->tpl_vars['timeline']->value)){?>

                <ul class="tree timeline">
                <?php $_smarty_tpl->tpl_vars['year'] = new Smarty_variable(null, null, 0);?>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['year_month'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['timeline']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['item']->iteration=0;
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['year_month']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['item']->iteration++;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['item']->last = $_smarty_tpl->tpl_vars['item']->iteration === $_smarty_tpl->tpl_vars['item']->total;
?>
                    <?php if ($_smarty_tpl->tpl_vars['year']->value!=$_smarty_tpl->tpl_vars['item']->value['year']){?>
                        <?php if (!$_smarty_tpl->tpl_vars['item']->first){?>
                            </ul>
                            </li>
                        <?php }?>
                        <li<?php if ($_smarty_tpl->tpl_vars['item']->value['year_selected']){?> class="selected"<?php }?>>
                        <?php $_smarty_tpl->tpl_vars['year'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value['year'], null, 0);?>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['year_link'];?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['item']->value['year'])===null||$tmp==='' ? 'NULL' : $tmp);?>
</a>
                        <ul class="tree<?php if ($_smarty_tpl->tpl_vars['item']->last){?> wa-mb-0<?php }?>">
                    <?php }?>
                    <li <?php if ($_smarty_tpl->tpl_vars['item']->value['selected']){?>class="selected"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" title="<?php echo _w("%d post","%d posts",$_smarty_tpl->tpl_vars['item']->value['count']);?>
"<?php if ($_smarty_tpl->tpl_vars['item']->last){?> class="wa-mb-0"<?php }?>><?php echo _ws(date("F",gmmktime(0,0,0,$_smarty_tpl->tpl_vars['item']->value['month'],1)));?>
</a>
                    </li>
                    <?php if ($_smarty_tpl->tpl_vars['item']->last){?>
                        </ul>
                        </li>
                    <?php }?>
                <?php } ?>
                </ul>

            <?php }?>

            <!-- PLUGINS -->
            
            <?php  $_smarty_tpl->tpl_vars['output'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['output']->_loop = false;
 $_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontend_action']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['output']->key => $_smarty_tpl->tpl_vars['output']->value){
$_smarty_tpl->tpl_vars['output']->_loop = true;
 $_smarty_tpl->tpl_vars['plugin']->value = $_smarty_tpl->tpl_vars['output']->key;
?>
                <?php if (!empty($_smarty_tpl->tpl_vars['output']->value['sidebar'])){?>
                    <hr>
                    <div class="<?php echo $_smarty_tpl->tpl_vars['plugin']->value;?>
">
                        <?php echo $_smarty_tpl->tpl_vars['output']->value['sidebar'];?>

                    </div>
                <?php }?>
            <?php } ?>


            

        </nav>
    </div>
</div>
<?php }} ?>