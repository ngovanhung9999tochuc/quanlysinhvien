<div class="content-main">
    <h2>NGƯỜI DÙNG</h2>
    <h3>Thêm Tài Khoản Quản Tri</h3>
    <form id="formSV" method="POST" action="">
        <div class="row">
            <label for="tentaikhoan" class="lb">Tên Tài Khoản</label>
            <input type="text" id="tentaikhoan" name="tentaikhoan" value="<?php if (!empty($data["arrPost"]["tentaikhoan"])) echo $data["arrPost"]["tentaikhoan"] ?>" required />
        </div>
        <div class="row">
            <label for="matkhau" class="lb">Mật Khẩu</label>
            <input type="text" id="matkhau" name="matkhau" value="<?php if (!empty($data["arrPost"]["matkhau"])) echo $data["arrPost"]["matkhau"] ?>" required />
        </div>
        <div class="row">
            <label for="magv" class="lb">Mã Giảng Viên</label>
            <input type="text" id="magv" name="magv" value="<?php if (!empty($data["arrPost"]["magv"])) echo $data["arrPost"]["magv"] ?>" required />
        </div>
        <div class="row">
            <input type="submit" name="them" value="Thêm" />
        </div>
        <p id="res"><?php echo $data["res"] ?></p>
    </form>
</div>