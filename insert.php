<?php
ini_set('display_error',1);
//if(isset($_POST['submit'])){


include("db_connection.php");
include("functions.php");
include("tables.php");
 

$emp_id=$_POST['p1'];
$emp_name=$_POST['p2'];
$username1=$_POST['p3'];
$email1=$_POST['p10'];
$phone1=$_POST['p5'];
$gender1=$_POST['p6'];
$address1=$_POST['p9'];
$Designation1=$_POST['p7'];
$Department1=$_POST['p8'];
$password1=$_POST['p4'];

$created_at = date('Y-m-d h:m:s');
$updated_at = "0000-00-00 00:00:00";
$status=-1;
$id ="NULL";
$values = $id.",'".$emp_id."','".$emp_name."',".$Designation1.",'".$email1."',".$phone1.",".$gender1.",'".$address1."',".$Department1.",'".$username1."','".$password1."','".$created_at."','".$updated_at."',".$status."";

//echo $values;

$table_num=2;
$table_name="employee_master";
$result = db_insert($table_num,$table_name,$values); 

if($result==1) {
    echo "New record created successfully";
 //echo $result['personname']."".$result['department']."".$result['fromdate']."".$result['todate']."".$result['leavedays']."".$result['details'];
}
   else {
    echo 'Unable to add';
  }
  
 // mysqli_close($con);
?>