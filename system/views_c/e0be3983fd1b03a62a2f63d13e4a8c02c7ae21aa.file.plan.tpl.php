<?php /* Smarty version Smarty-3.1.19, created on 2017-02-06 15:14:16
         compiled from "C:\xampp\htdocs\Travel\system\views\plans\plan.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15780589884b84ef090-82042506%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0be3983fd1b03a62a2f63d13e4a8c02c7ae21aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Travel\\system\\views\\plans\\plan.tpl',
      1 => 1486390452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15780589884b84ef090-82042506',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plan' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589884b8533630_77090859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589884b8533630_77090859')) {function content_589884b8533630_77090859($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\Travel\\smarty\\libs\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\Travel\\smarty\\libs\\plugins\\modifier.truncate.php';
?><div class="timeline-item p-social box">
    <div class="timeline-header">
        <h3><small>project name: </small><?php echo $_smarty_tpl->tpl_vars['plan']->value['project_name'];?>
</h3>
    </div>
    <div class="timeline-body">
        <div class="row">
            <div class="col-xs-4">
                <strong>Venue:</strong> <?php echo $_smarty_tpl->tpl_vars['plan']->value['venue'];?>
 <br>
                <strong>Destination's Regional Office: </strong><?php echo $_smarty_tpl->tpl_vars['plan']->value['regional'];?>
 <br>
                <strong>Travel Date:</strong> <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['plan']->value['travel_date']);?>
 <br>
                <strong>Days Away:</strong> <?php echo $_smarty_tpl->tpl_vars['plan']->value['days'];?>
 <br>
            </div>
            <div class="col-xs-4" style="overflow: hidden">
                <strong>Justification</strong><br>
                <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['plan']->value['justification'],100);?>
 </p>
                
                <strong>Approval Status: </strong> <?php if ($_smarty_tpl->tpl_vars['plan']->value['status']==0) {?> Pending <?php } elseif ($_smarty_tpl->tpl_vars['plan']->value['status']==1) {?> Approved <?php } elseif ($_smarty_tpl->tpl_vars['plan']->value['status']==3) {?> Rejected <?php }?>
            </div>
            <div class="col-xs-4">
                <strong>Estimated Cost:</strong> <?php echo $_smarty_tpl->tpl_vars['plan']->value['estimated'];?>
 <br>
                <strong>Funds Allocated:</strong> <?php echo $_smarty_tpl->tpl_vars['plan']->value['funds_allocated'];?>
<br>
                <strong> Funds Spent: </strong> <?php echo $_smarty_tpl->tpl_vars['plan']->value['funds_spent'];?>
 <br>
            </div>
        </div>
    </div>
</div><?php }} ?>
