//register form
$('#user-reg').validationEngine('attach').ajaxForm({
        dataType: 'json',
        resetForm: false,
        'beforeSubmit' : function (){
            // Show loader
            $('.status').Loader('Registering...');
        },
        'success' : function (resp){
            // Show message and/or redirect to url!
            $('.status').CheckinAlert(resp.status || false ? 'info' : 'danger', resp.msg || 'Something went wrong');
            if(resp.status || false){
                window.location = resp.url;
            }
        }
    });
    //login form
    $('#user-login').validationEngine('attach').ajaxForm({
        dataType: 'json',
        resetForm: false,
        'beforeSubmit' : function (){
            // Show loader
            $('.status').Loader('Signing...');
        },
        'success' : function (resp){
            // Show message and/or redirect to url!
            $('.status').CheckinAlert(resp.status || false ? 'info' : 'danger', resp.msg || 'Something went wrong');
            if(resp.status || false){
                window.location = resp.url;
            }
        }
    });
    
    
//show image preview
function onFileSelected(event){
            var selectedFile=event.target.files[0];
            var reader=new FileReader();
            var imgtag=document.getElementById("myimage");
            imgtag.title=selectedFile.name;
            
            reader.onload=function(event){
                imgtag.src=event.target.result;
            };
            reader.readAsDataURL(selectedFile);
            $("#myimage").show(500);
        }
               
    $(document).ready(function (){
        getEvents();
    //submit travel plan
    $('#btn-add-travel-plan').click(function(e){
    $('#add-travel-plan').validationEngine('attach').ajaxForm({
        dataType: 'json',
        resetForm: false,
        'beforeSubmit' : function (){
            // Show loader
            $('.status').Loader('Saving...');
        },
        'success' : function (resp){
            // Show message and/or redirect to url!
            $('.status').CheckinAlert(resp.status || false ? 'info' : 'danger', resp.msg || 'Something went wrong');
            if(resp.status){
                window.location = resp.url;
            }else{
//                window.location = "/";
            }
        }
    });
    
    });
    
    $("*[role=ajax]").ajaxMagic();
    
    $('.form_datetime').datetimepicker({
        weekStart: 1,
        todayBtn:  1,
        autoclose: 1,
        todayHighlight: 1,
        startView: 2,
        forceParse: 0,
        showMeridian: 1
    });
    
    });
    
         function getEvents() {
           //first load of songs
            if (!$('#feeds').length) {
                return;
            }
            ;
            var details = $('#feeds').data(),
                url = details.targetFeeds;
            // Remove the links url
            delete details.targetFeeds;
            $('#feeds').load(url, details, function() {
            });
        }
       