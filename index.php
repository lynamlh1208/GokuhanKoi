<?php 
    require_once __DIR__. "/autoload/autoload.php";

    $category = $db->fetchAll("category");
    

?>
<?php require_once __DIR__. "/layouts/header.php"; ?>        
    <!-- Page Heading Nội dung-->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Xin chào bạn đến với trang quản trị Admin
                <small>Subheading</small>
            </h1>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Bảng Điều Khiển</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i>Trang Chủ
                </li>
            </ol>
          
        </div>
    </div>
    <!-- /.row -->
<?php require_once __DIR__. "/layouts/footer.php"; ?>        
