<?php
/**
 * 
 */
class Auth
{
    
    public static function handleLogin($type)
    {
        @session_start();
        $logged = $_SESSION['loggedIn'];
        $loggedType = $_SESSION['type'];

        if ($logged == false || $loggedType != $type) {
            session_destroy();
            header("location: ../login/type/$type");
            exit;
        }
    }
    
}