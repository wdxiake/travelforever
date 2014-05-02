<?php /* Smarty version Smarty-3.1.18, created on 2014-04-19 13:35:02
         compiled from "application\views\templates\example.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24219535272776fb721-16775134%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a94b388946d1c6111bbac70828f50bdf6fe7d24e' => 
    array (
      0 => 'application\\views\\templates\\example.tpl',
      1 => 1397914492,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24219535272776fb721-16775134',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53527277734d28_14381273',
  'variables' => 
  array (
    'title' => 0,
    'groups' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53527277734d28_14381273')) {function content_53527277734d28_14381273($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>((string)$_smarty_tpl->tpl_vars['title']->value)), 0);?>


<div id="nav">
    <div id="title-bar">
        <a href="index.html"><img src="/static/img/logo.png" height="45"/></a>
    </div>
    <ul id="menu-bar">
        <li class="menu-item" data-url="newest.html">今日新品</li>
        <li class="menu-item selected" data-url="trip.html">旅游套餐</li>
        <li class="menu-item" data-url="ticket.html">门票</li>
        <li class="menu-item" data-url="hotel.html">酒店</li>
        <li class="menu-item" data-url="plane.html">机票</li>
        <li class="menu-item" data-url="yiyuan.html">一元秒杀</li>
        <li class="menu-item" data-url="plane.html">机票</li>
    </ul>
</div>
<div id="content">
    <div id="side-content">
        <div id="chufa-content">
            <div class="side-title"><img src="/static/img/location.png" height="30"/>&nbsp;&nbsp;出发城市</div>
            <input class="search-item" type="text"/>
            <table class="search-items">
                <tr>
                    <td class="selected">全部</td>
                    <td>北京</td>
                </tr>
                <tr>
                    <td>南京</td>
                    <td>苏州</td>
                </tr>
                <tr>
                    <td>成都</td>
                    <td>广州</td>
                </tr>
                <tr>
                    <td>深圳</td>
                    <td>杭州</td>
                </tr>
            </table>
        </div>
        <div id="mudi-content">
            <div class="side-title"><img src="/static/img/location.png" height="30"/>&nbsp;&nbsp;目的城市</div>
            <input class="search-item" type="text"/>
            <table class="search-items">
                <tr>
                    <td class="selected">全部</td>
                    <td>北京</td>
                </tr>
                <tr>
                    <td>天津</td>
                    <td>青岛</td>
                </tr>
                <tr>
                    <td>苏州</td>
                    <td>南京</td>
                </tr>
                <tr>
                    <td>厦门</td>
                    <td>杭州</td>
                </tr>
                <tr>
                    <td>深圳</td>
                    <td>成都</td>
                </tr>
                <tr>
                    <td>广州</td>
                    <td>武汉</td>
                </tr>
                <tr>
                    <td>西安</td>
                    <td>三亚</td>
                </tr>
            </table>
        </div>
        <div id="time-content">
            <div class="side-title"><img src="/static/img/calendar.png" height="30"/>&nbsp;&nbsp;出游时间</div>
            <table class="search-items">
                <tr>
                    <td class="selected">全部</td>
                    <td>1月</td>
                    <td>2月</td>
                    <td>3月</td>
                </tr>
                <tr>
                    <td>4月</td>
                    <td>5月</td>
                    <td>6月</td>
                    <td>7月</td>
                </tr>
                <tr>
                    <td>8月</td>
                    <td>9月</td>
                    <td>10月</td>
                    <td>11月</td>
                </tr>
                <tr>
                    <td colspan="4">12月</td>
                </tr>
            </table>
        </div>
    </div>
    <div id="middle-content">
        <div class="middle-title">
            <span class="middle-title-chufa">上海</span>--<span class="middle-title-mudi">北京</span>
            <div class="middle-title-order">
                排序:
                <a href="#" class="selected">默认</a>
                <a href="#">价格</a>
                <a href="#">热卖</a>
            </div>
        </div>
        <div class="middle-items">
            <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['group']->key;
?>
                <div class="middle-item">
                    <div class="middle-item-img">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['group']->value['image_url'];?>
" width="357" height="200"/>
                    </div>
                    <div class="middle-item-desc">
                        <a class="item-desc-name" target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['group']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['group']->value['product_name'];?>
</a>
                        <p class="item-desc-content">
                            <?php echo $_smarty_tpl->tpl_vars['group']->value['product_summary'];?>

                        </p>
                        <span class="item-desc-price"><?php echo $_smarty_tpl->tpl_vars['group']->value['current_price'];?>
</span>元起<span class="item-desc-privilege">原价 : <?php echo $_smarty_tpl->tpl_vars['group']->value['market_price'];?>
元</span>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['group']->value['url'];?>
" target="_blank" class="item-desc-url">查看详情</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <div style="clear:both;"></div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
