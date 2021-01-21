<?php

class staff_model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function save(){
        if(isset($_POST['questions'])) {
            $insertData = [];

            foreach($_POST['questions'] as $key => $value) {
                $arrayTypeVal = '';

                if (gettype($value) == 'array') {
                    foreach ($value as $k => $v) {
                        $arrayTypeVal .= $v.', ';
                    }

                    if($arrayTypeVal != ''){
                        $arrayTypeVal = substr($arrayTypeVal, 0 , strlen($arrayTypeVal)-1);
                    }

                    $insertData[$key] = $arrayTypeVal;
                } else {
                    $insertData[$key] = $value;
                }
            }

            $insertData['created_at']=date('Y-m-d H:i:s');
            $added = $this->db->insert('poll_staff_votes', $insertData);  // Table name, column names and respective values

            if($added){
                echo json_encode(['isSuccess'=> true]);
            } else {
                echo json_encode(['isSuccess'=> false]);
            }
        } else {
            echo "Noooooooob";
        }
    }
}