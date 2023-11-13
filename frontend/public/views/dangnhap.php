<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>

    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <div class="login-card">
        <div class="column">
            <h1>Đăng nhập</h1>
            <p>Sau khi đăng nhập, tận hưởng dịch vụ của chúng tôi</p>
            <form action="./../../../#backend/public/login.php" method="post">
                <div class="form-item">
                    <input type="text" class="form-element" placeholder="Tên người dùng hoặc email" name="username">
                </div>

                <div class="form-item">
                    <input type="password" class="form-element" placeholder="Mật khẩu" name="password">
                </div>

               

                <div class="form-checkbox-item">
                    <input type="checkbox" id="rememberMe" checked>
                    <label for="rememberMe">Lưu tên người dùng</label>
                </div>

                <div class="flex">
                    <button type="submit" name="btn">Đăng nhập</button>
                    <a href="#">Quên mật khẩu ?</a>
                </div>

                <p style="margin-top: 3em; margin-bottom: 1.5em;">Đăng nhập nhanh chóng với</p>
                <div class="social-buttons">
                    <a href="#" class="facebook">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="#" class="twitter">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a href="#" class="github">
                        <i class="bi bi-github"></i>
                    </a>
                </div>
            </form>
        </div>

        <div class="column">
            <h2>Chào mừng đến với <span style="color: #002D3B; font-size: 30px;">LDH</span></h2>
            <p>Nếu bạn chưa có tài khoản, đăng kí ngay ?</p>
            <a href="dangky.php">Đăng kí</a>
        </div>
    </div>
</body>
</html>