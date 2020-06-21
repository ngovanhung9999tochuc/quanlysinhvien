(function() {
    const arrColor = ["chartreuse", "tomato", "yellowgreen", "dodgerblue", "lightsalmon", "orange"];
    const listBar = document.querySelectorAll(".bar");
    listBar.forEach((value, index) => {
        value.style.background = arrColor[index];
    });
    const btnSinhVien = document.getElementById("btnSinhVien");
    btnSinhVien.addEventListener('click', function() {
        const menuChildSinhvien = document.getElementById("menu-child-sinhvien");
        let res = '<a href="SinhVien"><li>xem sinh viên</li></a><a href="#"><li>thêm sinh viên</li></a>';
        menuChildSinhvien.innerHTML = res;
    });
})();