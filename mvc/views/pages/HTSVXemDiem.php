<div class="content-main">
    <h2>ĐIỂM</h2>
    <h3>Thông Tin Điểm Sinh Viên</h3>
    <?php
    $dem = count($data["arrDiem"]);
    $tongdiemtrungbinh = 0;
    $trunggian = 0;
    $tongdiem = 0;
    $tongchi = 0;
    for ($i = 0; $i < $dem; $i++) {
        $tongdiem = $data["arrDiem"][$i]["diemtongket"] * $data["arrDiem"][$i]["sotinchi"];
        $trunggian = $trunggian + $tongdiem;
        $tongchi = $tongchi +  $data["arrDiem"][$i]["sotinchi"];
    }
    $tongdiemtrungbinh = $trunggian / $tongchi;

    ?>
    <h3>Điểm Trung Bình Tổng Kết : <?php echo $tongdiemtrungbinh ?></h3>
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
        </tr>';
        }
        ?>


    </table>

</div>