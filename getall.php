<?php
require 'vendor/autoload.php';

use Parse\ParseClient;

ParseClient::initialize('dmQvhxGKjh4X6P5nxzNffRnabjcGUisTeDojvEAU', 'u78LiI8n82MUqWayzDQmg3QTNK3bAMIa1wt6cgD9', '8UKXvRKkfT37TlYNuzNeaVhvmQv8mLzWniKCzTvp');
use Parse\ParseObject;
use Parse\ParseQuery;

$q = new ParseQuery("Students");
$q->descending('createdAt');
$r = $q->find();
$total_data = array();
foreach ($r as $value)
{
	$name = $value->get("Name");
    $fathername = $value->get("FatherName");
    $dob = $value->get("DateOfBirth");
    $group = $value->get("Group");
    $xclass = $value->get("Class");
    $school_id = $value->get("SchoolID");
    $data = array("Name"=>$name,"FatherName"=>$fathername,"DOB"=>$dob,"Group"=>$group,"Class"=>$xclass,"SchoolID"=>$school_id);
    array_push($total_data, $data);
}

echo json_encode($total_data);


//}
//catch (ParseException $ex) {

//}


?>