<?php
include('./config/db.php');
$conn = mysqli_connect('localhost','root','','codelearn');
$id = $_GET['id'];
$sql = " DELETE from tbl_admin WHERE id ='$id'";
$result =mysqli_query($conn,$sql);
if($result==true)
{
header('location:'.SITEURL.'./admin/quanlyadmin.php');
}
else
{
    echo "Lam lai de ";
}

?>
