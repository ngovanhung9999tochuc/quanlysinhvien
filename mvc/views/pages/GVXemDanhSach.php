<div class="content-main">
    <h2>GIẢNG VIÊN</h2>
    <h3>Danh Sách Giảng Viên</h3>
    <table id="customers">
        <tr>
            <th>Mã Sinh Viên</th>
            <th>Tên Sinh Viên</th>
            <th>Ngày Sinh</th>
            <th>Giới Tính</th>
            <th>Quê Quán</th>
            <th>Học Vị</th>
            <th>Khoa</th>
            <th>Chức Năng</th>
        </tr>
        <?php
        $dem = count($data["arrGiangVien"]);
        for ($i = 0; $i < $dem; $i++) {
            $gioitinh = "";
            if ($data["arrGiangVien"][$i]["gioitinh"] == 1) {
                $gioitinh = "Nam";
            } else {
                $gioitinh = "Nữ";
            }
            echo '<tr>
            <td>' . $data["arrGiangVien"][$i]["magv"] . '</td>
            <td>' . $data["arrGiangVien"][$i]["tengv"] . '</td>
            <td>' . $data["arrGiangVien"][$i]["ngaysinh"] . '</td>
            <td>' . $gioitinh . '</td>
            <td>' . $data["arrGiangVien"][$i]["quequan"] . '</td>
            <td>' . $data["arrGiangVien"][$i]["hocvi"] . '</td>
            <td>' . $data["arrGiangVien"][$i]["tenkhoa"] . '</td>
            <td>
            <a href="GiangVien/XoaGiangVien/' . $data["arrGiangVien"][$i]["magv"] . '/' . $data["arrGiangVien"][$i]["makhoa"] . '" ><button class="btn">Xóa</button></a>
            <a href="GiangVien/SuaGiangVien/' . $data["arrGiangVien"][$i]["magv"] . '" ><button class="btn">Sửa</button></a>
            </td>
        </tr>';
        }
        ?>


    </table>

</div>