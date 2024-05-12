<script setup>


import { onMounted, ref } from "vue";

const products = [];// = ref([])

onMounted(async()=>{
    getProducts()
})


const productsData = {
        id: 1,
        name: 'Product Kola Demo',
        item_code: 'INV_8297937423492',
        description: 'behold the description of the product',
        currency_id: '$',
        unit_price: '4700.00',
        quantity: 1
    }

const getProducts = async () => {
    let response = await axios.get("/api/productsOnly")
    console.log('product response from DB in "index.vue" ', response)
    //products.value = response.data.products
    console.log('productsData', productsData);
    
        //temporal improvision to get a few products displayed
        products.push(productsData)
        products.push(productsData)
        products.push(productsData)
        products.push(productsData)
    
    console.log('products', products);
}

const handleAddProductClicked = function(){
    alert("Please create a merchant account or login as a merchant to add a product");
}

</script>

<template>
    <div class="container">
        <div class="product">
        
        <div class="card__header">
            <div>
                <h2 class="product__title">Products</h2>
            </div>
            <div>
                <a class="btn btn-secondary" @click="handleAddProductClicked()">
                    Add Product
                </a>
            </div>
        </div>

        <div class="table card__content">
            <div class="table--filter">
                <span class="table--filter--collapseBtn ">
                    <i class="fas fa-ellipsis-h"></i>
                </span>
                <div class="table--filter--listWrapper">
                    <ul class="table--filter--list">
                        <li>
                            <p class="table--filter--link table--filter--link--active">
                                All
                            </p>
                        </li>
                        <li>
                            <p class="table--filter--link ">
                                Wishlist
                            </p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="table--search">
                <div class="table--search--wrapper">
                    <select class="table--search--select" name="product_search" id="">
                        <option value="">Filter</option>
                    </select>
                </div>
                <div class="relative">
                    <i class="table--search--input--icon fas fa-search "></i>
                    <input class="table--search--input" type="text" placeholder="Search Product">
                </div>
            </div>

            <div class="table--heading">
                <p>ID</p>
                <p>Product Code</p>
                <p>Product Name</p>
                <p>Product Description</p>
                <p>Currency | Product Price</p>
            </div>

            <!-- item 1 -->
            <div class="table--items" v-for="item in products " :key="item.id" v-if="products.length > 0">
                <a href="#" class="table--items--transactionId">{{item.id}}</a>
                <p>{{item.item_code}}</p>
                <p>{{item.name}}</p>
                <p>{{item.description}}</p>
                <p>{{item.currency_id}}{{item.unit_price}}</p>
            </div>
            <div class="table--items" v-else>
                <p>Product not found</p>
            </div>
        </div>
        
    </div>
    </div>
</template>