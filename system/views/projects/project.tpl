<div class="timeline-item p-social box">
    <div class="timeline-header">
        <h3> {$project.name}</h3>
    </div>
    <div class="timeline-body">
    <div class="row">
        <div class="col-sm-6">
            <strong> Description</strong>
            <br> {$project.description}
        </div>
        
        <div class="col-sm-6">
            <strong>Budget Allocated: </strong> {$project.total_budget} <br>
            <strong>Status: </strong> {if $project.status eq 0} Pending {/if}
        </div>
    </div>
    </div> 
</div>