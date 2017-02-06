<?php /* Smarty version Smarty-3.1.19, created on 2017-02-06 11:51:06
         compiled from "C:\xampp\htdocs\Travel\system\views\projects\modals.tpl" */ ?>
<?php /*%%SmartyHeaderCode:311885898551acd78c0-10862706%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ea49358af1b6f422b8b5eed55520a38c3e8ccae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Travel\\system\\views\\projects\\modals.tpl',
      1 => 1486374021,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '311885898551acd78c0-10862706',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'links' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5898551acdd993_46864368',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5898551acdd993_46864368')) {function content_5898551acdd993_46864368($_smarty_tpl) {?><div id="bs-add-project-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true" aria-labelledby="myModalLabel">
    <div class="modal-dialog">
        <div class="wrapper">
            <form id="add-travel-plan" method="post" action="/<?php echo $_smarty_tpl->tpl_vars['links']->value['proj']['add'];?>
" role="form" enctype="multipart/form-data">
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
</div><?php }} ?>
