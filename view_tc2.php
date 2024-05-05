<?php
include_once 'model/pdo.php';
$sql = "SELECT * FROM movie WHERE new = 'new'";
$sql1 = "SELECT * FROM movie WHERE trangthai = 'đang chiếu'";
$sql2 = "SELECT * FROM movie WHERE trangthai = 'sắp chiếu'";
$sql3 = "SELECT * FROM movie ORDER BY id DESC LIMIT 5";
$kq = getdb_All($sql);
$kq1 = getdb_All($sql1);
$kq2 = getdb_All($sql2);
$kq3 = getdb_All($sql3);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="icon" href="image/logo01.png">
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" />
  <link rel="stylesheet" href="css.css" />
</head>

<body>
  <header>
    <a href="" class="logo"><i class="fa fa-home" aria-hidden="true"></i> iMovies</a>
    <ul class="nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">Adults</a></li>
      <li><a href="#">Kids</a></li>
      <li><a href="#">Trend</a></li>
      <li><a href="#">My List</a></li>
    </ul>
    <div class="search">
      <!-- <p>Đăng nhập</p> -->
      <img width="35" height="35" src="image/person.webp" alt="">
      <input type="text" placeholder="Search..." />
      <i class="fa fa-search"></i>
    </div>
  </header>
  <div class="banner">
    <div class="content bg-01 active">
      <!-- <img src="image/logo01.png" alt="" class="movie_title" />
      <h4>
        <span>2023</span><span><i>19+</i></span><span>12h 43min</span><span>Romance</span>
      </h4>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum
        necessitatibus placeat libero similique molestiae repellendus alias
        eum facere natus impedit soluta quae quibusdam, iste et beatae,
        commodi animi assumenda. Ipsum.
      </p> -->
    </div>
    <?php
    foreach ($kq as $key => $value) {
      extract($value); ?>
      <div class="content <?= $tilte ?>">
      </div>
    <?php }
    ?>
    <div class="carousel_box">
      <div class="carousel">
        <!-- <div class="carousel-item" onclick="changeBg('bg-04.webp', 'bg-01', 'trailer01.mp4')">
          <img src="image/avata_04.webp" alt="" />
        </div> -->
        <?php
        foreach ($kq as $k) {
          extract($k); ?>
          <div class="carousel-item" onclick="changeBg('<?= $bg ?>', '<?= $tilte ?>', '<?= $trailer ?>')">
            <img src="image/<?= $image ?>" alt="" />
          </div>
        <?php }
        ?>

      </div>
    </div>
    <a href="#" class="play"><i class="fa fa-play-circle"></i>Watch Trailer</a>
    <ul class="sci">
      <li>
        <a href=""><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
      </li>
      <li>
        <a href=""><i class="fa-brands fa-youtube" aria-hidden="true"></i></a>
      </li>
      <li>
        <a href=""><i class="fa-brands fa-twitter" aria-hidden="true"></i></a>
      </li>
    </ul>
  </div>
  <div class="trailer">
    <video controls autoplay muted>
      <source src="image/trailer-04.mp4">
    </video>
    <img class="close" src="image/close.png" alt="" onClick="toggleVideo()" />
  </div>
  <div class="main">
    <div class="box-mat">
      <h6>PHIM</h6>
      <ul>
        <li class="hidden" onclick="hiden()">Đang chiếu</li>
        <li class="presently" onclick="hiden()">Sắp chiếu</li>
      </ul>
    </div>
    <div class="khoi">
      <div class="khoi1">
        <?php
        foreach ($kq2 as $k2) {
          extract($k2); ?>
          <div class="item">
            <div class="image"><img src="image/<?= $image ?>" alt="" /></div>
            <div class="name"><?= $name ?></div>
          </div>
          <div class="item">
            <div class="image"><img src="image/<?= $image ?>" alt="" /></div>
            <div class="name"><?= $name ?></div>
          </div>
        <?php }
        ?>
      </div>
      <div class="khoi2">
        <?php
        foreach ($kq1 as $k1) {
          extract($k1); ?>
          <div class="item">
            <div class="image"><img src="image/<?= $image ?>" alt="" /></div>
            <div class="name"><?= $name ?></div>
          </div>
        <?php }
        ?>
      </div>
    </div>
    <div class="button">
      <button>Xem thêm <i class="fa-solid fa-angle-right"></i></button>
    </div>
    <hr class="hr-main">
    <div class="box-review">
      <h6 class="mb">GÓC REVIEW</h6>
      <div class="review">
        <iframe width="850" height="415" src="https://www.youtube.com/embed/BbNFAWhKwSA?si=2YpMnKSxqaIQHebj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <div class="top-movie">
          <h5>TOP 8 MOVIE</h5>
          <?php
          foreach ($kq3 as $k3) {
            extract($k3); ?>
            <p> <img src="image/<?= $image ?>" alt=""> <span><small><?= $name ?></small><small><i style="color: orange" class="fa fa-star"></i> 4.5 <i><?= $max_old ?>+</i></small><small><?= $year . ' | ' . $show_time . ' | ' .  $category ?></small></span></p>
          <?php }
          ?>
          <p></p>
        </div>
      </div>
    </div>
  </div>
  <footer>
    <div class="footer">
      <div class="box-footer">
        <h6>GIỚI THIỆU</h6>
        <p>Về Chúng Tôi</p>
        <p>Thoả Thuận Sử Dụng</p>
        <p>Quy Chế Hoạt Động</p>
        <p>Chính Sách Bảo Mật</p>
      </div>
      <div class="box-footer">
        <h6>GIỚI THIỆU</h6>
        <p>Thể Loại Phim</p>
        <p>Bình Luận Phim</p>
        <p>Phim Hay Tháng</p>
      </div>
      <div class="box-footer">
        <h6>GIỚI THIỆU</h6>
        <p>Góp Ý</p>
        <p>Sale & Services</p>
        <p>Rạp / Giá Vé</p>
        <p>Tuyển Dụng</p>
        <p>FAQ</p>
      </div>
      <div class="box-footer">
        <p><img width="100" src="image/logo02.png" alt=""></p>
        <p><a href=""><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a><a href=""><i class="fa-brands fa-youtube" aria-hidden="true"></i></a> <a href=""><i class="fa-brands fa-twitter" aria-hidden="true"></i></a></p>
        <p><img width="150" src="image/glx_trade.webp" alt=""></p>
      </div>
    </div>
    <hr class="hr-footer">
    <h5 style="color:white">© Dự án được thực hiện bởi (Nguyễn Tiến Đạt, Trần Duy Khánh, Trần Đức Đại)</h5>
  </footer>
  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".carousel").carousel();
    });

    function toggleVideo() {
      const trailer = document.querySelector(".trailer");
      const video = trailer.querySelector("video");
      video.pause();
      trailer.classList.toggle("active");
    }

    function changeBg(bg, title, trailer) {
      const banner = document.querySelector(".banner");
      const contents = banner.querySelectorAll(".content");
      banner.style.background = `url("image/${bg}")`;
      banner.style.backgroundSize = "cover";
      banner.style.backgroundPosition = "center";

      contents.forEach((content) => {
        content.classList.remove("active");
        if (content.classList.contains(title)) {
          content.classList.add("active");
        }
      });

      const video = document.querySelector(".trailer video");
      video.src = `image/${trailer}`;
      video.play();

      const trailerContainer = document.querySelector(".trailer");
      trailerContainer.classList.remove("active");
      // Xóa dòng dưới để ngăn trailer đóng khi thay đổi hình ảnh
      // trailerContainer.classList.add("active");
    }
    const watchTrailerButton = document.querySelector(".play");
    watchTrailerButton.addEventListener("click", toggleVideo);


    function hiden() {
      var hidden = document.querySelector(".khoi1");
      var present = document.querySelector(".khoi2");
      var presenty = document.querySelector(".presently");
      var hiden = document.querySelector(".hidden");
      if (hidden.style.opacity === "0") {
        hidden.style.opacity = "1";
        present.style.opacity = "0";
        hiden.style.color = "#ff3700";
        presenty.style.color = "black";
      } else {
        hidden.style.opacity = "0";
        present.style.opacity = "1";
        hiden.style.color = "black";
        presenty.style.color = "#ff3700";
      }
    }
  </script>

</body>

</html>