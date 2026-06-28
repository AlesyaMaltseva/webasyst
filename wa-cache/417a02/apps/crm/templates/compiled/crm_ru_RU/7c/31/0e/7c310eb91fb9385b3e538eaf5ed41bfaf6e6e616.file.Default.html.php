<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 23:10:16
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\crm\templates\layouts\Default.html" */ ?>
<?php /*%%SmartyHeaderCode:2406214926a417fa8dfea70-14812446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c310eb91fb9385b3e538eaf5ed41bfaf6e6e616' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\crm\\templates\\layouts\\Default.html',
      1 => 1766661290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2406214926a417fa8dfea70-14812446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'wa_app_static_url' => 0,
    'wa_url' => 0,
    '_locale_string' => 0,
    'wa_app_url' => 0,
    'wa_backend_url' => 0,
    '_confirm_template' => 0,
    '_alert_template' => 0,
    'backend_assets' => 0,
    'item' => 0,
    'spa_api_token' => 0,
    'spa_locale' => 0,
    'can_init_call' => 0,
    'is_sms_configured' => 0,
    'is_email_configured' => 0,
    'contact_list_columns' => 0,
    'contact_list_sort' => 0,
    'deal_funnel_columns' => 0,
    'deal_list_filter' => 0,
    'deal_list_sort' => 0,
    'funnel_bricks' => 0,
    'access_rights' => 0,
    'shop_app_exists' => 0,
    'hide_sidebar' => 0,
    'sidebar' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417fa8ee04b1_24477951',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417fa8ee04b1_24477951')) {function content_6a417fa8ee04b1_24477951($_smarty_tpl) {?><?php if (!is_callable('smarty_block_wa_js')) include 'C:\\OSPanel\\home\\webasyst.local\\wa-system/vendors/smarty-plugins\\block.wa_js.php';
?><?php $_smarty_tpl->tpl_vars['_locale_string'] = new Smarty_variable(substr($_smarty_tpl->tpl_vars['wa']->value->locale(),0,2), null, 0);?><!DOCTYPE html><html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title><?php echo $_smarty_tpl->tpl_vars['wa']->value->appName();?>
 &mdash; <?php echo $_smarty_tpl->tpl_vars['wa']->value->accountName();?>
</title><?php echo $_smarty_tpl->tpl_vars['wa']->value->css();?>

    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/jquery/jquery-ui.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/timepicker/jquery.timepicker.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/imgareaselect/imgareaselect-default.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/crmDialog/crmDialog.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/crmElastic/elastic.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/crm.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
css/crm2.css?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/redactor/2/redactor.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
" rel="stylesheet">
    <!--<link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/css/wa/design.css?<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
" rel="stylesheet">-->
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-tagsinput/jquery.tagsinput.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/ibutton/jquery.ibutton.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/waGallery/waGallery.css" type="text/css" rel="stylesheet">

    <?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js/min/vendor.min.js")); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js/min/vendor.min.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-3.6.0.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery/jquery-migrate-1.2.1.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/jquery/jquery-ui.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-ui/jquery.ui.progressbar.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery.store.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/farbtastic/farbtastic.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/timepicker/jquery.timepicker.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/imgareaselect/jquery.imgareaselect.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/d3/d3.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/redactor/2/redactor.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/ace/ace.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.elrte.ace.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/jquery-tagsinput/jquery.tagsinput.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/ibutton/jquery.ibutton.min.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/editor2.js
        <?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/prettify/prettify.js
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js/min/vendor.min.js"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/wa.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/fontawesome/fontawesome-all.min.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><script src="https://unpkg.com/@lottiefiles/lottie-player@0.4.0/dist/tgs-player.js"></script><?php if ($_smarty_tpl->tpl_vars['_locale_string']->value!='en'){?><script src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/jquery/i18n/datepicker-<?php echo $_smarty_tpl->tpl_vars['_locale_string']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['wa']->value->version();?>
"></script><script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/redactor/2/<?php echo $_smarty_tpl->tpl_vars['_locale_string']->value;?>
.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script><?php }?>
    <?php $_smarty_tpl->smarty->_tag_stack[] = array('wa_js', array('file'=>"js/min/crm.min.js")); $_block_repeat=true; echo smarty_block_wa_js(array('file'=>"js/min/crm.min.js"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/jquery.shiftSelectable.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/crmDialog/crmDialog.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/crmElastic/elastic.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/jquery.sticky.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/crm.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/crm.autocomplete.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/sidebar.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/deal.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/deal.close.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/deal.edit.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/deal.changeClient.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/deals.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/deals.export.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/deal.operation.assignTags.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/invoice.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/invoices.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/reminder.form.edit.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/reminders.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/log.live.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/call.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/call.associateDealDialog.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/call.initContactDialog.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/call.redirectDialog.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/message/message.deleteLink.mixin.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/message/message.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/message/message.conversation.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/message/messages.operations.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/message/message.sendEmailDialog.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/message/message.sendSmsDialog.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/message/message.imSourceMessageDialog.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/message/message.imSourceSendMessageDialog.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/contact.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/contacts.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/contacts.sidebar.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/contacts.operations.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/contacts.operation.addToSegments.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/contacts.operation.excludeFromSegment.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/contacts.operation.export.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/contacts.operation.assignTags.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/contacts.operation.assignResponsible.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/contacts.operation.delete.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/contact.segment.edit.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/contact.segment.addContacts.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/contact.add.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/contact.import.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/contact.import.upload.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/contact.merge.duplicates.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/contact.merge.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/contact.merger.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/report/reports.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/search/search.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/search/jquery.combobox.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/search/period.dialog.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/settings.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/companies.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/currencies.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/funnel.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/funnels.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/field.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/field.edit.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/field.edit.subfield.values.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/field.delete.confirm.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/source/sources.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/source/email.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/source/email.connectionTestBlock.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/source/im.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/source/blocks/block.with_contact.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/source/blocks/block.create_deal.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/source/blocks/block.responsible.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/forms.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/form.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/form.field.edit.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/form.button.edit.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/form.paragraph.edit.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/form.agreement_checkbox.edit.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/general.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/personal.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/notifications.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/payments.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/reasons.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/vaults.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/messagesBlock.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/shop.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/pbx.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/tags.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/settings/templates.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/emailPersonalSettings.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/websocket.js
        <?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
js/waGallery/waGallery.js
    <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_wa_js(array('file'=>"js/min/crm.min.js"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', "_confirm_template", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("../actions/DialogConfirm.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php $_smarty_tpl->_capture_stack[0][] = array('default', "_alert_template", null); ob_start(); ?><?php echo $_smarty_tpl->getSubTemplate ("../actions/DialogAlert.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><script>var wa_app = "<?php echo $_smarty_tpl->tpl_vars['wa']->value->app();?>
";( function($) {window.wa_url = <?php echo json_encode($_smarty_tpl->tpl_vars['wa_url']->value);?>
;$.crm.lang = <?php echo json_encode($_smarty_tpl->tpl_vars['_locale_string']->value);?>
;$.crm.app_url = <?php echo json_encode($_smarty_tpl->tpl_vars['wa_app_url']->value);?>
;$.crm.backend_url = <?php echo json_encode($_smarty_tpl->tpl_vars['wa_backend_url']->value);?>
;$.crm.is_debug = <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->debug());?>
;$.crm.title.pattern = "%s — <?php echo strtr($_smarty_tpl->tpl_vars['wa']->value->accountName(false), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";$.crm.confirm.template = <?php echo json_encode($_smarty_tpl->tpl_vars['_confirm_template']->value);?>
;$.crm.alert.template = <?php echo json_encode($_smarty_tpl->tpl_vars['_alert_template']->value);?>
;$.crm.locales = {"unsaved_dialog_title": "Есть несохраненные изменения","unsaved_dialog_text": "Несохраненные изменения будут потеряны, если покинуть страницу. Вы уверены?","unsaved_dialog_button": "Покинуть","close": "Закрыть","cancel": "Отмена"};$.crm.runBackgroundWorker({url: $.crm.app_url + '?module=source&action=emailWorker&background_process=1',delay: 120000});})(jQuery);</script><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['backend_assets']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<?php } ?><?php echo $_smarty_tpl->tpl_vars['wa']->value->js();?>
<script>window.appState = {baseUrl: '<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
',backendUrl: '<?php echo $_smarty_tpl->tpl_vars['wa_backend_url']->value;?>
',apiEndpoint: '<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
api.php',token: '<?php echo $_smarty_tpl->tpl_vars['spa_api_token']->value;?>
',lang: '<?php echo $_smarty_tpl->tpl_vars['spa_locale']->value;?>
',can_init_call: <?php echo $_smarty_tpl->tpl_vars['can_init_call']->value;?>
,is_sms_configured: <?php echo $_smarty_tpl->tpl_vars['is_sms_configured']->value;?>
,is_email_configured: <?php echo $_smarty_tpl->tpl_vars['is_email_configured']->value;?>
,contact_list_columns: <?php echo $_smarty_tpl->tpl_vars['contact_list_columns']->value;?>
,contact_list_sort: <?php echo $_smarty_tpl->tpl_vars['contact_list_sort']->value;?>
,deal_funnel_columns: <?php echo $_smarty_tpl->tpl_vars['deal_funnel_columns']->value;?>
,deal_list_filter: <?php echo $_smarty_tpl->tpl_vars['deal_list_filter']->value;?>
,deal_list_sort: <?php echo $_smarty_tpl->tpl_vars['deal_list_sort']->value;?>
,funnel_bricks: <?php echo $_smarty_tpl->tpl_vars['funnel_bricks']->value;?>
,rights: <?php echo $_smarty_tpl->tpl_vars['access_rights']->value;?>
,user: {id: <?php echo $_smarty_tpl->tpl_vars['wa']->value->user()->getID();?>
,name: '<?php echo strtr($_smarty_tpl->tpl_vars['wa']->value->user()->getName(), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',userpic: '<?php echo $_smarty_tpl->tpl_vars['wa']->value->user()->getPhoto(64);?>
'},counters: {contacts: {total: 0}},shop_app_exists: <?php echo json_encode($_smarty_tpl->tpl_vars['shop_app_exists']->value);?>
};window.crmAction = {setTitle: $.crm.title.set};$.fn.uiSortable = $.fn.sortable;</script></head><body><div id="wa"><?php echo $_smarty_tpl->tpl_vars['wa']->value->header();?>
<div id="wa-app" class="flexbox wrap-mobile"><?php if (empty($_smarty_tpl->tpl_vars['hide_sidebar']->value)){?><div class="sidebar-main-wrapper"><div class="sidebar width-adaptive overflow-visible flexbox mobile-friendly c-sidebar-wrapper" id="c-sidebar-wrapper"><?php echo $_smarty_tpl->tpl_vars['sidebar']->value;?>
</div></div><?php }?><div class="content blank c-shadowed-content"><div id="c-spaContainer-block"></div><div id="c-content-block"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div></div><script>(function($) {const $content = $("#c-content-block");const $spaContainer = $('#c-spaContainer-block');/* Teleport SPA to the correct block */if ($content.find("#app").length)$content.contents().detach().appendTo($spaContainer);/* Main content router */$.crm.content = new ContentRouter({$content: $content,$spaContainer: $spaContainer});})(jQuery);</script></div><script>( function($) {$.crm.is_page_loaded = true;$.get('?module=cronjobsStart');})(jQuery);</script></div></body></html>
<?php }} ?>