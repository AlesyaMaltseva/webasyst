<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 22:48:09
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\shop\themes\default\home.html" */ ?>
<?php /*%%SmartyHeaderCode:21436555456a417a7946f9d2-70431722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '588e4a79ff9446c920acf5b2c03558a55020ac2f' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\shop\\themes\\default\\home.html',
      1 => 1779089487,
      2 => 'file',
    ),
    '2794d429f10e87486ac6ea1aaf803251f644d97d' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\shop\\themes\\default\\home.slider.html',
      1 => 1773323863,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21436555456a417a7946f9d2-70431722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme_settings' => 0,
    'wa' => 0,
    'categories' => 0,
    'cat' => 0,
    'promocards' => 0,
    'bestsellers' => 0,
    'frontend_homepage' => 0,
    '_' => 0,
    '_content_exist' => 0,
    'onsale' => 0,
    'blog_posts' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417a7956b8b6_22266429',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417a7956b8b6_22266429')) {function content_6a417a7956b8b6_22266429($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_wa_datetime')) include 'C:\\OSPanel\\home\\webasyst.local\\wa-system/vendors/smarty-plugins\\modifier.wa_datetime.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\OSPanel\\home\\webasyst.local\\wa-system\\vendors\\smarty3\\plugins\\modifier.truncate.php';
?>

<?php $_smarty_tpl->tpl_vars['_content_exist'] = new Smarty_variable(true, null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_layout']!='hidden'){?>
<div class="row gap32 cols2<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_layout']=='right'){?> right-sidebar<?php }?><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_layout']=='left'){?> left-sidebar<?php }?> cols1-mobile cols1-tablet">
    <div class="sidebar col w3"><!-- ROOT CATEGORIES --><?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_categories']){?><?php $_smarty_tpl->tpl_vars['categories'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->categories(0,0,true), null, 0);?><?php if (count($_smarty_tpl->tpl_vars['categories']->value)){?><ul class="tree"><?php  $_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->key => $_smarty_tpl->tpl_vars['cat']->value){
$_smarty_tpl->tpl_vars['cat']->_loop = true;
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['name'];?>
</a></li><?php } ?></ul><?php }?><?php }?><!-- BULLETS --><section class="bullets"><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_1'])){?><figure class="bullet"><svg width="56" height="56" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin"><use xlink:href="#img-delivery"></use></svg><h4><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_1'];?>
</h4><p><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_body_1'];?>
</p></figure><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_2'])){?><figure class="bullet"><svg width="56" height="56" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin"><use xlink:href="#img-pay"></use></svg><h4><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_2'];?>
</h4><p><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_body_2'];?>
</p></figure><?php }?><?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_3'])){?><figure class="bullet"><svg width="56" height="56" viewBox="0 0 56 56" xmlns="http://www.w3.org/2000/svg" version="1.1" preserveAspectRatio="xMinYMin"><use xlink:href="#img-point"></use></svg><h4><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_title_3'];?>
</h4><p><?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bullet_body_3'];?>
</p></figure><?php }?></section></div>
<?php }?>

<div class="content<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_layout']!='hidden'){?> col w9<?php }?>">

    <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_promos_thumbs'])&&$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_promos_thumbs']=='source'){?>
        <?php $_smarty_tpl->tpl_vars['promocards'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->promos('link'), null, 0);?>
    <?php }else{ ?>
        <?php $_smarty_tpl->tpl_vars['promocards'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->promos('link','0x840'), null, 0);?>
    <?php }?>

    <?php $_smarty_tpl->tpl_vars['bestsellers'] = new Smarty_variable(null, null, 0);?>
    <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_bestsellers'])){?>
        <?php $_smarty_tpl->tpl_vars['bestsellers'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_bestsellers']), null, 0);?>
    <?php }?>

    <?php if (empty($_smarty_tpl->tpl_vars['promocards']->value)&&empty($_smarty_tpl->tpl_vars['bestsellers']->value)){?>

        
        <?php $_smarty_tpl->tpl_vars['_content_exist'] = new Smarty_variable(false, null, 0);?>
        <article class="welcome">
            <h1>Сделано на Shop-Script</h1>
        </article>

    <?php }else{ ?>

        
        <?php if (!empty($_smarty_tpl->tpl_vars['promocards']->value)){?>
            <?php /*  Call merged included template "./home.slider.html" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("./home.slider.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '21436555456a417a7946f9d2-70431722');
content_6a417a794cf708_18145559($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "./home.slider.html" */?>
        <?php }?>

        
        <?php if (!empty($_smarty_tpl->tpl_vars['bestsellers']->value)&&!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_bestsellers'])){?>
            <section class="bestsellers wa-pt-16">
                <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bestsellers_title'])){?>
                    <h5 class="bestsellers-header"><?php echo str_replace('{$date}',smarty_modifier_wa_datetime(time(),"humandate"),$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_bestsellers_title']);?>
</h5>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("list-thumbs.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['bestsellers']->value,'has_sidebar'=>($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_layout']!='hidden')), 0);?>

            </section>
        <?php }?>
    <?php }?>

    <!-- plugin hook: 'frontend_homepage' -->
    
    <?php  $_smarty_tpl->tpl_vars['_'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['frontend_homepage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_']->key => $_smarty_tpl->tpl_vars['_']->value){
$_smarty_tpl->tpl_vars['_']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['_']->value;?>
<?php } ?>

</div>

<?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_sidebar_layout']!='hidden'){?>
    </div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['_content_exist']->value)){?>
    <!-- ON SALE product list -->
    <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_onsale'])){?>
        <?php $_smarty_tpl->tpl_vars['onsale'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->shop->productSet($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_productset_onsale']), null, 0);?>
        <?php if (!empty($_smarty_tpl->tpl_vars['onsale']->value)){?>
            <section class="onsale related">
                <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_onsale_title']){?>
                    <h4 class="section-header"><?php echo str_replace('{$date}',smarty_modifier_wa_datetime(time(),"humandate"),$_smarty_tpl->tpl_vars['theme_settings']->value['homepage_onsale_title']);?>
</h4>
                <?php }?>
                <?php echo $_smarty_tpl->getSubTemplate ("list-thumbs-mini.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('products'=>$_smarty_tpl->tpl_vars['onsale']->value,'ulclass'=>"onsale-bxslider"), 0);?>

            </section>
        <?php }?>
    <?php }?>

    <!-- BLOG posts -->
    <?php if ($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_blogposts']&&$_smarty_tpl->tpl_vars['wa']->value->blog){?>
        <?php $_smarty_tpl->tpl_vars['blog_posts'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->blog->posts(null,3), null, 0);?>
        <?php if (is_countable($_smarty_tpl->tpl_vars['blog_posts']->value)&&count($_smarty_tpl->tpl_vars['blog_posts']->value)){?>
            <h4 class="section-header">Новые записи в блоге</h4>
            <ul class="blog-posts unstyled row gap20 cols1-mobile cols2-tablet wa-pt-16">
                <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['blog_posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value){
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                    <li class="col w4 wa-flex wa-flex-column">
                        <?php if (!empty($_smarty_tpl->tpl_vars['post']->value['thumb_image'])){?>
                            <img class="wa-mb-16" src="<?php echo $_smarty_tpl->tpl_vars['post']->value['thumb_image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
">
                        <?php }?>
                        <div class="wa-flex wa-flex-column">
                            <p class="text-gray wa-mb-8 small"><?php echo smarty_modifier_wa_datetime($_smarty_tpl->tpl_vars['post']->value['datetime'],"humandate");?>
</p>
                            <a href="<?php echo $_smarty_tpl->tpl_vars['post']->value['link'];?>
" title="<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
" class="semibold text-black-auto large wa-mb-12"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['post']->value['title'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                            <p class="gray"><?php echo smarty_modifier_truncate(strip_tags($_smarty_tpl->tpl_vars['post']->value['text']),128);?>
</p>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        <?php }?>
    <?php }?>

    <!-- WELCOME note -->
    <?php if (!empty($_smarty_tpl->tpl_vars['theme_settings']->value['homepage_welcome_note'])){?>
        <div class="welcome-note large">
            <?php echo $_smarty_tpl->tpl_vars['theme_settings']->value['homepage_welcome_note'];?>

        </div>
    <?php }?>
<?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 22:48:09
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\shop\themes\default\home.slider.html" */ ?>
<?php if ($_valid && !is_callable('content_6a417a794cf708_18145559')) {function content_6a417a794cf708_18145559($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\OSPanel\\home\\webasyst.local\\wa-system\\vendors\\smarty3\\plugins\\modifier.truncate.php';
?><?php if (!empty($_smarty_tpl->tpl_vars['promocards']->value)){?>
<section class="s-slider-section is-promocards">

    
    <ul class="s-slider-block" id="js-home-slider">
        <?php  $_smarty_tpl->tpl_vars['_slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['_slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['promocards']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['_slide']->key => $_smarty_tpl->tpl_vars['_slide']->value){
$_smarty_tpl->tpl_vars['_slide']->_loop = true;
?>
            <li class="s-slide-wrapper" style="
                <?php if ($_smarty_tpl->tpl_vars['_slide']->value['color']){?>color: <?php echo $_smarty_tpl->tpl_vars['_slide']->value['color'];?>
;<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['_slide']->value['image']){?>background-image: url(<?php echo $_smarty_tpl->tpl_vars['_slide']->value['image'];?>
);<?php }?>
            ">
                <div class="s-slide-block">

                    <?php if (!empty($_smarty_tpl->tpl_vars['_slide']->value['countdown_datetime'])){?>
                        <div class="s-counter">
                            <span class="js-promo-countdown" data-start="<?php echo date('Y-m-d H:i:s');?>
" data-end="<?php echo $_smarty_tpl->tpl_vars['_slide']->value['countdown_datetime'];?>
"></span>
                        </div>
                    <?php }?>

                    <h3 class="s-header wa-pt-16"><?php echo smarty_modifier_truncate(htmlspecialchars((string)$_smarty_tpl->tpl_vars['_slide']->value['title'], ENT_QUOTES, 'UTF-8', true),90);?>
</h3>

                    <?php if (!empty($_smarty_tpl->tpl_vars['_slide']->value['body'])){?>
                        <p class="s-description wa-mt-16" itemprop="description"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_slide']->value['body'], ENT_QUOTES, 'UTF-8', true);?>
</p>
                    <?php }?>

                    <?php if (!empty($_smarty_tpl->tpl_vars['_slide']->value['button_text'])){?>
                        <a class="s-slide-button button small" href="<?php echo $_smarty_tpl->tpl_vars['_slide']->value['link'];?>
" title="ert"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['_slide']->value['button_text'], ENT_QUOTES, 'UTF-8', true);?>
</a>
                    <?php }?>

                </div>
                <?php if (empty($_smarty_tpl->tpl_vars['_slide']->value['button_text'])){?>
                <a class="s-slide-link" href="<?php echo $_smarty_tpl->tpl_vars['_slide']->value['link'];?>
"></a>
                <?php }?>
            </li>
        <?php } ?>
    </ul>

    <script>
        ( function($) {
            // DOM
            var $slider = $("#js-home-slider");
            if (!$slider.length) { return false; }

            // VARS
            var href = "<?php echo $_smarty_tpl->tpl_vars['wa_active_theme_url']->value;?>
bxslider/jquery.bxslider.min.js?v<?php echo $_smarty_tpl->tpl_vars['wa_theme_version']->value;?>
";

            // INIT
            initCountDown($slider);

            (!$.fn.bxSlider) ? $.getScript(href, initSlider) : initSlider();

            // FUNCTIONS

            function initSlider() {
                var slide_count = $slider.find("li").length;

                $slider.bxSlider({
                    auto : slide_count > 1,
                    touchEnabled: true,
                    pause : 5000,
                    autoHover : true,
                    pager: slide_count > 1
                });
            }

            function initCountDown($wrapper) {
                var $countdowns = $wrapper.find(".js-promo-countdown");
                if ($countdowns.length) {
                    $countdowns.each( function() {
                        var $wrapper = $(this),
                            options = {
                                $wrapper: $wrapper,
                                start: $wrapper.data('start').replace(/-/g, '/'),
                                end: $wrapper.data('end').replace(/-/g, '/')
                            };

                        if (typeof CountDown === "function") {
                            new CountDown(options);
                        } else {
                            $wrapper.remove();
                        }
                    });
                }
            }

        })(jQuery);
    </script>
</section>
<?php }?><?php }} ?>