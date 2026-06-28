<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:10:16
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\crm\templates\actions\SpaLayout.html" */ ?>
<?php /*%%SmartyHeaderCode:7094399746a417fa8bf0eb1-48232058%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f924f1052b147e501fbb3a7715d1758dacedc020' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\crm\\templates\\actions\\SpaLayout.html',
      1 => 1758175165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7094399746a417fa8bf0eb1-48232058',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_app_static_url' => 0,
    'wa' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417fa8c03925_59839960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417fa8c03925_59839960')) {function content_6a417fa8c03925_59839960($_smarty_tpl) {?><script type="module" crossorigin src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
client/index.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
client/index.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
">
<script type="module">
    const documentElement = window.document.documentElement;
    const deselectMenuItems = () => {
        const menuItems = document.querySelectorAll('#c-sidebar-block .menu li, #c-sidebar-bricks .brick');
        menuItems.forEach(e => e.classList.remove('selected'));
    };
    // Events from SPA
    documentElement.addEventListener('spa:navigateType', (e) => {
        if (e.detail.menuItemType === 'contacts') {
            deselectMenuItems();
            document.querySelector('#c-sidebar-block .menu li[data-id="contacts"]').classList.add('selected');
        } else if (e.detail.menuItemType === 'deals') {
            if (e.detail.query.all_funnels) {
                deselectMenuItems();
                document.querySelector('#c-sidebar-block ul li[data-id="all_funnels"]').classList.add('selected');
            } else if (e.detail.query.funnel) {
                deselectMenuItems();
                const brick = document.querySelector('#c-sidebar-bricks [data-id="'+e.detail.query.funnel+'"]');
                if (brick) {
                    brick.classList.add('selected');
                } else {
                    document.querySelector('#c-sidebar-block ul li[data-id="all_funnels"]').classList.add('selected');
                }
            }
        }
    });
    documentElement.addEventListener('spa:reloadSidebar', () => {
        $.crm.sidebar.reload();
    });
    documentElement.addEventListener('spa:showReviewWidget', () => {
        $.crm.showReviewWidget();
    });
    // Events from SSR
    $(document).on('wa_funnel_save', () => {
        if ('emitter' in window) {
            emitter.emit('environment:reloadFunnels');
        }
    });
    $(document).on('wa_tags_save', () => {
        if ('emitter' in window) {
            emitter.emit('environment:reloadTags');
        }
    });
</script>

<div id="app"></div>
<?php }} ?>