<div id="bs-add-plan-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="wrapper">
            <form id="add-travel-plan" method="post" action="/{$links.plans.add}" role="form" enctype="multipart/form-data">
                <div class="modal-header box-header with-border" id="myModalLabel"> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="close"></button>
                    <h4 class="modal-title box-title">Create Travel Plan</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Project to link to</label> 
                        <select class="form-control select2 validate[required]" name="project_id" tabindex="-1" style="width: 100%">
                            {if $projects|@count gt 0}
                                <option selected="selected" disabled>Select Project</option>
                                {foreach $projects AS $project}
                                    <option value="{$project.id}">{$project.name}</option>
                                {/foreach}
                                {else}
                                    <option selected="selected" disabled>No projects to create plans for</option>
                                    {/if}
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>Venue</label>
                        <input type="text" class="form-control validate[required]" name="venue">
                    </div> 
                    
                    <div class="form-group">
                        <label for="dt_input1">Travel Date</label>
                        <div class="input-group date form_datetime" data-date="" data-date-format="dd MM yy HH:ii p" data-link-field="dt_input1">
                            <input class="form-control validate[required]" type="text" value="" readonly>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-remove"></span>
                            </span>
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-th"></span>
                            </span>
                        </div>
                        <input type="hidden" id="dt_input1" name="travel_date" value=""> <br>
                    </div>
                    
                    <div class="form-group">
                        <label>Days Away</label>
                        <input type="number" class="form-control validate[required]" name="days_away">
                    </div>
                    
                    <div class="form-group">
                        <label>Justification</label>
                        <textarea class="form-control validate[required]" name="justification" rows="3" placeholder=""></textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Estimated Cost</label>
                        <input type="number" class="form-control validate[required]" name="estimated_cost">
                    </div>
                    
                    <div class="form-group">
                        <label>Destination's Regional Office</label>
                        <input type="text" class="form-control validate[required]" name="destination_office">
                    </div>
                    
                    <input type="hidden" value="" id="load_plan_url">
                    
                    <div class="status text-center"></div>
                    <div class="clearfix"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="btn-add-travel-plan">Create</button>
                </div>
            </form>
        </div>
    </div>
</div>