<div class="content-main">
    <h2>TỔ CHỨC LỊCH DẠY</h2>
    <h3>Sửa Lớp Lịch Dạy</h3>
    <form id="formSV" method="POST" action="">
        <div class="row">
            <label for="matochuday" class="lb">Mã Lớp Lịch Dạy</label>
            <input type="text" id="matochuday" name="matochuday" value="<?php echo $data["arrToChuDay"][0]["matochuday"] ?>" readonly />
        </div>
        <div class="row">
            <label for="maltc" class="lb">Mã Lớp Tín Chỉ</label>
            <input type="text" id="maltc" name="maltc" value="<?php echo $data["arrToChuDay"][0]["maltc"] ?>" required />
        </div>
        <div class="row">
            <label for="soluongsv" class="lb">Số Lượng Sinh Viên</label>
            <input type="number" id="soluongsv" name="soluongsv" value="<?php echo $data["arrToChuDay"][0]["soluongsv"] ?>" required min="1" />
        </div>
        <div class="row">
            <label for="maphonghoc" class="lb">Phòng Học</label>
            <input type="text" id="maphonghoc" name="maphonghoc" value="<?php echo $data["arrToChuDay"][0]["maphonghoc"] ?>" required />
        </div>
        <div class="row">
            <label for="ngaybatdau" class="lb">Ngày Bắt Đầu</label>
            <input type="date" id="ngaybatdau" name="ngaybatdau" value="<?php echo $data["arrToChuDay"][0]["ngaybatdau"] ?>" required />
        </div>
        <div class="row">
            <label for="ngayketthuc" class="lb">Ngày Kết Thúc</label>
            <input type="date" id="ngayketthuc" name="ngayketthuc" value="<?php echo $data["arrToChuDay"][0]["ngayketthuc"] ?>" required />
        </div>
        <div class="row">
            <input type="submit" name="sua" value="Sửa" />
        </div>
        <p id="res"><?php echo $data["res"] ?></p>
    </form>
</div>