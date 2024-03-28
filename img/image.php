<?php
$conn=mysqli_connect("localhost", "root", "", "test");
if(isset($_POST['Submit']))
{
    $filename=rand().$_FILES['image']['name'];
    $tempfile=$_FILES['image']['tmp_name'];
    $folder="images/".$filename;

if(move_uploaded_file($tempfile,$folder))
{
    $sql="INSERT INTO `photos`(`Name`) VALUES ('$filename')";
    mysqli_query($conn,$sql);
    echo "Successfully Uploaded";
}
else{
    echo "something went wrong";
}
}
$sql1="SELECT * FROM `photos`";
$result=mysqli_query($conn, $sql1);
$row=$result->fetch_all(MYSQLI_ASSOC);
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
        <tr>
            <th>S.N</th>
            <th>Image</th>
            <th>Action</th>
</tr>
<?php $i=1;
 foreach ($row as $key=>$value)
{?>
        <tr>
            <td><?php echo $i++;?></td>
            <td>
                <img width="100px" height="100px" src="images/<?php echo $value['Name'];?>">
            </td>
            <td>
            <a href='delete.php?id=<?php echo $value['ID']; ?>'>Delete</a>
            <a href='edit.php?id=<?php echo $value['ID']; ?>'>Edit</a>
        </td>
</tr>
<?php
}?>
</form>
</body>
</html>