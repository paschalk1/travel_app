<?php

class SupervisorController extends SuperVisorModel implements Controller{
    
    function __construct() {
        parent::__construct();
        
        $this->assign('links', [
            'proj'=>[
                'add'=>  Controller::SUPERVISOR_ADD_PROJECT
            ]
        ]);
    }


    private function showMain(){
        $this->assign('title', "Travel Plan | Projects");
        $this->assign('copyright', Utils::TravellerCopyright());
        $this->assign('projects', $this->getProjects($_SESSION[T_SUPERVISOR]));
        $this->display('projects/main.tpl');
    }
    
    private function addProject(){
        $result=[];
        $name=  filter_input(INPUT_POST, 'name');
        $description=  filter_input(INPUT_POST, 'description');
        $total_budget=  filter_input(INPUT_POST, 'total_budget');
        if(isset($name, $description, $total_budget)){
            $project=  $this->storeProject($_SESSION[T_SUPERVISOR], $name, $description, $total_budget);
            if($project){
                $result['status']=TRUE;
                $result['msg']="Succes, Project saved";
                $result['url']="/";
            }else{
            $result['status']=FALSE;
            $result['msg']="Something is wrong... we are working to resolve";
            $result['url']="/";
            }
        }else{
            $result['status']=FALSE;
            $result['msg']="Please fill all fields";
            $result['url']="/";
        }
        
        echo $this->getJsonResponse($result);
    }

    public function __run() {
        $query = isset($_REQUEST['query']) ? $_REQUEST['query'] : null;
        switch ($query){
            case NULL:
                $this->showMain();
                break;
            case 'new-project':
                $this->addProject();
                break;
            default :
                $this->showMain();
                break;
        }
    }

//put your code here
}
