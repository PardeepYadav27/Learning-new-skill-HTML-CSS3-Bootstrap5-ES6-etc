<?php

$con= mysqli_connect('localhost','root','','test');
if(isiset($_POST['submit'])){
    
$firstName = $_POST['firstName'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$query= "INSERT INTO form(firsName,email,password,confirmpassword) VALUESv('$firstName','$email','$password','$confirmpassword')";
$run= mysqli_query($con,$query)
}

?>