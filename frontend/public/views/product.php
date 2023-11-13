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

    $limit = 10;
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
    ?>
    <div class="car__item">
        <div class="img-wrapper">
            <img src="https://n1-pstg.mioto.vn/cho_thue_xe_o_to_tu_lai_thue_xe_du_lich_hochiminh/mitsubishi_xpander_2022/p/g/2023/03/18/10/rkNNxzUfB47Piz9Otyfhkw.jpg"
                alt="car">
        </div>

        <div class="car__description">
            <div class="car__description-tag">
                <span>Số tự động</span>
            </div>

            <div class="car__description-name">
                <p>MITSUBISHI XPANDER 2019</p>
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
</section>