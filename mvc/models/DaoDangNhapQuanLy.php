<?php
class DaoDangNhapQuanLy extends DB
{
    public function dangNhap($user, $pass)
    {
        $result = "";
        $sql = "SELECT * FROM userquanly WHERE tentaikhoan='$user'";
        $truyvan = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($truyvan)) {
            if ($user == $row['tentaikhoan']) {
                if ($pass == $row['matkhau']) {
                    $_SESSION['user'] = $user;
                    $_SESSION['magv'] = $row['magv'];
                    header("Location: http://localhost/quanlysinhvien/HeThongQuanTri");
                    break;
                } else {
                    $result = 'Mật khẩu sai';
                    break;
                }
            }
        }
        if (mysqli_num_rows($truyvan) == 0) {
            $result = 'Tài khoản không tồn tại';
        }
        return $result;
    }
}