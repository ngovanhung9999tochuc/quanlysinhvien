<div class="content-main">
    <h2>NGƯỜI DÙNG</h2>
    <h3>Sửa Tài Khoản Quản Trị</h3>
    <form id="formSV" method="POST" action="">
        <div class="row">
            <label for="tentaikhoan" class="lb">Tên Tài Khoản</label>
            <input type="text" id="tentaikhoan" name="tentaikhoan" value="<?php echo $data["arrUserQuanTri"][0]["tentaikhoan"] ?>" readonly />
        </div>
        <div class="row">
            <label for="matkhau" class="lb">Mật Khẩu</label>
            <input type="text" id="matkhau" name="matkhau" value="<?php echo $data["arrUserQuanTri"][0]["matkhau"] ?>" required />
        </div>
        <div class="row">
            <input type="submit" name="sua" value="Sửa" />
        </div>
    </form>
</div>