{include file="shared/head.tpl"}
{include file="includes/styles.tpl"}
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
                    {include file="projects/projects.tpl"}
                </div>
                
            </section>
            
        </div>
        {include file="shared/footer.tpl"}
    </div>
    {include file="projects/modals.tpl"} 
   {include file="includes/scripts.tpl"} 
</body>
</html>