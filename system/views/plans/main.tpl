{include file="shared/head.tpl"}
{include file="includes/styles.tpl"}
</head>
<body class="row">
    <div class="skin-blue wrapper">
        <div class="content-wrapper">
            <section class="content-header">
                <h1> Travel Plans</h1>
                <ol class="breadcrumb pull-right">
                    <li>Travel Plan Lists</li>
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
                    {include file="plans/plans.tpl"}
                </div>
                
            </section>
            
        </div>
        {include file="shared/footer.tpl"}
    </div>
    {include file="plans/modals.tpl"} 
   {include file="includes/scripts.tpl"} 
</body>
</html>