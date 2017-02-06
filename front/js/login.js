$(document).ready(function (){
    onPageLoad();
});

function onPageLoad(){
    // Submit artist registration
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
    
    //submit artist login
    $('#signin-frm').validationEngine('attach').ajaxForm({
        dataType: 'json',
        resetForm: false,
        'beforeSubmit' : function (){
            // Show loader
            $('.status').Loader('Signing in...');
        },
        'success' : function (resp){
            // Show message and/or redirect to url!
            $('.status').CheckinAlert(resp.status || false ? 'info' : 'danger', resp.msg || 'Something went wrong');
            if(resp.status || false){
                window.location = resp.url;
            }else{
//                window.location = "/";
            }
        }
    });
    
    //email confirmation form
    $('#confirm-email-form').validationEngine('attach').ajaxForm({
        dataType: 'json',
        resetForm: false,
        'beforeSubmit' : function (){
            // Show loader
            $('.status').Loader('Confirming in...');
        },
        'success' : function (resp){
            // Show message and/or redirect to url!
            $('.status').CheckinAlert(resp.status || false ? 'info' : 'danger', resp.msg || 'Something went wrong');
            if(resp.status || false){
                window.location = resp.url;
            }else{
               // window.location = "/";
            }
        }
    });
}