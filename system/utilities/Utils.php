<?php
/**
 * Description of Utils
 *
 * @author Jaymoh
 */
class Utils {
    
     const ALLOWABLE_TAGS = '<p><div><span><i><u><b><strong><font><ul><ol><li><a>';
     //copy right
    const COPYRIGHT_YEAR=2017;
    
    function __construct() {
        
    }

    public static function logout(){
        if(isset($_SESSION[T_SUPERVISOR])){
            $_SESSION[T_SUPERVISOR]=array();
            unset($_SESSION[T_SUPERVISOR]);
            session_destroy();
        }
        if(isset($_SESSION[T_USER])){
            $_SESSION[T_USER]=array();
            unset($_SESSION[T_USER]);
            session_destroy();
        }
        
        header("Location: ".SS_D);
    }
    
    #do we need a copyright? 
    public static function TravellerCopyright(){
        $year=  date('Y');
        $copy=  self::COPYRIGHT_YEAR;
        
        if((int)$year>self::COPYRIGHT_YEAR){
            $copy.=" - $year";
        }
        return sprintf(COPY, $copy);
    }
    
    #create a supervisor session
    public static function SupervisorSession($value){
        session_regenerate_id();
        $_SESSION[T_SUPERVISOR]=$value;
    }
    
    #create user session
    public static function UserSession($value){
        session_regenerate_id();
        $_SESSION[T_USER]=$value;
    }
    
    #get rid of unwanted tags
    public static function tagStripper($txt){
        return strip_tags($txt, self::ALLOWABLE_TAGS);
    }
    
    #show error
    public static function showError($code=404){
        $error=new ErrorController($code);
        $error->__run();
    }
}
