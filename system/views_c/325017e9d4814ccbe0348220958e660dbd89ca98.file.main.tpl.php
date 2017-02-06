<?php /* Smarty version Smarty-3.1.19, created on 2017-02-06 13:43:37
         compiled from "C:\xampp\htdocs\Travel\system\views\plans\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240458986f7970b169-99844309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '325017e9d4814ccbe0348220958e660dbd89ca98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Travel\\system\\views\\plans\\main.tpl',
      1 => 1486373768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240458986f7970b169-99844309',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58986f7976c012_03541561',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58986f7976c012_03541561')) {function content_58986f7976c012_03541561($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("includes/styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body class="row">
    <div class="skin-blue wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <h1> Travel Plans</h1>
                <ol class="breadcrumb pull-right">
                    <li>Project list</li>
                    <li class="active"><a href="/logout">Logout</a></li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-lg-3 col-xs-6" >
                        <button type="button" class="btn btn-primary btn-lg" id="btn-modal-add-event" data-toggle="modal" data-target="#bs-add-plan-modal">Create Travel Plan</button>
                    </div>
                </div><br>
                
                <div class="row">
                    <!-- available travel plans -->
                    <?php echo $_smarty_tpl->getSubTemplate ("plans/plans.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
                
            </section>
            
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("plans/modals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
   <?php echo $_smarty_tpl->getSubTemplate ("includes/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
</body>
</html><?php }} ?>
