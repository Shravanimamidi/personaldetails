<?php
$data=mysqli_connect('localhost','root','','personproject') or die(mysqli_error());
if($data)
{
    echo "database connected succesfully"."<br>";
}
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $phno=$_POST['phno'];
    $address=$_POST['address'];
    $pincode=$_POST['pincode'];
    $state=$_POST['state'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql=mysqli_query($data,"INSERT INTO persondata(name,gender,phno,address,pincode,state,email,password) values('$name','$gender','$phno','$address','$pincode','$state','$email','$password');");
    if($sql)
    {
        echo "applied success";
    }
    else{
        echo "applied failed";
    }

?>