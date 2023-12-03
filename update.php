<?php  
    require_once 'connect.php';
    $sql_type="SELECT * FROM loai_sp";
    $query_type=mysqli_query($conn,$sql_type);

    $id=$_GET['id_sp'];
    $sql_up="SELECT * FROM sp WHERE id_sp=$id";
    
    $query_up=mysqli_query($conn,$sql_up);
    $row_up=mysqli_fetch_assoc($query_up);

    if(isset($_POST['bsm'])){
        $id_sp=$_POST['id_sp'];
        $ten_sp=$_POST['ten_sp'];
        $anh_sp=$_FILES['anh_sp']['name'];
        $anh_sp_2=$_FILES['anh_sp']['tmp_name'];
        $gia_sp=$_POST['gia_sp'];
        $so_luong_sp=$_POST['so_luong_sp'];
        $mo_ta_sp=$_POST['mo_ta_sp'];
        $id_loai_sp=$_POST['id_loai_sp'];
        $sql="UPDATE sp SET ten_sp='$ten_sp' , anh_sp='$anh_sp' , gia_sp='$gia_sp' , so_luong_sp='$so_luong_sp' , mo_ta_sp='$mo_ta_sp',id_loai_sp='$id_loai_sp' WHERE id_sp='$id'  ";

        $query_sql=mysqli_query($conn,$sql);
        move_uploaded_file($anh_sp_2,'images/'.$anh_sp);
        header('location:index.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="header">
                <ul class="header-list">
                        <li><a href=""><i class="fas fa-phone"></i></a></li>
                        <li><a href="">|</a></li>
                        <li><a href="">1800 6226</a></li>
                        
                </ul>
            </div>
            <!-- Thanh Navigation -->
            <div class="navbar">
                <div class="logo">
                    <a href="index.php"><img src="images/logo.jpg" alt=""></a>
                </div>

                <ul class="nav-list">
                    <li><a href="index.php">Trang chủ</a></li>
                    <li><a href="#">Sản phẩm</a></li>
                    <li><a href="#">Về Aristino</a></li>
                    <li><a href="">Đăng nhập</a></li>
                    <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                </ul>
            </div>

    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h1 style="text-align: center;">Sửa sản phẩm</h1>
            </div>

            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="id_sp">Id sản phẩm</label>
                        <input type="number" class="form-control" name="id_sp" id="id_sp" required value="<?php echo $row_up['id_sp'] ?>" >

                    </div>

                    <div class="form-group">
                        <label for="ten_sp">Tên sản phẩm</label>
                        <input type="text" class="form-control" name="ten_sp" id="ten_sp" required value=" <?php echo $row_up['ten_sp'] ?> " >
                    </div>

                    <div class="form-group">
                        <label for="anh_sp">Ảnh sản phẩm</label>
                        <input type="file" class="form-control" name="anh_sp" id="anh_sp">
                    </div>

                    <div class="form-group">
                        <label for="gia_sp">Giá sản phẩm</label>
                        <input type="text" class="form-control" name="gia_sp" id="gia_sp" required value="<?php echo $row_up['gia_sp'] ?>" >
                    </div>

                    <div class="form-group">
                        <label for="so_luong_sp">Số lượng sản phẩm</label>
                        <input type="number" class="form-control" name="so_luong_sp" id="so_luong_sp" value="<?php echo $row_up['so_luong_sp'] ?>" >
                    </div>

                    <div class="form-group">
                        <label for="mo_ta_sp">Mô tả sản phẩm</label>
                        <input type="text" class="form-control" name="mo_ta_sp" id="mo_ta_sp" value="<?php echo $row_up['mo_ta_sp'] ?>" >
                    </div>

                    <div class="form-group">
                        <label for="id_loai_sp">Loại sản phẩm</label>
                        <select name="id_loai_sp" id="id_loai_sp" class="form-control">
                            <?php while($row_type=mysqli_fetch_assoc($query_type)){ ?>
                                <option value=" <?php echo $row_type['id_loai_sp'] ?>"><?php echo $row_type['ten_loai_sp'] ?> </option>
                          <?php  } ?>
                        </select>
                    </div>

                    <button class="btn btn-info" name="bsm">Sửa</button>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>