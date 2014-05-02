<div id="mudi-content">
    <div class="side-title"><img src="/static/img/location.png" height="30"/>&nbsp;&nbsp;目的城市</div>
    <input class="search-item" type="text"/>
    <table class="search-items">
        <tr>
            <td class="{if $cityInfo['to_city_str'] == "全部"}selected{/if}">全部</td>
            <td class="{if $cityInfo['to_city_str'] == "北京"}selected{/if}">北京</td>
        </tr>
        <tr>
            <td class="{if $cityInfo['to_city_str'] == "天津"}selected{/if}">天津</td>
            <td class="{if $cityInfo['to_city_str'] == "青岛"}selected{/if}">青岛</td>
        </tr>
        <tr>
            <td class="{if $cityInfo['to_city_str'] == "苏州"}selected{/if}">苏州</td>
            <td class="{if $cityInfo['to_city_str'] == "南京"}selected{/if}">南京</td>
        </tr>
        <tr>
            <td class="{if $cityInfo['to_city_str'] == "厦门"}selected{/if}">厦门</td>
            <td class="{if $cityInfo['to_city_str'] == "杭州"}selected{/if}">杭州</td>
        </tr>
        <tr>
            <td class="{if $cityInfo['to_city_str'] == "深圳"}selected{/if}">深圳</td>
            <td class="{if $cityInfo['to_city_str'] == "成都"}selected{/if}">成都</td>
        </tr>
        <tr>
            <td class="{if $cityInfo['to_city_str'] == "广州"}selected{/if}">广州</td>
            <td class="{if $cityInfo['to_city_str'] == "武汉"}selected{/if}">武汉</td>
        </tr>
        <tr>
            <td class="{if $cityInfo['to_city_str'] == "西安"}selected{/if}">西安</td>
            <td class="{if $cityInfo['to_city_str'] == "三亚"}selected{/if}">三亚</td>
        </tr>
    </table>
</div>