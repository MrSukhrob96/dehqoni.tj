<template>
    <div class="product product-7 text-center">
        <figure class="product-media">
            <span class="product-label label-new">New</span>
            <router-link :to="{ name: 'product', params: { id: 1 } }" class="">
                <img
                    :src="`${host}assets/images/products/product-4.jpg`"
                    alt="Product image"
                    class="product-image"
                />
            </router-link>

            <div class="product-action-vertical">
                <router-link
                    :to="{}"
                    class="btn-product-icon btn-wishlist btn-expandable"
                    ><span>add to wishlist</span></router-link
                >
            </div>

            <div class="product-action">
                <router-link
                    :to="{ name: 'product', params: { id: 1 } }"
                    class="btn-product btn-cart"
                >
                    <span>Show more</span>
                </router-link>
            </div>
        </figure>
        <div class="product-body">
            <div class="product-cat">
                <router-link :to="{ name: 'product', params: { id: 1 } }"
                    >Women</router-link
                >
            </div>
            <h3 class="product-title">
                <router-link :to="{ name: 'product', params: { id: 1 } }"
                    >Brown paperbag waist pencil skirt</router-link
                >
            </h3>
            <div class="product-price">
                $60.00
            </div>
            <div class="ratings-container">
                <div class="ratings">
                    <div class="ratings-val" style="width: 20%;"></div>
                </div>
                <span class="ratings-text">( 2 Reviews )</span>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    name: "ProductComponent",
    props: {
        product: {
            type: Object
        }
    }
};
</script>
