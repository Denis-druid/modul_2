<?php
$first_name = $_POST['first_name'];
$surname = $_POST['surname'];
$phone = $_POST['first_name'];
$password = $_POST['password'];


$is_signup = False;

$array = array('id'=> 1);

if($is_signup){
    header('HTTP/1.0 201 Created');
    api_response($array);
}
else{
    header('HTTP/1.0 422 Unprocessable Entity');
    api_response($array);
}