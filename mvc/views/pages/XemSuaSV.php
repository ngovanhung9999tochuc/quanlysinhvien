<div class="content-main">
    <h3>Sửa Sinh Viên</h3>
    <form id="formSV" method="POST" action="">
        <div class="row">
            <label for="masv" class="lb">Mã Sinh Viên</label>
            <input type="text" id="masv" name="masv" value="<?php echo $data["arrSinhVien"][0]["masv"]?>" readonly />
        </div>
        <div class="row">
            <label for="tensv" class="lb">Tên Sinh Viên</label>
            <input type="text" id="tensv" name="tensv" value="<?php echo $data["arrSinhVien"][0]["tensv"]?>" required />
        </div>
        <div class="row">
            <label for="ngaysinh" class="lb">Ngày Sinh</label>
            <input type="date" id="ngaysinh" name="ngaysinh" value="<?php echo $data["arrSinhVien"][0]["ngaysinh"]?>" required />
        </div>
        <div class="row rowradio">
            <input type="radio" id="nam" name="gioitinh" value="1" <?php if($data["arrSinhVien"][0]["gioitinh"]==1) echo 'checked="checked"' ?> />
            <label for="nam">Nam</label>
            <input type="radio" id="nu" name="gioitinh" value="0" <?php if($data["arrSinhVien"][0]["gioitinh"]==0) echo 'checked="checked"' ?> />
            <label for="nu">Nữ</label>
        </div>
        <div class="row">
            <label for="quequan" class="lb">Quê Quán</label>
            <input type="text" id="quequan" name="quequan" value="<?php echo $data["arrSinhVien"][0]["quequan"]?>" required />
        </div>
        <div class="row">
            <label for="sdt" class="lb">Số Điện Thoại</label>
            <input type="text" id="sdt" name="sdt" value="<?php echo $data["arrSinhVien"][0]["sdt"]?>" required />
        </div>
        <div class="row">
            <label for="malop" class="lb">Mã Lớp</label>
            <input type="text" id="malop" name="malop" value="<?php echo $data["arrSinhVien"][0]["malop"]?>" required />
        </div>
        <div class="row">
            <input type="submit" name="sua" value="Sửa" />
        </div>
        <p id="res"><?php echo $data["res"]?></p>
    </form>
</div>