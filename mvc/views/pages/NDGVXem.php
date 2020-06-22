<div class="content-main">
    <h2>NGƯỜI DÙNG</h2>
    <h3>Danh Sách Tài Khoản Giảng Viên</h3>
    <a href="NguoiDung/ThemUserGiangVien"><button id="btnThem">Thêm Tài Khoản</button></a>
    <table id="customers">
        <tr>
            <th>Tên Tài Khoản</th>
            <th>Mật Khẩu</th>
            <th>Tên Người Dùng</th>
            <th>Mã</th>
            <th>Chức Năng</th>
        </tr>
        <?php
        $dem = count($data["arrUserGiangVien"]);
        for ($i = 0; $i < $dem; $i++) {
            echo '<tr>
            <td>'.$data["arrUserGiangVien"][$i]["tentaikhoan"].'</td>
            <td>'.$data["arrUserGiangVien"][$i]["matkhau"].'</td>
            <td>'.$data["arrUserGiangVien"][$i]["tengv"].'</td>
            <td>'.$data["arrUserGiangVien"][$i]["magv"].'</td>
            <td>
                <a href="NguoiDung/XoaUserGiangVien/'.$data["arrUserGiangVien"][$i]["tentaikhoan"].'" ><button class="btn">Xóa</button></a>
                <a href="NguoiDung/SuaUserGiangVien/'.$data["arrUserGiangVien"][$i]["tentaikhoan"].'" ><button class="btn">Sửa</button></a>
            </td>
        </tr>';
        }
        ?>
    </table>
    
</div>