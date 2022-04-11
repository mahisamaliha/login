<?php
$server = "localhost";
//$first_name="";
//$last_name ="";
$email = "root";
//$phone_no="";
//$dob = "";
$password = "";
//$cpassword = "";
$database = "users";
$conn = mysqli_connect($server,$email,$password,$database);

if(!$conn){
    //echo "success";
//}
//else{
    die("Error". mysqli_connect_error);
}

?>