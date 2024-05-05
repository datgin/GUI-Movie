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


  //show thứ
  var days = ['Chủ nhật', 'Thứ hai', 'Thứ ba', 'Thứ tư', 'Thứ năm', 'Thứ sáu', 'Thứ bảy'];
  var months = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];
  var today = new Date();
  var dateTime = "<span class='today active' id='today' onclick='show_lich(1)'>Hôm nay<br>" + today.getDate() + " / " + months[today.getMonth()] + "</span>";
  for (var i = 1; i <= 6; i++) {
    var nextDay = new Date();
    nextDay.setDate(today.getDate() + i);
    dateTime += "<span class='today' id='today" + i + "' onclick='show_lich(" + (i + 1) + ")'>" + days[nextDay.getDay()] + "<br>" + nextDay.getDate() + " / " + months[nextDay.getMonth()] + "</span>";
  }
  document.getElementById("datetime").innerHTML = dateTime;

  var spans = document.getElementsByTagName("span");
  for (var i = 0; i < spans.length; i++) {
    spans[i].addEventListener("click", function() {
      for (var j = 0; j < spans.length; j++) {
        spans[j].classList.remove("active");
      }
      this.classList.add("active");
    })
  }

  function show_lich(lichNumber) {
    var lichElements = document.getElementsByClassName("time-movie");
    for (var i = 0; i < lichElements.length; i++) {
      lichElements[i].style.display = "none";
    }
    var lichElement = document.getElementById("time-movie" + lichNumber);
    if (lichElement) {
      lichElement.style.display = "block";
    }
  }



  function hiden() {
    var hidden = document.querySelector(".khoi1");
    var present = document.querySelector(".khoi2");
    var presenty = document.querySelector(".presently");
    var hiden = document.querySelector(".hidden");
    if (hidden.style.display === "none") {
      hidden.style.display = "grid";
      present.style.display = "none";
      hiden.style.color = "#ff3700";
      presenty.style.color = "black";
    } else {
      hidden.style.display = "none";
      present.style.display = "grid";
      hiden.style.color = "black";
      presenty.style.color = "#ff3700";
    }
  }



  
</script>

</body>

</html>