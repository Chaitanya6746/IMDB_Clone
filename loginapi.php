<?php
$servername='php-db.chsyou8ki3um.us-east-2.rds.amazonaws.com';
$username='root';
$password='chaitanya';
$dbname='portfolio_db';

$conn  = new mysqli($servername, $username, $password,$dbname);
if (isset($_POST['submit'])){
$email=$_POST['email'];
$password=$_POST['password'];


$authenticate="select * from logins where email='".$email."' and password='".$password."'";
$result = mysqli_query($conn,$authenticate);
$count=0;
while($row=mysqli_fetch_assoc($result)){
    $count++;
}
if ($count==1){
    echo "user verified";
    session_start();
    $_SESSION['email'] = $email;
    header('location:./index.php');

}
else{
    echo "not verified";
    
}
}
else{
    echo "please go back";

}
?>