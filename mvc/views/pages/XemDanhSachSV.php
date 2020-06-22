<div class="content-main">
    <h2>SINH VIÊN</h2>
    <h3>Danh Sách Sinh Viên</h3>
    <table id="customers">
        <tr>
            <th>Mã Sinh Viên</th>
            <th>Tên Sinh Viên</th>
            <th>Ngày Sinh</th>
            <th>Giới Tính</th>
            <th>Quê Quán</th>
            <th>Số Điện Thoại</th>
            <th>Lớp</th>
            <th>Chức Năng</th>
        </tr>
        <?php
        $dem = count($data["arrSinhVien"]);
        for ($i = 0; $i < $dem; $i++) {
            $gioitinh="";
            if($data["arrSinhVien"][$i]["gioitinh"]==1){
                $gioitinh="Nam";
            }else{
                $gioitinh="Nữ";
            }
            echo '<tr>
            <td>'.$data["arrSinhVien"][$i]["masv"].'</td>
            <td>'.$data["arrSinhVien"][$i]["tensv"].'</td>
            <td>'.$data["arrSinhVien"][$i]["ngaysinh"].'</td>
            <td>'.$gioitinh.'</td>
            <td>'.$data["arrSinhVien"][$i]["quequan"].'</td>
            <td>'.$data["arrSinhVien"][$i]["sdt"].'</td>
            <td>'.$data["arrSinhVien"][$i]["malop"].'</td>
            <td>
            <a href="SinhVien/XoaSinhVien/'.$data["arrSinhVien"][$i]["masv"].'/'.$data["arrSinhVien"][$i]["malop"].'" ><button class="btn">Xóa</button></a>
            <a href="SinhVien/SuaSinhVien/'.$data["arrSinhVien"][$i]["masv"].'" ><button class="btn">Sửa</button></a>
            </td>
        </tr>';
        }
        ?>
        

    </table>
    
</div>