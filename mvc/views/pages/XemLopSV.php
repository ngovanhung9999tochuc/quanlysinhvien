<div class="content-main">
    <h3>Danh Sách Lớp</h3>
    <ul>
    <?php
        $dem = count($data["arrLop"]);
        for ($i = 0; $i < $dem; $i++) {
            echo '<a href="SinhVien/LayDanhSachSinhVien/'.$data["arrLop"][$i]["malop"].'"><li>'.$data["arrLop"][$i]["tenlop"].'</li></a>';
        }
        ?>
    </ul>
</div>