<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:08:11
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\hub\themes\default\main.html" */ ?>
<?php /*%%SmartyHeaderCode:9585069796a417f2b56d7b4-11413600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ab6b73adbf2b9ca5e1257f239dd662bbf85daa2' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\hub\\themes\\default\\main.html',
      1 => 1765875363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9585069796a417f2b56d7b4-11413600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontend_header' => 0,
    '_' => 0,
    'topics' => 0,
    'wa' => 0,
    'wa_app_url' => 0,
    'wa_backend_url' => 0,
    'breadcrumbs' => 0,
    'breadcrumb' => 0,
    'content' => 0,
    'user' => 0,
    'hub' => 0,
    'category' => 0,
    'comments_stream' => 0,
    'c' => 0,
    'staff' => 0,
    's' => 0,
    'frontend_nav' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417f2b5f6cd8_78865806',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417f2b5f6cd8_78865806')) {function content_6a417f2b5f6cd8_78865806($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\OSPanel\\home\\webasyst.local\\wa-system\\vendors\\smarty3\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\OSPanel\\home\\webasyst.local\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
?><!-- plugin hook: 'frontend_header' -->

<?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_header']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

<div class="row gap32 cols2 cols1-mobile">
    <div class="col w9">
        <div class="content with-sidebar" itemscope itemtype="http://schema.org/WebPage">

            <?php if (empty($_smarty_tpl->tpl_vars['topics']->value)&&$_smarty_tpl->tpl_vars['wa']->value->currentUrl()==$_smarty_tpl->tpl_vars['wa_app_url']->value){?>

            <?php if ($_smarty_tpl->tpl_vars['wa']->value->setting('welcome')){?>
                
                <div class="welcome">
                    <h1>Добро пожаловать в ваш новый хаб!</h1>
                    <p><?php echo sprintf('Пожалуйста, <a href="%s">завершите настройку</a> приложения в бекенде.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('hub/?action=welcome'));?>
</p>
                </div>

                
                <script>(function() { "use strict";
                        $('.maincontent a:not(.welcome a), :input').click(false);
                    })();</script>

            <?php }elseif(waRequest::param('hub_id')){?>
                
                <div class="welcome">
                    <h1>Добро пожаловать в ваш новый хаб!</h1>
                    <p><?php echo sprintf('Начните с <a href="%s">создания новой темы</a>.',($_smarty_tpl->tpl_vars['wa_app_url']->value).('add/'));?>
</p>
                </div>
            <?php }else{ ?>
                
            <?php }?>

            <?php }else{ ?>

            <?php if (isset($_smarty_tpl->tpl_vars['breadcrumbs']->value)){?>
                <div class="breadcrumbs" itemprop="breadcrumb">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
">Все темы</a> <span class="rarr">&rarr;</span>
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
"><?php echo htmlspecialchars((string)(($tmp = @$_smarty_tpl->tpl_vars['breadcrumb']->value['name'])===null||$tmp==='' ? '(без названия)' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</a> <span class="rarr">&rarr;</span>
                        <?php }?>
                    <?php } ?>
                </div>
            <?php }?>

                <?php echo $_smarty_tpl->tpl_vars['content']->value;?>


            <?php }?>
        </div>
    </div>
    <div class="col w3">
        <nav class="sidebar" role="navigation">

            <div class="userbox leadbox">
                <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?>
                    <p class="small">

                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/author',array('id'=>$_smarty_tpl->tpl_vars['user']->value['id']));?>
" title="Мои темы"><img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['photo_url_96'];?>
" class="userpic" alt="<?php echo $_smarty_tpl->tpl_vars['wa']->value->user()->getName();?>
"></a>
                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['user']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                        <?php if (!empty($_smarty_tpl->tpl_vars['hub']->value['params']['kudos'])){?>
                            <br>
                            <strong class="kudos<?php if ($_smarty_tpl->tpl_vars['user']->value['rate']>0){?> positive<?php }elseif($_smarty_tpl->tpl_vars['user']->value['rate']<0){?> negative<?php }?>" title="<?php echo htmlspecialchars((string)_w('%d kudo','%d kudos',$_smarty_tpl->tpl_vars['user']->value['rate']), ENT_QUOTES, 'UTF-8', true);?>
"><?php if ($_smarty_tpl->tpl_vars['user']->value['rate']>=0){?>+<?php }else{ ?>&minus;<?php }?><?php echo abs($_smarty_tpl->tpl_vars['user']->value['rate']);?>
</strong>
                        <?php }?>
                    </p>
                <?php }?>
                <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/add');?>
">
                    <?php if (!empty($_smarty_tpl->tpl_vars['category']->value)){?>
                        <input type="hidden" name="category" value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
">
                    <?php }?>
                    <button type="submit" class="large">Новая тема</button>
                </form>

            </div>

            <?php if ($_smarty_tpl->tpl_vars['wa']->value->user()->isAuth()){?>
                <ul class="menu-v">
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/author',array('id'=>$_smarty_tpl->tpl_vars['user']->value['id']));?>
">Мои темы<span class="count"><?php echo $_smarty_tpl->tpl_vars['user']->value['topics_count'];?>
</span></a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/authorReplies',array('id'=>$_smarty_tpl->tpl_vars['user']->value['id']));?>
">Мои ответы<span class="count"><?php echo $_smarty_tpl->tpl_vars['user']->value['comments_count'];?>
</span></a>
                    </li>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('/frontend/authorFollowing',array('id'=>$_smarty_tpl->tpl_vars['user']->value['id']));?>
">Избранное <span class="count"><i class="icon16 star"></i></span></a>
                    </li>
                </ul>
            <?php }?>

            <!-- last comments -->
            <?php $_smarty_tpl->tpl_vars['comments_stream'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->hub->comments(10), null, 0);?>
            <?php if (!empty($_smarty_tpl->tpl_vars['comments_stream']->value)){?>
                <aside class="hub-aside-nav">
                    <h5>Последние ответы</h5>
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['c'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['c']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comments_stream']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['c']->key => $_smarty_tpl->tpl_vars['c']->value){
$_smarty_tpl->tpl_vars['c']->_loop = true;
?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['wa']->value->getUrl('hub/frontend/topic',array('id'=>$_smarty_tpl->tpl_vars['c']->value['topic']['id'],'topic_url'=>$_smarty_tpl->tpl_vars['c']->value['topic']['url']));?>
#comment<?php echo $_smarty_tpl->tpl_vars['c']->value['id'];?>
">
                                    <?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['c']->value['text']),100);?>

                                </a>
                                <span class="hint"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['c']->value['datetime'],'humandatetime');?>
</span>
                            </li>
                        <?php } ?>
                    </ul>
                </aside>
            <?php }?>

            <!-- hub staff -->
            <?php $_smarty_tpl->tpl_vars['staff'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->hub->staff(), null, 0);?>
            <?php if (!empty($_smarty_tpl->tpl_vars['staff']->value)){?>
                <aside class="hub-aside-nav">
                    <h5>Сотрудники</h5>
                    <ul>
                        <?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['staff']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value){
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
author/<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
/">
                                    <img src="<?php echo $_smarty_tpl->tpl_vars['s']->value['photo_url_50'];?>
" class="userpic" alt="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                                    <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['s']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                                    <?php if (!empty($_smarty_tpl->tpl_vars['s']->value['badge'])){?>
                                        <span class="staff"<?php if (!empty($_smarty_tpl->tpl_vars['s']->value['badge_color'])){?> style="background-color: <?php echo $_smarty_tpl->tpl_vars['s']->value['badge_color'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['s']->value['badge'];?>
</span>
                                    <?php }?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                </aside>
            <?php }?>

            <!-- plugin hook: 'frontend_nav' -->
            
            <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_nav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

            
            
        </nav>
    </div>
</div>
<?php }} ?>