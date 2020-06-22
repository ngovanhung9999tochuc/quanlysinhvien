(function() {
    const arrColor = ["chartreuse", "tomato", "yellowgreen", "dodgerblue", "lightsalmon", "orange"];
    const listBar = document.querySelectorAll(".bar");
    listBar.forEach((value, index) => {
        value.style.background = arrColor[index];
    });
    const btnSinhVien = document.getElementById("btnSinhVien");
    const menuChildSinhvien = document.getElementById("menu-child-sinhvien");
    btnSinhVien.addEventListener('click', function() {
        let res = '<a href="XemSinhVien"><li>XEM HỒ SƠ SINH VIÊN</li></a>';
        menuChildSinhvien.innerHTML = res;
        //lam moi menu
    });
    const btnGiangVien = document.getElementById("btnGiangVien");
    const menuChildGiangVien = document.getElementById("menu-child-giangvien");
    btnGiangVien.addEventListener('click', function() {
        let res = '<a href="XemGiangVien"><li>XEM HỒ SƠ GIẢNG VIÊN</li></a>';
        menuChildGiangVien.innerHTML = res;
        //lam moi menu
    });
})();