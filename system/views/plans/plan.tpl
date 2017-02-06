<div class="timeline-item p-social box">
    <div class="timeline-header">
        <h3><small>project name: </small>{$plan.project_name}</h3>
    </div>
    <div class="timeline-body">
        <div class="row">
            <div class="col-xs-4">
                <strong>Venue:</strong> {$plan.venue} <br>
                <strong>Destination's Regional Office: </strong>{$plan.regional} <br>
                <strong>Travel Date:</strong> {$plan.travel_date|date_format} <br>
                <strong>Days Away:</strong> {$plan.days} <br>
            </div>
            <div class="col-xs-4" style="overflow: hidden">
                <strong>Justification</strong><br>
                <p>{$plan.justification|truncate:100} </p>
                
                <strong>Approval Status: </strong> {if $plan.status eq 0} Pending {elseif $plan.status eq 1 } Approved {elseif $plan.status eq 3} Rejected {/if}
            </div>
            <div class="col-xs-4">
                <strong>Estimated Cost:</strong> {$plan.estimated} <br>
                <strong>Funds Allocated:</strong> {$plan.funds_allocated}<br>
                <strong> Funds Spent: </strong> {$plan.funds_spent} <br>
            </div>
        </div>
    </div>
</div>