<?php

/**
 * Description of Controller
 *
 * @author Jaymoh
 */
interface Controller {
    //all possible routes
    
    #auth
    const AUTH_HOME='auth';
    
    const AUTH_SUPERVISOR_REGISTER_PAGE='auth/super-register-page';
    
    const AUTH_SUPERVISOR_LOGIN_PAGE='auth/super-login-page';
    
    const AUTH_SUPERVISOR_REGISTER='auth/super-register';
    
    const AUTH_SUPERVISOR_LOGIN='auth/super-login';
    
    const AUTH_USER_REGISTER_PAGE='auth/user-register-page';
    
    const AUTH_USER_LOGIN_PAGE='auth/user-login-page';
    
    const AUTH_USER_REGISTER='auth/user-register';
    
    const AUTH_USER_LOGIN='auth/user-login';
    
    #user
    const USER_HOME='user';
    
    const USER_TRAVEL_PLANS='user/travel-plans';
    
    const USER_TRAVEL_PLANS_STREAM='user/stream-plans';

    const USER_TRAVEL_PLAN_CREATE='user/new-travel-plan';
    
    
    
    #supervisor
    const SUPERVISOR_HOME='supervisor';
    
    const SUPERVISOR_PROJECTS='supervisor/projects';
    
    const SUPERVISOR_ADD_PROJECT='supervisor/new-project';


    
    public function __run();
}
