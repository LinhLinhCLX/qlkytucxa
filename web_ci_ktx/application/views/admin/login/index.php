<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load ->view('admin/head.php'); ?>
</head>
<body class="animsition">
	    <div class="page-wrapper">
            <div class="page-content--bge5">
                <div class="container">
                    <div class="login-wrap">
                        <div class="login-content">
                            <div class="login-logo">
                                <a href="#">
                                    <img src="images/icon/logo.png" alt="CoolAdmin">
                                </a>
                            </div>
                            <div class="login-form">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="au-input au-input--full" type="text" name="email" id="param_username" placeholder="Email" >
                                    </div>
                                    <div class="form-group">
                                        <label>Mật khẩu</label>
                                        <input class="au-input au-input--full" type="password" name="matkhau" id="param_password" placeholder="Mật khẩu">
                                    </div>
                                    <div class="login-checkbox">
                                        <label>
                                            <input type="checkbox" name="remember">Remember Me
                                        </label>
                                        <label>
                                            <a href="#">Forgotten Password?</a>
                                        </label>
                                    </div>
                                    <div style="color:red;font-weight:blod;text-align:center"><?php echo form_error('login');?></div>
                                    <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Đăng Nhập</button>
                                </form>
                                <div class="register-link">
                                    <p>
                                        Don't you have account?
                                        <a href="#">Sign Up Here</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    <?php $this->load ->view('admin/footer.php'); ?>
</body>
</html>
