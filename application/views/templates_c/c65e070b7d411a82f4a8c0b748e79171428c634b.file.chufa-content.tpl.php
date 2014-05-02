<?php /* Smarty version Smarty-3.1.18, created on 2014-05-02 10:16:00
         compiled from "D:\workspace\php\hellophp\application\views\templates\left-nav\chufa-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17559535bb1761577c3-93318082%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c65e070b7d411a82f4a8c0b748e79171428c634b' => 
    array (
      0 => 'D:\\workspace\\php\\hellophp\\application\\views\\templates\\left-nav\\chufa-content.tpl',
      1 => 1399025677,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17559535bb1761577c3-93318082',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_535bb17615d4a6_07091849',
  'variables' => 
  array (
    'cityInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535bb17615d4a6_07091849')) {function content_535bb17615d4a6_07091849($_smarty_tpl) {?><div id="chufa-content">
    <div class="side-title"><img src="/static/img/location.png" height="30"/>&nbsp;&nbsp;出发城市</div>
    <input class="search-item" type="text"/>
    <table class="search-items">
        <tr>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['from_city_str']=="全部") {?>selected<?php }?>">全部</td>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['from_city_str']=="北京") {?>selected<?php }?>">北京</td>
        </tr>
        <tr>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['from_city_str']=="南京") {?>selected<?php }?>">南京</td>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['from_city_str']=="苏州") {?>selected<?php }?>">苏州</td>
        </tr>
        <tr>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['from_city_str']=="成都") {?>selected<?php }?>">成都</td>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['from_city_str']=="广州") {?>selected<?php }?>">广州</td>
        </tr>
        <tr>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['from_city_str']=="深圳") {?>selected<?php }?>">深圳</td>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['from_city_str']=="杭州") {?>selected<?php }?>">杭州</td>
        </tr>
    </table>
</div><?php }} ?>
