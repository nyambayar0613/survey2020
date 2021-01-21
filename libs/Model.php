<?php



class Model {

    function __construct() {
        $this->db = new Database(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);
    }

    public function callUserInfo($table, $email) {
        $isVoted = 0;

        $findUser = $this->db->select("SELECT count(id) as count FROM $table WHERE email = :email", [":email" => $email]);

        if ($findUser[0]['count'] > 0) {
            switch ($table) {
                case 'teachers':
                    $isVoted = $this->db->select("SELECT count(id) as cnt FROM poll_teacher_votes WHERE user_email = :email", [":email" => $email]);
                    break;
                case 'staff':
                    $isVoted = $this->db->select("SELECT count(id) as cnt FROM poll_staff_votes WHERE user_email = :email", [":email" => $email]);
                    break;
                case 'graduates':
                    $isVoted = $this->db->select("SELECT count(id) as cnt FROM poll_graduates_votes WHERE user_email = :email", [":email" => $email]);
                    break;
                case 'branch':
                    $isVoted = $this->db->select("SELECT count(id) as cnt FROM poll_branch_votes WHERE user_email = :email", [":email" => $email]);
                    break;
            }

            if ($isVoted[0]['cnt'] > 0) {
                $result = "getVoted";
            } else {
                $result = "unVoted";
            }

        } else {
            $result = "userNotFound";
        }

        return $result;
    }


}