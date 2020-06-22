<div class="content-main">
    <h2>NGƯỜI DÙNG</h2>
    <h3>Danh Sách Tài Khoản Quản Trị</h3>
    <a href="NguoiDung/ThemUserQuanTri"><button id="btnThem">Thêm Tài Khoản</button></a>
    <table id="customers">
        <tr>
            <th>Tên Tài Khoản</th>
            <th>Mật Khẩu</th>
            <th>Tên Người Dùng</th>
            <th>Mã</th>
            <th>Chức Năng</th>
        </tr>
        <?php
        $dem = count($data["arrUserQuanTri"]);
        for ($i = 0; $i < $dem; $i++) {
            echo '<tr>
            <td>'.$data["arrUserQuanTri"][$i]["tentaikhoan"].'</td>
            <td>'.$data["arrUserQuanTri"][$i]["matkhau"].'</td>
            <td>'.$data["arrUserQuanTri"][$i]["tengv"].'</td>
            <td>'.$data["arrUserQuanTri"][$i]["magv"].'</td>
            <td>
                <a href="NguoiDung/XoaUserQuanTri/'.$data["arrUserQuanTri"][$i]["tentaikhoan"].'" ><button class="btn">Xóa</button></a>
                <a href="NguoiDung/SuaUserQuanTri/'.$data["arrUserQuanTri"][$i]["tentaikhoan"].'" ><button class="btn">Sửa</button></a>
            </td>
        </tr>';
        }
        ?>
    </table>
    
</div>