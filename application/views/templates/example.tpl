{include file="inc/header.tpl" title="{$title}"}

{include file="inc/menu.tpl" }
<div id="content">
    <div id="side-content">
        {include file="left-nav/chufa-content.tpl" }
        {include file="left-nav/mudi-content.tpl" }
        {include file="left-nav/time-content.tpl" }
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
            {foreach $groups as $i => $group}
                <div class="middle-item">
                    <div class="middle-item-img">
                        <img src="{$group['image_url']}" width="357" height="200"/>
                    </div>
                    <div class="middle-item-desc">
                        <a class="item-desc-name" target="_blank" href="{$group['url']}">{$group['product_name']}</a>
                        <p class="item-desc-content">
                            {$group['product_summary']}
                        </p>
                        <span class="item-desc-price">{$group['current_price']}</span>元起<span class="item-desc-privilege">原价 : {$group['market_price']}元</span>
                        <a href="{$group['url']}" target="_blank" class="item-desc-url">查看详情</a>
                    </div>
                </div>
            {/foreach}
        </div>
    </div>
    <div style="clear:both;"></div>
</div>

{include file="footer.tpl"}