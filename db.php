<?php
$servername='localhost';
$username='root';
$password='';
$dbname='portfolio_db';

$conn=mysqli_connect($servername, $username, $password,$dbname);
if($conn){
    echo "Connected Successfully";
}
else{
    echo "Failed";
}
?>