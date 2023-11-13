<?php 
     include_once(realpath(dirname(__FILE__) ."/../../../backend/shared/connect.php"));
     include_once(realpath(dirname(__FILE__) ."/../../../backend/shared/query.php"));

     $host = 'localhost';
     $username = 'root';
     $password = '';
     $db = 'httxe';
 
     $conn = new mysqli($host, $username, $password, $db);

    if (isset($_GET['carID'])) {
        $carID = $_GET['carID'];

        $recordset = $conn->query("SELECT * FROM xe WHERE ma_xe = '$carID'");
    }

    while ($row = $recordset->fetch_assoc()) 
    {
        $ma_xe = $row["ma_xe"];
        $ma_kieu_dang = $row["ma_kieu_dang"];
        $ma_hang = $row["ma_hang"];
        $ma_dong = $row["ma_dong"];
        $ma_chu_xe = $row["ma_chu_xe"];
        $bien_so_xe = $row["bien_so_xe"];
        $hinh_xe = $row["hinh_xe"];
        $mieu_ta = $row["mieu_ta"];

        $kieu_dang = $conn->query("SELECT ten_kieu FROM kieudang WHERE ma_kieu = '$ma_kieu_dang' ")->fetch_assoc()['ten_kieu'];
        $ten_hang = $conn->query("SELECT ten_hang_xe FROM hangxe WHERE ma_hang_xe = '$ma_hang' ")->fetch_assoc()['ten_hang_xe'];
        $ten_dong = $conn->query("SELECT ten_dong FROM dongxe WHERE ma_dong = '$ma_dong' ")->fetch_assoc()['ten_dong'];
    }
