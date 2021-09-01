<template>
    <main class="main">
        <main-barner-component />
        <div class="mb-5"></div>
        <product-testimorial-component :products="[{}, {}, {}, {}, {}]" />
        <filter-panel-products>
            <products-component :products="[{}, {}, {}, {}, {}]" />
        </filter-panel-products>
        <contact-component />
    </main>
</template>

<script>
import MainBarnerComponent from "./../components/barners/main-barner.vue";
import ProductTestimorialComponent from "./../components/testimorils/products-testimorial.vue";
import FilterPanelProducts from "./../components/panels/filters/index.vue";
import ProductsComponent from "./../components/products/products-component.vue";
import ContactComponent from "./../components/contacts/index.vue";
export default {
    components: {
        MainBarnerComponent,
        ProductTestimorialComponent,
        FilterPanelProducts,
        ProductsComponent,
        ContactComponent
    }
};
</script>
