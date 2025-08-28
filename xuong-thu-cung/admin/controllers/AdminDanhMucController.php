<?php
class AdminDanhMucController
{
    public $modelDanhMuc;
    public function __construct()
    {
        $this->modelDanhMuc = new AdminDanhMuc();
    }
    public function danhSachDanhMuc()
    {
        $listDanhMuc = $this->modelDanhMuc->getAllDanhMuc();
        require_once './views/danhmuc/listDanhMuc.php';
    }
    public function formAddDanhmuc()
    {
        require_once './views/danhmuc/addDanhMuc.php';
    }

    public function postAddDanhmuc()
    {
        //xử lý thêm dữ liệu  

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //lấy ra dữ liệu
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $mo_ta = $_POST['mo_ta'];
            //tạo 1 mảng trốn để chứa dữ liệu
            $errors = [];
            if (empty($ten_danh_muc)) {
                $errors['ten_danh_muc'] = 'tên danh mục không được để trống';
            }
            //nếu 0 lỗi thì tiến hành thêm danh mục
            if (empty($errors)) {
                //nếu 0 lỗi thì tiến hành thêm danh mục
                $this->modelDanhMuc->insertDanhMuc($ten_danh_muc, $mo_ta);
                header("location:" . BASE_URL_ADMIN . '?act=danh-muc');
                exit;
            } else {
                //trả về form và lỗi
                require_once './views/danhmuc/addDanhMuc.php';
            }
        }
    }


    public function formEditDanhmuc()
    {   //lây ra thông tin của danh mục cần sửa
        $id = $_GET['id_danh_muc'];
        $danhMuc = $this->modelDanhMuc->getDetailDanhMuc($id);
        if ($danhMuc) {
            require_once './views/danhmuc/editDanhMuc.php';
        } else {
             header("location:" . BASE_URL_ADMIN . '?act=danh-muc');
        }
    }

    public function postEditDanhmuc()
    {
        //xử lý thêm dữ liệu  

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //lấy ra dữ liệu
            $id = $_POST['id'];
            $ten_danh_muc = $_POST['ten_danh_muc'];
            $mo_ta = $_POST['mo_ta'];
            //tạo 1 mảng trốn để chứa dữ liệu
            $errors = [];
            if (empty($ten_danh_muc)) {
                $errors['ten_danh_muc'] = 'tên danh mục không được để trống';
            }
            //nếu 0 lỗi thì tiến hành thêm danh mục
            if (empty($errors)) {
                //nếu 0 lỗi thì tiến hành thêm danh mục
                $this->modelDanhMuc->updateDanhMuc($id,$ten_danh_muc, $mo_ta);
                header("location:" . BASE_URL_ADMIN . '?act=danh-muc');
                exit;
            } else {
                //trả về form và lỗi
                $danhMuc = ['id'=>$id, 'ten_danh_muc'=> $ten_danh_muc, 'mo_ta'=> $mo_ta];
                require_once './views/danhmuc/editDanhMuc.php';
            }
        }
    }

    public function deleteDanhMuc()
    {
        $id = $_GET['id_danh_muc'];
        $danhMuc = $this->modelDanhMuc->getDetailDanhMuc($id);

        if($danhMuc){
            $this->modelDanhMuc->destroyDanhMuc($id);
        }
          header("location:" . BASE_URL_ADMIN . '?act=danh-muc');
                exit;
    }

}
