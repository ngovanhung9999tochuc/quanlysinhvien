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
                    header("Location: " . $this->getLocalhost() . "HeThongQuanTri");
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

    public function xoaUserQuanLy($magv)
    {
        $sql = "DELETE FROM userquanly WHERE magv='" . $magv . "'";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function layDanhSachUserQuanTriVaTenNguoiDung()
    {
        $array = [];
        $sql = "SELECT UQL.tentaikhoan,UQL.matkhau,UQL.magv,GV.tengv FROM userquanly AS UQL JOIN giangvien AS GV ON UQL.magv=GV.magv";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }
    public function xoaUserQuanLyTheoTenTaiKhoa($tentaikhoan)
    {
        $sql = "DELETE FROM userquanly WHERE tentaikhoan='" . $tentaikhoan . "'";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function LayUserQuanTriTheoTenTaiKhoan($tentaikhoan)
    {
        $array = [];
        $sql = "SELECT * FROM userquanly WHERE tentaikhoan='$tentaikhoan'";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }

    public function suaUserQuanTriTheoTenTaiKhoan($tentaikhoan, $matkhau)
    {
        $sql = "UPDATE userquanly SET matkhau='$matkhau' WHERE tentaikhoan ='$tentaikhoan'";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }
    public function themUserQuanTri($tentaikhoan,$matkhau,$magv)
    {
        $sql = "INSERT INTO userquanly(tentaikhoan, matkhau, magv) VALUES ('$tentaikhoan','$matkhau','$magv')";
        try {
            if (mysqli_query($this->conn, $sql)) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }
}
