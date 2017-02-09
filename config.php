<?php
# Define Globals!
if (!defined('__ROOT__')) {
    
    # Path Separator!
    define('PS', PATH_SEPARATOR);
	
    # Directory separator!
    define('DS', DIRECTORY_SEPARATOR);
    
    # Root Directory!
    define('__ROOT__', __DIR__);
    
    # System Direcotry!
    define('__SYS__', __ROOT__ . sprintf('%1$ssystem%1$s', DS));
        
    # Set Include path!
    set_include_path(
        get_include_path() . PS
        . __SYS__ . sprintf('objects%1$s', DS) . PS
        . __SYS__ . sprintf('controllers%1$s', DS) . PS
        . __SYS__ . sprintf('models%1$s', DS) . PS
        . __SYS__ . sprintf('utilities%1$s', DS) . PS
    );
    
    # Auto-load classes!
    spl_autoload_register(function ($class){
        # Exclude smarty classes, already loaded in smarty main class!        
        if ((preg_match("/smarty/i", $class)) || $class === 'finfo') {
            return;
        }
        
        $file = "$class.php";
        return include_once $file;
    });
    
    # Register error handler!
    
    
    # Set date format!
    define('CM_DATE', 'F jS, Y');
    
    # Set time format!
    define('CM_TIME', 'h:i a');
    
    # Set full date format!
    define('CM_FULL_DATE', 'F jS, Y h:i a');
    
    # Set cdn path
    define('FRONT', 'http://front.travel.com/');
   
    define('SS_D', 'http://dev.travel.com/');
    
    # This is crazy but, set phone validation regex!
    define('PHONE_REGEX', '/^\+2547(?:[0-9] ?){7}[0-9]$/');
    
    # Set session user identifier!
    define('T_OWNER', 'travelDirector!');
    
    #set supervisor session
    define('T_SUPERVISOR', 'travelSupervisor');

    # Set session user identifier!
    define('T_USER', 'travelPlanner')
   
    define('T_ADDRESS', "travel.com,");
    
    # Set Logo
    define('T_LOGO', FRONT . 'images/cm-logo1.png');
    
    # Set email Logo
    define('TRAVEL_LOGO_EMAIL', FRONT . 'images/logo_email.png');
    
    # Set uploads url
    define('UPLOADS', SS_D . 'uploads/');
    
    # Set copyright statement
    define('COPY', 'Copyright &copy; 2017 <a href="/">Travel Plan</a>.  All Rights Reserved.');

    # Set db connection
    define('DBHOST', "localhost");

    # Set db name
    define('DBNAME', 'travel');
    
    # Seed the random generator!
    mt_srand((double)microtime() * 1000);

    # Set session name!
    session_name('_travelPlan');
    session_start();
}

/**
 * @param array $array
 * @param       $key
 * @param null  $default
 *
 * @return null
 */
function array_get(array $array, $key, $default = null){
    return isset($array[$key]) ? $array[$key] : $default;
}

function dd ($var) {
    echo "<pre>"; print_r($var); die;
}
