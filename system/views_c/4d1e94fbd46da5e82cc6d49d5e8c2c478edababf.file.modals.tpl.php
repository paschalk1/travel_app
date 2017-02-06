<?php /* Smarty version Smarty-3.1.19, created on 2017-02-06 10:46:40
         compiled from "C:\xampp\htdocs\Travel\system\views\plans\modals.tpl" */ ?>
<?php /*%%SmartyHeaderCode:406558984600a51ee8-83828388%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d1e94fbd46da5e82cc6d49d5e8c2c478edababf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Travel\\system\\views\\plans\\modals.tpl',
      1 => 1486374397,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '406558984600a51ee8-83828388',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'links' => 0,
    'projects' => 0,
    'project' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58984600a7e333_55843123',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58984600a7e333_55843123')) {function content_58984600a7e333_55843123($_smarty_tpl) {?><div id="bs-add-plan-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="wrapper">
            <form id="add-travel-plan" method="post" action="/<?php echo $_smarty_tpl->tpl_vars['links']->value['plans']['add'];?>
" role="form" enctype="multipart/form-data">
                <div class="modal-header box-header with-border" id="myModalLabel"> 
                    <button type="button" class="close" data-dismiss="modal" aria-label="close"></button>
                    <h4 class="modal-title box-title">Create Travel Plan</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Project to link to</label> 
                        <select class="form-control select2 validate[required]" name="project_id" tabindex="-1" style="width: 100%">
                            <?php if (count($_smarty_tpl->tpl_vars['projects']->value)>0) {?>
                                <option selected="selected" disabled>Select Project</option>
                                <?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['project']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['project']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['project']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
</option>
                                <?php } ?>
                                <?php } else { ?>
                                    <option selected="selected" disabled>No projects to create plans for</option>
                                    <?php }?>
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
                        <textarea class="form-control validate[required]" name="event_info" rows="3" placeholder=""></textarea>
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
</div><?php }} ?>
