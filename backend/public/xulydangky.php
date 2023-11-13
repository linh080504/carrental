<?php
    include(__DIR__ ."/../../frontend/public/views/dangky.php");
    include(__DIR__ ."/../shared/query.php");
    include(__DIR__ ."/../shared/connect.php");

    //khai báo hiển thị tiếng việt
    header('Content-Type: text/html; charset=UTF-8');

    //Lấy dữ liệu từ file đăng ký người dùng

    // mấy cái xử lý phải bỏ trong isset này nè
    // không là nó lỗi đó
    // tại vì khi chưa kiểm tra isset là nó chưa có dữ liêu => lỗi đó
    if(isset($_POST['btn']))
    {
        $username = $_POST['name'];
        $password = $_POST['pass'];
        $address = $_POST['address'];
        $gender = $_POST['gender'];
        $numphone = $_POST['phone'];
        $country = $_POST['country'];
        $city = $_POST['city'];
        $email = $_POST['email'];
        $role = $_POST['role'];

        //kiểm tra người dùng nhập đầy đủ chưa
        if(!$address|| !$username || !$password || !$address || !$gender || !$numphone || !$country || !$city || !$email ||!$role){
            echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }

        //mã hóa mật khẩu
        $password = md5($password);


        // ID	fullname	password	address	gender	phone	country	city	email	
        // 1    2           3               4   5       6       7       8            9

        $conn = db_connect();
        $sql = "INSERT INTO user(fullname, password, address, gender, phone, country, city, email, role)
                VALUE ('$username', '$password', '$address' , '$gender', '$numphone', '$country', '$city', '$email', '$role')";
        $result = db_query($conn, $sql);
        if($result){
            // file la index.html mà
            // dau phải index.php
            header('location: ../../index.php');
        } else {
            // gắn lỗi vô biến result để làm gì vậy á
            echo "Cập nhật chưa thành công: ".mysqli_error($conn);
        }

    }
 
?>