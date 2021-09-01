<template>
    <div class="products mb-3">
        <div class="row justify-content-between">
            <div
                class="col-6 col-md-4 col-lg-4 col-xl-3"
                v-for="product in items"
                :key="product.id"
            >
                <product-component :product="product" />
            </div>
        </div>
        <div class="row justify-content-center mt-5">
            <paginate
                v-model="page"
                :page-count="pageCount"
                :page-range="3"
                :margin-pages="1"
                :click-handler="pageChangeHandler"
                :prev-text="'Назад'"
                :next-text="'Вперёд'"
                :container-class="'pagination'"
                :page-class="'page-item page-link'"
            >
            </paginate>
        </div>
    </div>
</template>

<script>
import ProductComponent from "./product-component.vue";
import paginationMixin from "./../../mixins/pagination.mixin.js";

export default {
    components: {
        ProductComponent
    },
    props: {
        products: {
            type: Array,
            required: true
        }
    },
    mixins: [paginationMixin],
    methods: {
        getProducts() {
            this.products = [
                {},
                {},
                {},
                {},
                {},
                {},
                {},
                {},
                {},
                {},
                {},
                {},
                {},
                {},
                {}
            ];

            this.setupPagination(this.products);
        }
    },
    async mounted() {
        this.getProducts();
    }
};
</script>
