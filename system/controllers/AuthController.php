<?php
class AuthController extends BaseModel implements Controller{
    
    function __construct() {
        parent::__construct();
        #links
        $this->assign('links', [
            'auth'=>[
                'super_register_page'=>  Controller::AUTH_SUPERVISOR_REGISTER_PAGE,
                'super_register'=>  Controller::AUTH_SUPERVISOR_REGISTER,
                'super_login_page'=>  Controller::AUTH_SUPERVISOR_LOGIN_PAGE,
                'super_login'=>  Controller::AUTH_SUPERVISOR_LOGIN,
                'user_register_page'=>  Controller::AUTH_USER_REGISTER_PAGE,
                'user_register'=>  Controller::AUTH_USER_REGISTER,
                'user_login_page'=>  Controller::AUTH_USER_LOGIN_PAGE,
                'user_login'=>  Controller::AUTH_USER_LOGIN
            ]
        ]);
    }

    private function showHome(){
        $this->assign('title', 'Travel Planner');
        $this->assign('copyright', Utils::TravellerCopyright());
        $this->display('auth/main.tpl');
    }
    
    private function showSuperLoginPage(){
        $this->assign('title', 'Travel Planner | Login');
        $this->assign('copyright', Utils::TravellerCopyright());
        $this->display('auth/supervisor_login.tpl');
    }
    
    private function superLogin(){
        $result=[];
        $email= filter_input(INPUT_POST, 'email');
        $password=  filter_input(INPUT_POST, 'password');
        if(isset($email, $password)){
            $userModel=new SuperVisorModel();
            $user=$userModel->getUserByEmail($email);
            if($user){
                $salt=$user['salt'];
                $pwd=$user['password'];
                $hash=  $this->checkHash($salt, $password);
                if($hash==$pwd){
                    Utils::SupervisorSession($user['id']);
                    $result['status']=TRUE;
                    $result['msg']="Login Success!";
                    $result['url']='/';
                }else{
                    $result['status']=FALSE;
                    $result['msg']="Failed to Login... Wrong email or password";
                    $result['url']='/';
                }
            }else{
            $result['status']=FALSE;
            $result['msg']="User with that email doesn't exist";
            $result['url']='/';
            }
        }else{
            $result['status']=FALSE;
            $result['msg']="Please fill all fields";
            $result['url']='/';
        }
        echo $this->getJsonResponse($result);
    }

        private function showUserRegPage(){
        $this->assign('title', 'Travel Planner | Register');
        $this->assign('copyright', Utils::TravellerCopyright());
        $this->display('auth/user_register.tpl');
    }

    private function userReg(){
        $result=[];
        $names=  filter_input(INPUT_POST, 'names');
        $email=  filter_input(INPUT_POST, 'email');
        $phone=  filter_input(INPUT_POST, 'phone');
        $password=  filter_input(INPUT_POST, 'password');
        if(isset($names, $email, $phone, $password)){
            $userModel=new UserModel();
            //check if exists; die, else proceed
            if($userModel->isUserEmailHere($email)){
            $result['status']=FALSE;
            $result['msg']="Email you entered already exists, login?";
            $result['url']='/';
            }else{
                $hash=  $this->hashPwd($password);
                $pass=$hash['encrypted'];
                $salt=$hash['salt'];
                $user=$userModel->register($names, $email, $phone, $pass, $salt);
                if($user){
                    Utils::UserSession($user['id']);
                     $result['status']=TRUE;
                    $result['msg']="Register Success";
                    $result['url']='/';
                }else{
                     $result['status']=FALSE;
                    $result['msg']="Some problem occured.. we are working to resolve";
                    $result['url']='/';
                }
            }
        }else{
            $result['status']=FALSE;
            $result['msg']="Please fill all fields";
            $result['url']='/';
        }
        echo $this->getJsonResponse($result);
    }

    private function showUserLoginPage(){
        $this->assign('title', 'Travel Planner');
        $this->assign('copyright', Utils::TravellerCopyright());
        $this->display('auth/user_login.tpl');
    }
    
    private function userLogin(){
        $result=[];
        $email=  filter_input(INPUT_POST, 'email');
        $password=  filter_input(INPUT_POST, 'password');
        if(isset($email, $password)){
            $userModel=new UserModel();
            $user=$userModel->getUserByEmail($email);
            //dd($user);
            if($user){
                $salt=$user['salt'];
                $pwd=$user['password'];
                $hash=  $this->checkHash($salt, $password);
                if($hash==$pwd){
                  Utils::UserSession($user['id']);
                 $result['status']=TRUE;
                $result['msg']="Login Success";
                $result['url']='/';
                }else{
                 $result['status']=FALSE;
                $result['msg']="Failed to login... Wrong email or password";
                $result['url']='/';
                }
            }else{
            $result['status']=FALSE;
            $result['msg']="User with that email doesn't exist";
            $result['url']='/';
            }
        }  else {
             $result['status']=FALSE;
            $result['msg']="Please fill all fields";
            $result['url']='/';
        }
        
        echo $this->getJsonResponse($result);
    }

    public function __run() {
        $query = isset($_REQUEST['query']) ? $_REQUEST['query'] : null;
        switch ($query){
            case NULL:
                $this->showHome();
                break;
            case 'super-login-page':
                $this->showSuperLoginPage();
                break;
            case 'user-login-page':
                $this->showUserLoginPage();
                break;
            case 'user-register-page':
                $this->showUserRegPage();
                break;
            case 'user-register':
                $this->userReg();
                break;
            case 'user-login':
                $this->userLogin();
                break;
            case 'super-login':
                $this->superLogin();
                break;
            default:
                $this->showHome();
                break;
        }
    }

}
