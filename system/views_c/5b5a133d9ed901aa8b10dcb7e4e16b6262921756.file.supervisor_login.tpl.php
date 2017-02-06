<?php /* Smarty version Smarty-3.1.19, created on 2017-02-06 11:25:02
         compiled from "C:\xampp\htdocs\Travel\system\views\auth\supervisor_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3120058984efeb2c705-73570645%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b5a133d9ed901aa8b10dcb7e4e16b6262921756' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Travel\\system\\views\\auth\\supervisor_login.tpl',
      1 => 1486298146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3120058984efeb2c705-73570645',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ss_d' => 0,
    'cdn' => 0,
    'links' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58984efeba8d29_30873972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58984efeba8d29_30873972')) {function content_58984efeba8d29_30873972($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("includes/styles.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body class="skin-blue reg-bg">
    <div class="login-box">
        <div class="login-logo">
            <a href="<?php echo $_smarty_tpl->tpl_vars['ss_d']->value;?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['cdn']->value;?>
img/travel_logo.png" alt="Travel Planner" class="logo">
            </a>
        </div>
            <div class="login-box-body">
                <p class="login-box-msg">
                    Login to proceed
                </p>
                <form id="user-login" role="form" method="post" action="/<?php echo $_smarty_tpl->tpl_vars['links']->value['auth']['super_login'];?>
">
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" class="form-control validate[required,custom[email]]" type="email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control validate[required]">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xs-8">
                            <div class="checkbox icheck">
                                <label>

                                </label>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="clearfix"></div>
                        <br>
                        <div class="col-xs-6">

                        </div>
                         <div class="clearfix"></div> 
                        <br>
                        <div class="status text-center"></div>
                        
                    </div>
            </form>
                <?php echo $_smarty_tpl->getSubTemplate ("shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
             
    </div>
    
   
    
    <?php echo $_smarty_tpl->getSubTemplate ("includes/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
