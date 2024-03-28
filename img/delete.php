<?php   
$conn=mysqli_connect("localhost","root","", "test"); 

$id=$_GET['id'];
$sql1="SELECT * FROM `photos` WHERE ID='$id'";
$result=mysqli_query($conn,$sql1);  
$data=$result->fetch_assoc();
$folder="images/".$data['Name'];
if(file_exists($folder))
{
 unlink($folder);
}
$sql="DELETE FROM `photos` WHERE ID='$id'";
if(mysqli_query($conn,$sql))
{
header('Location: image.php');
}
?>