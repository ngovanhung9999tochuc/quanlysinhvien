<div class="content-main">
    <h2>LỚP TÍN CHỈ</h2>
    <h3>Danh Sách Lớp Tín Chỉ</h3>
    <table id="customers">
        <tr>
            <th>Mã Lớp Tín Chỉ</th>
            <th>Môn Học</th>
            <th>Giảng Viên</th>
            <th>Số Tín Chỉ</th>
            <th>Số Tiết</th>
            <th>Khoa</th>
            <th>Chức Năng</th>
        </tr>
        <?php
        $dem = count($data["arrLopTinChi"]);
        for ($i = 0; $i < $dem; $i++) {
            echo '<tr>
            <td>'.$data["arrLopTinChi"][$i]["maltc"].'</td>
            <td>'.$data["arrLopTinChi"][$i]["tenmon"].'</td>
            <td>'.$data["arrLopTinChi"][$i]["tengv"].'</td>
            <td>'.$data["arrLopTinChi"][$i]["sotinchi"].'</td>
            <td>'.$data["arrLopTinChi"][$i]["sotiet"].'</td>
            <td>'.$data["arrLopTinChi"][$i]["tenkhoa"].'</td>
            <td>
            <a href="LopTinChi/XoaLopTinChi/'.$data["arrLopTinChi"][$i]["maltc"].'" ><button class="btn">Xóa</button></a>
            <a href="LopTinChi/SuaLopTinChi/'.$data["arrLopTinChi"][$i]["maltc"].'" ><button class="btn">Sửa</button></a>
            </td>
        </tr>';
        }
        ?>
        

    </table>
    
</div>