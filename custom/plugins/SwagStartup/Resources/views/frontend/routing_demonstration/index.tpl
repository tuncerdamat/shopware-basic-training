{extends file="parent:frontend/index/index.tpl"}

{block name='frontend_index_content'}
    <h1>Hello template inheritance</h1>
    <h1>{$currentAction} action template</h1>
    
    <a href="{url module='frontend' controller='routing_demonstration' action=$nextPage}">
        {s name="RoutingDemonstrationNextPage"}{/s}
    </a>
{/block}
