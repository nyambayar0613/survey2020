<?php

class Login_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function run()
    {
        $sth = $this->db->prepare("SELECT userid, role FROM user WHERE 
                login = :login AND password = :password");
        $sth->execute(array(
            ':login' => $_POST['login'],
            ':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
        ));
        
        $data = $sth->fetch();
        
        $count =  $sth->rowCount();
        if ($count > 0) {
            // login
            Session::init();
            Session::set('role', $data['role']);
            Session::set('loggedIn', true);
            Session::set('userid', $data['userid']);
            header('location: ../dashboard');
        } else {
            header('location: ../login');
        }
        
    }
    public function teacherLogin()
    {
        $email=$_POST['email']."@koje.ac.kr";
        $sth = $this->db->prepare("SELECT email FROM teachers WHERE email = :email");
        $sth->execute(array(
            ':email' => $email
        ));

        $data = $sth->fetch();



        $count =  $sth->rowCount();

        //echo $count;

        if ($count > 0) {
            Session::init();
            Session::set('userMail', $data['email']);
            Session::set('loggedIn', true);
            header('location: /teacher');
        }
    }

    public function typeLogin($type) {
        if ($_POST['email'] == "") {
            echo "<meta charset='utf-8'><script>alert('이메일 주소 입력해 주세요!'); window.location.href = '/login/type/$type';</script>";
        } else {
            $email=$_POST['email']."@koje.ac.kr";

            $userInfo = $this->callUserInfo($type, $email);

            switch ($userInfo) {
                case 'userNotFound':
                    echo "<meta charset='utf-8'><script>alert('user not found!'); window.location.href = '/login/type/$type';</script>";
                    break;

                case 'getVoted':
                    echo "<meta charset='utf-8'><script>alert('already voted!'); window.location.href = '/login/type/$type';</script>";
                    break;

                case 'unVoted':
                    Session::init();
                    Session::set('userMail', $email);
                    Session::set('type', $type);
                    Session::set('loggedIn', true);
                    header("location: /$type");
                    break;

                default:
                    header("location: /teachers");
                    break;
            }

            //echo $userInfo;
        }



        //$check = $this->db->select("SELECT email FROM $type WHERE email = :email", [":email" => $email]);



    }
    
}