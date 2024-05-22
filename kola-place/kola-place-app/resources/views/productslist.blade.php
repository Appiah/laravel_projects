<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products List</title>
</head>
<body>
    <center>
    <div style="border; 3px solid black;">
        <h2>All Products</h2>
        @foreach($products as $product)
            <div style="width: 300px; height: 400px; background-color: #cdcdcd; padding: 5px; margin: 5px;">
                <div>
                    <input type="checkbox" name="add_product" id="add_product" value="add" style="position: absolute;"/>
                    <br>
                    <img src="" style="width: 260px; height: 260px; border: 1px;"/>
                    <br>
                    <div>
                        <button type="button" class="btn">Add to Cart</button>
                        <button type="button" class="btn">Add to wishlist</button>
                    </div>
                </div>
                <br>
                <div>
                    <b>{{ $product['item_name'] }}</b>
                    <p />
                     {{ $product['description'] }}</div>

                <!-- 

                    id : {{ $product['id'] }}
                    item_code : {{  $product['item_code'] }}
                    language_code : {{ $product['language_code'] }}
                    item_name : {{ $product['item_name'] }}
                    description : {{ $product['description'] }}
                    currency_id : {{ $product['currency_id'] }}
                    unit_price : {{ $product['unit_price'] }}
                    active : {{ $product['active'] }}
                    deleted :  {{ $product['deleted'] }}
                    blocked : {{ $product['blocked'] }}
                    reported : {{ $product['reported'] }}
                
                -->
                <p />
                <div>
                    <button type="button" class="btn">Buy Now ( GHS {{ $product['unit_price'] }}.00 )</button>
                </div>
            </div>
           
        @endforeach
        </div>
    </center>
</body>
</html>