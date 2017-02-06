<?php /* Smarty version Smarty-3.1.19, created on 2017-02-05 15:53:56
         compiled from "C:\xampp\htdocs\Travel\system\views\auth\user_register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:676658973c8420bcc2-84558901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '103ef9544f852b37615c9a2da9a1907080c8423c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Travel\\system\\views\\auth\\user_register.tpl',
      1 => 1486299284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '676658973c8420bcc2-84558901',
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
  'unifunc' => 'content_58973c8427c4d5_39711845',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58973c8427c4d5_39711845')) {function content_58973c8427c4d5_39711845($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("shared/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
                    Sign up
                </p>
                <form id="user-reg" role="form" method="post"action="/<?php echo $_smarty_tpl->tpl_vars['links']->value['auth']['user_register'];?>
">
                    <div class="form-group">
                        <label>Name</label>
                        <input name="names" class="form-control validate[required]" type="text" >
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input name="email" class="form-control validate[required,custom[email]]" type="email">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input name="phone" class="form-control validate[required]" type="tel" >
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input name="password" class="form-control validate[required]" type="password">
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
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        </div>
                    </div>
            </form>
                    <strong>Have an Account?<a href="/<?php echo $_smarty_tpl->tpl_vars['links']->value['auth']['user_login_page'];?>
" class="text-center"> Sign in</a> </strong>
                    
                    <div class="clearfix"></div>
                    <br>
                    <div class="status text-center"></div>
                <?php echo $_smarty_tpl->getSubTemplate ("shared/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            </div>
             
    </div>
    
   
    
    <?php echo $_smarty_tpl->getSubTemplate ("includes/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>
