<div class="content-main">
    <h2>Giảng Viên</h2>
    <h3>Thông Tin Giảng Viên</h3>
    <?php
    $gioitinh = "";
    if ($data["arrGiangVien"][0]["gioitinh"] == 1) {
        $gioitinh = "Nam";
    } else {
        $gioitinh = "Nữ";
    }

    ?>
    <table id="customers">

        <tr>
            <td><label for="magv">Mã Giảng Viên</label></br>
                <input type="text" name="masv" id="masv" value="<?php echo $data["arrGiangVien"][0]["magv"] ?>" disabled />
            </td>
            <td><label for="magv">Tên Giảng Viên</label></br>
                <input type="text" name="tengv" id="tengv" value="<?php echo $data["arrGiangVien"][0]["tengv"] ?>" disabled />
            </td>
        </tr>
        <tr>
            <td><label for="ngaysinh">Ngày Sinh</label></br>
                <input type="text" name="ngaysinh" id="ngaysinh" value="<?php echo $data["arrGiangVien"][0]["ngaysinh"] ?>" disabled />
            </td>
            <td><label for="khoa">Tên Khoa</label></br>
                <input type="text" name="tenkhoa" id="tenkhoa" value="<?php echo $data["arrGiangVien"][0]["tenkhoa"] ?>" disabled />
            </td>
        </tr>
        <tr>
            <td><label for="gioitinh">Giới Tính</label></br>
                <input type="text" name="gioitinh" id="gioitinh" value="<?php echo $gioitinh ?>" disabled />
            </td>
            <td><label for="hocvi">Học Vị</label></br>
                <input type="text" name="hocvi" id="hocvi" value="<?php echo $data["arrGiangVien"][0]["hocvi"] ?>" disabled />
            </td>
        </tr>
        <tr>
            <td><label for="quequan">Quê Quán</label></br>
                <input type="text" name="quequan" id="quequan" value="<?php echo $data["arrGiangVien"][0]["quequan"] ?>" disabled />
            </td>
    </table>
    
        <?php
       // echo '</br><a href="GiangVien/SuaGiangVien/' . $data["arrGiangVien"][0]["magv"] . '" ><button id="btnsua">Sửa</button></a>'
        ?>
    


</div>