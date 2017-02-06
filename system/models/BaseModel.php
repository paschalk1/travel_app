<?php

include_once __ROOT__ . '/smarty/libs/Smarty.class.php';
class BaseModel extends Smarty{
    //database credentials
    const DBHost = "localhost";
    const DBName = "travel";
    const DBUser = "root";
    const DBPwd = "";
    
    //connection handler
    private $connection=null;
    
    function __construct() {
        parent::__construct();
        
        $this -> template_dir = __SYS__ . '/views/';
        $this -> compile_dir = __SYS__ . '/views_c/';
        $this -> cache_dir = __SYS__ . '/cache/';
        $this -> config_dir = __SYS__ . '/configs/';
        
         //disable caching for development purpose
        $this->caching=false;
        
        //kill debugging
        $this->debugging=false;
        $this->force_compile=true;
        
        $this->assign("cdn", FRONT, false);
        $this->assign("ss_d", SS_D, false);
     
          //upload path
        $this->assign("uploads", UPLOADS);
        $this->assign("plansCount", $this->getActiveUserPlanCount());
        
        $this->assign('globals', array(
            'auth'=>array(),
            'user'=>array(),
            'supervisor'=>array()
        ));
    }
    
    //get database connection and prepare statements
    protected function getConnection($sql=null){
        $this->connection=$conn=new mysqli(self::DBHost, self::DBUser, self::DBPwd, self::DBName);
        if($conn->connect_error){
            die('Connection error('.$conn->connect_errno.')'. $conn->connect_error);
        }
        
        #prepare statement
        if(!$sql || !$conn =$conn->prepare($sql)){
            throw new Exception($this->connection->connect_error);
        }
        
        return $conn;
    }
    
    #get connection without preparing statement
     protected function mysqliConnection(){
        $mysqli = $this->connection = $con = new mysqli(self::DBHost, self::DBUser, self::DBPwd, self::DBName);
        if($mysqli->connect_errno){
            die('Connection error(' . $mysqli->connect_errno. ')' . $mysqli->connect_error);
        }
        #send connection
        return $mysqli;
    }
    
    
    protected function hashPwd($pwd){
        if(!$pwd){
            header('Location: /');
            die();
            throw new Exception("Password cannot be empty", 1000);
        }
        $salt = sha1(rand());
        $salt = substr($salt, 0, 10);
        $encrypted = base64_encode(sha1($pwd . $salt, true) . $salt);
        $hash = array(
            'salt' => $salt,
            'encrypted' => $encrypted
        );
        return $hash;
    }
    
    
      public function checkHash($salt, $pwd) {
        $hash = base64_encode(sha1($pwd . $salt, true) . $salt);
        return $hash;
    }
    
    #jsonify result
    public function getJsonResponse( $result) {
        return json_encode($result);
    }

    #spit result and die
    public function dd ($var) {
    echo "<pre>"; print_r($var); die;
    }
    
     #get active user plans  count
    protected function getActiveUserPlanCount(){
        
        $query="SELECT COUNT(*) FROM travel_plan WHERE user_id=?";
        try{
            $stmt=  $this->getConnection($query);
            if($stmt){
                $stmt->bind_param("s", $_SESSION[T_USER]);
                $stmt->execute();
                $stmt->bind_result($plans);
                $stmt->fetch();
                $count=$plans;
                
                $stmt->close();
                return $count;
            }else{
                return $stmt->error;
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }

}
