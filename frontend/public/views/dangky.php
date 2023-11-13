<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="../css/styledk.css">

    
</head>


<body>
<section class="adding">
       <h2>Đăng kí tài khoản</h2> 
       <p>Nhập chi tiết thông tin tài khoản</p>
       <form action="./../../../backend/public/xulydangky.php" method="post">
            <div class="input-row">

                <div class="input-group">
                    <label>Họ và tên</label>
                    <input type="text" placeholder="Thuỳ Linh" name="name" required>
                </div>

                <div class="input-group">
                    <label>Mật khẩu đăng ký</label>
                    <input type="text" placeholder="123A@" name="pass" required>
                </div>
                
                <div class="input-group">
                    <label>Địa chỉ</label>
                    <input type="text" placeholder="Tây Ninh" name="address" required>
                </div>

                <div class="input-group">
                    <label>Giới tính</label>
                    <select name="gender">
                        <option>Nam</option>
                        <option>Nữ</option>
                        <option>Khác</option>
                    </select>
                </div>

                <div class="input-group">
                    <label>Số điện thoại</label>
                    <input type="text" placeholder="0121312454" name="phone" required>
                </div>

                <div class="input-group">
                    <label>Đất nước: </label>
                    <input type="text" placeholder="Việt Nam" name="country" required>
                </div>

                <div class="input-group">
                    <label>Thành phố: </label>
                    <input type="text" placeholder="Hồ Chí Minh" name="city">
                </div>

                <div class="input-group">
                    <label>Email</label>
                    
                    <input type="email" placeholder="2254810152@vaa.edu.vn" name="email" required pattern="([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))">
                </div>

                <div class="input-group">
                    <label>Vai trò</label>
                    <select name="role">
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