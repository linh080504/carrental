<?php
include(__DIR__."/../../../backend/shared/connect.php");
include(__DIR__."/../../../backend/shared/query.php");

$conn= db_connect();
$sql = "SELECT* 
        FROM user";
$result = $conn->query($sql);?>

<h3 align = "center">DANH SÁCH THÔNG TIN USER</h3>
<table class ="search-form" align = "center" cellpading = "7">
            <tr>
                <td>
                    <form action="./../../.../backend/admin/user/timkiem.php" method = "get">
                        <!-- name="search" dùng để khi gửi qua phương thức GET thì sử dụng $_GET["search"] để lấy dữ liệu mình nhập vào -->
                        <!-- name="tự mình đặt tên ở đây" -->
                        <input type="text" name="search" placeholder="Nhập từ khóa cần tìm" value="">
                        <input type="submit" value = "Tìm">
                        <input type="button" value = "Tất cả" onclick = "window.location.href = 'hienthiuser.php'">
                    </form>
                </td>
            </tr>
    </table>
<table align="center" border="1" cellspacing ="0" cellpading = "7">
        <tr>
            <th>Họ và tên</th>
            <th>mật khẩu</th>
            <th>địa chỉ</th>
            <th>giới tính</th>
            <th>Số đt</th>
            <th>Đất nước</th>
            <th>Thành phố</th>
            <th>email</th>
            <th>role</th>
            <th>Tác vụ</th>
            
        </tr>
<?php
while ($row = mysqli_fetch_assoc($result))
        {
            
            $username = $row['fullname'];
            $password = $row['password'];
            $address = $row['address'];
            $gender = $row['gender'];
            $numphone = $row['phone'];
            $country = $row['country'];
            $city = $row['city'];
            $email = $row['email'];
            $role = $row['role'];?>
            <tr>
                <td><?php echo $username ?></td>
                <td><?php echo $password ?></td>
                <td><?php echo $address ?></td>
                <td><?php echo $gender ?></td>
                <td><?php echo $numphone ?></td>
                <td><?php echo $country ?></td>
                <td><?php echo $city ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $role ?></td>
                <td>
                    
                    <a href="suathongtin.php?email=<?php echo$email;?>">Sửa</a>
                    <a href="./../../../backend/admin/user/xoa.php?email=<?php echo$email;?>">Xóa</a>
                </td>
            </tr>
            <?php
        }
        ?>
        <?php
        mysqli_close($conn);
        ?>
       
    </table>
    
</body>
</html>

<script>
</script>