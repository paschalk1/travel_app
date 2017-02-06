<?php /* Smarty version Smarty-3.1.19, created on 2017-02-06 11:51:06
         compiled from "C:\xampp\htdocs\Travel\system\views\projects\projects.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184975898551aa2b3f7-53415565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82a25906395d0e932a1def87dedd97e581b68b7c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Travel\\system\\views\\projects\\projects.tpl',
      1 => 1486377525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184975898551aa2b3f7-53415565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'projects' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5898551aa551c1_00952565',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5898551aa551c1_00952565')) {function content_5898551aa551c1_00952565($_smarty_tpl) {?><div class="div-scroll">
    <div class="timeline">
    
    <?php if (count($_smarty_tpl->tpl_vars['projects']->value)>0) {?>
    
        <?php  $_smarty_tpl->tpl_vars['project'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['project']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['projects']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['project']->key => $_smarty_tpl->tpl_vars['project']->value) {
$_smarty_tpl->tpl_vars['project']->_loop = true;
?>
            <?php echo $_smarty_tpl->getSubTemplate ("projects/project.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } ?>
        
    <?php } else { ?>
        
    <?php echo $_smarty_tpl->getSubTemplate ("projects/no_project.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php }?>
    </div>
</div><?php }} ?>
