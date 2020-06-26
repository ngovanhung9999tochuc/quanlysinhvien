<div class="content-main">
    <h2>TỔ CHỨC LỊCH DẠY</h2>
    <h3>Danh Sách Lớp Lịch Dạy </h3>
    <table id="customers">
        <tr>
            <th>Mã Lịch Dạy</th>
            <th>Môn Học</th>
            <th>Giảng Viên</th>
            <th>Số Tín Chỉ</th>
            <th>Số Lượng Sinh Viên</th>
            <th>Phòng Học</th>
            <th>Ngày Bắt Đầu</th>
            <th>Ngày Kết Thúc</th>
            <th>Chức Năng</th>
        </tr>
        <?php
        $dem = count($data["arrToChuDay"]);
        for ($i = 0; $i < $dem; $i++) {
            echo '<tr>
            <td>'.$data["arrToChuDay"][$i]["matochuday"].'</td>
            <td>'.$data["arrToChuDay"][$i]["tenmon"].'</td>
            <td>'.$data["arrToChuDay"][$i]["tengv"].'</td>
            <td>'.$data["arrToChuDay"][$i]["sotinchi"].'</td>
            <td>'.$data["arrToChuDay"][$i]["soluongsv"].'</td>
            <td>'.$data["arrToChuDay"][$i]["maphonghoc"].'</td>
            <td>'.$data["arrToChuDay"][$i]["ngaybatdau"].'</td>
            <td>'.$data["arrToChuDay"][$i]["ngayketthuc"].'</td>
            <td>
            <a href="ToChuDay/XoaToChuDay/'.$data["arrToChuDay"][$i]["matochuday"].'" ><button class="btn">Xóa</button></a>
            <a href="ToChuDay/SuaToChuDay/'.$data["arrToChuDay"][$i]["matochuday"].'" ><button class="btn">Sửa</button></a>
            </td>
        </tr>';
        }
        ?>
        

    </table>
    
</div>