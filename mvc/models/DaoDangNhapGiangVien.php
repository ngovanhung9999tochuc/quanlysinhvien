<?php
class DaoDangNhapGiangVien extends DB
{
    public function dangNhap($user, $pass)
    {
        $result = "";
        $sql = "SELECT * FROM usergiangvien WHERE tentaikhoan='$user'";
        $truyvan = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($truyvan)) {
            if ($user == $row['tentaikhoan']) {
                if ($pass == $row['matkhau']) {
                    $_SESSION['user'] = $user;
                    $_SESSION['magv'] = $row['magv'];
                    header("Location: " . $this->getLocalhost() . "HeThongGiangVien");
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
    public function xoaUserGiangVien($magv)
    {
        $sql = "DELETE FROM usergiangvien WHERE magv='" . $magv . "'";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function layDanhSachUserGiangVienVaTenNguoiDung()
    {
        $array = [];
        $sql = "SELECT UQL.tentaikhoan,UQL.matkhau,UQL.magv,GV.tengv FROM usergiangvien AS UQL JOIN giangvien AS GV ON UQL.magv=GV.magv";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }

    public function xoaUserGiangVienTheoTenTaiKhoa($tentaikhoan)
    {
        $sql = "DELETE FROM usergiangvien WHERE tentaikhoan='" . $tentaikhoan . "'";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function LayUserGiangVienTheoTenTaiKhoan($tentaikhoan)
    {
        $array = [];
        $sql = "SELECT * FROM usergiangvien WHERE tentaikhoan='$tentaikhoan'";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }

    public function suaUserGiangVienTheoTenTaiKhoan($tentaikhoan, $matkhau)
    {
        $sql = "UPDATE usergiangvien SET matkhau='$matkhau' WHERE tentaikhoan ='$tentaikhoan'";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function themUserGiangVien($tentaikhoan,$matkhau,$magv)
    {
        $sql = "INSERT INTO usergiangvien(tentaikhoan, matkhau, magv) VALUES ('$tentaikhoan','$matkhau','$magv')";
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
