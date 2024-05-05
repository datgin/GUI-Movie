<?php
include_once 'model/pdo.php';
function show_chair()
{
    $sql = "SELECT * FROM chair WHERE 1";
    return getdb_All($sql);
}
$kq = show_chair();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    .mb {
        margin-bottom: 10px;
    }

    .item {
        width: 200px;
        display: grid;
        grid-template-columns: repeat(8, 1fr);
        grid-gap: 5px;
    }

    .item button {
        width: 25px;
        height: 25px;
        border-radius: 5px;
        border: 1px solid rgba(0, 0, 0, 0.5);
    }
</style>

<body>
    <h1 class="mb">Ghe ngoi</h1>
    <div class="item">
        <?php
        foreach ($kq as $value) {
            extract($value);
            $status = $trang_thai;
            $border_color = ($status == "trống") ? "white" : "gray";
        ?>
            <div class="khoi">
                <button style="background-color: <?= $border_color; ?>" onclick="handleClick()" data-ma-ghe="<?= $ma_ghe ?>" data-status="<?= $status ?>"><?= ($status !== "trống") ? $ma_ghe : "" ?></button>
            </div>

        <?php  }

        ?>
    </div>
    <h5 id="h1"></h5>
    <script>
        var selectedCount = 0;
        document.querySelectorAll("button").forEach(function(button) {
            button.addEventListener("click", function() {
                var ma_ghe = this.getAttribute("data-ma-ghe");
                var status = this.getAttribute("data-status");
                var backgroundColor = this.style.backgroundColor;
                if (backgroundColor === "gray") {
                    return;
                }
                if (button.textContent === "") {
                    if (selectedCount < 3) {
                        button.textContent = ma_ghe;
                        button.style.backgroundColor = "red";
                        selectedCount++;
                    } else {
                        alert("Bạn chỉ được chọn tối đa 3 ghế");
                    }
                } else {
                    button.textContent = "";
                    button.style.backgroundColor = "white";
                    selectedCount--;
                }
                document.getElementById("h1").innerHTML = selectedCount;
            });
        });
    </script>
</body>

</html>