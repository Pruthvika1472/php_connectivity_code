
<?php


$conn=mysqli_connect('localhost','root','','pharmacy');

//to read inputs from user
$username=$_POST['username'];
$password=$_POST['password'];

if(!$conn)
{
    die("connection failed!".mysqli_connect_error());
}

$sql="INSERT INTO admin(id,username,password)VALUES('0','$username','$password')"; // entries to database with name admin
$result=mysqli_query($conn,$sql);

if($result)

{
  echo"successfully saved";

}

?>