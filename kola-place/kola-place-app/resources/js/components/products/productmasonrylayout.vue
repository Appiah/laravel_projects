<script lang="ts">
    import MasonryWall from '@yeger/vue-masonry-wall'
    import { defineComponent } from 'vue'
    
    //const main = useMainStore()

    export default defineComponent({
      components: {
        MasonryWall,
      },
      data() {
        return {
          items: [50, 75, 75, 100, 50, 50, 75, 150, 125, 175, 50, 100, 125],
          imgs: [
          "https://picsum.photos/seed/picsum/200/300",
          "https://picsum.photos/seed/picsum/200/300",
          "https://picsum.photos/seed/picsum/200/300",
          "https://picsum.photos/seed/picsum/200/300",
          "https://picsum.photos/seed/picsum/200/300",
          "https://picsum.photos/seed/picsum/200/300",
          "https://picsum.photos/seed/picsum/200/300",
          "https://picsum.photos/seed/picsum/200/300",
          "https://picsum.photos/seed/picsum/200/300",
          "https://picsum.photos/seed/picsum/200/300",
          "https://picsum.photos/seed/picsum/200/300",
          "https://picsum.photos/seed/picsum/200/300",
          "https://picsum.photos/seed/picsum/200/300",
          "https://picsum.photos/seed/picsum/200/300"
          ],
        }
      },
    })


    const handleAddToCartClicked = function(){
        alert("Added to Cart");
    }

    </script>
    
    <template>
      <!--<MasonryWall :items="items" :ssr-columns="1" :column-width="100" :gap="0">
        <template #default="{ item, index }">
            
            <div 
                id="app_products_masonrywall"
                :style="{ height: `${item}px` }"
                class="card flex items-center justify-center masonry_tile"
                >
                <img src="https://picsum.photos/seed/picsum/200/300" :style="{ height: `${item*2.7}px`, width: `${1.5*item}px`}"/>
                {{ index }}

                <button class="primary" @click="handleAddToCartClicked">Add to Cart</button>

            </div>-->
        
            <h2 style="margin: 20px 0px 0px 20px; position: relative;">Products</h2>

            <div id="app_products_masonrywall" class="container">
            <figure>
                <img src="https://assets.codepen.io/12005/windmill.jpg" alt="A windmill" />
                <div class="desc_txt" id="product_details_name">Product Name 001</div>
                <div class="desc_txt" id="product_details_price">$53.00</div>
                <div class="desc_txt" id="product_details_description">Product Description 001</div>
                <figcaption><button @click="handleAddToCartClicked()">Add to cart</button></figcaption>
            </figure>
            <figure>
                <img src="https://assets.codepen.io/12005/suspension-bridge.jpg" alt="The Clifton Suspension Bridge" />
                <div class="desc_txt" id="product_details_name">Product Name 002</div>
                <div class="desc_txt" id="product_details_price">$53.00</div>
                <div class="desc_txt" id="product_details_description">Product Description 002</div>
                <figcaption><button @click="handleAddToCartClicked()">Add to cart</button></figcaption>
            </figure>
            <figure>
                <img src="https://assets.codepen.io/12005/sunset.jpg" alt="Sunset and boats" />
                <div class="desc_txt" id="product_details_name">Product Name 003</div>
                <div class="desc_txt" id="product_details_price">$53.00</div>
                <div class="desc_txt" id="product_details_description">Product Description 003</div>
                <figcaption><button @click="handleAddToCartClicked()">Add to cart</button></figcaption>
            </figure>
            <figure>
                <img src="https://assets.codepen.io/12005/snowy.jpg" alt="a river in the snow" />
                <div class="desc_txt" id="product_details_name">Product Name 004</div>
                <div class="desc_txt" id="product_details_price">$53.00</div>
                <div class="desc_txt" id="product_details_description">Product Description 004</div>
                <figcaption><button @click="handleAddToCartClicked()">Add to cart</button></figcaption>
            </figure>
            <figure>
                <img src="https://assets.codepen.io/12005/bristol-balloons1.jpg" alt="a single checked balloon" />
                <div class="desc_txt" id="product_details_name">Product Name 005</div>
                <div class="desc_txt" id="product_details_price">$53.00</div>
                <div class="desc_txt" id="product_details_description">Product Description 005</div>
                <figcaption><button @click="handleAddToCartClicked()">Add to cart</button></figcaption>
            </figure>
            <figure>
                <img src="https://assets.codepen.io/12005/dog-balloon.jpg" alt="a hot air balloon shaped like a dog" />
                <div class="desc_txt" id="product_details_name">Product Name 006</div>
                <div class="desc_txt" id="product_details_price">$53.00</div>
                <div class="desc_txt" id="product_details_description">Product Description 006</div>
                <figcaption><button @click="handleAddToCartClicked()">Add to cart</button></figcaption>
            </figure>
            <figure>
                <img src="https://assets.codepen.io/12005/abq-balloons.jpg" alt="View from a hot air balloon of other balloons" />
                <div class="desc_txt" id="product_details_name">Product Name 007</div>
                <div class="desc_txt" id="product_details_price">$53.00</div>
                <div class="desc_txt" id="product_details_description">Product Description 007</div>
                <figcaption><button @click="handleAddToCartClicked()">Add to cart</button></figcaption>
            </figure>
            <figure>
                <img src="https://assets.codepen.io/12005/disney-balloon.jpg" alt="a balloon fairground ride" />
                <div class="desc_txt" id="product_details_name">Product Name 008</div>
                <div class="desc_txt" id="product_details_price">$53.00</div>
                <div class="desc_txt" id="product_details_description">Product Description 008</div>
                <figcaption><button @click="handleAddToCartClicked()">Add to cart</button></figcaption>
            </figure>
            <figure>
                <img src="https://assets.codepen.io/12005/bristol-harbor.jpg" alt="sunrise over a harbor" />
                <div class="desc_txt" id="product_details_name">Product Name 009</div>
                <div class="desc_txt" id="product_details_price">$53.00</div>
                <div class="desc_txt" id="product_details_description">Product Description 009</div>
                <figcaption><button @click="handleAddToCartClicked()">Add to cart</button></figcaption>
            </figure>
            <figure>
                <img src="https://assets.codepen.io/12005/bristol-balloons2.jpg" alt="three hot air balloons in a blue sky" />
                <div class="desc_txt" id="product_details_name">Product Name 010</div>
                <div class="desc_txt" id="product_details_price">$53.00</div>
                <div class="desc_txt" id="product_details_description">Product Description 010</div>
                <figcaption><button @click="handleAddToCartClicked()">Add to cart</button></figcaption>
            </figure>
            <figure>
            <img src="https://assets.codepen.io/12005/toronto.jpg" alt="the Toronto light up sign at night" />
            <div class="desc_txt" id="product_details_name">Product Name 011</div>
                <div class="desc_txt" id="product_details_price">$53.00</div>
                <div class="desc_txt" id="product_details_description">Product Description 011</div>
                <figcaption><a href="#">Add to cart</a></figcaption>
            </figure>
            </div>

            <h2 style="margin: 20px 0px 0px 20px; position: relative; text-align: center;">Products</h2>

        <!--</template>
      </MasonryWall>-->
    </template>


    <style>
    body {
    background-color: #67b3f0;
    font: 1.1em Arial, Helvetica, sans-serif;
  }
  
  img {
    max-width: 100%;
    display: block;
  }
  
  figure {
    margin: 0;
    display: grid;
    grid-template-rows: 1fr auto;
    margin-bottom: 10px;
    break-inside: avoid;
  }
  
  figure > img {
    grid-row: 1 / -1;
    grid-column: 1;
  }
  
  figure a {
    color: black;
    text-decoration: none;
  }
  
  figcaption {
    grid-row: 2;
    grid-column: 1;
    background-color: rgba(255,255,255,.5);
    padding: .2em .5em;
    justify-self: start;
  }
  
  .container {
    column-count: 4;
    column-gap: 10px;
  }
    </style>
    
