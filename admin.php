
<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Báo mới</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/responsive.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
</head>

<body>
    <div class="wrapper">
        <!-- header top start -->
        <div class="header-top">
            <a href="#" class="header-top-logo">
                <img src="./assets/image/background and logo/logo.png" alt="" class="logo-picture">
            </a>
            <form action="index.php" method="" class="search-box">
                <input type="text" class="search-box-input" placeholder="Nhập nội dung tìm kiếm">
                <button type="submit" class="search-btn">
                    <i class="fas fa-search search-icon"></i>
                </button>
            </form>
            <div class="log-in">
                <i class="far fa-user user-logo"></i>
                <i class="fas fa-mobile-alt mobile-logo"></i>
            </div>
        </div>
        <!-- header top end -->
        <!-- sticky header start -->
        <div class="sticky-header">
            <div class="main-nav">
                <a href="index.php" class="main-nav-element">TIN TỨC</a>
                <a href="insert.php" class="main-nav-element">THÊM BÀI VIẾT</a>
                <a href="update.php" class="main-nav-element">SỬA BÀI VIẾT</a>
                <a href="delete.php" class="main-nav-element">XÓA BÀI VIẾT</a>
                <a href="login.php" class="main-nav-element">ĐĂNG NHẬP</a>
            </div>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <!-- stikcy header end -->
        <!-- content start -->
        <div class="content">
            <div class="center-div">
                <p class="admin-noti">
                    BẠN ĐANG ĐĂNG NHẬP VỚI QUYỀN ADMIN, SỬ DỤNG CÁC CHỨC NĂNG TRÊN THANH ĐIỀU HƯỚNG
                </p>
            </div>
        </div>
        <!-- footer search start -->
        <div class="footer-search">
            <a href="#" class="logo-image">
                <img src="./assets/image/background and logo/white-logo.png" alt="" class="logo-footer">
            </a>
            <form action="" method="" class="search-box">
                <input type="text" class="search-box-input" placeholder="Nhập nội dung tìm kiếm">
                <div class="search-btn">
                    <i class="fas fa-search search-icon"></i>
                </div>
            </form>
        </div>
        <!-- footer search end -->
        <!-- main footer start -->
        <div class="footer">
            <div class="footer-top">
                <span class="footer-top-element">
                    <a href="#" class="footer-top-content">Bắc Giang</a>
                    <i class="fas fa-circle dot-icon"></i>
                </span>
                <span class="footer-top-element">
                    <a href="#" class="footer-top-content">ITO</a>
                    <i class="fas fa-circle dot-icon"></i>
                </span>
                <span class="footer-top-element">
                    <a href="#" class="footer-top-content">Tuyển Nhật Bản</a>
                    <i class="fas fa-circle dot-icon"></i>
                </span>
                <span class="footer-top-element">
                    <a href="#" class="footer-top-content">Hà Nội</a>
                    <i class="fas fa-circle dot-icon"></i>
                </span>
                <span class="footer-top-element">
                    <a href="#" class="footer-top-content">Bộ Giáo Dục Và Đào Tạo</a>
                    <i class="fas fa-circle dot-icon"></i>
                </span>
                <span class="footer-top-element">
                    <a href="#" class="footer-top-content">Mỹ</a>
                    <i class="fas fa-circle dot-icon"></i>
                </span>
                <span class="footer-top-element">
                    <a href="#" class="footer-top-content">Chủ Tịch Quốc Hội</a>
                    <i class="fas fa-circle dot-icon"></i>
                </span>
                <span class="footer-top-element">
                    <a href="#" class="footer-top-content">F1</a>
                    <i class="fas fa-circle dot-icon"></i>
                </span>
                <span class="footer-top-element">
                    <a href="#" class="footer-top-content">Bộ Giáo Dục Và Đào Tạo</a>
                    <i class="fas fa-circle dot-icon"></i>
                </span>
                <span class="footer-top-element">
                    <a href="#" class="footer-top-content">Mỹ</a>
                    <i class="fas fa-circle dot-icon"></i>
                </span>
                <span class="footer-top-element">
                    <a href="#" class="footer-top-content">Chủ Tịch Quốc Hội</a>
                    <i class="fas fa-circle dot-icon"></i>
                </span>
                <span class="footer-top-element">
                    <a href="#" class="footer-top-content">F1</a>
                    <i class="fas fa-circle dot-icon"></i>
                </span>
                <span class="footer-top-element">
                    <a href="#" class="footer-top-content">Bộ Giáo Dục Và Đào Tạo</a>
                    <i class="fas fa-circle dot-icon"></i>
                </span>
                <span class="footer-top-element">
                    <a href="#" class="footer-top-content">Mỹ</a>
                    <i class="fas fa-circle dot-icon"></i>
                </span>
                <span class="footer-top-element">
                    <a href="#" class="footer-top-content">Chủ Tịch Quốc Hội</a>
                    <i class="fas fa-circle dot-icon"></i>
                </span>
                <span class="footer-top-element">
                    <a href="#" class="footer-top-content">F1</a>
                    <i class="fas fa-circle dot-icon"></i>
                </span>
            </div>
            <div class="footer-bottom">
                <div class="contact footer-bottom-element">
                    <p class="footer-heading">
                        LIÊN HỆ
                    </p>
                    <a href="#" class="footer-element-detail">Giới thiệu</a>
                    <a href="#" class="footer-element-detail">Điều khoản sử dụng</a>
                    <a href="#" class="footer-element-detail">Quảng cáo</a>
                </div>
                <div class="other footer-bottom-element">
                    <p class="footer-heading">
                        KHÁC
                    </p>
                    <a href="#" class="footer-element-detail">Tổng hợp</a>
                </div>
                <div class="about">
                    <p class="lisense">
                        Giấy phép số 1818/GP-TTĐT do Sở Thông tin và Truyền thông Hà Nội cấp ngày 05/05/2017
                    </p>
                    <p class="owner">
                        Đơn vị chủ quản: Công ty Cổ phần Công nghệ EPI * Chịu trách nhiệm: Võ Quang
                    </p>
                    <p class="address">
                        Địa chỉ: Tầng 5, Tòa nhà Báo Sinh Viên VN, D29 Phạm Văn Bạch, Yên Hòa, Cầu Giấy, Hà Nội
                    </p>
                    <p class="tel">
                        Tel: (024) 3-212-3232, số máy lẻ 6666. contact.baomoi@epi.com.vn
                    </p>
                </div>
            </div>
        </div>
        <!-- main footer end -->
    </div>
</body>

</html>