?>
<section class="detail-car-page">
        <div class="car-cover-img">
            <div class="main-wrapper">
                <div class="img-flex-box">
                    <div class="main-img">
                        <div class="img-wrapper">
                            <img src="./frontend/public/img/<?php echo $hinh_xe; ?>" alt="">
                        </div>
                    </div>

                    <div class="sub-img">
                        <img src="./frontend/public/img/<?php echo $hinh_xe; ?>" alt="">
                        <img src="./frontend/public/img/<?php echo $hinh_xe; ?>" alt="">
                        <img src="./frontend/public/img/<?php echo $hinh_xe; ?>" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="car-detail">
            <div class="main-wrapper">
                <div class="detail-wrapper">

                    <div class="content-detail">
                        <div class="basic-info">
                            <div class="group-name">
                                <h3><?php echo $ten_hang . ' ' . $ten_dong; ?></h3>
                            </div>

                            <div class="group-address">
                                <i class='bx bx-current-location'></i>
                                <span>Quận Thủ Đức, Hồ Chí Minh</span>
                            </div>

                            <div class="group-tag">
                                <span class="tag-item transmission"><?php echo $kieu_dang; ?></span>
                                <span class="tag-item instant"><?php echo $ten_hang; ?></span>
                                <span class="tag-item non-mortgape"><?php echo $ten_dong; ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-detail">
                        <div class="insurance">
                            <img src="https://www.mioto.vn/static/media/insurance-polish.f54e308a.svg" alt="">
                            <div class="content">
                                <p>Bảo hiểm thuê xe LDH</p>
                                <p class="note">Chuyến đi có mua bảo hiểm. Khách thuê bồi thường tối đa 2.000.000 VNĐ
                                    trong trường hợp có sự cố ngoài ý muốn.</p>
                                <p class="click">
                                    <a href="#">Xem chi tiết</a>
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="content-detail">
                        <div class="horizontal-line"></div>
                        <div class="detail-info" id="features">
                            <h6>Đặc điểm</h6>
                            <div class="outstanding-features">
                                <div class="outstanding-features__item">
                                    <div class="svg-wrap">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.914 23.3289C10.9148 23.3284 10.9156 23.3279 10.9163 23.3274C10.9155 23.3279 10.9148 23.3284 10.914 23.3289ZM10.914 23.3289C10.914 23.3289 10.914 23.3289 10.914 23.3289L11.3128 23.9114M10.914 23.3289L11.3128 23.9114M11.3128 23.9114L10.9807 23.2882L20.6697 23.9458C20.6682 23.9484 20.6656 23.9496 20.6631 23.9479C20.655 23.9424 20.6343 23.9284 20.6014 23.9074C20.6014 23.9073 20.6014 23.9073 20.6013 23.9073C20.5141 23.8516 20.3413 23.7468 20.0921 23.6208C20.0919 23.6207 20.0918 23.6206 20.0917 23.6206C19.3397 23.2404 17.8926 22.6674 16.0003 22.6674C14.1715 22.6674 12.7584 23.2026 11.9869 23.5817L11.9929 23.5929M11.3128 23.9114L11.331 23.9456C11.3324 23.9483 11.3352 23.9495 11.3377 23.9478C11.3444 23.9432 11.3592 23.9332 11.3821 23.9184L11.9929 23.5929L11.9929 23.5929M11.9929 23.5929C11.9909 23.5892 11.9889 23.5855 11.9868 23.5818C11.6767 23.7342 11.4702 23.8614 11.3821 23.9184L11.9929 23.5929ZM10.6691 24.2983L10.6691 24.2983C10.7406 24.4324 10.8728 24.5792 11.0793 24.6538C11.3072 24.7361 11.5609 24.7039 11.7614 24.5667L11.7614 24.5667C11.7978 24.5418 13.4597 23.4174 16.0003 23.4174C18.5426 23.4174 20.205 24.5432 20.2393 24.5667L20.2393 24.5667C20.4389 24.7034 20.6938 24.7372 20.9245 24.6528C21.1293 24.5779 21.2557 24.4338 21.3233 24.3136L22.4886 22.2427L24.3242 23.0447L21.6934 28.584H9.99882L7.65051 23.0635L9.57427 22.2435L10.6691 24.2983ZM24.4348 22.8117L24.4345 22.8124L24.4348 22.8117Z"
                                                stroke="#5FCF86" stroke-width="1.5"></path>
                                            <path
                                                d="M12.75 4.66675C12.75 3.97639 13.3096 3.41675 14 3.41675H18C18.6904 3.41675 19.25 3.97639 19.25 4.66675V7.00008C19.25 7.13815 19.1381 7.25008 19 7.25008H13C12.8619 7.25008 12.75 7.13815 12.75 7.00008V4.66675Z"
                                                stroke="#5FCF86" stroke-width="1.5"></path>
                                            <path
                                                d="M9.33398 22.6668L9.90564 11.2336C9.95887 10.1692 10.8374 9.3335 11.9031 9.3335H20.0982C21.1639 9.3335 22.0424 10.1692 22.0957 11.2336L22.6673 22.6668"
                                                stroke="#5FCF86" stroke-width="1.5"></path>
                                            <path d="M14.667 7.35815V9.8901" stroke="#5FCF86" stroke-width="1.5"></path>
                                            <path d="M17.334 7.35815V9.8901" stroke="#5FCF86" stroke-width="1.5"></path>
                                        </svg>
                                    </div>
                                    <div class="title">
                                        <div class="sub">Số ghế</div>
                                        <div class="main"><?php echo $kieu_dang; ?></div>
                                    </div>
                                </div>

                                <div class="outstanding-features__item">
                                    <div class="svg-wrap">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.914 23.3289C10.9148 23.3284 10.9156 23.3279 10.9163 23.3274C10.9155 23.3279 10.9148 23.3284 10.914 23.3289ZM10.914 23.3289C10.914 23.3289 10.914 23.3289 10.914 23.3289L11.3128 23.9114M10.914 23.3289L11.3128 23.9114M11.3128 23.9114L10.9807 23.2882L20.6697 23.9458C20.6682 23.9484 20.6656 23.9496 20.6631 23.9479C20.655 23.9424 20.6343 23.9284 20.6014 23.9074C20.6014 23.9073 20.6014 23.9073 20.6013 23.9073C20.5141 23.8516 20.3413 23.7468 20.0921 23.6208C20.0919 23.6207 20.0918 23.6206 20.0917 23.6206C19.3397 23.2404 17.8926 22.6674 16.0003 22.6674C14.1715 22.6674 12.7584 23.2026 11.9869 23.5817L11.9929 23.5929M11.3128 23.9114L11.331 23.9456C11.3324 23.9483 11.3352 23.9495 11.3377 23.9478C11.3444 23.9432 11.3592 23.9332 11.3821 23.9184L11.9929 23.5929L11.9929 23.5929M11.9929 23.5929C11.9909 23.5892 11.9889 23.5855 11.9868 23.5818C11.6767 23.7342 11.4702 23.8614 11.3821 23.9184L11.9929 23.5929ZM10.6691 24.2983L10.6691 24.2983C10.7406 24.4324 10.8728 24.5792 11.0793 24.6538C11.3072 24.7361 11.5609 24.7039 11.7614 24.5667L11.7614 24.5667C11.7978 24.5418 13.4597 23.4174 16.0003 23.4174C18.5426 23.4174 20.205 24.5432 20.2393 24.5667L20.2393 24.5667C20.4389 24.7034 20.6938 24.7372 20.9245 24.6528C21.1293 24.5779 21.2557 24.4338 21.3233 24.3136L22.4886 22.2427L24.3242 23.0447L21.6934 28.584H9.99882L7.65051 23.0635L9.57427 22.2435L10.6691 24.2983ZM24.4348 22.8117L24.4345 22.8124L24.4348 22.8117Z"
                                                stroke="#5FCF86" stroke-width="1.5"></path>
                                            <path
                                                d="M12.75 4.66675C12.75 3.97639 13.3096 3.41675 14 3.41675H18C18.6904 3.41675 19.25 3.97639 19.25 4.66675V7.00008C19.25 7.13815 19.1381 7.25008 19 7.25008H13C12.8619 7.25008 12.75 7.13815 12.75 7.00008V4.66675Z"
                                                stroke="#5FCF86" stroke-width="1.5"></path>
                                            <path
                                                d="M9.33398 22.6668L9.90564 11.2336C9.95887 10.1692 10.8374 9.3335 11.9031 9.3335H20.0982C21.1639 9.3335 22.0424 10.1692 22.0957 11.2336L22.6673 22.6668"
                                                stroke="#5FCF86" stroke-width="1.5"></path>
                                            <path d="M14.667 7.35815V9.8901" stroke="#5FCF86" stroke-width="1.5"></path>
                                            <path d="M17.334 7.35815V9.8901" stroke="#5FCF86" stroke-width="1.5"></path>
                                        </svg>
                                    </div>
                                    <div class="title">
                                        <div class="sub">Dòng</div>
                                        <div class="main"><?php echo $ten_dong; ?></div>
                                    </div>
                                </div>
                                <div class="outstanding-features__item">
                                    <div class="svg-wrap">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M10.914 23.3289C10.9148 23.3284 10.9156 23.3279 10.9163 23.3274C10.9155 23.3279 10.9148 23.3284 10.914 23.3289ZM10.914 23.3289C10.914 23.3289 10.914 23.3289 10.914 23.3289L11.3128 23.9114M10.914 23.3289L11.3128 23.9114M11.3128 23.9114L10.9807 23.2882L20.6697 23.9458C20.6682 23.9484 20.6656 23.9496 20.6631 23.9479C20.655 23.9424 20.6343 23.9284 20.6014 23.9074C20.6014 23.9073 20.6014 23.9073 20.6013 23.9073C20.5141 23.8516 20.3413 23.7468 20.0921 23.6208C20.0919 23.6207 20.0918 23.6206 20.0917 23.6206C19.3397 23.2404 17.8926 22.6674 16.0003 22.6674C14.1715 22.6674 12.7584 23.2026 11.9869 23.5817L11.9929 23.5929M11.3128 23.9114L11.331 23.9456C11.3324 23.9483 11.3352 23.9495 11.3377 23.9478C11.3444 23.9432 11.3592 23.9332 11.3821 23.9184L11.9929 23.5929L11.9929 23.5929M11.9929 23.5929C11.9909 23.5892 11.9889 23.5855 11.9868 23.5818C11.6767 23.7342 11.4702 23.8614 11.3821 23.9184L11.9929 23.5929ZM10.6691 24.2983L10.6691 24.2983C10.7406 24.4324 10.8728 24.5792 11.0793 24.6538C11.3072 24.7361 11.5609 24.7039 11.7614 24.5667L11.7614 24.5667C11.7978 24.5418 13.4597 23.4174 16.0003 23.4174C18.5426 23.4174 20.205 24.5432 20.2393 24.5667L20.2393 24.5667C20.4389 24.7034 20.6938 24.7372 20.9245 24.6528C21.1293 24.5779 21.2557 24.4338 21.3233 24.3136L22.4886 22.2427L24.3242 23.0447L21.6934 28.584H9.99882L7.65051 23.0635L9.57427 22.2435L10.6691 24.2983ZM24.4348 22.8117L24.4345 22.8124L24.4348 22.8117Z"
                                                stroke="#5FCF86" stroke-width="1.5"></path>
                                            <path
                                                d="M12.75 4.66675C12.75 3.97639 13.3096 3.41675 14 3.41675H18C18.6904 3.41675 19.25 3.97639 19.25 4.66675V7.00008C19.25 7.13815 19.1381 7.25008 19 7.25008H13C12.8619 7.25008 12.75 7.13815 12.75 7.00008V4.66675Z"
                                                stroke="#5FCF86" stroke-width="1.5"></path>
                                            <path
                                                d="M9.33398 22.6668L9.90564 11.2336C9.95887 10.1692 10.8374 9.3335 11.9031 9.3335H20.0982C21.1639 9.3335 22.0424 10.1692 22.0957 11.2336L22.6673 22.6668"
                                                stroke="#5FCF86" stroke-width="1.5"></path>
                                            <path d="M14.667 7.35815V9.8901" stroke="#5FCF86" stroke-width="1.5"></path>
                                            <path d="M17.334 7.35815V9.8901" stroke="#5FCF86" stroke-width="1.5"></path>
                                        </svg>
                                    </div>
                                    <div class="title">
                                        <div class="sub">Hãng</div>
                                        <div class="main"><?php echo $ten_hang; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="horizontal-line"></div>
                        <div class="detail-info">
                            <h6>Mô tả</h6>
                            <pre><?php echo $mieu_ta; ?></pre>
                        </div>

                        <div class="horizontal-line"></div>
                        <div class="detail-info">
                            <h6>Các tiện nghi khác</h6>
                            <div class="car-features">
                                <ul>
                                    <li>
                                        <img loading="lazy"
                                            src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/map-v2.png" alt="">
                                        <p>Bản đồ</p>
                                    </li>

                                    <li>
                                        <img loading="lazy"
                                            src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/map-v2.png" alt="">
                                        <p>Bản đồ</p>
                                    </li>

                                    <li>
                                        <img loading="lazy"
                                            src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/map-v2.png" alt="">
                                        <p>Bản đồ</p>
                                    </li>

                                    <li>
                                        <img loading="lazy"
                                            src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/map-v2.png" alt="">
                                        <p>Bản đồ</p>
                                    </li>

                                    <li>
                                        <img loading="lazy"
                                            src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/map-v2.png" alt="">
                                        <p>Bản đồ</p>
                                    </li>

                                    <li>
                                        <img loading="lazy"
                                            src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/map-v2.png" alt="">
                                        <p>Bản đồ</p>
                                    </li>

                                    <li>
                                        <img loading="lazy"
                                            src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/map-v2.png" alt="">
                                        <p>Bản đồ</p>
                                    </li>

                                    <li>
                                        <img loading="lazy"
                                            src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/map-v2.png" alt="">
                                        <p>Bản đồ</p>
                                    </li>

                                    <li>
                                        <img loading="lazy"
                                            src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/map-v2.png" alt="">
                                        <p>Bản đồ</p>
                                    </li>

                                    <li>
                                        <img loading="lazy"
                                            src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/map-v2.png" alt="">
                                        <p>Bản đồ</p>
                                    </li>

                                    <li>
                                        <img loading="lazy"
                                            src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/map-v2.png" alt="">
                                        <p>Bản đồ</p>
                                    </li>

                                    <li>
                                        <img loading="lazy"
                                            src="https://n1-cstg.mioto.vn/v4/p/m/icons/features/map-v2.png" alt="">
                                        <p>Bản đồ</p>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="horizontal-line"></div>
                        <div class="detail-info">
                            <h6>Giấy tờ thuê xe</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        </div>
    </section>
