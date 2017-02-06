<?php
class SuperVisorModel extends BaseModel {
    
    function __construct() {
        parent::__construct();
    }

    public function getUserByEmail($email){
        $query="SELECT id, names, email, phone, password, salt, created_at FROM supervisor WHERE email=?";
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
                    
                    $stmt->close();
                        return $result;
                }else{
                    return NULL;
                }
            }else{
                return $stmt->error;
            }
        } catch (Exception $ex) {
            return NULL;
        }
    }
    
    public function storeProject($supervisor_id, $name, $description, $total_budget){
        $query="INSERT INTO project(supervisor_id, name, description, total_budget, created_at) VALUES(?, ?, ?, ?, NOW())";
        try{
            $stmt=  $this->getConnection($query);
            if($stmt){
                $stmt->bind_param("isss", $supervisor_id, $name, $description, $total_budget);
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
    
    //get projects of logged in supervisor
     public function getProjects($supervisor_id){
        $query="SELECT id, name, description, total_budget, status, created_at FROM project WHERE supervisor_id=?";
        try{
            $status=0;
            $stmt=  $this->getConnection($query);
            if($stmt){
                $stmt->bind_param("i", $supervisor_id);
                $stmt->execute();
                $stmt->store_result();
                $num_rows=$stmt->num_rows;
                if($num_rows>0){
                    $projects=array();
                    $stmt->bind_result($id, $name, $description, $total_budget, $status, $created);
                    while($stmt->fetch()){
                        $project=array(
                            'id'=>$id,
                            'name'=>$name,
                            'description'=>$description,
                            'total_budget'=>$total_budget,
                            'status'=>$status,
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
    
    private function getTravelPlans(){
        
    }
}
