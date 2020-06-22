<div class="content-main">
    <h2>ĐIỂM</h2>
    <h3>Thêm Điểm</h3>
    <form id="formSV" method="POST" action="">
        <div class="row">
            <label for="mamon" class="lb">Mã Môn</label>
            <input type="text" id="mamon" name="mamon" value="<?php if (!empty($data["arrPost"]["mamon"])) echo $data["arrPost"]["mamon"] ?>" required />
        </div>
        <div class="row">
            <label for="masv" class="lb">Mã Sinh Viên</label>
            <input type="text" id="masv" name="masv" value="<?php if (!empty($data["arrPost"]["masv"])) echo $data["arrPost"]["masv"] ?>" required />
        </div>
        <div class="row">
            <label for="diemchuyencan" class="lb">Điểm Chuyên Cần</label>
            <input type="number" id="diemchuyencan" name="diemchuyencan" value="<?php if (!empty($data["arrPost"]["diemchuyencan"])) echo $data["arrPost"]["diemchuyencan"] ?>" required />
        </div>
        <div class="row">
            <label for="diemgiuaky" class="lb">Điểm Giữa Kỳ</label>
            <input type="number" id="diemgiuaky" name="diemgiuaky" value="<?php if (!empty($data["arrPost"]["diemgiuaky"])) echo $data["arrPost"]["diemgiuaky"] ?>" required />
        </div>
        <div class="row">
            <label for="diemcuoiky" class="lb">Điểm Cuối Kỳ</label>
            <input type="number" id="diemcuoiky" name="diemcuoiky" value="<?php if (!empty($data["arrPost"]["diemcuoiky"])) echo $data["arrPost"]["diemcuoiky"] ?>" required />
        </div>
        <div class="row">
            <label for="diemtongket" class="lb">Mã Lớp</label>
            <input type="number" id="diemtongket" name="diemtongket" value="<?php if (!empty($data["arrPost"]["diemtongket"])) echo $data["arrPost"]["diemtongket"] ?>" required />
        </div>
        <div class="row">
            <input type="submit" name="them" value="Thêm" />
        </div>
        <p id="res"><?php echo $data["res"] ?></p>
    </form>
</div>