<?php /* Smarty version Smarty-3.1.18, created on 2014-05-02 10:16:01
         compiled from "D:\workspace\php\hellophp\application\views\templates\left-nav\mudi-content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26244535bb17616b824-71513854%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4073bdf535d377fd6cee07ec8d37b1c65c3583c0' => 
    array (
      0 => 'D:\\workspace\\php\\hellophp\\application\\views\\templates\\left-nav\\mudi-content.tpl',
      1 => 1399025758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26244535bb17616b824-71513854',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_535bb176172145_18030735',
  'variables' => 
  array (
    'cityInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_535bb176172145_18030735')) {function content_535bb176172145_18030735($_smarty_tpl) {?><div id="mudi-content">
    <div class="side-title"><img src="/static/img/location.png" height="30"/>&nbsp;&nbsp;目的城市</div>
    <input class="search-item" type="text"/>
    <table class="search-items">
        <tr>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['to_city_str']=="全部") {?>selected<?php }?>">全部</td>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['to_city_str']=="北京") {?>selected<?php }?>">北京</td>
        </tr>
        <tr>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['to_city_str']=="天津") {?>selected<?php }?>">天津</td>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['to_city_str']=="青岛") {?>selected<?php }?>">青岛</td>
        </tr>
        <tr>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['to_city_str']=="苏州") {?>selected<?php }?>">苏州</td>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['to_city_str']=="南京") {?>selected<?php }?>">南京</td>
        </tr>
        <tr>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['to_city_str']=="厦门") {?>selected<?php }?>">厦门</td>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['to_city_str']=="杭州") {?>selected<?php }?>">杭州</td>
        </tr>
        <tr>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['to_city_str']=="深圳") {?>selected<?php }?>">深圳</td>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['to_city_str']=="成都") {?>selected<?php }?>">成都</td>
        </tr>
        <tr>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['to_city_str']=="广州") {?>selected<?php }?>">广州</td>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['to_city_str']=="武汉") {?>selected<?php }?>">武汉</td>
        </tr>
        <tr>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['to_city_str']=="西安") {?>selected<?php }?>">西安</td>
            <td class="<?php if ($_smarty_tpl->tpl_vars['cityInfo']->value['to_city_str']=="三亚") {?>selected<?php }?>">三亚</td>
        </tr>
    </table>
</div><?php }} ?>
