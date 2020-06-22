<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="http://localhost/quanlysinhvien/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/QuanTri.css" rel="stylesheet" type="text/css" />
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
                        <li id="btnNguoidung">
                            <span>HỒ SƠ NGƯỜI DÙNG</span>
                        </li>
                        <ul class="menu-child" id="menu-child-nguoidung">
                        </ul>
                        <li id="btnGiangVien">
                            <span>HỒ SƠ GIẢNG VIÊN</span>
                        </li>
                        <ul class="menu-child" id="menu-child-giangvien">
                        </ul>
                        <li id="btnSinhVien">
                            <span>HỒ SƠ SINH VIÊN</span>
                        </li>
                        <ul class="menu-child" id="menu-child-sinhvien">
                        </ul>
                        <li id="btnDiem">
                            <span>ĐIỂM</span>
                        </li>

                    </ul>
                </nav>
            </div>
            <div class="content-admin">
                <h3 style="background-color: rgb(172, 177, 182);">Quản Trị</h3>
                <div class="transfer-bar-nav clearfix">
                    <ul>
                        <a href="NguoiDung">
                            <li class="bar">
                                HỒ SƠ NGƯỜI DÙNG
                            </li>
                        </a>
                        <a href="GiangVien">
                            <li class="bar">
                                HỒ SƠ GIẢNG VIÊN
                            </li>
                        </a>
                        <a href="SinhVien">
                            <li class="bar">
                                HỒ SƠ SINH VIÊN
                            </li>
                        </a>
                        <li class="bar">
                            ĐIỂM
                        </li>
                    </ul>
                </div>
                <?php require_once "./mvc/views/pages/" . $data["page"] . ".php"; ?>
            </div>
        </section>
    </div>
    <script src="public/js/QuanTri.js"></script>
</body>

</html>