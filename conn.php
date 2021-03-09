<?php

$conn = mysqli_connect("localhost","root","");

if ($conn){
    echo "connection success";

}else{
    die("Connection failed :".mysqli_connect_error());

}