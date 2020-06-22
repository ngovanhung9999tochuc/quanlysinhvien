<div class="content-main">
    <h2>ĐIỂM</h2>
    <h3>Danh Sách Sinh Viên</h3>
    <table id="customers">
        <tr>
            <th>Mã Sinh Viên</th>
            <th>Tên Sinh Viên</th>
            <th>Lớp</th>
            <th>Chức Năng</th>
        </tr>
        <?php
        $dem = count($data["arrSinhVien"]);
        for ($i = 0; $i < $dem; $i++) {
            echo '<tr>
            <td>'.$data["arrSinhVien"][$i]["masv"].'</td>
            <td>'.$data["arrSinhVien"][$i]["tensv"].'</td>
            <td>'.$data["arrSinhVien"][$i]["malop"].'</td>
            <td>
            <a href="Diem/XemDiem/'.$data["arrSinhVien"][$i]["masv"].'" ><button class="btn">Xem Điểm</button></a>
            </td>
        </tr>';
        }
        ?>
    </table>
    
</div>