<?php
        function home(){
        header("Content-Type: application/json");
        session_start();
        $conn = mysqli_connect("localhost", "root", "", "api");
        if(mysqli_connect_error()){
            die("fail To Connect to MySql" . mysqli_connect_error());
        }
        
        $query = "SELECT * FROM `auth` ORDER BY `auth`.`auth_id` DESC";
        $results = $conn->query($query);

        $output = [];
        while($item = $results->fetch_assoc()){
            $output[] = $item;
        }
        //print_r($output);
        echo json_encode($output);
    }   
    home();