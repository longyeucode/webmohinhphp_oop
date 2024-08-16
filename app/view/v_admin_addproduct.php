<div class="main-content">
                <h3 class="title-page">
                    Thêm sản phẩm
                </h3>
<form class="addPro" action="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputFile">Ảnh sản phẩm</label>
                        <div class="custom-file">
                            <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Tên sản phẩm:</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nhập tên sả phẩm">
                    </div>
                    <div class="form-group">
                        <label for="categories">Danh mục:</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Chọn danh mục</option>
                            <option value="1">1-Gundam china</option>
                            <option value="2">2-gundam fake</option>
                            <option value="3">3-gundam real</option>
                          </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="price_sale">Giá sản phẩm:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" name="price" id="price_sale" class="form-control"
                                placeholder="Giá khuyến mãi">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Số lượng sản phẩm:</label>
                        <input type="text" class="form-control" name="soluong" id="name" >
                    </div>
                    <div class="form-group">
                        <label>Mô tả chi tiết</label>
                        <textarea class="form-control" name="description" rows="3"
                            placeholder="Nhập 1 đoạn mô tả ngắn về sản phẩm" style="height: 78px;"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>