<?php
class UserModel extends BaseModel {
    
    function __construct() {
        parent::__construct();
        
    }


    public function register($name, $email, $phone, $pass, $salt){
        try{
            $query="INSERT INTO users(names, email, phone, password, salt, created_at) VALUES(?, ?, ?, ?, ?, NOW())";
            $stmt=  $this->getConnection($query);
            if($stmt){
                $stmt->bind_param("sssss", $name, $email, $phone, $pass, $salt);
                if($stmt->execute()){
                    return $this->getUserByEmail($email);
                }else{
                    return NULL;
                }
                
            }else{
                return NULL;
            }
        } catch (Exception $ex) {
            return NULL;
        }
    }
    
    public function getProjects(){
        $query="SELECT id, name, description, total_budget, created_at FROM project WHERE status=?";
        try{
            $status=0;
            $stmt=  $this->getConnection($query);
            if($stmt){
                $stmt->bind_param("i", $status);
                $stmt->execute();
                $stmt->store_result();
                $num_rows=$stmt->num_rows;
                if($num_rows>0){
                    $projects=array();
                    $stmt->bind_result($id, $name, $description, $total_budget, $created);
                    while($stmt->fetch()){
                        $project=array(
                            'id'=>$id,
                            'name'=>$name,
                            'description'=>$description,
                            'total_budget'=>$total_budget,
                            'created_at'=>$created
                        );
                        
                        array_push($projects, $project);
                    }
                    $stmt->close();
                    return $projects;
                }else{
                    return NULL;
                }
            }else{
                return NULL;
            }
        } catch (Exception $ex) {
            return NULL;
        }
    }

        public function getUserByEmail($email){
        $query="SELECT id, names, email, phone, password, salt, created_at FROM users WHERE email=?";
        try{
            $stmt=  $this->getConnection($query);
            if($stmt){
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $stmt->store_result();
                $num_rows=$stmt->num_rows;
                if($num_rows>0){
                    $stmt->bind_result($id, $name, $email, $phone, $password, $salt, $created_at);
                    $stmt->fetch();
                    $result=array(
                        'id'=>$id, 
                        'name'=>$name,
                        'email'=>$email,
                        'phone'=>$phone,
                        'password'=>$password,
                        'salt'=>$salt,
                        'created_at'=>$created_at
                        );
                    
                        return $result;
                }else{
                    return NULL;
                }
            }else{
                return NULL;
            }
        } catch (Exception $ex) {
            return NULL;
        }
    }


    #check if email exists
    public function isUserEmailHere($email){
        $query="SELECT names FROM users WHERE email=?";
        try{
            $stmt=  $this->getConnection($query);
            if($stmt){
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $stmt->store_result();
                $num_rows=$stmt->num_rows;
                $stmt->close();
                return $num_rows>0;
            }
        } catch (Exception $ex) {
            return null;
        }
    }
    
    public function storeTravelPlan($user_id, $project_id, $venue, $travel_date, $days_away, $justification, $estimated_cost, $regional_office){
        $query="INSERT INTO travel_plan(user_id, project_id, venue, travel_date, days_away, justification, estimated_cost, regional_office_destination, created_at) VALUES(?, ?, ?, ?, ?, ?, ?, ?, NOW())";
        try{
            $stmt=  $this->getConnection($query);
            if($stmt){
                $stmt->bind_param("iissssss", $user_id, $project_id, $venue, $travel_date, $days_away, $justification, $estimated_cost, $regional_office);
                if($stmt->execute()){
                    return $stmt->insert_id;
                }else{
                    return NULL;
                }
            }else{
                return NULL;
            }
        } catch (Exception $ex) {
            return NULL;
        }
    }


    #get travel plans
    public function getUserTravelPlans($id, $offset){
        $offset=(int)$offset;
        $query="SELECT travel_plan.id, travel_plan.project_id, travel_plan.venue, travel_plan.travel_date, travel_plan.days_away, travel_plan.justification, travel_plan.estimated_cost, travel_plan.funds_allocated, travel_plan.funds_spent, travel_plan.status, travel_plan.regional_office_destination, travel_plan.created_at, project.name FROM travel_plan INNER JOIN project ON travel_plan.project_id=project.id WHERE travel_plan.user_id=? ORDER BY id DESC LIMIT 10 offset ?";
        try{
            $stmt=  $this->getConnection($query);
            if($stmt){
                $stmt->bind_param("ii", $id, $offset);
                $stmt->execute();
                $stmt->store_result();
                $num_rows=$stmt->num_rows;
                if($num_rows){
                    $plans=array();
                    $stmt->bind_result($id, $project_id, $venue, $travel_date, $days_away, $justification, $estimated_cost, $funds_allocated, $funds_spent, $status, $regional, $created_at, $project_name);
                    
                    while($stmt->fetch()){
                        $plan=array(
                            'id'=>$id, 
                            'project_id'=>$project_id,
                            'venue'=>$venue,
                            'travel_date'=>$travel_date,
                            'days'=>$days_away,
                            'justification'=>$justification,
                            'estimated'=>$estimated_cost,
                            'funds_allocated'=>$funds_allocated,
                            'funds_spent'=>$funds_spent,
                            'status'=>$status,
                            'regional'=>$regional,
                            'created_at'=>$created_at,
                            'project_name'=>$project_name
                        ); 
                        array_push($plans, $plan);
                    }
                    $stmt->close();
                    
                    return $plans;
                }else{
                    return NULL; 
                }
            }else{
                return NULL;
            }
        } catch (Exception $ex) {
            return $ex->getMessage();
        }
    }
    
}
