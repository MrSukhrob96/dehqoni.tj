<template>
    <div class="blog-posts">
        <div class="container">
            <carousel
                :margin="20"
                :responsive="{
                    0: { items: 1 },
                    270: { items: 2 },
                    520: { items: 2 },
                    768: { items: 3 },
                    992: { items: 4 }
                }"
                :autoplay="true"
                :nav="false"
            >
                <article
                    class="entry"
                    v-for="product in products"
                    :key="product.id"
                >
                    <figure class="entry-media">
                        <router-link
                            :to="{ name: 'product', params: { id: 1 } }"
                        >
                            <img
                                :src="
                                    `${host}assets/images/demos/demo-10/blog/post-1.jpg`
                                "
                                alt="image desc"
                            />
                        </router-link>
                    </figure>
                    <div class="entry-body text-center">
                        <div class="entry-meta">
                            <router-link
                                :to="{ name: 'product', params: { id: 1 } }"
                                >Nov 22, 2018</router-link
                            >, 0 Comments
                        </div>
                        <h3 class="entry-title">
                            <router-link to=""
                                >Sed adipiscing ornare.</router-link
                            >
                        </h3>
                        <div class="entry-content">
                            <p>
                                Phasellus hendrerit. Pellentesque aliquet nibh
                                nec urna. In nisi neque, aliquet vel, dapibus
                                id, mattis vel, nisi.
                            </p>
                            <router-link to="" class="read-more"
                                >READ MORE</router-link
                            >
                        </div>
                    </div>
                </article>
            </carousel>
        </div>
    </div>
</template>
<script>
import carousel from "vue-owl-carousel";
export default {
    components: {
        carousel
    },
    props: {
        products: {
            type: Array,
            required: true
        }
    }
};
</script>
