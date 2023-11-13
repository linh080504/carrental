<?php
include(__DIR__."/../../../backend/shared/connect.php");
include(__DIR__."/../../../backend/shared/query.php");
$conn = db_connect();
$email = $_GET["email"];
$sql = "SELECT * FROM user WHERE email ='$email'";
$result = $conn->query($sql);

    //in ra danh sách dữ liệu
    while($row = mysqli_fetch_assoc($result))
    {
    
        $username = $row['fullname'];
        $password = $row['password'];
        $address = $row['address'];
        $gender = $row['gender'];
        $numphone = $row['phone'];
        $country = $row['country'];
        $city = $row['city'];
        $email = $row['email'];
        $role = $row['role'];;
    }
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../../public/css/styledk.css">
    <title>Document</title>
</head>

<body>
    <section class="adding">
        <h2>Sửa thông tin</h2>
        <p>Nhập chi tiết thông tin tài khoản</p>
        <form action="./../../../backend/admin/user/sua.php" method="post">
            <div class="input-row">

                <div class="input-group">
                    <label>Họ và tên</label>
                    <input type="text" value="<?php echo $username; ?>" name=" name">
                </div>


                <div class="input-group">
                    <label>Địa chỉ</label>
                    <input type="text" value="<?php echo $address; ?>"  name=" address">
                </div>

                <div class="input-group">
                    <label>Giới tính</label>
                    <select name="gender" value="<?php echo $gender; ?>">
                        <option>Nam</option>
                        <option>Nữ</option>
                        <option>Khác</option>
                    </select>
                </div>

                <div class=" input-group">
                        <label>Số điện thoại</label>
                        <input type="text" value="<?php echo $numphone; ?>"  name=" phone">
                </div>

                <div class="input-group">
                    <label>Đất nước: </label>
                    <input type="text" value="<?php echo $country; ?>" name=" country">
                </div>

                <div class="input-group">
                    <label>Thành phố: </label>
                    <input type="text" value="<?php echo $city; ?>"  name=" city">
                </div>

                <div class="input-group">
                    <label>Email</label>

                    <input type="email" value="<?php echo $email; ?>" name=" email" required
                        pattern="([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))">
                </div>

                <div class="input-group">
                    <label>Vai trò</label>
                    <select value="<?php echo $role; ?>" name=" role">
                        <option>1: khách</option>
                        <option>2: chủ xe</option>
                    </select>
                </div>


            </div>

            <button name="btn" type="submit">Xác nhận</button>
        </form>
    </section>
</body>

</html>