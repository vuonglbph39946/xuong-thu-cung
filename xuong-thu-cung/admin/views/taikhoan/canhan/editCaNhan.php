<!-- header -->
<?php include './views/layout/header.php'; ?>
<!-- Navbar -->
<?php include './views/layout/navbar.php'; ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->

<?php include './views/layout/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản Lý Tài Khoản Quản Trị</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->

                <div class="col-md-3">
                    <div class="text-center">
                        <img src="<?= BASE_URL_ADMIN . $thongTin['anh_dai_dien']; ?>" class="avatar img-circle" alt="avatar" style="width:200px"
                            onerror="this.onerror=null; this.src='https://static.vecteezy.com/system/resources/previews/004/607/791/non_2x/man-face-emotive-icon-smiling-male-character-in-blue-shirt-flat-illustration-isolated-on-white-happy-human-psychological-portrait-positive-emotions-user-avatar-for-app-web-design-vector.jpg'">
                        <h6 class="mt-2">Họ Tên: <?= $thongTin['ho_ten'] ?></h6>
                        <h6 class="mt-2">Chức Vụ: <?= $thongTin['chuc_vu_id'] ?></h6>

                    </div>
                </div>

                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                    <form action="<?= BASE_URL_ADMIN . '?act=sua-thong-tin-ca-nhan-quan-tri' ?>" method="post">
                        <hr>
                        <h3>Thông tin cá nhân</h3>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Họ tên:</label>
                            <div class="col-lg-12">
                                <input class="form-control" type="text" name="ho_ten" value="<?= $thongTin['ho_ten'] ?>">
                                <?php if (isset($_SESSION['error']['ho_ten'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['error']['ho_ten'] ?></p>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Ảnh đại diện:</label>
                            <div class="col-lg-12">
                                <input class="form-control" type="file" name="anh_dai_dien">
                                <small class="text-muted">Ảnh hiện tại: <?= $thongTin['anh_dai_dien'] ?></small>
                                <?php if (isset($_SESSION['error']['anh_dai_dien'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['error']['anh_dai_dien'] ?></p>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Ngày sinh:</label>
                            <div class="col-lg-12">
                                <input class="form-control" type="date" name="ngay_sinh" value="<?= $thongTin['ngay_sinh'] ?>">
                                <?php if (isset($_SESSION['error']['ngay_sinh'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['error']['ngay_sinh'] ?></p>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Email:</label>
                            <div class="col-lg-12">
                                <input class="form-control" type="email" name="email" value="<?= $thongTin['email'] ?>">
                                <?php if (isset($_SESSION['error']['email'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['error']['email'] ?></p>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Số điện thoại:</label>
                            <div class="col-lg-12">
                                <input class="form-control" type="text" name="so_dien_thoai" value="<?= $thongTin['so_dien_thoai'] ?>">
                                <?php if (isset($_SESSION['error']['so_dien_thoai'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['error']['so_dien_thoai'] ?></p>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Giới tính:</label>
                            <div class="col-lg-12">
                                <select class="form-control" name="gioi_tinh">
                                    <option value="1" <?= $thongTin['gioi_tinh'] == 1 ? 'selected' : '' ?>>Nam</option>
                                    <option value="2" <?= $thongTin['gioi_tinh'] == 2 ? 'selected' : '' ?>>Nữ</option>
                                </select>
                                <?php if (isset($_SESSION['error']['gioi_tinh'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['error']['gioi_tinh'] ?></p>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-lg-3 control-label">Địa chỉ:</label>
                            <div class="col-lg-12">
                                <textarea class="form-control" name="dia_chi"><?= $thongTin['dia_chi'] ?></textarea>
                                <?php if (isset($_SESSION['error']['dia_chi'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['error']['dia_chi'] ?></p>
                                <?php } ?>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>
                    <hr>
                    <h3>ĐỔI MẬT KHẨU</h3>
                    <?php if (isset($_SESSION['success'])) { ?>
                        <div class="alert alert-info alert-dismissable">
                            <a class="panel-close close" data-dismiss="alert">×</a>
                            <i class="fa fa-coffee"></i>
                            <?= $_SESSION['success']; ?>
                        </div>
                    <?php   } ?>
                    <form action="<?= BASE_URL_ADMIN . '?act=sua-mat-khau-ca-nhan-quan-tri' ?>" method="post">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Mật Khẩu Cũ:</label>
                            <div class="col-md-12">
                                <input class="form-control" type="password" name="old_pass" value="">
                                <?php if (isset($_SESSION['error']['old_pass'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['error']['old_pass'] ?></p>
                                <?php   } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Mật Khẩu Mới:</label>
                            <div class="col-md-12">
                                <input class="form-control" type="password" name="new_pass" value="">
                                <?php if (isset($_SESSION['error']['new_pass'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['error']['new_pass'] ?></p>
                                <?php   } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nhập lại mật khẩu mới:</label>
                            <div class="col-md-12">
                                <input class="form-control" type="password" name="confirm_pass" value="">
                                <?php if (isset($_SESSION['error']['confirm_pass'])) { ?>
                                    <p class="text-danger"><?= $_SESSION['error']['confirm_pass'] ?></p>
                                <?php   } ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label"></label>
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary" value="Save Changes">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
        <hr>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<!-- footer -->
<?php include './views/layout/footer.php'; ?>
<!-- end footer -->
<!-- Page specific script -->

<!-- Code injected by live-server -->
</body>

</html>