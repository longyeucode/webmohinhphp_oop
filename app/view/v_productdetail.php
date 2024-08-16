<style>
    /* Reset CSS */
   

    /* Main container styles */
    .article {
        margin-top:70px;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px;
    }

    /* Product detail container */
    .article__product-detail {
        display: flex;
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        background-color: #fff;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
        overflow: hidden;
    }

    /* Product image styles */
    .article__product-detail-img {
        flex: 1;
        max-width: 300px;
    }

    .article__product-detail-img img:hover {
        border: 2px solid #e44d26;
    }

    /* Product information styles */
    .article__product-infomation {
        flex: 1;
        padding: 20px;
    }

    .article__product-name h3 {
        font-size: 24px;
        margin-bottom: 10px;
        color: #333;
    }

    .article__price-product span {
        display: block;
        font-size: 18px;
        color: #e44d26;
        margin-bottom: 15px;
    }

    .article__description-product p {
        font-size: 16px;
        color: #666;
        margin-bottom: 20px;
    }

    /* Quantity controls styles */
    .article__update-quantity--product {
        margin-bottom: 20px;
        color: gray;
        font-size: 14px;
    }

    /* Add to cart and Buy now buttons styles */
    .article__addtocart-product {
        margin-bottom: 20px;
    }

    .article__addtocart-product a {
        display: inline-block;
        text-decoration: none;
        background-color: #e44d26;
        color: #fff;
        padding: 10px 20px;
        border-radius: 4px;
        margin-right: 10px;
        transition: background-color 0.3s ease, transform 0.3s ease-in-out;
    }

    .article__addtocart-product a:hover {
        background-color: #333;
        transform: scale(1.1);
    }

    .add-to-cart-button {
        border: 2px solid #e44d26;
    }

    .add-to-cart-button:hover {
        border: 2px solid #333;
    }

    /* Endow product styles */
    .article__endow-product {
        display: flex;
        justify-content: space-between;
        margin-bottom: 20px;
    }

    .article__endow-product--item {
        flex: 1;
        text-align: center;
        margin-right: 10px;
    }

    .article__endeow-product--item i {
        font-size: 24px;
        color: #e44d26;
        margin-top: 5px;
    }

    /* Attention product styles */
    .article__attention-product {
        color: gray;
        font-size: 14px;
        text-align: center;
        margin-top: 20px;
    }
</style>

<div class="article">
        <div class="article__product-detail">
            <div class="article__product-detail-img">
                <img src="<?php echo $sp['photo'] ?>" alt="">
            </div>
            <div class="article__product-infomation">
                <div class="article__product-name">
                    <h3><?php echo $sp['name'] ?></h3>
                </div>
                <div class="article__price-product">
                    <span><?php echo $sp['price'] ?> đ / Sản phẩm</span>
                </div>
                <div class="article__description-product">
                    <p><?php echo $sp['description'] ?></p>
                </div>
                    
                <?php
                
                ?>
                <div class="article__update-quantity--product">
                    <div class="quantity-controls">
                        
                        <i style="color:gray;">Chỉnh số lượng tại giỏ hàng</i>

                    </div>
                </div>
                <div class="article__addtocart-product">
                <a href="index.php?url=product/productdetail/<?php echo $sp['MaSP']; ?>">
    <button>Thêm vào giỏ hàng +</button>   
                    
                </div>
                <div class="article__endow-product">
                    <div class="article__endeow-product--item">
                        <p>Đóng gói cẩn thận</p>
                        <i class='bx bxs-package'></i>
                    </div>
                    <div class="article__endeow-product--item">
                        <p>Sản phẩm đạt chuẩn</p>
                        <i class='bx bx-shield-quarter'></i>
                    </div>
                    <div class="article__endeow-product--item">
                        <p>Tư vấn trực tuyến 24/7</p>
                        <i class='bx bx-headphone'></i>
                    </div>
                </div>
                <div class="article__attention-product">
                    <i>Giá chỉ áp dụng khi đặt hàng qua App/Web LGGunDam</i>
                </div>
            </div>
        </div>
</body>
</html>