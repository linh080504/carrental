<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LDH - Cho thuê xe</title>

    <!-- LINK: STYLES.CSS -->
    <link href="./frontend/public/css/styles (2).css" rel="stylesheet" type="text/css">
    <link href="./frontend/public/css/stylefoot.css" rel="stylesheet" type="text/css">
    <!-- LINK: BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <!-- INCLUDE: MENU.PHP -->
    <?php include_once(__DIR__ . '/frontend/public/views/menu.php') ?>


    <?php   
        if (isset($_GET['page'])) {
            $page = $_GET['page'];

            switch ($page) {
                case 1:
                    // <!-- INCLUDE: BANNER.PHP -->
                    include_once(__DIR__ . '/frontend/public/views/banner.php');
                    // <!-- INCLUDE: PRODUCT.PHP -->
                    include_once(__DIR__ . '/frontend/public/views/product.php');
                    break;
                
                case 2:
                    include_once(__DIR__ . '/frontend/public/views/show_product.php');
                    break;  
                
                case 3:
                    include_once(__DIR__ . '/frontend/public/views/chitiet_xe.php');
                    break;             
                }
            }
        ?>
    <?php include_once(__DIR__. '/frontend/public/views/footer.php') ?>

</body>

</html>