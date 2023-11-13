

<?php
include(__DIR__."/../../shared/connect.php");
include(__DIR__."/../../shared/query.php");
$conn=db_connect();
if(isset($_POST['btn']))
{
    $username = $_POST['name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $numphone = $_POST['phone'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $role = $_POST['role'];
}

//truy vấn dữ liệu
$sql = "UPDATE user  
        SET fullname = '$username',  
            address = '$address', 
            gender = '$gender', 
            phone = '$numphone', 
            country = '$country', 
            city = '$city',
            email = '$email',
            role = '$role'
        WHERE email = '$email'; ";

// kiểm tra mysqli_query thành công không 
// nếu có ==> hiện thông báo và điều hướng về trang sinhvien.php bằng header('location:.....)
    if (mysqli_query($conn, $sql)) {
        // alert là một hàm của javascript hiện thông báo
        echo "<script>alert('Cập nhập thành công')</script>";
        // header dùng để điều hướng về trang sv
        header('location: ./../../../frontend/admin/views/hienthiuser.php');
        // ngắt kết nối database
        mysqli_close($conn);
    }
?>