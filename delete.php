<?php
    $con = mysqli_connect("localhost","root","","dbstudent");
    $data = json_decode(file_get_contents("php://input"));
    $id = $data->id;
    $query = "delete from tbuser where id = $id ";
    if(mysqli_query($con,$query)){
        echo "Delete Complete";
    }else{
        echo "Error";
    }
?>