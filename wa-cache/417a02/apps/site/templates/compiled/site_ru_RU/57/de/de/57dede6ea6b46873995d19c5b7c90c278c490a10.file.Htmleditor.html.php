<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 22:50:38
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\site\templates\actions\htmleditor\Htmleditor.html" */ ?>
<?php /*%%SmartyHeaderCode:12551719946a417b0e915668-50531297%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57dede6ea6b46873995d19c5b7c90c278c490a10' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\site\\templates\\actions\\htmleditor\\Htmleditor.html',
      1 => 1745664893,
      2 => 'file',
    ),
    '290321a34dfe811420efc00f7e8650cd6eaafea8' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\site\\templates\\actions\\backend\\includes\\unsaved_dialog.html',
      1 => 1742293248,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12551719946a417b0e915668-50531297',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa_url' => 0,
    'wa' => 0,
    'lang' => 0,
    'page' => 0,
    'options' => 0,
    'k' => 0,
    'v' => 0,
    'url' => 0,
    'preview_hash' => 0,
    'url_decoded' => 0,
    'page_route' => 0,
    'wa_app_url' => 0,
    'route_id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417b0ea98788_17975959',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417b0ea98788_17975959')) {function content_6a417b0ea98788_17975959($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\OSPanel\\home\\webasyst.local\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
?>
<script>
    $._waLoading = $.waLoading();
    $._waLoading.show();
    $._waLoading.animate(10000, 95, false);
</script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/ace/ace.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>

<link href="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/redactor/2/redactor.css?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
" rel="stylesheet" type="text/css">
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/redactor/2/redactor.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/redactor/2/<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-wa/editor2.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>
<script async src="<?php echo $_smarty_tpl->tpl_vars['wa_url']->value;?>
wa-content/js/jquery-plugins/fileupload/jquery.fileupload.js?v<?php echo $_smarty_tpl->tpl_vars['wa']->value->version(true);?>
"></script>

<style type="text/css">
    .wa-page-editor { display: flex; justify-content: center;}
    .wa-page-editor #wa-page-form { width: 100%; }
    .wa-page-editor #wa-page-form ul.tabs { padding: 0; }
    .wa-page-editor #wa-page-form .contentbox { padding: 1.5em 0; }
    .wa-editor-core-wrapper .redactor-box { background: var(--background-color-blank); /*overflow: hidden;*/ }
    .wa-editor-core-wrapper .redactor-toolbar { box-shadow: none; border-bottom: 1px solid var(--border-color-soft); background: var(--background-color-blank); }
    .wa-editor-core-wrapper .redactor-layer { border: 0 none; background: var(--background-color-blank); /*max-height: calc(100vh - 21rem);*/}
    .wa-editor-core-wrapper .redactor-switch-box { position: sticky; top: 4rem; z-index: 20; background: var(--background-color-blank);}
    .wa-editor-core-wrapper .redactor-toolbar-box { position: sticky; top: 7em; z-index: 20; }
    .wa-editor-core-wrapper:has(.wa-editor-wysiwyg-html-toggle > .selected > :not(.html)) .wa-editor-upload-img { display: none; }
    .article.htmleditor:has(.wa-editor-core-wrapper .wa-editor-wysiwyg-html-toggle > .selected > .html) { max-width: none; }
</style>
<div class="article htmleditor">
    <div class="article-body">
        <div class="wa-page-editor">
            <form id="wa-page-form" method="post" action="?module=htmlPages&action=saveContent<?php if ($_smarty_tpl->tpl_vars['page']->value){?>&id=<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
