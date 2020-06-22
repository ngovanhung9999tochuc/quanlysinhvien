<div class="content-main">
    <h2>GIẢNG VIÊN</h2>
    <h3>Sửa Giảng Viên</h3>
    <form id="formSV" method="POST" action="">
        <div class="row">
            <label for="magv" class="lb">Mã Giảng Viên</label>
            <input type="text" id="magv" name="magv" value="<?php echo $data["arrGiangVien"][0]["magv"] ?>" readonly />
        </div>
        <div class="row">
            <label for="tengv" class="lb">Tên Giảng Viên</label>
            <input type="text" id="tengv" name="tengv" value="<?php echo $data["arrGiangVien"][0]["tengv"] ?>" required />
        </div>
        <div class="row">
            <label for="ngaysinh" class="lb">Ngày Sinh</label>
            <input type="date" id="ngaysinh" name="ngaysinh" value="<?php echo $data["arrGiangVien"][0]["ngaysinh"] ?>" required />
        </div>
        <div class="row rowradio">
            <input type="radio" id="nam" name="gioitinh" value="1" <?php if ($data["arrGiangVien"][0]["gioitinh"] == 1) echo 'checked="checked"' ?> />
            <label for="nam">Nam</label>
            <input type="radio" id="nu" name="gioitinh" value="0" <?php if ($data["arrGiangVien"][0]["gioitinh"] == 0) echo 'checked="checked"' ?> />
            <label for="nu">Nữ</label>
        </div>
        <div class="row">
            <label for="quequan" class="lb">Quê Quán</label>
            <input type="text" id="quequan" name="quequan" value="<?php echo $data["arrGiangVien"][0]["quequan"] ?>" required />
        </div>
        <div class="row">
            <label for="hocvi" class="lb">Họ Vị</label>
            <input type="text" id="hocvi" name="hocvi" value="<?php echo $data["arrGiangVien"][0]["hocvi"] ?>" required />
        </div>
        <div class="row">
            <label for="makhoa" class="lb">Mã Khoa</label>
            <input type="text" id="makhoa" name="makhoa" value="<?php echo $data["arrGiangVien"][0]["makhoa"] ?>" required />
        </div>
        <div class="row">
            <input type="submit" name="sua" value="Sửa" />
        </div>
        <p id="res"><?php echo $data["res"] ?></p>
    </form>
</div>