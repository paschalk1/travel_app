<?php
/**
 * Description of UserController
 *
 * @author Jaymoh
 */
define ("MAX_SIZE", "2000");
define("MAX_SONG_SIZE", 10000);
define("MAX_ITEMS_PPG", 10);
class UserController extends UserModel implements Controller{
    
    function __construct() {
        parent::__construct();
        
        $this->assign('links', [
            'plans'=>[
                'stream'=>  Controller::USER_TRAVEL_PLANS_STREAM,
                'add'=>  Controller::USER_TRAVEL_PLAN_CREATE
            ]
        ]);
    }
    
    private function showMain(){        
        $this->assign("title", "Travel Plan | Plans");
        $this->assign("copyright", Utils::TravellerCopyright());
        $this->assign("projects", $this->getProjects());
        $this->display("plans/main.tpl");
    }
    
    private function streamPlans(){
        //offset
        $page=  isset($_REQUEST['page']) ? $_REQUEST['page'] : 0;
        $offset =$page * MAX_ITEMS_PPG;
        $plans=  $this->getUserTravelPlans($_SESSION[T_USER], $offset);
        $this->assign('plans', $plans);
        return $this->display('plans/stream.tpl');
    }
    
    #plan
    private function addPlan(){
        $result=[];
        $project_id=  filter_input(INPUT_POST, 'project_id');
        $venue=  filter_input(INPUT_POST, 'venue');
        $travel_date=  filter_input(INPUT_POST, 'travel_date');
        $days_away=  filter_input(INPUT_POST, 'days_away');
        $justification=  filter_input(INPUT_POST, 'justification');
        $estimated_cost=  filter_input(INPUT_POST, 'estimated_cost');
        $destination_office=  filter_input(INPUT_POST, 'destination_office');
        if(isset($project_id, $venue, $travel_date, $days_away, $justification, $estimated_cost, $destination_office)){
            $plan=  $this->storeTravelPlan($_SESSION[T_USER], $project_id, $venue, $travel_date, $days_away, $justification, $estimated_cost, $destination_office);
            if($plan){
                $result['status']=TRUE;
                $result['msg']="Travel Plan added... wait for approval";
                $result['url']='/';
            }else{
                $result['status']=FALSE;
                $result['msg']="Something is wrong.. we are working to resolve";
                $result['url']='/';
            }
        }else{
            $result['status']=FALSE;
            $result['msg']='Please fille all fields';
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
            case 'stream-plans':
                $this->streamPlans();
                break;
            case 'new-travel-plan':
                $this->addPlan();
                break;
            default :
                $this->showMain();
                break;
        }
    }

}
