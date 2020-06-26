<div class="content-main">
    <h2>TỔ CHỨC LỊCH DẠY</h2>
    <h3>Thêm Lớp Lịch Dạy</h3>
    <form id="formSV" method="POST" action="">
        <div class="row">
            <label for="maltc" class="lb">Mã Lớp Tín Chỉ</label>
            <input type="text" id="maltc" name="maltc" value="<?php if (!empty($data["arrPost"]["maltc"])) echo $data["arrPost"]["maltc"] ?>" required />
        </div>
        <div class="row">
            <label for="soluongsv" class="lb">Số Lượng Sinh Viên</label>
            <input type="number" id="soluongsv" name="soluongsv" value="<?php if (!empty($data["arrPost"]["soluongsv"])) echo $data["arrPost"]["soluongsv"] ?>" required min="1" />
        </div>
        <div class="row">
            <label for="maphonghoc" class="lb">Mã Phòng Học</label>
            <input type="text" id="maphonghoc" name="maphonghoc" value="<?php if (!empty($data["arrPost"]["maphonghoc"])) echo $data["arrPost"]["maphonghoc"] ?>" required />
        </div>

        <div class="row">
            <label for="ngaybatdau" class="lb">Ngày Bắt Đầu</label>
            <input type="date" id="ngaybatdau" name="ngaybatdau" value="<?php if (!empty($data["arrPost"]["ngaybatdau"])) echo $data["arrPost"]["ngaybatdau"] ?>" required />
        </div>
        <div class="row">
            <label for="ngayketthuc" class="lb">Ngày Kết Thúc</label>
            <input type="date" id="ngayketthuc" name="ngayketthuc" value="<?php if (!empty($data["arrPost"]["ngayketthuc"])) echo $data["arrPost"]["ngayketthuc"] ?>" required />
        </div>
        <div class="row">
            <input type="submit" name="them" value="Thêm" />
        </div>
        <p id="res"><?php echo $data["res"] ?></p>
    </form>
</div>