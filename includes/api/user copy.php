<?php
    function login(){
        header("Content-Type: application/json");
        session_start();
        $conn = mysqli_connect("localhost", "root", "", "api");
        if(mysqli_connect_error()){
            die("fail To Connect to MySql" . mysqli_connect_error()); 
        }
        
        $output = array('flag'=> 0);
        if(isset($_POST['username']) && isset($_POST['password'])){
            $query = "SELECT * FROM `users` where user_name = '".$_POST['username']."' and user_password='".sha1($_POST['password'])."'";
            
            $res = $conn->query($query);
            if($res->num_rows == 1){
                $_SESSION['username'] = $_POST['username'];
                $output['flag'] = 1;
            }
       }
       echo json_encode($output);
    }
    login();