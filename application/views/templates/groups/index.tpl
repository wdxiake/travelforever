{include file="inc/header.tpl"}

{include file="inc/menu.tpl" }
<div id="content">
    <div id="side-content">
        {include file="../left-nav/chufa-content.tpl" }
        {include file="../left-nav/mudi-content.tpl" }
        {include file="../left-nav/time-content.tpl" }
    </div>
    <div id="middle-content">
        {include file="groups/title.tpl"}
        <div class="middle-items">
            {include file="groups/groups.tpl"}
        </div>
        {include file="groups/pagination.tpl"}
    </div>
    <div style="clear:both;"></div>
</div>

{include file="inc/footer.tpl"}