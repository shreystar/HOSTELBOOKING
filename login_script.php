<?php


ob_start();


$con = mysqli_connect("localhost", "root", "","hostelbooking") or die(mysqli_error($con));

// Check $username and $password 
/*
if(empty($_POST['username']))
{
    echo "UserName/Password is empty!";
    return false;
}
if(empty($_POST['password']))
{
    echo "Password is empty!";
    return false;
}
*/

// Define $username and $password 
$user=$_POST['user']; 
$pass=($_POST['pass']);



/*echo "$user";
echo "user";
echo "$pass";
echo "pass";*/
/*$sql="SELECT * FROM loginscript WHERE user='$user' and pass='$pass'";*/
$result=mysqli_query($con,"SELECT * FROM loginscript WHERE user='$user'");
$result1 =mysqli_query($con,"SELECT * FROM loginscript WHERE pass='$pass'");
// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
$count1=mysqli_num_rows($result1);
echo "$count";
echo"$count1";
// If result matched $username and $password, table row must be 1 row
if ($count==1 && $count1 ==1) {
    echo "Success! $count";
    header("location:hosbo.php");
} elseif ($count==0 && $count1 ==1) {
echo "INVALID User - ID";
}
elseif ($count==1 && $count1==0) {
    
echo "INVALID Password";
}
else 
{
    echo "INVALID User -ID and Password";
}

ob_end_flush();
?>

