<div id="pagination" class="pagination">
    {if $pageInfo['first']}
        <a class="current prev" href="/page/groups?page={$pageInfo['page']-1}{$cityInfo['from_city_url']}{$cityInfo['to_city_url']}">上一页</a>
    {/if}
    <a class="current">{$pageInfo['page']}</a>
    {if $pageInfo['last']}
        <a class="current next" href="/page/groups?page={$pageInfo['page']+1}{$cityInfo['from_city_url']}{$cityInfo['to_city_url']}">下一页</a>
    {/if}
</div>