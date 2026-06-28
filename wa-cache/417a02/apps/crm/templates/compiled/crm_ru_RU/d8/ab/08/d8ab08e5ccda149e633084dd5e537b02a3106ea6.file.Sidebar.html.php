<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:10:16
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\crm\templates\actions\Sidebar.html" */ ?>
<?php /*%%SmartyHeaderCode:2873668256a417fa8cd2206-99874509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8ab08e5ccda149e633084dd5e537b02a3106ea6' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\crm\\templates\\actions\\Sidebar.html',
      1 => 1779269215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2873668256a417fa8cd2206-99874509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'is_reload' => 0,
    'deals_has_access' => 0,
    'funnels' => 0,
    'wa_app_url' => 0,
    '_funnel' => 0,
    'contacts_count' => 0,
    'contacts_new_count' => 0,
    'deals_count' => 0,
    'deals_new_count' => 0,
    'reminders_due_count' => 0,
    'reminders_state' => 0,
    'can_manage_invoices' => 0,
    'invoices_count' => 0,
    'invoices_new_count' => 0,
    'calls_has_access' => 0,
    'calls_count' => 0,
    'calls_new_count' => 0,
    'messages_count' => 0,
    'messages_new_count' => 0,
    'backend_sidebar' => 0,
    '_' => 0,
    '_is_admin' => 0,
    'is_premium' => 0,
    'menu_state' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417fa8d66054_76996794',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417fa8d66054_76996794')) {function content_6a417fa8d66054_76996794($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['_is_admin'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->user()->isAdmin($_smarty_tpl->tpl_vars['wa']->value->app()), null, 0);?>

<?php if (!$_smarty_tpl->tpl_vars['is_reload']->value){?>
<nav class="sidebar-mobile-toggle">
    <div class="box align-center">
        <a class="js-toggle-menu" href="javascript:void(0);">
            <i class="fas fa-bars"></i>&nbsp;
            Меню
        </a>
    </div>
</nav>

    <div class="sidebar-body c-sidebar-block" id="c-sidebar-block">
        <?php }?>

        <?php if (!empty($_smarty_tpl->tpl_vars['deals_has_access']->value)){?>

        <div id="c-sidebar-bricks" class="bricks hide-scrollbar">
            <?php  $_smarty_tpl->tpl_vars['_funnel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_funnel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['funnels']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_funnel']->key => $_smarty_tpl->tpl_vars['_funnel']->value){
$_smarty_tpl->tpl_vars['_funnel']->_loop = true;
?>
            <a class="brick full-width text-ellipsis" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
deal/?funnel=<?php echo $_smarty_tpl->tpl_vars['_funnel']->value['id'];?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['_funnel']->value['id'];?>
" data-wa-tooltip-content="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_funnel']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
">
                <span class="icon" style="color: <?php echo $_smarty_tpl->tpl_vars['_funnel']->value['color'];?>
;">
                    <i class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['_funnel']->value['icon'])===null||$tmp==='' ? 'fas fa-briefcase' : $tmp);?>
"></i>
                </span>
                <?php if (isset($_smarty_tpl->tpl_vars['_funnel']->value['deals_count'])){?>
                    <span class="count js-count"><?php echo $_smarty_tpl->tpl_vars['_funnel']->value['deals_count'];?>
</span>
                <?php }?>
                <span>
                    <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_funnel']->value['name'], ENT_QUOTES, 'UTF-8', true);?>

                </span>
            </a>
            <?php } ?>
        </div>
        <div class="c-bricks-expander custom-px-16 custom-mt-8">
            <hr class="width-100 custom-mb-0">
            <a class="js-expand-bricks back" href="javascript:void(0)">
                <span class="icon size-24"><i class="fas fa-arrow-circle-down"></i></span>
            </a>
            <hr class="width-100 custom-mb-0">
        </div>

        <?php }?>

        <div class="c-sidebar-sections box custom-pt-0 hide-scrollbar">
            <ul class="menu large rounded custom-mt-8">
                <li data-id="contacts">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
contact/" data-wa-tooltip-content="Контакты">
                        <?php if (isset($_smarty_tpl->tpl_vars['contacts_count']->value)){?>
                            <span class="count js-count"><?php echo $_smarty_tpl->tpl_vars['contacts_count']->value;?>
</span>
                        <?php }?>
                        <i class="fas fa-users"></i>
                        <span class="name text-ellipsis">Контакты</span>
                        <?php if (!empty($_smarty_tpl->tpl_vars['contacts_new_count']->value)){?>
                            <strong class="c-badge badge small js-indicator"><?php if ($_smarty_tpl->tpl_vars['contacts_new_count']->value<100){?><?php echo $_smarty_tpl->tpl_vars['contacts_new_count']->value;?>
<?php }else{ ?>99+<?php }?></strong>
                        <?php }?>
                    </a>
                </li>

                <?php if (!empty($_smarty_tpl->tpl_vars['deals_has_access']->value)){?>
                    <li data-id="all_funnels">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
deal/?all_funnels=1" data-wa-tooltip-content="Воронки">
                            <?php if (isset($_smarty_tpl->tpl_vars['deals_count']->value)){?>
                                <span class="count js-count"><?php echo $_smarty_tpl->tpl_vars['deals_count']->value;?>
</span>
                            <?php }?>
                            <i class="fas fa-briefcase"></i>
                            <span class="name text-ellipsis">Воронки</span>
                            <?php if (!empty($_smarty_tpl->tpl_vars['deals_new_count']->value)){?>
                                <strong class="c-badge badge small js-indicator"><?php if ($_smarty_tpl->tpl_vars['deals_new_count']->value<100){?><?php echo $_smarty_tpl->tpl_vars['deals_new_count']->value;?>
<?php }else{ ?>99+<?php }?></strong>
                            <?php }?>
                        </a>
                    </li>
                <?php }?>

                <li<?php if (waRequest::param('module')=='reminder'){?> class="selected"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
reminder/" data-wa-tooltip-content="Напоминания">
                        <i class="fas fa-bell"></i>
                        <span class="name text-ellipsis">Напоминания</span>
                        <?php if (!empty($_smarty_tpl->tpl_vars['reminders_due_count']->value)){?>
                            <strong class="c-badge badge small js-indicator<?php if ($_smarty_tpl->tpl_vars['reminders_state']->value!='overdue'){?> indicator <?php echo $_smarty_tpl->tpl_vars['reminders_state']->value;?>
<?php }?>"><?php if ($_smarty_tpl->tpl_vars['reminders_due_count']->value<100){?><?php echo $_smarty_tpl->tpl_vars['reminders_due_count']->value;?>
<?php }else{ ?>99+<?php }?></strong>
                        <?php }?>
                    </a>
                </li>

                <?php if ($_smarty_tpl->tpl_vars['can_manage_invoices']->value){?>
                    <li<?php if (waRequest::param('module')=='invoice'){?> class="selected"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
invoice/" data-wa-tooltip-content="Счета">
                            <?php if (isset($_smarty_tpl->tpl_vars['invoices_count']->value)){?>
                                <span class="count js-count"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['invoices_count']->value)===null||$tmp==='' ? '' : $tmp);?>
</span>
                            <?php }?>
                            <i class="fas fa-receipt"></i>
                            <span class="name text-ellipsis">Счета</span>
                            <?php if (!empty($_smarty_tpl->tpl_vars['invoices_new_count']->value)){?>
                            <strong class="c-badge badge small js-indicator"><?php if ($_smarty_tpl->tpl_vars['invoices_new_count']->value<100){?><?php echo $_smarty_tpl->tpl_vars['invoices_new_count']->value;?>
<?php }else{ ?>99+<?php }?></strong>
                            <?php }?>
                        </a>
                    </li>
                <?php }?>

                <?php if (!empty($_smarty_tpl->tpl_vars['calls_has_access']->value)){?>
                    <li<?php if (waRequest::param('module')=='call'){?> class="selected"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
call/" data-wa-tooltip-content="Звонки">
                            <span class="count"><?php if (isset($_smarty_tpl->tpl_vars['calls_count']->value)){?><?php echo $_smarty_tpl->tpl_vars['calls_count']->value;?>
<?php }?></span>
                            <i class="fas fa-phone-alt"></i>
                            <span class="name text-ellipsis">Звонки</span>
                            <?php if (!empty($_smarty_tpl->tpl_vars['calls_new_count']->value)){?>
                            <strong class="c-badge badge small js-indicator"><?php if ($_smarty_tpl->tpl_vars['calls_new_count']->value<100){?><?php echo $_smarty_tpl->tpl_vars['calls_new_count']->value;?>
<?php }else{ ?>99+<?php }?></strong>
                            <?php }?>
                        </a>
                    </li>
                <?php }?>

                <li<?php if (waRequest::param('module')=='message'){?> class="selected"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
message/" data-wa-tooltip-content="Сообщения">
                        <span class="count hidden"><?php if (isset($_smarty_tpl->tpl_vars['messages_count']->value)){?><?php echo $_smarty_tpl->tpl_vars['messages_count']->value;?>
<?php }?></span>
                        <i class="fas fa-comments"></i>
                        <span class="name">Сообщения</span>
                        <?php if (!empty($_smarty_tpl->tpl_vars['messages_new_count']->value)){?>
                        <strong class="c-badge badge small js-indicator"><?php if ($_smarty_tpl->tpl_vars['messages_new_count']->value<100){?><?php echo $_smarty_tpl->tpl_vars['messages_new_count']->value;?>
<?php }else{ ?>99+<?php }?></strong>
                        <?php }?>
                    </a>
                </li>

                <li<?php if (waRequest::param('module')=='report'){?> class="selected"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
report/" data-wa-tooltip-content="Отчеты">
                        <i class="fas fa-chart-bar"></i>
                        <span class="name">Отчеты</span>
                    </a>
                </li>

                <li<?php if (waRequest::param('module')=='log'){?> class="selected"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
live/" data-wa-tooltip-content="Сейчас">
                        <i class="fas fa-bolt"></i>
                        <span class="name">Сейчас</span>
                    </a>
                </li>

                
                <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['top_li']);?>
<?php } ?>
            </ul>
        </div>
<?php if (!$_smarty_tpl->tpl_vars['is_reload']->value){?>
    </div>

    <div class="sidebar-footer shadowed">
        <div class="box custom-py-0">
            <ul class="menu rounded">
                
                <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_sidebar']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo ifset($_smarty_tpl->tpl_vars['_']->value['bottom_li']);?>
<?php } ?>
                <?php if ($_smarty_tpl->tpl_vars['_is_admin']->value){?>
                    <li<?php if (waRequest::param('module')=='plugins'){?> class="selected"<?php }?>>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
plugins/#/" data-wa-tooltip-content="Плагины">
                            <i class="fas fa-plug"></i>
                            <span class="name">Плагины</span>
                        </a>
                    </li>
                <?php }?>

                <li<?php if (waRequest::param('module')=='settings'){?> class="selected"<?php }?>>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
settings/" data-wa-tooltip-content="Настройки">
                        <i class="fas fa-cog"></i>
                        <span class="name">Настройки</span>
                    </a>
                </li>

                <?php if ($_smarty_tpl->tpl_vars['_is_admin']->value){?>
                    <li class="top-padded">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
upgrade/" data-wa-tooltip-content="Премиум">
                            <i class="fas fa-star<?php if (!$_smarty_tpl->tpl_vars['is_premium']->value){?> text-yellow<?php }?>"></i>
                            <span class="name">Премиум</span>
                        </a>
                    </li>
                <?php }?>

                <li class="top-padded opacity-40">
                    <a href="javascript:void(0);" class="js-toggle-sidebar" data-wa-tooltip-content="Раскрыть меню">
                        <i class="fas fa-caret-left action"></i>
                        <i class="fas fa-caret-right hidden action"></i>
                        <span class="name">Свернуть меню</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['is_reload']->value){?>
<script>
    ( function($) {
        $.crm.sidebar = new CRMSidebar({
            $wrapper: $("#c-sidebar-wrapper"),
            $ui: '<?php echo $_smarty_tpl->tpl_vars['wa']->value->whichUI();?>
',
            menu_state: '<?php echo $_smarty_tpl->tpl_vars['menu_state']->value;?>
'
        });
    })(jQuery);
    <?php if (isset($_smarty_tpl->tpl_vars['contacts_count']->value)){?>
        if (window.appState && 'counters' in window.appState && 'contacts' in window.appState.counters) {
            window.appState.counters.contacts.total = <?php echo $_smarty_tpl->tpl_vars['contacts_count']->value;?>
;
        }
    <?php }?>
</script>
<?php }?>
<?php }} ?>