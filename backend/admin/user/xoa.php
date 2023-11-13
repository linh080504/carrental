
<?php
include(__DIR__."/../../shared/connect.php");
include(__DIR__."/../../shared/query.php");
$conn=db_connect();
$email = $_GET["email"];
$sql = "DELETE from user where email = '$email'";
if(mysqli_query($conn, $sql))
{
    header('location: ./../../../frontend/admin/views/hienthiuser.php');
}
else{
    $result = "Xóa không thành công".mysqli_error($conn);
}
mysqli_close($conn);
?>
