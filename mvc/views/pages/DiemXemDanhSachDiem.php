<div class="content-main">
    <h2>ĐIỂM</h2>

    <h3>Sinh Viên:
        <?php
        if (!empty($data["arrDiem"][0]["tensv"])) echo $data["arrDiem"][0]["tensv"]
        ?></h3>
    <table id="customers">
        <tr>
            <th>Mã Môn</th>
            <th>Tên Môn</th>
            <th>Số Tín Chỉ</th>
            <th>Số Tiết</th>
            <th>Điểm Chuyên Cần</th>
            <th>Điểm Giữa Kỳ</th>
            <th>Điểm Cuối Kỳ</th>
            <th>Điểm Tổng Kết</th>
            <th>Chức Năng</th>
        </tr>
        <?php
        $dem = count($data["arrDiem"]);
        for ($i = 0; $i < $dem; $i++) {
            echo '<tr>
            <td>' . $data["arrDiem"][$i]["mamon"] . '</td>
            <td>' . $data["arrDiem"][$i]["tenmon"] . '</td>
            <td>' . $data["arrDiem"][$i]["sotinchi"] . '</td>
            <td>' . $data["arrDiem"][$i]["sotiet"] . '</td>
            <td>' . $data["arrDiem"][$i]["diemchuyencan"] . '</td>
            <td>' . $data["arrDiem"][$i]["diemgiuaky"] . '</td>
            <td>' . $data["arrDiem"][$i]["diemcuoiky"] . '</td>
            <td>' . $data["arrDiem"][$i]["diemtongket"] . '</td>
            <td>
            <a href="Diem/XoaDiem/' . $data["arrDiem"][$i]["matochuday"] . '/' . $data["arrDiem"][$i]["masv"] . '" ><button class="btn">Xóa</button></a>
            <a href="Diem/SuaDiem/' . $data["arrDiem"][$i]["matochuday"] . '/' . $data["arrDiem"][$i]["masv"] . '" ><button class="btn">Sửa</button></a>
            </td>
        </tr>';
        }
        ?>


    </table>

</div>