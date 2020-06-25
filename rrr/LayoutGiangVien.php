<?php
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="http://localhost/quanlysinhvien/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/HTSinhVien.css" rel="stylesheet" type="text/css" />
    <link href="public/css/<?php echo $data["css"] ?>.css" rel="stylesheet" type="text/css" />
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
    <title>Quản Trị</title>
</head>

<body>
    <div>
        <div class="main">
            <header class="clearfix">
                <a href="HeThongQuanTri">
                    <h2 class="title-page">Hệ Thống Quản Lý</h2>
                </a> <span class="user"><b class="user-icon">@</b><b class="name-user">ngô văn hùng</b></span>
            </header>
        </div>
        <section class="content clearfix">
            <div class="nav-admin">
                <nav>
                    <ul class="nav-menu">
                        <a href="HeThongGiangVien">
                            <li id="btnNguoidung">
                                <span>THÔNG TIN Giảng Viên</span>
                            </li>
                        </a>
                        <a href="DiemSinhVien">
                            <li id="btnDiem">
                                <span>ĐIỂM</span>
                            </li>
                        </a>
                    </ul>
                </nav>
            </div>
            <div class="content-admin">
                <h3 style="background-color: rgb(172, 177, 182);">Quản Trị</h3>
                <div class="transfer-bar-nav clearfix">
                    <ul>
                        <a href="HeThongGiangVien">
                            <li class="bar">
                                THÔNG TIN Giảng Viên
                            </li>
                        </a>
                        <a href="">
                        <li class="bar">
                            ĐIỂM
                        </li>
                        </a>
                    </ul>
                </div>
                <?php require_once "./mvc/views/pages/" . $data["page"] . ".php"; ?>
            </div>
        </section>
    </div>
    <script src="public/js/QuanTri.js"></script>
</body>

</html>