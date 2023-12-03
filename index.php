<?php
    require_once "connect.php";

    // Câu lệnh sql

    $sql="SELECT * FROM sp JOIN loai_sp ON sp.id_loai_sp=loai_sp.id_loai_sp";
    $query=mysqli_query($conn,$sql);

  
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
        <!-- Thanh liên hệ -->
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
                <a href="#"><img src="images/logo.jpg" alt=""></a>
            </div>

            <ul class="nav-list">
                <li><a href="#">Trang chủ</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li><a href="#">Về Aristino</a></li>
                <li><a href="login.php">Đăng nhập</a></li>
                <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
            </ul>
        </div>

       <div class="banner">
            <img src="images/banner.jpg" width="100%" alt="">
       </div>

       <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h1 style="text-align: center; color:#333 ; font-weight:500" >Danh sách sản phẩm</h1>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th>Id sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Giá sản phẩm</th>
                                <th>Mô tả sản phẩm</th>
                                <th>Số lượng sản phẩm</th>
                                <th>Loại sản phẩm</th>
                                <th>Sửa </th>
                                <th>Xóa</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php 
                                while($row=mysqli_fetch_assoc($query)){ ?>
                                    <tr>
                                        <td> <?php echo $row['id_sp'] ?>  </td>
                                        <td> <?php echo $row['ten_sp'] ?>  </td>
                                        <td>
                                            <img  width="250px"  src="images/<?php echo $row['anh_sp'] ?>" alt="">
                                        </td>
                                        <td> <?php echo $row['gia_sp'] ?>  </td>
                                        <td> <?php echo $row['mo_ta_sp'] ?>  </td>
                                        <td><?php echo $row['so_luong_sp'] ?></td>
                                        <td> <?php echo $row['ten_loai_sp'] ?>  </td>
                                        <td> <a href="update.php?id_sp= <?= $row['id_sp'] ?>"><button class="btn btn-info">Sửa</button></a>  </td>
                                        <td><a href="delete.php?id_sp= <?= $row['id_sp'] ?>"><button onclick="return confirm('Bạn có muốn xóa không?') " class="btn btn-danger">Xóa</button></a></td>
                                    </tr>
                              <?php  } ?>
                            
                        </tbody>

                    </table>
                </div>
                <a href="add.php"><button class="btn btn-dark">Thêm sản phẩm</button></a>

            </div>
       </div>
    
</body>
</html>