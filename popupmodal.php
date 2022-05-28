<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'travel');

if(isset($_POST['modalll']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $place = $_POST['place'];
    $package= $_POST['package'];
    
    $query = "INSERT INTO confirm ('name','email','place','package') VALUES ('$name','$email','$place','$package')";
    $query_ran = mysqli_query($cunnection, $query);
    
    if($query_ran)
    {
        echo '<script> alert("Data save");</script>';
        header('Location:indax.html');
    }
    else
    {
        echo '<script> alert("Data Not save");</script>';
    }
    
    
}





?>