<?php

require 'vendor/autoload.php';

use Parse\ParseClient;

ParseClient::initialize('dmQvhxGKjh4X6P5nxzNffRnabjcGUisTeDojvEAU', 'u78LiI8n82MUqWayzDQmg3QTNK3bAMIa1wt6cgD9', '8UKXvRKkfT37TlYNuzNeaVhvmQv8mLzWniKCzTvp');

use Parse\ParseObject;

$testObject = ParseObject::create("Students");

$testObject->set("Name", filter_input(INPUT_POST, "name"));
$testObject->set("Group", filter_input(INPUT_POST, "group"));
$testObject->set("FatherName", filter_input(INPUT_POST, "fathername"));
$testObject->set("SchoolID", filter_input(INPUT_POST, "schoolid"));
$testObject->set("DateOfBirth", filter_input(INPUT_POST, "dob"));
$testObject->set("Class", filter_input(INPUT_POST, "class"));
$testObject->save();
echo "Object Saved Successfully..!!";
?>