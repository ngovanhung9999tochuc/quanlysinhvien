<div class="content-main">
<h2>LỚP TÍN CHỈ</h2>
    <h3>Thêm Lớp Tín Chỉ</h3>
    <form id="formSV" method="POST" action="">
        <div class="row">
            <label for="magv" class="lb">Mã Giảng Viên</label>
            <input type="text" id="magv" name="magv" value="<?php if (!empty($data["arrPost"]["magv"])) echo $data["arrPost"]["magv"] ?>" required />
        </div>
        <div class="row">
            <label for="mamon" class="lb">Mã Môn</label>
            <input type="text" id="mamon" name="mamon" value="<?php if (!empty($data["arrPost"]["mamon"])) echo $data["arrPost"]["mamon"] ?>" required />
        </div>
        <div class="row">
            <input type="submit" name="them" value="Thêm" />
        </div>
        <p id="res"><?php echo $data["res"] ?></p>
    </form>
</div>