<?php /* Smarty version Smarty-3.1.14, created on 2026-06-28 22:48:19
         compiled from "C:\OSPanel\home\webasyst.local\wa-apps\photos\themes\default\home.html" */ ?>
<?php /*%%SmartyHeaderCode:3118763876a417a83b5be18-98289901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d6484a0399905aff407f5e04f830ecc19dc39bc' => 
    array (
      0 => 'C:\\OSPanel\\home\\webasyst.local\\wa-apps\\photos\\themes\\default\\home.html',
      1 => 1765875363,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3118763876a417a83b5be18-98289901',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'wa' => 0,
    'photos' => 0,
    'albums' => 0,
    'a' => 0,
    'wa_app_static_url' => 0,
    'wa_backend_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_6a417a83bac0d8_54533045',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6a417a83bac0d8_54533045')) {function content_6a417a83bac0d8_54533045($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['albums'] = new Smarty_variable($_smarty_tpl->tpl_vars['wa']->value->photos->childAlbums(), null, 0);?>

<?php if (!empty($_smarty_tpl->tpl_vars['photos']->value)||!empty($_smarty_tpl->tpl_vars['albums']->value)){?>

    <!-- albums -->
    <?php if (!empty($_smarty_tpl->tpl_vars['albums']->value)){?>
        <h1 class="p-page-title">Альбомы</h1>
        <ul class="albums">
            <?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['albums']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value){
$_smarty_tpl->tpl_vars['a']->_loop = true;
?>
                <li<?php if ($_smarty_tpl->tpl_vars['a']->value['count']>1){?> class="layers"<?php }?>>
                    <div class="cover">
                        <?php if ($_smarty_tpl->tpl_vars['a']->value['key_photo']){?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['a']->value['key_photo']['thumb']['url'];?>
<?php if ($_smarty_tpl->tpl_vars['a']->value['key_photo']['edit_datetime']){?>?<?php echo strtotime($_smarty_tpl->tpl_vars['a']->value['key_photo']['edit_datetime']);?>
<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
">
                        <?php }else{ ?>
                            <img src="<?php echo $_smarty_tpl->tpl_vars['wa_app_static_url']->value;?>
img/album-dummy.png" alt="<?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
">
                        <?php }?>
                    </div>
                    <div class="details">
                        <p class="p-album-name<?php if ($_smarty_tpl->tpl_vars['a']->value['status']<=0){?> gray<?php }?>"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['a']->value['name'])===null||$tmp==='' ? '(без имени)' : $tmp);?>
<?php if ($_smarty_tpl->tpl_vars['a']->value['status']<=0){?> <i class="icon10 lock-bw"></i><?php }?></p>
                        <p class="count"><?php echo sprintf(_w('%d photo','%d photos',$_smarty_tpl->tpl_vars['a']->value['count']),$_smarty_tpl->tpl_vars['a']->value['count']);?>
</p>
                    </div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['a']->value['full_url'];?>
"<?php if ($_smarty_tpl->tpl_vars['a']->value['status']<=0){?> title="Приватный альбом"<?php }?>></a>
                </li>
            <?php } ?>
        </ul>
    <?php }?>

    <<?php if (empty($_smarty_tpl->tpl_vars['albums']->value)){?>h1<?php }else{ ?>h2<?php }?> class="p-page-title">Фотопоток</<?php if (empty($_smarty_tpl->tpl_vars['albums']->value)){?>h1<?php }else{ ?>h2<?php }?>>

    <?php if (!empty($_smarty_tpl->tpl_vars['photos']->value)){?>
        <?php echo $_smarty_tpl->getSubTemplate ('photos-thumbs.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
    
    

<?php }else{ ?>

    <div class="welcome">
        <h1>Добро пожаловать в вашу новую фотогалерею!</h1>
        <p><?php echo sprintf('Начните с <a href="%s">загрузки фотографий</a> в бекенде фотогалереи.',($_smarty_tpl->tpl_vars['wa_backend_url']->value).('photos/'));?>
</p>
    </div>
    <style>
        .page-content.with-sidebar { margin-left: 0; border-left: 0; }
    </style>

<?php }?>
<?php }} ?>