<?php
require 'vendor/autoload.php';

use Parse\ParseClient;

ParseClient::initialize('dmQvhxGKjh4X6P5nxzNffRnabjcGUisTeDojvEAU', 'u78LiI8n82MUqWayzDQmg3QTNK3bAMIa1wt6cgD9', '8UKXvRKkfT37TlYNuzNeaVhvmQv8mLzWniKCzTvp');
use Parse\ParseObject;
use Parse\ParseQuery;

    $query = new ParseQuery("Students");
    //try{
        $query->equalTo("SchoolID",filter_input(INPUT_POST, "student_id"));
        $xvalue = $query->find();
        if( count($xvalue) > 0){
            $value = $xvalue[0];
            $name = $value->get("Name");
            $fathername = $value->get("FatherName");
            $dob = $value->get("DateOfBirth");
            $group = $value->get("Group");
            $xclass = $value->get("Class");
            $data = array("Empty"=>false,"Name"=>$name,"FatherName"=>$fathername,"DOB"=>$dob,"Group"=>$group,"Class"=>$xclass);
            echo json_encode($data);
        }
        else{
            $data = array("Empty"=>true,"ID"=>filter_input(INPUT_POST, "student_id"));
            echo json_encode($data);
        }
        
    //}
    //catch (ParseException $ex) {
        
    //}


?>