<?php }?>">
                <?php if (!empty($_smarty_tpl->tpl_vars['options']->value)){?>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['options']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['v']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                    <?php } ?>
                <?php }?>
                <div class="box contentbox wa-page-gray-toolbar flexbox vertical hidden">
                    <div class="flexbox wrap full-width hidden" style="align-items: center;">
                        <div class="">
                            <h2 class="wa-page-name"><?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['page']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?>Новая страница<?php }?></h2>
                            <?php if (!$_smarty_tpl->tpl_vars['page']->value['status']){?> <span class="wa-page-draft badge light-gray squared smaller">черновик</span><?php }?>
                        </div>
                        <?php if ($_smarty_tpl->tpl_vars['page']->value){?>
                            <ul class="unstyled flexbox space-32 custom-pt-4 custom-mr-16">

                                <!-- plugin hook: 'backend_page_edit.action_button_li' -->
                                
                                

                                <!--<?php if (!empty($_smarty_tpl->tpl_vars['page']->value['update_datetime'])){?>
                                    <li>
                                        <span class="hint bold"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['page']->value['update_datetime'],"humandatetime");?>
</span>
                                    </li>
                                <?php }?>
                                <li>
                                    <a href="javascript:void(0);" class="small js-page-settings-toggle" id="wa-page-settings-toggle">
                                        <i class="fas fa-edit"></i> Настройки страницы
                                    </a>
                                </li>
                                <li>
                                    <a class="small wa-page-delete js-page-delete" href="?module=pages&action=delete">
                                        <i class="fas fa-trash-alt text-red"></i> Удалить
                                    </a>
                                </li>-->
                            </ul>
                        <?php }?>
                        <div class="wa-page-urls small width-100">
                            <?php if ($_smarty_tpl->tpl_vars['page']->value){?>
                                <?php if (!empty($_smarty_tpl->tpl_vars['url']->value)){?>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['full_url'];?>
<?php if (!$_smarty_tpl->tpl_vars['page']->value['status']){?>?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
<?php }?>" title="Предпросмотр" rel="noopener" target="_blank"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['url_decoded']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['url'];?>
</a>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['full_url'];?>
<?php if (!$_smarty_tpl->tpl_vars['page']->value['status']){?>?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
<?php }?>" target="_blank"><i class="fas fa-external-link-alt fa-sm"></i></a>
                                <?php }elseif(!empty($_smarty_tpl->tpl_vars['page']->value['domain'])&&$_smarty_tpl->tpl_vars['page']->value['route']!==null){?>
                                    <?php $_smarty_tpl->tpl_vars['page_route'] = new Smarty_variable(waRouting::clearUrl($_smarty_tpl->tpl_vars['page']->value['route']), null, 0);?>
                                    <a style="text-decoration: line-through;" href="http://<?php echo $_smarty_tpl->tpl_vars['page']->value['domain'];?>
/<?php echo $_smarty_tpl->tpl_vars['page_route']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['full_url'];?>
<?php if (!$_smarty_tpl->tpl_vars['page']->value['status']){?>?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
<?php }?>" title="Предпросмотр" rel="noopener" target="_blank">http://<?php echo $_smarty_tpl->tpl_vars['page']->value['domain'];?>
<?php echo $_smarty_tpl->tpl_vars['page_route']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['page']->value['full_url'];?>
</a>
                                    <a href="http://<?php echo $_smarty_tpl->tpl_vars['page']->value['domain'];?>
/<?php echo $_smarty_tpl->tpl_vars['page_route']->value;?>
<?php echo $_smarty_tpl->tpl_vars['page']->value['full_url'];?>
<?php if (!$_smarty_tpl->tpl_vars['page']->value['status']){?>?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
<?php }?>"><i class="fas fa-external-link-alt fa-sm"></i></a>
                                <?php }?>
                            <?php }?>
                        </div>
                    </div>
                </div>
                <div class="wa-editor-core-wrapper">
                    <div class="flexbox full-width middle redactor-switch-box">
                        <ul class="tabs semibold overflow-dropdown wa-editor-wysiwyg-html-toggle">
                            <li class="selected">
                                <a class="wysiwyg js-is-wa2" href="javascript:void(0);">Визуальный редактор</a>
                            </li>
                            <li><a class="html" href="javascript:void(0);">HTML</a></li>
                        </ul>
                        <div class="wa-cheatsheet">
                            <?php ob_start();?><?php echo (($tmp = @$_smarty_tpl->tpl_vars['page']->value['id'])===null||$tmp==='' ? '' : $tmp);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->tpl_vars['wa']->value->getCheatSheetButton(array('page_id'=>$_tmp1,'hide_common_blocks'=>true));?>

                        </div>
                    </div>

                    <div style="clear:both">
                        <div class="wa-editor-upload-img hidden" title="Загрузить изображение">
                            <i class="fas fa-image"></i>
                        </div>
                        <textarea style="display:none" id="wa-page-content" name="info[content]"><?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['page']->value['content'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></textarea>
                    </div>
                </div>
                <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

            </form>
        </div>
    </div>
</div>
<div class="dialog" id="s-upload-dialog">
    <div class="dialog-background"></div>
    <form id="s-upload-form" class="dialog-body" method="post" action="?module=pages&action=uploadimage&r=2" enctype="multipart/form-data">
        <?php echo $_smarty_tpl->tpl_vars['wa']->value->csrf();?>

        <h3 class="dialog-header">Загрузить изображение</h3>
        <div class="dialog-content">
            <div id="redactor-droparea" style="text-align: center;">
                <p class="hint">
                    Можно загружать только файлы изображений
                </p>
                <input id="s-input-file" type="file" name="file" multiple>
                <input type="hidden" name="path" id="s-upload-path" value="" />
                <div class="loading" style="display:none; margin-top: 10px">
                    <i class="fas fa-spinner fa-spin"></i> Загрузка...
                </div>
            </div>
        </div>
        <div class="dialog-footer">
            <input type="submit" class="button" value="Загрузить">
            <a href="javascript:void(0);" class="js-close-dialog button light-gray">Отмена</a>
        </div>
    </form>
</div>

<div class="dialog" id="s-switch-editor">
    <div class="dialog-background"></div>
    <form class="dialog-body">
        <div class="dialog-content">
            <b>Визуальный редактор может изменить ваш HTML-код.</b><br><br>Это нужно для правильного форматирования текста. Код Smarty может быть испорчен, а устаревшие HTML-теги — заменены на современные.<br><br>Переключиться на визуальный редактор?
        </div>
        <div class="dialog-footer">
            <input type="submit" class="button orange" value="Переключить" />
            <a href="javascript:void(0);" class="js-close-dialog button light-gray">Отмена</a>
        </div>
    </form>
</div>
<div class="drawer site-editor-left-drawer" id="js-left-drawer" data-load-url="<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?module=map&action=overview&domain_id=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['page']->value['domain_id'], ENT_QUOTES, 'UTF-8', true);?>
&sidebar_mode=1&page_id=<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['page']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
&htmleditor=1">
    <div class="drawer-background"></div>
    <div class="drawer-body">
        <a href="javascript:void(0)" class="drawer-close z-20 custom-mr-8 js-close-drawer"><i class="fas fa-times"></i></a>
        <div class="drawer-block custom-p-0">
            <div class="drawer-content">

                <div class="box">
                    <div class="skeleton width-80">
                        <span class="skeleton-header"></span>
                        <span class="skeleton-line"></span>
                        <span class="skeleton-list"></span>
                        <span class="skeleton-list"></span>
                        <span class="skeleton-list"></span>

                        <span class="skeleton-header"></span>
                        <span class="skeleton-line"></span>
                        <span class="skeleton-list"></span>
                        <span class="skeleton-list"></span>
                        <span class="skeleton-list"></span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php /*  Call merged included template "templates/actions/backend/includes/unsaved_dialog.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("templates/actions/backend/includes/unsaved_dialog.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '12551719946a417b0e915668-50531297');
content_6a417b0ea0ee54_27842048($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "templates/actions/backend/includes/unsaved_dialog.html" */?>
    <script type="text/javascript">
        // init editor
        (function ($) {
            $('#wa-page-content').waEditor2({
                lang: $.Redactor.opts.langs["<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"] ? "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" : 'en',
                toolbarFixed: false,
                //toolbarFixedTarget: $('#wa-app'),
                //toolbarFixedTopOffset: 0, // pixels
                smarty_wysiwyg_msg: <?php echo json_encode(_ws('WYSIWYG editor is disabled because page source contains Smarty code tags.'));?>
,
                modification_wysiwyg_msg: $('#s-switch-editor'),
                saveButton: '#wa-page-button',
                upload_img_dialog: '#s-upload-dialog',
                uploadFields: {
                    '_csrf': "<?php echo waRequest::cookie('_csrf','');?>
"
                },
                locales: {
                    'close': "Закрыть"
                }
            });

            const $upload_img_btn = $('.wa-editor-core-wrapper .wa-editor-upload-img').detach();
            $upload_img_btn.addClass('button nobutton gray')
            $('.wa-cheatsheet button:first').before($upload_img_btn);
        })(jQuery);

        $(function () {
            "use strict";
            var lang = <?php echo json_encode($_smarty_tpl->tpl_vars['lang']->value);?>
;
            var wa_url = <?php echo json_encode($_smarty_tpl->tpl_vars['wa_url']->value);?>
;
            var framework_version = <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->version(true));?>
;
            const $page_form = $('#wa-page-form');
            const $page_button_submit = $('.js-page-submit-button');
            updatePreview({
                name:  $(".wa-page-name").text(),
                status: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['page']->value['status'])===null||$tmp==='' ? 1 : $tmp);?>
,
                _private: <?php if (!empty($_smarty_tpl->tpl_vars['page']->value['private'])&&$_smarty_tpl->tpl_vars['page']->value['private']){?>1<?php }else{ ?>0<?php }?>,
                url: $(".wa-page-urls a").attr('href')
             });

            $('.js-show-cheatsheet').addClass('gray');

            const { observeLinks } = initConfirmUnsaved({
                hasUnsaved: () => $page_button_submit.hasClass('yellow'),
                $submit: $page_button_submit
            });
            const observeLinksForConfirmUnsaved = () => observeLinks([
                '.s-site-header a',
                '.site-map-tree-table .page-name',
                '.site-map-tree-table .page-route'
            ]);

            // Left drawer
            (function() {
                let $left_drawer_wrapper = $();
                let drawer;

                $('#js-wa-header-hamburger').on('click', function() {
                    $left_drawer_wrapper = $('#js-left-drawer').clone().appendTo('body');

                    drawer = $.waDrawer({
                        $wrapper: $left_drawer_wrapper,
                        direction: 'left',
                        lock_body_scroll: true,
                        onOpen() {
                            $.site.loadMap(true);
                        },
                        onClose() {
                            return !$('.s-section-settings-dialog.dialog-opened').length;
                        }
                    });
                });

                $.site.loadMap = function (scroll_to = false) {
                    const $drawer_content = $left_drawer_wrapper.find('.drawer-content');
                    $drawer_content.css('pointer-events', 'none');
                    $.get($left_drawer_wrapper.data('load-url') + (scroll_to ? '&scroll_to=1' : '')).then((html) => {
                        $drawer_content.html(html);
                        $drawer_content.css('pointer-events', 'auto');
                        observeLinksForConfirmUnsaved();

                        $(document).trigger("wa_loaded");
                    }, () => {
                        alert($.site.opts.locale.unable_to_load);
                        drawer.hide();
                    });
                };
            }());

            (function() {
                $('#js-wa-header-settings').on('click',  function() {
                    let params = '';
                    <?php if (empty($_smarty_tpl->tpl_vars['page']->value['parent_id'])&&str_replace('/','',$_smarty_tpl->tpl_vars['page']->value['url'])===''){?>
                        params = new URLSearchParams({
                            action: 'sectionSettingsDialog',
                            domain_id: <?php if (!empty($_smarty_tpl->tpl_vars['page']->value['domain_id'])){?><?php echo $_smarty_tpl->tpl_vars['page']->value['domain_id'];?>
<?php }else{ ?>''<?php }?>,
                            page: <?php if (!empty($_smarty_tpl->tpl_vars['page']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
<?php }else{ ?>''<?php }?>,
                            route: <?php echo json_encode($_smarty_tpl->tpl_vars['route_id']->value);?>
,
                            details: 1
                        });
                    <?php }else{ ?>
                        params = new URLSearchParams({
                            action: 'htmlPageSettingsDialog',
                            domain_id: <?php if (!empty($_smarty_tpl->tpl_vars['page']->value['domain_id'])){?><?php echo $_smarty_tpl->tpl_vars['page']->value['domain_id'];?>
<?php }else{ ?>''<?php }?>,
                            parent_id: <?php if (!empty($_smarty_tpl->tpl_vars['page']->value['parent_id'])){?><?php echo $_smarty_tpl->tpl_vars['page']->value['parent_id'];?>
<?php }else{ ?>''<?php }?>,
                            page_id: <?php if (!empty($_smarty_tpl->tpl_vars['page']->value['id'])){?><?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
<?php }else{ ?>''<?php }?>,
                            details: 1
                        });
                    <?php }?>

                    $.site.helper.preventDupeRequest(() => {
                        return $.get('<?php echo $_smarty_tpl->tpl_vars['wa_app_url']->value;?>
?module=map&' + params, function(html) {
                            $.waDialog({
                                html: html
                            });
                        });
                    });

                    return false;
                })
            }());

            initSubmitChanged($page_form);

            <?php if (!empty($_smarty_tpl->tpl_vars['options']->value)&&$_smarty_tpl->tpl_vars['options']->value['is_ajax']){?>
                <?php if ($_smarty_tpl->tpl_vars['page']->value){?>
                    document.title = <?php echo json_encode($_smarty_tpl->tpl_vars['page']->value['name']);?>
 + " — " + <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->appName(false));?>
;
                <?php }else{ ?>
                    document.title = "Новая страница — " + <?php echo json_encode($_smarty_tpl->tpl_vars['wa']->value->appName(false));?>
;
                <?php }?>
            <?php }?>

            $page_button_submit.on('click', function (e) {
                e.preventDefault();
                $page_form.submit();
            })

            $page_form.submit(function (e) {
                e.preventDefault();
                const $form = $(this),
                    $page_settings = $('#wa-page-settings'),
                    $page_content = $('#wa-page-content'),
                    $editor_status = $('#wa-editor-status'),
                    $page_button = $('#wa-page-button');

                let page_url, page_attr_url, error;

                $page_content.waEditor2('sync');

                $editor_status.html("<i class='fas fa-spin fa-spinner'></i> Сохранение...").fadeIn("slow");

                $.post($form.attr('action'), $form.serialize(), function (response) {

                    if (response.status === 'ok') {
                        $(".state-error").removeClass('state-error');

                        $editor_status.html('<i class="fas fa-check-circle"></i> Сохранено').fadeOut('slow');

                        const p = response.data;

                    } else if (response.status === 'fail') {
                        if ($.isArray(response.errors)) {
                            error = response.errors[0];
                            $(response.errors[1]).addClass('state-error');
                        } else {
                            error = response.errors;
                        }
                        $editor_status.html('<b style="color:red">' + (error ? error : $_('An error occurred while saving')) + '</b>');
                        $page_button.removeClass('yellow').removeClass('green').addClass('red');
                    }
                }, "json");
            });

            function initSubmitChanged($form) {
                const $submit = $('#wa-page-button');
                let is_changed = false;

                const submitChanged = () => {
                    if (is_changed) return true;

                    $submit.removeClass('green').addClass('yellow');
                    is_changed = true;
                };

                $form.on('change', submitChanged);
                $(':input:not(:submit)', $form).on('input', submitChanged);

                $submit.on('click', function() {
                    $submit.removeClass('yellow').removeClass('red').addClass('green');
                    is_changed = false;
                });
            }

            // update editor wa-header
            $(document).on('page_saved', function (e, data) {
                const { url, is_route } = data || {};
                const $wrapper = $('.site-editor-wa-header-wrapper');

                updatePreview({
                    name: data.name,
                    status: data.status,
                    url,
                    is_route
                });
            });

            function updatePreview ({ name, status, url, is_route, _private }) {
                const $hamburger_draft = $('.js-hamburger-draft-icon');
                const $hamburger_label = $('.js-hamburger-label');

                if (typeof name === 'string') {
                    $hamburger_label.text(name).attr('title', name);
                    document.title = name + " — " + '<?php echo $_smarty_tpl->tpl_vars['wa']->value->appName(false);?>
';
                }

                if (typeof status !== 'undefined') {
                    if (status == 1) {
                        $hamburger_draft.addClass('hidden');
                    } else if (status == 0) {
                        $hamburger_draft.removeClass('hidden');
                    }
                }

                if (typeof url === 'string') {
                    let new_url = url;

                    if (!new_url.startsWith('http')) {
                        new_url = '<?php echo $_smarty_tpl->tpl_vars['url_decoded']->value;?>
';
                        const removeAsteriskSign = (str) => str.replace(/\*$/, '');

                        if (is_route) {
                            new_url = new_url.replace(removeAsteriskSign('<?php if ($_smarty_tpl->tpl_vars['page']->value){?><?php echo $_smarty_tpl->tpl_vars['page']->value['route'];?>
<?php }?>'), '');
                            new_url += removeAsteriskSign(url);
                        } else {
                            new_url += url;
                        }

                        if (status == 0) {
                            new_url += '?preview=<?php echo $_smarty_tpl->tpl_vars['preview_hash']->value;?>
';
                        }
                    }

                    $('#js-wa-header-preview').attr('href', new_url);
                }

                if (typeof _private !== 'undefined') {
                    $hamburger_label.toggleClass('gray', !!_private);
                }
            }

            function initConfirmUnsaved (opts) {
                opts = opts || {
                    hasUnsaved: () => false,
                    $submit: $()
                };

                const event_name = 'click.wa_unsaved';
                let force_leave = false;

                const handler = function (selector) {
                    const unbindEvent = () => $(selector).off(event_name);

                    return function (e) {
                        const $a = $(this);

                        if (
                            force_leave ||
                            !opts.hasUnsaved() ||
                            $a.attr('target') === '_blank' ||
                            $a.attr('href') === '#' ||
                            String($a.attr('href')).startsWith('javascript:')
                        ) {
                            force_leave = false;
                            return true;
                        }

                        e.preventDefault();
                        e.stopImmediatePropagation();

                        $.confirmUnsaved({
                            onSave() {
                                unbindEvent();
                                opts.$submit.click();
                                $a.click();
                            },
                            onLeave() {
                                unbindEvent();
                                force_leave = true;
                                $a.click();
                            }
                        });

                        return false;
                    }
                };

                const static_link_selector = '#wa-account a, #wa-applist a, #wa-header-user-area a';
                $('body').on(event_name, static_link_selector, handler(static_link_selector));

                return {
                    observeLinks: (selectors) => {
                        selectors = Array.isArray(selectors) ? selectors.join(',') : selectors;
                        $(selectors).on(event_name, handler(selectors));
                    }
                }
            }

            $._waLoading.done();
        });</script>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 22:50:38
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\site\templates\actions\backend\includes\unsaved_dialog.html" */ ?>
<?php if ($_valid && !is_callable('content_6a417b0ea0ee54_27842048')) {function content_6a417b0ea0ee54_27842048($_smarty_tpl) {?><template id="unsaved-form-dialog-template">
    <div class="dialog">
        <div class="dialog-background"></div>
        <div class="dialog-body">
            <div class="dialog-header">
                <h2>Сохранить изменения?</h2>
            </div>
            <div class="dialog-content">
                <p>Ваши изменения будут потеряны, если их не сохранить.</p>
            </div>
            <div class="dialog-footer flexbox middle">
                <button class="js-save-button button green" type="button">Сохранить</button>
                <button class="js-dialog-close button light-gray" type="button">Остаться</button>
                <button class="js-leave-button button outlined orange custom-ml-auto" type="button">Уйти без сохранения</button>
            </div>
        </div>
    </div>
</template>
<script>
    (function ($) {
        $.confirmUnsaved = function ({ onSave = () => null, onLeave = () => null }) {
            $.waDialog({
                html: $('#unsaved-form-dialog-template').html(),
                onOpen ($d, d) {
                    d.$block.find('.js-save-button').on('click', () => {
                        if (typeof onSave === 'function') {
                            onSave();
                        }
                        d.close();
                    });
                    d.$block.find('.js-leave-button').on('click', () => {
                        if (typeof onLeave === 'function') {
                            onLeave();
                        }
                        d.close();
                    });
                }
            })
        }
    })(jQuery);
</script>
<?php }} ?>