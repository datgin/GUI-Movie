<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <section>
        <form class="form_dk" action="" method="post">
            <h1>Đăng nhập</h1>
            <div class="error">
                <il>
                    <?= (isset($error['email'])) ? '<li>' . $error['email'] . '</li>' : '' ?>
                    <?= (isset($error['password'])) ? '<li>' . $error['password'] . '</li>' : '' ?>
                </il>
            </div>
            <div class="input_box">
                <input type="text" name="email" id="email" />
                <label for="email">Email</label>
            </div>
            <div class="input_box">
                <input type="password" name="password" id="password" />
                <label for="password">Password</label>
            </div>
            <div class="forget mb">
                <label for=""><input type="checkbox" />Lưu mật khẩu</label>
                <a href="">Quên mật khẩu</a>
            </div>
            <button name="btn" value="btn">Đăng nhập</button>
            <div class="register mt">
                <p>Bạn chưa có tài khoản? <a href="?act=register">Đăng ký</a></p>
            </div>
        </form>
    </section>
</body>

</html>
