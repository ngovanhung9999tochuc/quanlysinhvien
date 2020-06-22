<div class="content-main">
    <h2>GIẢNG VIÊN</h2>
    <h3>Thêm Giảng Viên</h3>
    <form id="formSV" method="POST" action="">
        <div class="row">
            <label for="tengv" class="lb">Tên Giảng Viên</label>
            <input type="text" id="tengv" name="tengv" value="<?php if (!empty($data["arrPost"]["tengv"])) echo $data["arrPost"]["tengv"] ?>" required />
        </div>
        <div class="row">
            <label for="ngaysinh" class="lb">Ngày Sinh</label>
            <input type="date" id="ngaysinh" name="ngaysinh" value="<?php if (!empty($data["arrPost"]["ngaysinh"])) echo $data["arrPost"]["ngaysinh"] ?>" required />
        </div>
        <div class="row rowradio">
            <input type="radio" id="nam" name="gioitinh" value="1" checked="checked" />
            <label for="nam">Nam</label>
            <input type="radio" id="nu" name="gioitinh" value="0" />
            <label for="nu">Nữ</label>
        </div>
        <div class="row">
            <label for="quequan" class="lb">Quê Quán</label>
            <input type="text" id="quequan" name="quequan" value="<?php if (!empty($data["arrPost"]["quequan"])) echo $data["arrPost"]["quequan"] ?>" required />
        </div>
        <div class="row">
            <label for="hocvi" class="lb">Họ Vị</label>
            <input type="text" id="hocvi" name="hocvi" value="<?php if (!empty($data["arrPost"]["hocvi"])) echo $data["arrPost"]["hocvi"] ?>" required />
        </div>
        <div class="row">
            <label for="makhoa" class="lb">Mã Khoa</label>
            <input type="text" id="makhoa" name="makhoa" value="<?php if (!empty($data["arrPost"]["makhoa"])) echo $data["arrPost"]["makhoa"] ?>" required />
        </div>
        <div class="row">
            <input type="submit" name="them" value="Thêm" />
        </div>
        <p id="res"><?php echo $data["res"] ?></p>
    </form>
</div>