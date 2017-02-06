<div id="bs-add-project-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="wrapper">
            <form id="add-travel-plan" method="post" action="/{$links.proj.add}" role="form" enctype="multipart/form-data">
                <div class="modal-header box-header with-border" id="myModalLabel"> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="close"></button>
                    <h4 class="modal-title box-title">Add Project</h4>
                </div>
                <div class="modal-body">
                    
                    
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control validate[required]" name="name">
                    </div> 
                    
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control validate[required]" name="description" rows="3" placeholder=""></textarea>
                    </div>
                    
                    <div class="form-group"> 
                        <label>Total Budget</label>
                        <input type="number" class="form-control validate[required]" name="total_budget">
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