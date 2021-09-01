<template>
    <div class="page-content">
        <div class="container">
            <div class="row">
                <filter-component />
                <div class="col-lg-9">
                    <sort-products-component />
                    <slot />
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import FilterComponent from "./filter-component.vue";
import SortProductsComponent from "./sort-component.vue";
import PaginateComponent from "../../pagination/index.vue";
import ProductsComponent from "../../products/products-component.vue";

export default {
    components: {
        FilterComponent,
        SortProductsComponent,
        PaginateComponent,
        ProductsComponent
    }
};
</script>
