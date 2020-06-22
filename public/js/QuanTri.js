(function() {
    const arrColor = ["chartreuse", "tomato", "yellowgreen", "dodgerblue", "lightsalmon", "orange"];
    const listBar = document.querySelectorAll(".bar");
    listBar.forEach((value, index) => {
        value.style.background = arrColor[index];
    });
    const btnSinhVien = document.getElementById("btnSinhVien");
    const menuChildSinhvien = document.getElementById("menu-child-sinhvien");
    btnSinhVien.addEventListener('click', function() {
        let res = '<a href="SinhVien"><li>XEM HỒ SƠ SINH VIÊN</li></a><a href="SinhVien/ThemSinhVien"><li>THÊM SINH VIÊN</li></a>';
        menuChildSinhvien.innerHTML = res;
        //lam moi menu
    });
    const btnGiangVien = document.getElementById("btnGiangVien");
    const menuChildGiangVien = document.getElementById("menu-child-giangvien");
    btnGiangVien.addEventListener('click', function() {
        let res = '<a href="GiangVien"><li>XEM HỒ SƠ GIẢNG VIÊN</li></a><a href="GiangVien/ThemGiangVien"><li>THÊM GIẢNG VIÊN</li></a>';
        menuChildGiangVien.innerHTML = res;
        //lam moi menu
    });
    const btnNguoiDung = document.getElementById("btnNguoidung");
    const menuChildnguoidung = document.getElementById("menu-child-nguoidung");
    btnNguoiDung.addEventListener('click', function() {
        let res = '<a href="NguoiDung"><li>QUẢN TRỊ</li></a><a href="NguoiDung/XemUserGiangVien"><li>GIẢNG VIÊN</li></a><a href="NguoiDung/XemUserSinhVien"><li>SINH VIÊN</li></a>';
        menuChildnguoidung.innerHTML = res;
        //lam moi menu
    });

    const btnDiem = document.getElementById("btnDiem");
    const menuChildDiem = document.getElementById("menu-child-diem");
    btnDiem.addEventListener('click', function() {
        let res = '<a href="Diem"><li>XEM ĐIỂM</li></a><a href="Diem/ThemDiem"><li>THÊM ĐIỂM</li></a>';
        menuChildDiem.innerHTML = res;
        //lam moi menu
    });
})();