<div class="content-main">
    <h2>NGƯỜI DÙNG</h2>
    <h3>Danh Sách Tài Khoản Sinh Viên</h3>
    <a href="NguoiDung/ThemUserSinhVien"><button id="btnThem">Thêm Tài Khoản</button></a>
    <table id="customers">
        <tr>
            <th>Tên Tài Khoản</th>
            <th>Mật Khẩu</th>
            <th>Tên Người Dùng</th>
            <th>Mã</th>
            <th>Chức Năng</th>
        </tr>
        <?php
        $dem = count($data["arrUserSinhVien"]);
        for ($i = 0; $i < $dem; $i++) {
            echo '<tr>
            <td>'.$data["arrUserSinhVien"][$i]["tentaikhoan"].'</td>
            <td>'.$data["arrUserSinhVien"][$i]["matkhau"].'</td>
            <td>'.$data["arrUserSinhVien"][$i]["tensv"].'</td>
            <td>'.$data["arrUserSinhVien"][$i]["masv"].'</td>
            <td>
                <a href="NguoiDung/XoaUserSinhVien/'.$data["arrUserSinhVien"][$i]["tentaikhoan"].'" ><button class="btn">Xóa</button></a>
                <a href="NguoiDung/SuaUserSinhVien/'.$data["arrUserSinhVien"][$i]["tentaikhoan"].'" ><button class="btn">Sửa</button></a>
            </td>
        </tr>';
        }
        ?>
    </table>
    
</div>