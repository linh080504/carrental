<?php 
    include_once(realpath(dirname(__FILE__) ."/../../../backend/shared/connect.php"));
    include_once(realpath(dirname(__FILE__) ."/../../../backend/shared/query.php"));

    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'httxe';

    $conn = new mysqli($host, $username, $password, $db);

    /**
     * Document pagination of car page
     * 
     * $limit: Giới hạn số xe hiển thị trong một trang
     * $num_of_cars: Số xe hiện có trong db
     * $num_of_pages: Số trang có thể chia
     */

    $limit = 4;
    $num_of_cars = $conn->query("SELECT * FROM xe")->num_rows;  
    $num_of_pages = ceil($num_of_cars / $limit);
    
    /**
     * Nếu không tồn tại biến pagination trên url
     * ===> Trang hiện tại là trang đâu tiên, là trang số 1
     *      Dòng dữ liệu (row) bắt đầu từ dòng thứ 0
     * 
     * Nếu tồn tại biến pagination trên url 
     * ===> Trang hiện tại được lấy từ $_GET['pagination]
     *      Dòng dữ liệu (row) được tính bằng cách lấy số trang hiện tại - 1 sau đó nhân với limit
     */

    if (!isset($_GET['pagination'])) {
        $current_page = 1;
        $start_row = 0;
    } else {
        $current_page = $_GET['pagination'];
        $start_row = ($current_page - 1) * $limit;
    }

    /* Lấy số xe trong giới hạn từ $start_row -> $limit */
    $recordset = $conn->query("SELECT * FROM xe LIMIT {$start_row}, {$limit}");
?>
<section class="car__wrapper section-p1">
    <!-- <h1>Xe Dành Co Bạn</h1> -->
    <?php
    while ($row = $recordset->fetch_assoc()) 
    {
        $ma_xe = $row["ma_xe"];
        $ma_kieu_dang = $row["ma_kieu_dang"];
        $ma_hang = $row["ma_hang"];
        $ma_dong = $row["ma_dong"];
        $ma_chu_xe = $row["ma_chu_xe"];
        $bien_so_xe = $row["bien_so_xe"];
        $hinh_xe = $row["hinh_xe"];

        $kieu_dang = $conn->query("SELECT ten_kieu FROM kieudang WHERE ma_kieu = '$ma_kieu_dang' ")->fetch_assoc()['ten_kieu'];
        $ten_hang = $conn->query("SELECT ten_hang_xe FROM hangxe WHERE ma_hang_xe = '$ma_hang' ")->fetch_assoc()['ten_hang_xe'];
        $ten_dong = $conn->query("SELECT ten_dong FROM dongxe WHERE ma_dong = '$ma_dong' ")->fetch_assoc()['ten_dong'];

    ?>
    <div class="car__item">
        <div class="img-wrapper">
            <!-- Gui carID thông qua url từ đây -->
            <!-- điều hướng qua index.php?page=3 sau đó nhận carID và xử lý ở chitiet_xe.php -->
            <a href="index.php?page=3&&carID=<?php echo $ma_xe;?>">
                <img src="./frontend/public/img/<?php echo $hinh_xe; ?>" alt="">
            </a>
        </div>

        <div class="car__description">
            <div class="car__description-tag">
                <span><?php echo $kieu_dang; ?></span>
                <span><?php echo $ten_hang; ?></span>
                <span><?php echo $ten_dong; ?></span>
            </div>

            <div class="car__description-name">
                <p><?php echo $ten_hang . ' ' . $ten_dong ?></p>
                <i></i>
            </div>

            <div class="car__description-address">
                <i class='bx bx-current-location'></i>
                <p>Quận 7, Hồ Chí Minh</p>
            </div>

            <div class="line-page"></div>

            <div class="car__description-price">
                <div class="info-wrapper">
                    <div class="info-line-height">
                            <i class='bx bx-star'></i>
                        <span class="point">5.0</span>
                        <span class="dot">•</span>
                        <i class='bx bx-shopping-bag'></i>
                        <span class="point">
                            41
                            chuyến</span>
                    </div>
                </div>
                <div class="price-wrapper">
                    <span class="price">1119K</span>
                    <div class="total-price">
                        <span class="price-title">Giá tổng </span>
                        <span class="price">1346K</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    }
    ?>

    <div class="pagination-box">
        <a class="prev-next" href="index.php?page=2&&pagination=<?php echo $current_page - 1 ?>">prev</a>
        <?php
            for ($i = 1; $i <= $num_of_pages; $i++)
            {
        ?>
            <a href="index.php?page=2&&pagination=<?php echo $i; ?>"><?php echo $i; ?></a>
        <?php 
            }
        ?>
        <a class="prev-next" href="index.php?page=2&&pagination=<?php echo $current_page + 1 ?>">next</a>
    </div>
</section>