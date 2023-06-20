<?php
session_start();
if (isset($_SESSION['userID'])) {
    unset($_SESSION['userID']);
}
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
    <link rel="stylesheet" href="./assets/fonts/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/login.css">
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
            </div>
            <!-- <div class="sub-nav">
                <a href="#" class="sub-nav-element">Phòng chống dịch COVID-19</a>
                <a href="#" class="sub-nav-element">Năng lượng tích cực</a>
                <a href="#" class="sub-nav-element">Khám phá Việt Nam</a>
                <a href="#" class="sub-nav-element">Khám phá thế giới</a>
            </div> -->
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
        <!-- stikcy header end -->
        <!-- content start -->
        <div class="content">
            <form action="" method="POST" class="login">
                <p class="login-header header-log-in-des">Đăng nhập với quyền admin</p>
                <p class="header-log-in-des">Tài khoản:</p>
                <input class="input-text-log-in" type="text" name="userID" placeholder="Nhập tên tài khoản">
                <p class="header-log-in-des">Mật khẩu:</p>
                <input class="input-text-log-in password-input" type="password" name="password" placeholder="Nhập mật khẩu"></br>
                <input type="submit" value="Đăng nhập" name="loginBtn" class="login-btn">
            </form>
        </div>
        <?php
        $conn = mysqli_connect("localhost", "root", "", "baomoi");
        if ($conn->connect_error) {
            die("Connection failed:" . $conn->connect_error);
        } else {
            if (isset($_POST['loginBtn'])) {
                $userID = $_POST['userID'];
                $password = $_POST['password'];
                $sql = "SELECT * FROM users WHERE userID = '$userID'";
                $result = $conn->query($sql);
                if ($result == true) {
                    if ($result->num_rows == 1) {
                        $row = $result->fetch_assoc();
                        if ($row['password'] == $password) {
                            $_SESSION['userID'] =  $userID;
                            echo "<div class='center-div'>
                                <div class='login-noti'>
                                    <p class='noti-des'>Đăng nhập thành công</p>
                                    <a href='admin.php' class='link-home'>ADMIN</a>
                                </div>
                            </div>";
                        } else {
                            echo "<div class='center-div'>
                            <div class='login-noti'>
                                <p class='noti-des'>Đăng nhập thất bại</p>
                                <a href='login.php' class='link-home'>LOG IN</a>
                            </div>
                        </div>";
                        }
                    } else {
                        echo "<div class='center-div'>
                        <div class='login-noti'>
                            <p class='noti-des'>Đăng nhập thất bại</p>
                            <a href='login.php' class='link-home'>LOG IN</a>
                        </div>
                    </div>";
                    }
                }
            }
        }
        $conn->close();
        ?>
        <!-- content end -->
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