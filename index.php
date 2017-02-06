<?php
if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
    ob_start("ob_gzhandler");
else
    ob_start();

include_once 'config.php';

# Start
# Get module!
$module = filter_input(INPUT_GET, 'module');

# Init controller object!
$controller = null;

 #logout utility
if($module === 'logout'){
    Utils::logout();
}

if(isset($_SESSION[T_SUPERVISOR])) {
    #route into writer's modules
    switch ($module){
        case NULL:
        case 'supervisor':
           $controller=new SupervisorController();
           break;
        default :
            $controller=new ErrorController();
            break;
    }
}elseif(isset($_SESSION[T_USER])) {
    # Route into client's modules
    switch ($module) {
        case NULL:
        case 'user':
            $controller = new UserController();
            break;
        default :
            $controller = new ErrorController();
        break;
    }
}else{
    #remain here on the auth page
     $controller = new AuthController();
}

$controller -> __run();
