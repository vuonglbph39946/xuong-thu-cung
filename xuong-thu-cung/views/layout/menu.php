<!-- Start Header Area -->
<header class="header-area header-wide">
    <!-- main header start -->
    <div class="main-header d-none d-lg-block">
        <!-- header middle area start -->
        <div class="header-main-area sticky">
            <div class="container">
                <div class="row align-items-center position-relative">

                    <!-- start logo area -->
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="<?= BASE_URL ?>">
                                <img src="assets/img/logo/logo.png" alt="Brand Logo">
                            </a>
                        </div>
                    </div>
                    <!-- start logo area -->

                    <!-- main menu area start -->
                    <div class="col-lg-6 position-static">
                        <div class="main-menu-area">
                            <div class="main-menu">
                                <!-- main menu navbar start -->
                                <nav class="desktop-menu">
                                    <ul>
                                        <li><a href="<?= BASE_URL ?>">Trang Chủ</i></a>

                                        </li>
                                        <li><a href="#">Sản Phẩm <i class="fa fa-angle-down"></i></a>
                                            <ul class="dropdown">
                                                <li><a href="blog-left-sidebar.html">blog left sidebar</a></li>

                                            </ul>
                                        </li>
                                        <li><a href="#">Giới Thiệu</a></li>
                                        <li><a href="#">Liên Hệ</a></li>
                                    </ul>
                                </nav>
                                <!-- main menu navbar end -->
                            </div>
                        </div>
                    </div>
                    <!-- main menu area end -->

                    <!-- mini cart area start -->
                    <div class="col-lg-4">
                        <div class="header-right d-flex align-items-center justify-content-xl-between justify-content-lg-end">
                            <div class="header-search-container">
                                <button class="search-trigger d-xl-none d-lg-block"><i class="pe-7s-search"></i></button>
                                <form class="header-search-box d-lg-none d-xl-block">
                                    <input type="text" placeholder="Search" class="header-search-field">
                                    <button class="header-search-btn"><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                            <div class="header-configure-area">
                                <ul class="nav justify-content-end">
                                    <label for=""><?php if (isset($_SESSION['user_client'])) {
                                                        echo $_SESSION['user_client'];
                                                    } ?>
                                    </label>
                                    <li class="user-hover">
                                        <a href="#">
                                            <i class="pe-7s-user"></i>
                                        </a>
                                        <ul class="dropdown-list">
                                            <?php if (!isset($_SESSION['user_client'])) { ?>
                                                <li><a href="<?= BASE_URL . '?act=login' ?>">Đăng Nhập</a></li>
                                            <?php    } else {  ?>
                                                <li><a href="my-account.html">Tài Khoản</a></li>
                                            <?php  } ?>

                                        </ul>
                                    </li>
                                    
                                    <li>
                                        <a href="#" class="minicart-btn">
                                            <i class="pe-7s-shopbag"></i>
                                            <div class="notification">2</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- mini cart area end -->

                </div>
            </div>
        </div>
        <!-- header middle area end -->
    </div>



</header>
<!-- end Header Area -->