<div class="div-scroll">
    <div class="timeline">
    
    {if $projects|@count gt 0}
    
        {foreach $projects AS $project}
            {include file="projects/project.tpl"}
        {/foreach}
        
    {else}
        
    {include file="projects/no_project.tpl"}
    {/if}
    </div>
</div>