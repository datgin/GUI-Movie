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
      <h1>Đăng ký</h1>
      <div class="error">
        <il>
          <?=(isset($error['username'])) ? '<li>'.$error['username'].'</li>' : ''?>
          <?=(isset($error['email'])) ? '<li>'.$error['email'].'</li>' : ''?>
          <?=(isset($error['tel'])) ? '<li>'.$error['tel'].'</li>' : ''?>
          <?=(isset($error['password'])) ? '<li>'.$error['password'].'</li>' : ''?>
          <?=(isset($error['enterpass'])) ? '<li>'.$error['enterpass'].'</li>' : ''?>
        </il>
      </div>
      <div class="input_box">
        <input type="text" name="username" id="name" />
        <label for="name">Tên đăng nhập</label>
      </div>
      <div class="input_box">
        <input type="text" name="email" id="email" />
        <label for="email">Email</label>
      </div>
      <div class="input_box">
        <input type="number" name="tel" id="tel" />
        <label for="tel">Số điện thoại</label>
      </div>
      <div class="input_box">
        <input type="password" name="password" id="password" />
        <label for="password">Password</label>
      </div>
      <div class="input_box">
        <input type="password" name="enterpass" id="enterpass" />
        <label for="enterpass">Password</label>
      </div>
      <button name="btn" value="btn">Đăng ký</button>
      <div class="register mt">
        <p>Bạn đã có tài khoản? <a href="?act=login">Đăng nhập</a></p>
      </div>
    </form>
  </section>
</body>

</html>