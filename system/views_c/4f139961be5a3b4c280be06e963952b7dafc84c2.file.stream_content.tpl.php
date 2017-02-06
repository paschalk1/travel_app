<?php /* Smarty version Smarty-3.1.19, created on 2017-02-06 13:43:39
         compiled from "C:\xampp\htdocs\Travel\system\views\plans\stream_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90158986f7b822653-62263363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f139961be5a3b4c280be06e963952b7dafc84c2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Travel\\system\\views\\plans\\stream_content.tpl',
      1 => 1486384197,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90158986f7b822653-62263363',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'plansCount' => 0,
    'plans' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58986f7b8613d4_45853206',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58986f7b8613d4_45853206')) {function content_58986f7b8613d4_45853206($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['plansCount']->value>0) {?>
    
    <?php if (count($_smarty_tpl->tpl_vars['plans']->value)>0) {?>
        <?php  $_smarty_tpl->tpl_vars['plan'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['plan']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['plans']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['plan']->key => $_smarty_tpl->tpl_vars['plan']->value) {
$_smarty_tpl->tpl_vars['plan']->_loop = true;
?>
            <?php echo $_smarty_tpl->getSubTemplate ("plans/plan.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php } ?>
            <?php } else { ?>
                <li id="end">
                    <div class="timeline-item">
                        <h3>
                            <i class="fa fa-ellipsis-h"></i> <strong>End</strong>  <i class="fa fa-ellipsis-h"></i>
                        </h3>
                    </div>
                </li> 
                <?php }?>
                <?php } else { ?>
                    <div id="end">
                        <div class="timeline-item p-social">
                            <h3>
                                 You have not added any travel plan yet <i class="fa fa-ellipsis-h"></i>
                            </h3>
                        </div>
                    </div>
    <?php }?><?php }} ?>
