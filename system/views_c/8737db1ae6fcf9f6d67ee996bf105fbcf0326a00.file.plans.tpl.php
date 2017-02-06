<?php /* Smarty version Smarty-3.1.19, created on 2017-02-06 10:46:40
         compiled from "C:\xampp\htdocs\Travel\system\views\plans\plans.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27450589846007a6869-89764356%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8737db1ae6fcf9f6d67ee996bf105fbcf0326a00' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Travel\\system\\views\\plans\\plans.tpl',
      1 => 1486326252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27450589846007a6869-89764356',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'links' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_589846007b2063_12994148',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_589846007b2063_12994148')) {function content_589846007b2063_12994148($_smarty_tpl) {?><div class="box">
    <div class="div-scroll">
        <div class="row" id="feeds" data-target-feeds="/<?php echo $_smarty_tpl->tpl_vars['links']->value['plans']['stream'];?>
" data-target="#stream-content" data-selector="#stream-content">
            <?php echo $_smarty_tpl->getSubTemplate ("shared/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
    </div>
</div><?php }} ?>
