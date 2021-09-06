<template>
    <main class="main">
        <div class="page-content">
            <div class="container">
                <div class="product-details-top">
                    <div class="row">
                        <div class="col-md-7">
                            <div
                                class="product-gallery product-gallery-vertical"
                            >
                                <div class="row">
                                    <figure class="product-main-image">
                                        <img
                                            id="product-zoom"
                                            :src="
                                                `${host}assets/images/products/single/1.jpg`
                                            "
                                            data-zoom-image="assets/images/products/single/1-big.jpg"
                                            alt="product image"
                                        />

                                        <router-link
                                            to="#"
                                            id="btn-product-gallery"
                                            class="btn-product-gallery"
                                        >
                                            <i class="icon-arrows"></i>
                                        </router-link>
                                    </figure>

                                    <div
                                        id="product-zoom-gallery"
                                        class="product-image-gallery"
                                    >
                                        <router-link
                                            class="product-gallery-item"
                                            to=""
                                            data-image="assets/images/products/single/1.jpg"
                                            data-zoom-image="assets/images/products/single/1-big.jpg"
                                        >
                                            <img
                                                :src="
                                                    `${host}assets/images/products/single/1-small.jpg`
                                                "
                                                alt="product side"
                                            />
                                        </router-link>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="product-details">
                                <h1 class="product-title">
                                    Dark yellow lace cut out swing dress
                                </h1>

                                <div class="ratings-container">
                                    <div class="ratings">
                                        <div
                                            class="ratings-val"
                                            style="width: 80%;"
                                        ></div>
                                    </div>
                                    <a
                                        class="ratings-text"
                                        href="#product-review-link"
                                        id="review-link"
                                        >( 2 Reviews )</a
                                    >
                                </div>

                                <div class="product-price">
                                    $84.00
                                </div>

                                <div class="product-content">
                                    <p>
                                        Sed egestas, ante et vulputate volutpat,
                                        eros pede semper est, vitae luctus metus
                                        libero eu augue. Morbi purus libero,
                                        faucibus adipiscing. Sed lectus.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="title text-center mt-5 mb-5">You May Also Like</h2>

                <div
                    class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow"
                    data-toggle="owl"
                    data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
                                },
                                "480": {
                                    "items":2
                                },
                                "768": {
                                    "items":3
                                },
                                "992": {
                                    "items":4
                                },
                                "1200": {
                                    "items":4,
                                    "nav": true,
                                    "dots": false
                                }
                            }
                        }'
                >
                    <div class="product product-7 text-center">
                        <figure class="product-media">
                            <span class="product-label label-out"
                                >Out of Stock</span
                            >
                            <a href="product.html">
                                <img
                                    src="assets/images/products/product-6.jpg'"
                                    alt="Product image"
                                    class="product-image"
                                />
                            </a>

                            <div class="product-action-vertical">
                                <a
                                    href="#"
                                    class="btn-product-icon btn-wishlist btn-expandable"
                                    ><span>add to wishlist</span></a
                                >
                                <a
                                    href="popup/quickView.html"
                                    class="btn-product-icon btn-quickview"
                                    title="Quick view"
                                    ><span>Quick view</span></a
                                >
                                <a
                                    href="#"
                                    class="btn-product-icon btn-compare"
                                    title="Compare"
                                    ><span>Compare</span></a
                                >
                            </div>

                            <div class="product-action">
                                <a href="#" class="btn-product btn-cart"
                                    ><span>add to cart</span></a
                                >
                            </div>
                        </figure>

                        <div class="product-body">
                            <div class="product-cat">
                                <a href="#">Jackets</a>
                            </div>
                            <h3 class="product-title">
                                <a href="product.html"
                                    >Khaki utility boiler jumpsuit</a
                                >
                            </h3>
                            <!-- End .product-title -->
                            <div class="product-price">
                                <span class="out-price">$120.00</span>
                            </div>
                            <div class="ratings-container">
                                <div class="ratings">
                                    <div
                                        class="ratings-val"
                                        style="width: 80%;"
                                    ></div>
                                    <!-- End .ratings-val -->
                                </div>
                                <span class="ratings-text">( 6 Reviews )</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <product-testimorial-component :products="[{}, {}, {}, {}, {}]" />
        </div>
    </main>
</template>
<script>
import ProductTestimorialComponent from "./../components/testimorils/products-testimorial.vue";
export default {
    components: {
        ProductTestimorialComponent
    }
};
</script>
