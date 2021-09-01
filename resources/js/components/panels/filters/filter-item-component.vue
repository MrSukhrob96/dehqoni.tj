<template>
    <div class="widget widget-collapsible">
        <h3 class="widget-title">
            <a
                data-toggle="collapse"
                :href="'#widget-' + widget"
                role="button"
                aria-expanded="true"
                :aria-controls="'widget-' + widget"
            >
                <slot />
            </a>
        </h3>
        <div class="collapse show" :id="'widget-' + widget">
            <div class="widget-body">
                <div class="filter-items filter-items-count">
                    <div
                        class="filter-item"
                        v-for="(item, key) in items"
                        :key="key"
                    >
                        <div class="custom-control custom-checkbox">
                            <input
                                type="checkbox"
                                class="custom-control-input"
                                :id="cat + '-' + key"
                            />
                            <label
                                class="custom-control-label"
                                :for="cat + '-' + key"
                                >Dresses {{ key + 1 }}</label
                            >
                        </div>
                        <span class="item-count">3</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        items: {
            type: Array
        },
        widget: {
            type: Number
        },
        cat: {
            type: String
        }
    }
};
</script>
