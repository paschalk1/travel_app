<?php /* Smarty version Smarty-3.1.19, created on 2017-02-06 11:51:06
         compiled from "C:\xampp\htdocs\Travel\system\views\projects\project.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168705898551ab36985-82587480%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cd6d12c0658a1d0054eeb0ae112f09bd6857d60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Travel\\system\\views\\projects\\project.tpl',
      1 => 1486378264,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168705898551ab36985-82587480',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'project' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5898551ab46238_35120604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5898551ab46238_35120604')) {function content_5898551ab46238_35120604($_smarty_tpl) {?><div class="timeline-item p-social box">
    <div class="timeline-header">
        <h3> <?php echo $_smarty_tpl->tpl_vars['project']->value['name'];?>
</h3>
    </div>
    <div class="timeline-body">
    <div class="row">
        <div class="col-sm-6">
            <strong> Description</strong>
            <br> <?php echo $_smarty_tpl->tpl_vars['project']->value['description'];?>

        </div>
        
        <div class="col-sm-6">
            <strong>Budget Allocated: </strong> <?php echo $_smarty_tpl->tpl_vars['project']->value['total_budget'];?>
 <br>
            <strong>Status: </strong> <?php if ($_smarty_tpl->tpl_vars['project']->value['status']==0) {?> Pending <?php }?>
        </div>
    </div>
    </div> 
</div><?php }} ?>
