<div id="chufa-content">
    <div class="side-title"><img src="/static/img/location.png" height="30"/>&nbsp;&nbsp;出发城市</div>
    <input class="search-item" type="text"/>
    <table class="search-items">
        <tr>
            <td class="{if $cityInfo['from_city_str'] == "全部"}selected{/if}">全部</td>
            <td class="{if $cityInfo['from_city_str'] == "北京"}selected{/if}">北京</td>
        </tr>
        <tr>
            <td class="{if $cityInfo['from_city_str'] == "南京"}selected{/if}">南京</td>
            <td class="{if $cityInfo['from_city_str'] == "苏州"}selected{/if}">苏州</td>
        </tr>
        <tr>
            <td class="{if $cityInfo['from_city_str'] == "成都"}selected{/if}">成都</td>
            <td class="{if $cityInfo['from_city_str'] == "广州"}selected{/if}">广州</td>
        </tr>
        <tr>
            <td class="{if $cityInfo['from_city_str'] == "深圳"}selected{/if}">深圳</td>
            <td class="{if $cityInfo['from_city_str'] == "杭州"}selected{/if}">杭州</td>
        </tr>
    </table>
</div>