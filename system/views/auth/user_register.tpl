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
                    Sign up
                </p>
                <form id="user-reg" role="form" method="post"action="/{$links.auth.user_register}">
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
{*                                    <input type="checkbox"  required="Please agree to terms"> I agree to the <a href="#">terms </a>*}
                                </label>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        </div>
                    </div>
            </form>
                    <strong>Have an Account?<a href="/{$links.auth.user_login_page}" class="text-center"> Sign in</a> </strong>
                    
                    <div class="clearfix"></div>
                    <br>
                    <div class="status text-center"></div>
                {include file="shared/footer.tpl"}
            </div>
             
    </div>
    
   
    
    {include file="includes/scripts.tpl"}
</body>
</html>