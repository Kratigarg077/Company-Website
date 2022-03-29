
<?php

$con = mysqli_connect('localhost','root');  //first make connection with mysql server

if($con){ 
	echo "Connection successful";            //if connection is established with mysql server
}
else{
	echo "No Connection";
}
mysqli_select_db($con,'userdata');                 //select database

$name = $_POST['Name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comment = $_POST['comment'];   

$query = "insert into userinfodata(Name,email,mobile,comment) values('$name','$email','$mobile','$comment')";
echo "$query";
mysqli_query($con,$query);    

header('location:index.php');                                  
alert("Registered Successfully");


?>