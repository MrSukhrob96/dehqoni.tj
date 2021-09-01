<template>
    <aside class="col-lg-3 order-lg-first">
        <div class="sidebar sidebar-shop">
            <div class="widget widget-clean">
                <label>Filters:</label>
                <a href="#" class="sidebar-filter-clear">Clean All</a>
            </div>

            <filter-item-component :items="[{}, {}, {}, {}]" :widget="1" cat="category">
                Categories
            </filter-item-component>

            <filter-item-component :items="[{}, {}, {}, {}]" :widget="2" cat="brand">
                Brands
            </filter-item-component>

            <div class="widget widget-collapsible">
                <h3 class="widget-title">
                    <a
                        data-toggle="collapse"
                        href="#widget-5"
                        role="button"
                        aria-expanded="true"
                        aria-controls="widget-5"
                    >
                        Price
                    </a>
                </h3>
                <!-- End .widget-title -->

                <div class="collapse show" id="widget-5">
                    <div class="widget-body">
                        <div class="filter-price">
                            <div class="filter-price-text">
                                Price Range:
                                <span id="filter-price-range"></span>
                            </div>
                            <!-- End .filter-price-text -->

                            <div id="price-slider"></div>
                            <!-- End #price-slider -->
                        </div>
                        <!-- End .filter-price -->
                    </div>
                    <!-- End .widget-body -->
                </div>
                <!-- End .collapse -->
            </div>
            <!-- End .widget -->
        </div>
        <!-- End .sidebar sidebar-shop -->
    </aside>
</template>
<script>
import FilterItemComponent from "./filter-item-component.vue";
export default {
    components: {
        FilterItemComponent
    }
};
</script>
