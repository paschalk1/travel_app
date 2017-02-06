{if $plansCount gt 0}
    
    {if $plans|@count gt 0}
        {foreach $plans as $plan}
            {include file="plans/plan.tpl"}
            {/foreach}
            {else}
                <li id="end">
                    <div class="timeline-item">
                        <h3>
                            <i class="fa fa-ellipsis-h"></i> <strong>End</strong>  <i class="fa fa-ellipsis-h"></i>
                        </h3>
                    </div>
                </li> 
                {/if}
                {else}
                    <li id="end">
                        <div class="timeline-item">
                            <h3>
                                 You have not added any travel plan yet <i class="fa fa-ellipsis-h"></i>
                            </h3>
                        </div>
                    </li>
    {/if}