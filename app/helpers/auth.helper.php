<?php
class AuthHelper {
    //constructor
    public function __construct(){
        if(session_status() != PHP_SESSION_ACTIVE)
        session_start();
    }
    //chequea si el usuario esta logeado
    public function checkLoggedIn() {
        if (!isset($_SESSION['IS_LOGGED'])) 
            return false;
        else
            return true;
    } 
}