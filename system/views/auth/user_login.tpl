{include file="shared/head.tpl"}
{include file="includes/styles.tpl"}
</head>
<body class="skin-blue reg-bg">
    <div class="login-box">
        <div class="login-logo">
            <a href="{$ss_d}">
                <img src="{$cdn}img/travel_logo.png" alt="Travel Planner" class="logo">
            </a>
        </div>
            <div class="login-box-body">
                <p class="login-box-msg">
                    Login to proceed
                </p>
                <form id="user-login" role="form" method="post" action="/{$links.auth.user_login}">
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
{*                                    <input name="remember" type="checkbox">Remember Me*}
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
                            <strong>  No Account? <a href="/{$links.auth.user_register_page}">Create one</a> </strong>
                        </div>
                         <div class="clearfix"></div> 
                        <br>
                        <div class="status text-center"></div>
                        
                    </div>
            </form>
                {include file="shared/footer.tpl"}
            </div>
             
    </div>
    
   
    
    {include file="includes/scripts.tpl"}
</body>
</html>