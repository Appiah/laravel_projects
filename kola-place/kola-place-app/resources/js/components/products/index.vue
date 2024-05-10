<script setup>
import { onMounted, ref } from "vue";

let products = ref([])

onMounted(async()=>{
    getProducts()
})

const getProducts = async () => {
    let response = await axios.get("/api/productsOnly")
    console.log('product response from DB in "index.vue" ', response)
    products.value = response.data.products
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
                <a class="btn btn-secondary">
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
                <p>Product Name</p>
                <p>Product Description</p>
                <p>Currency | Product Price</p>
                
            </div>

            <!-- item 1 -->
            <div class="table--items" v-for="item in products" :key="item.id" v-if="products.length > 0">
                <a href="#" class="table--items--transactionId">{{item.id}}</a>
                <p>{{item.item_name}}</p>
                <p>#{{item.description}}</p>
                <p>{{item.currency_id}}</p>
                <p>{{item.unit_price}}</p>
            </div>
            <div class="table--items" v-else>
                <p>Product not found</p>
            </div>
        </div>
        
    </div>
    </div>
</template>