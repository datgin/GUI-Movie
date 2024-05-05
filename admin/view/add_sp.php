<main class="mb">
    <div class="box_conten mt">
        <h2 class="mb">THÊM SẢN PHẨM</h2>
        <form action="" method="post">
            <div class="name mb">
                <label for="name">Tên sản phẩm</label>
                <input type="text" name="" id="name" placeholder="Mời nhập tên" />
            </div>
            <div class="price mb">
                <label for="price">Giá sản phẩm</label>
                <input type="number" name="price" id="price" placeholder="Mời nhập giá" />
            </div>
            <div class="type mb">
                <label for="">Loại sản phẩm</label>
                <select name="">
                    <option hidden value="">--- Chọn danh mục ---</option>
                    <option value="">Thịt chó</option>
                    <option value="">Thịt cầy</option>
                </select>
            </div>
            <div class="description mb">
                <label for="description">Mô tả</label>
                <textarea name="description" id="description" cols="30" rows="6" placeholder="Mời nhập mô tả"></textarea>
            </div>
            <div class="image mb">
                <label for="file-upload" class="custom-file-upload">
                    <i class="fa fa-cloud-upload"></i> Ảnh
                </label>
                <input id="file-upload" type="file" />
            </div>
            <button>Thực hiện</button>
        </form>
    </div>
</main>