<div class="content-main">
    <h3>Thêm Sinh Viên</h3>
    <form id="formSV" method="POST" action="">
        <div class="row">
            <label for="tensv" class="lb">Tên Sinh Viên</label>
            <input type="text" id="tensv" name="tensv" value="<?php if(!empty($data["arrPost"]["tensv"])) echo $data["arrPost"]["tensv"] ?>" required />
        </div>
        <div class="row">
            <label for="ngaysinh" class="lb">Ngày Sinh</label>
            <input type="date" id="ngaysinh" name="ngaysinh" value="<?php if(!empty($data["arrPost"]["ngaysinh"])) echo $data["arrPost"]["ngaysinh"] ?>" required />
        </div>
        <div class="row rowradio">
            <input type="radio" id="nam" name="gioitinh" value="1" checked=checked />
            <label for="nam">Nam</label>
            <input type="radio" id="nu" name="gioitinh" value="0" />
            <label for="nu">Nữ</label>
        </div>
        <div class="row">
            <label for="quequan" class="lb">Quê Quán</label>
            <input type="text" id="quequan" name="quequan" value="<?php if(!empty($data["arrPost"]["quequan"])) echo $data["arrPost"]["quequan"] ?>" required />
        </div>
        <div class="row">
            <label for="sdt" class="lb">Số Điện Thoại</label>
            <input type="text" id="sdt" name="sdt" value="<?php if(!empty($data["arrPost"]["sdt"])) echo $data["arrPost"]["sdt"] ?>" required />
        </div>
        <div class="row">
            <label for="malop" class="lb">Mã Lớp</label>
            <input type="text" id="malop" name="malop" value="<?php if(!empty($data["arrPost"]["malop"])) echo $data["arrPost"]["malop"] ?>" required />
        </div>
        <div class="row">
            <input type="submit" name="them" value="Thêm" />
        </div>
        <p id="res"><?php echo $data["res"] ?></p>
    </form>
</div>