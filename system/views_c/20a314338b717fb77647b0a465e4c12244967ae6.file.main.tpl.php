<?php /* Smarty version Smarty-3.1.19, created on 2017-02-06 11:51:06
         compiled from "C:\xampp\htdocs\Travel\system\views\projects\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:240905898551a61e608-79551068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20a314338b717fb77647b0a465e4c12244967ae6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Travel\\system\\views\\projects\\main.tpl',
      1 => 1486373822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '240905898551a61e608-79551068',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5898551a674521_16800758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5898551a674521_16800758')) {function content_5898551a674521_16800758($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("includes/styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body class="row">
    <div class="skin-blue wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <h1> Projects</h1>
                <ol class="breadcrumb pull-right">
                    <li>Project list</li>
                    <li class="active"><a href="/logout">Logout</a></li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-lg-3 col-xs-6" >
                        <button type="button" class="btn btn-primary btn-lg" id="btn-modal-add-event" data-toggle="modal" data-target="#bs-add-project-modal">Add Project</button>
                    </div>
                </div><br>
                
                <div class="row">
                    <!-- available projects -->
                    <?php echo $_smarty_tpl->getSubTemplate ("projects/projects.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                </div>
                
            </section>
            
        </div>
        <?php echo $_smarty_tpl->getSubTemplate ("shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("projects/modals.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
   <?php echo $_smarty_tpl->getSubTemplate ("includes/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
</body>
</html><?php }} ?>
