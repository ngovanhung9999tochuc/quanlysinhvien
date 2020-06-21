<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <base href="http://localhost/quanlysinhvien/">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/css/QuanTri.css" rel="stylesheet" type="text/css" />
    <link href="public/css/<?php echo $data["css"]?>.css" rel="stylesheet" type="text/css" />
    <title>Quản Trị</title>
</head>

<body>
    <div>
        <div class="main">
            <header class="clearfix">
                <a href="HeThongQuanTri"><h2 class="title-page">Hệ Thống Quản Lý</h2></a> <span class="user"><b class="user-icon">@</b><b class="name-user">ngô văn hùng</b></span>
            </header>
        </div>
        <section class="content clearfix">
            <div class="nav-admin">
                <nav>
                    <ul class="nav-menu">
                        <li id="btnNguoidung">
                            <span>Hồ Sơ Người Dùng</span>
                        </li>

                        <li id="btnGiangVien">
                            <span>Hồ Sơ Giảng Viên</span>
                        </li>
                        <li id="btnSinhVien">
                            <span>Hồ Sơ Sinh Viên</span>
                        </li>
                        <ul class="menu-child" id="menu-child-sinhvien">
                        </ul>
                        <li id="btnDiem">
                            <span> Điểm</span>
                        </li>

                    </ul>
                </nav>
            </div>
            <div class="content-admin">
                <h3>Quản Trị</h3>
                <div class="transfer-bar-nav clearfix">

                    <ul>
                        <li class="bar">
                            hồ sơ người dùng
                        </li>
                        <li class="bar">
                            hồ sơ giảng viên
                        </li>
                        <a href="SinhVien">
                            <li class="bar">
                                hồ sơ sinh viên
                            </li>
                        </a>
                        <li class="bar">
                            điểm
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