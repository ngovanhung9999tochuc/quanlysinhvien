<div class="content-main">
    <h2>LỚP TÍN CHỈ</h2>
    <h3>Sửa Lớp Tín Chỉ</h3>
    <form id="formSV" method="POST" action="">
        <div class="row">
            <label for="maltc" class="lb">Mã Lớp Tín Chỉ</label>
            <input type="text" id="maltc" name="maltc" value="<?php echo $data["arrLopTinChi"][0]["maltc"] ?>" readonly />
        </div>
        <div class="row">
            <label for="magv" class="lb">Mã Giảng Viên</label>
            <input type="text" id="magv" name="magv" value="<?php echo $data["arrLopTinChi"][0]["magv"] ?>" readonly />
        </div>
        <div class="row">
            <label for="mamon" class="lb">Mã Môn</label>
            <input type="text" id="mamon" name="mamon" value="<?php echo $data["arrLopTinChi"][0]["mamon"]  ?>" required />
        </div>
        
        <div class="row">
            <input type="submit" name="sua" value="Sửa" />
        </div>
        <p id="res"><?php echo $data["res"] ?></p>
    </form>
</div>