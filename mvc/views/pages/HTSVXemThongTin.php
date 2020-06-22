<div class="content-main">
    <h2>Sinh Viên</h2>
    <h3>Thông Tin Sinh Viên</h3>
    <?php
    $gioitinh = "";
    if ($data["arrSinhVien"][0]["gioitinh"] == 1) {
        $gioitinh = "Nam";
    } else {
        $gioitinh = "Nữ";
    }

    ?>
    <table id="customers">

        <tr>
            <td><label for="masv">Mã Sinh Viên</label></br>
                <input type="text" name="masv" id="masv" value="<?php echo $data["arrSinhVien"][0]["masv"] ?>" disabled />
            </td>
            <td><label for="sdt">Số Điện Thoại</label></br>
                <input type="text" name="sdt" id="sdt" value="<?php echo $data["arrSinhVien"][0]["sdt"] ?>" disabled />
            </td>
        </tr>
        <tr>
            <td><label for="masv">Tên Sinh Viên</label></br>
                <input type="text" name="tensv" id="tensv" value="<?php echo $data["arrSinhVien"][0]["tensv"] ?>" disabled />
            </td>
            <td><label for="tenlop">Tên Lớp</label></br>
                <input type="text" name="tenlop" id="tenlop" value="<?php echo $data["arrSinhVien"][0]["tenlop"] ?>" disabled />
            </td>
        </tr>
        <tr>
            <td><label for="ngaysinh">Ngày Sinh</label></br>
                <input type="text" name="ngaysinh" id="ngaysinh" value="<?php echo $data["arrSinhVien"][0]["ngaysinh"] ?>" disabled />
            </td>
            <td><label for="tenkhoa">Tên Khoa</label></br>
                <input type="text" name="tenkhoa" id="tenkhoa" value="<?php echo $data["arrSinhVien"][0]["tenkhoa"] ?>" disabled />
            </td>
        </tr>
        <tr>
            <td><label for="gioitinh">Giới Tính</label></br>
                <input type="text" name="gioitinh" id="gioitinh" value="<?php echo $gioitinh ?>" disabled />
            </td>
            <td><label for="tennganh">Tên Ngành</label></br>
                <input type="text" name="tennganh" id="tennganh" value="<?php echo $data["arrSinhVien"][0]["tennganh"] ?>" disabled />
            </td>
        </tr>
        <tr>
            <td><label for="quequan">Quê Quán</label></br>
                <input type="text" name="quequan" id="quequan" value="<?php echo $data["arrSinhVien"][0]["quequan"] ?>" disabled />
            </td>
            <td><label for="makhoahoc">Khóa Học</label></br>
                <input type="text" name="makhoahoc" id="makhoahoc" value="<?php echo $data["arrSinhVien"][0]["makhoahoc"] ?>" disabled />
            </td>
        </tr>



    </table>
    <table>
        <?php
        echo '</br><a href="SinhVien/SuaThongTinSinhVien/' . $data["arrSinhVien"][0]["masv"] . '" ><button class="btn">Sửa</button></a>'
        ?>
    </table>


</div>