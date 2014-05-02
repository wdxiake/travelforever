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