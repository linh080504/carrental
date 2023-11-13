<?php
include  (__DIR__ .'/../shared/connect.php');
include (__DIR__ .'/../shared/query.php');
?>

<!-- chức năng login -->
<?php
    if(isset($_POST['btn'])){
        $username = $_POST['username'];
        // $password = md5($_POST['password']);
        $password = $_POST['password'];

        $conn = db_connect();
        $sql = "SELECT *
                FROM user
                WHERE email = '$username' AND password = '$password'";
        $result = db_query($conn, $sql);
        if ($result->num_rows > 0){
            $_SESSION['username_logged'] = $username; 
            $role = db_fetch_assoc($result)['role'];

            echo "<script>alert('Đã đăng nhập thành công')</script>";
            switch($role) {
                case 0:
                    header('location: admin.php');
                    break;
                case 1:
                    header('location: ../../index.php');
                    break;

                case 2:
                    header('location: car.php');
                    break; 
            }
        }
        else{
            echo "<script>alert('Đăng nhập không thành công. Vui lòng thử lại!')</script>";
        }
        
    }   
?>