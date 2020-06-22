<?php
class DaoDangNhapSinhVien extends DB
{
    public function dangNhap($user, $pass)
    {
        $result = "";
        $sql = "SELECT * FROM usersinhvien WHERE tentaikhoan='$user'";
        $truyvan = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($truyvan)) {
            if ($user == $row['tentaikhoan']) {
                if ($pass == $row['matkhau']) {
                    $_SESSION['user'] = $user;
                    $_SESSION['masv'] = $row['masv'];
                    header("Location: ".$this->getLocalhost()."HeThongSinhVien");
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
    public function xoaUserSinhVien($masv){
        $sql = "DELETE FROM usersinhvien WHERE masv='".$masv."'";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function layDanhSachUserSinhVienVaTenNguoiDung()
    {
        $array = [];
        $sql = "SELECT UQL.tentaikhoan,UQL.matkhau,UQL.masv,SV.tensv FROM usersinhvien AS UQL JOIN sinhvien AS SV ON UQL.masv=SV.masv";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }

    public function xoaUserSinhVienTheoTenTaiKhoa($tentaikhoan)
    {
        $sql = "DELETE FROM usersinhvien WHERE tentaikhoan='" . $tentaikhoan . "'";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function LayUserSinhVienTheoTenTaiKhoan($tentaikhoan)
    {
        $array = [];
        $sql = "SELECT * FROM usersinhvien WHERE tentaikhoan='$tentaikhoan'";
        $result = mysqli_query($this->conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $array[] = $row;
        }
        return $array;
    }

    public function suaUserSinhVienTheoTenTaiKhoan($tentaikhoan, $matkhau)
    {
        $sql = "UPDATE usersinhvien SET matkhau='$matkhau' WHERE tentaikhoan ='$tentaikhoan'";
        if (mysqli_query($this->conn, $sql)) {
            return true;
        } else {
            return false;
        }
    }

    public function themUserSinhVien($tentaikhoan,$matkhau,$masv)
    {
        $sql = "INSERT INTO usersinhvien(tentaikhoan, matkhau, masv) VALUES ('$tentaikhoan','$matkhau','$masv')";
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