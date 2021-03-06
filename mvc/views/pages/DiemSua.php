<div class="content-main">
    <h2>ĐIỂM</h2>
    <h3>Sửa Điểm</h3>
    <form id="formSV" method="POST" action="">
        <div class="row">
            <label for="matochuday" class="lb">Mã Lớp Tín Chỉ</label>
            <input type="text" id="matochuday" name="matochuday" value="<?php echo $data["arrDiem"][0]["matochuday"] ?>" readonly />
        </div>
        <div class="row">
            <label for="masv" class="lb">Mã Sinh Viên</label>
            <input type="text" id="masv" name="masv" value="<?php echo $data["arrDiem"][0]["masv"] ?>" readonly />
        </div>
        <div class="row">
            <label for="diemchuyencan" class="lb">Điểm Chuyên Cần</label>
            <input type="number" id="diemchuyencan" name="diemchuyencan" value="<?php echo $data["arrDiem"][0]["diemchuyencan"]  ?>" required min="0" max="10" />
        </div>
        
        <div class="row">
            <label for="diemgiuaky" class="lb">Điểm Giữa Kỳ</label>
            <input type="number" id="diemgiuaky" name="diemgiuaky" value="<?php echo $data["arrDiem"][0]["diemgiuaky"] ?>" required min="0" max="10" />
        </div>
        <div class="row">
            <label for="diemcuoiky" class="lb">Điểm Cuối Kỳ</label>
            <input type="number" id="diemcuoiky" name="diemcuoiky" value="<?php echo $data["arrDiem"][0]["diemcuoiky"] ?>" required min="0" max="10" />
        </div>
        <div class="row">
            <label for="diemtongket" class="lb">Điểm Tổng Kết</label>
            <input type="number" id="diemtongket" name="diemtongket" value="<?php echo $data["arrDiem"][0]["diemtongket"] ?>" required min="0" max="10" />
        </div>
        <div class="row">
            <input type="submit" name="sua" value="Sửa" />
        </div>
        <p id="res"><?php echo $data["res"] ?></p>
    </form>
</div>