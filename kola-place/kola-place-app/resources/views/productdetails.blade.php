<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Details</title>
</head>
<body>
    
<div>
    <figure>
        <img src="https://assets.codepen.io/12005/bristol-balloons2.jpg" alt="three hot air balloons in a blue sky" />
        <div class="desc_txt" id="product_details_name">Product Name 010</div>
        <div class="desc_txt" id="product_details_price">$53.00</div>
        <div class="desc_txt" id="product_details_description">Product Description 010</div>
        <figcaption><button @click="handleQuantityUpClicked()">+</button></figcaption> | <figcaption><button @click="handleQuantityDownClicked()">-</button></figcaption>
        <figcaption><button @click="handleAddToCartClicked()">Add to cart</button></figcaption>
        <figcaption><button @click="handleBuyClicked()">Buy</button></figcaption>
    </figure>
</div>

</body>
</html>