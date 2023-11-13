<?php
include(__DIR__."/../../shared/connect.php");
include(__DIR__."/../../shared/query.php");
$conn=db_connect();
if(isset($_GET["search"]) && !empty($_GET["search"]))
  {
      $key = $_GET["search"];
      $sql = "  SELECT * 
                FROM user 
                WHERE  fullname LIKE '%$key%' 
                    or password LIKE '%$key%' 
                    or address LIKE '%$key%' 
                    or gender LIKE '%$key%' 
                    or phone LIKE '%$key%' 
                    or country LIKE '%$key%' 
                    or city LIKE '%$key%' 
                    or email  LIKE '%$key%' 
                    or role  LIKE '%$key%'";
  }
  else
    $sql = "SELECT * FROM user";

$query = $conn->query($sql);
?>
<h3 align = "center">DANH SÁCH THÔNG TIN USER</h3>
<table class ="search-form" align = "center" cellpading = "7">
            <tr>
                <td>
                    <form action="timkiem.php" method = "get">
                        <input type="text" name="search" placeholder="Nhập từ khóa cần tìm" value="">
                        <input type="submit" value = "Tìm">
                        <input type="button" value = "Tất cả" onclick = "window.location.href = './../../../frontend/admin/views/hienthiuser.php'">
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
if (isset($query->num_rows) && $query->num_rows > 0) 
{
    while ($row = $query->fetch_assoc())
        {
            $username = $row['fullname'];
            $password = $row['password'];
            $address = $row['address'];
            $gender = $row['gender'];
            $numphone = $row['phone'];
            $country = $row['country'];
            $city = $row['city'];
            $email = $row['email'];
            $role = $row['role'];
?>
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
                <a href="./../../../frontend/admin/views/suathongtin.php?email=<?php echo$email;?>">Sửa</a>
                <a href="xoa.php?email=<?php echo$email;?>">Xóa</a>
            </td>
        </tr>
<?php
    }
}
?>
</table>