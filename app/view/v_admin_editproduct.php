<div class="main-content">
                <h3 class="title-page">
                    Sửa  sản phẩm
                </h3>
<form class="addPro" action="../public/index.php?url=user/productedit/<?=$sp['MaSP']?>" method="POST" enctype="multipart/form-data">
    <input type="hidden" value="">
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh sản phẩm</label>
                        <div class="custom-file">
                            <input type="file" name="photo" class="custom-file-input" id="exampleInputFile" value="" alt="">
                            <img src="<?=$sp['photo']?>" width="10%">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên sản phẩm:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sả phẩm" value="<?=$sp['name']?>">
                    </div>
                   
                    <div class="form-group">
                        <label for="price_sale">Giá sản phẩm:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" name="price" id="price_sale" class="form-control"
                                placeholder="Giá khuyến mãi"  value="<?=$sp['price']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Số lượng sản phẩm:</label>
                        <input type="text" class="form-control" name="soluong" id="name"  value="<?=$sp['soluong']?>" >
                    </div>
                    <div class="form-group">
                        <label>Mô tả chi tiết</label>
                        <textarea class="form-control" name="description" rows="3" 
                            placeholder="Nhập 1 đoạn mô tả ngắn về sản phẩm" style="height: 78px;"><?=$sp['description']?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="MaSP" value="<?=$sp['MaSP']?>">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>