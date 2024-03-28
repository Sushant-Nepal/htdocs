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
if(isset($_POST['Submit']))
{
    $filename=rand().$_FILES['image']['name'];
    $tempfile=$_FILES['image']['tmp_name'];
    $folder="images/".$filename;

if(move_uploaded_file($tempfile,$folder))
{
    $sql="UPDATE `photos` SET `Name`='$filename' WHERE ID='$id'";
    mysqli_query($conn,$sql);
    echo "Successfully Updated";
}
else{
    echo "something went wrong";
}
if(mysqli_query($conn,$sql))
{
    header('Location: image.php');
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    a:hover
    {
cursor: pointer;
    }
</style>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <input type="submit" name="Submit" value="Upload">
    <table width="50%" border="1">

</form>
</body>
</html>