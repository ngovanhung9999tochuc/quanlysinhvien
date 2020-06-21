<div class="content-main">
    <h3>Danh Sách Khóa Học</h3>
    <ul>
        <?php
        $dem = count($data["arrKhoaHoc"]);
        for ($i = 0; $i < $dem; $i++) {
            echo '<a href="SinhVien/LayKhoaSV/'.$data["arrKhoaHoc"][$i]["makhoahoc"].'"><li>'.$data["arrKhoaHoc"][$i]["tenkhoahoc"].'</li></a>';
        }
        ?>
    </ul>
</div>