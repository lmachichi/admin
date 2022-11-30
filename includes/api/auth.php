<?php
        function auth(){
        header("Content-Type: application/json");
        session_start();
        $conn = mysqli_connect("localhost", "root", "", "api");
        if(mysqli_connect_error()){
            die("fail To Connect to MySql" . mysqli_connect_error());
        }
        $output = array('flag'=>0, 'msg'=>'Invalid request');
        if(isset($_SESSION['username']) && !empty($_SESSION['username'])){
            $query = "SELECT * FROM `auth`";
            $results = $conn->query($query);
            $data = [];
        while($item = $results->fetch_assoc()){
            $data[] = $item;
        }
        if(count($data)>0){
            $output['data'] = $data;
            $output['flag'] = 1;
            $output['msg'] = 'Oh Good';
        } else {
            $output['flag'] = 0;
            $output['msg'] = 'no Data';
        }
        } else {
            $output['flag'] = 0;
            $output['msg'] = 'Your are not Authorized for get this Data .. !';
        }
        echo json_encode($output);
    }   
    auth();