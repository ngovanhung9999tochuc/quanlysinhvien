<div class="content-main">
    <h2>GIẢNG VIÊN</h2>
    <h3>Danh Sách Khoa</h3>
    <ul>
        <?php
        $dem = count($data["arrKhoa"]);
        for ($i = 0; $i < $dem; $i++) {
            echo '<a href="GiangVien/LayDanhSachGiangVien/' . $data["arrKhoa"][$i]["makhoa"] . '"><li>' . $data["arrKhoa"][$i]["tenkhoa"] . '</li></a>';
        }
        ?>
    </ul>
</div>