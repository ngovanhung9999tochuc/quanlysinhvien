<h3 id="hethong"><a href="Home">HỆ THỐNG</a></h3>
<div class="content-login">

        <div class="top">hung</div>
        <div class="form-login">

            <h3>Đăng Nhập</h3>
            <form method="POST" action="">
                <div class="row">
                    <label for="user">TÀI KHOẢN</label>
                    <input type="text" id="user" name="user" value="<?php echo $data["user"]?>" />
                    <p class="error"><?php echo $data["reserror"]["errorUser"]?></p>
                </div>
                <div class="row">
                    <label for="pass">MẬT KHẨU</label>
                    <input type="password" id="pass" name="pass" value="" />
                    <p class="error"><?php echo $data["reserror"]["errorPass"]?></p>
                </div>
                <div class="row">
                    <input type="submit" name="dangnhap" value="Gửi" />
                </div>
                <p id="res"><?php echo $data["res"]?></p>
            </form>
        </div>
    </div>