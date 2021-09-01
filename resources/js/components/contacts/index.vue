<template>
    <div class="container" style="background: rgba(0,0,0,0.03)">
        <div class="cta cta-separator mb-5">
            <div class="row">
                <left-contact-item-component />
                <right-contact-item-component />
            </div>
        </div>
    </div>
</template>
<script>
import LeftContactItemComponent from "./_left-item-component.vue";
import RightContactItemComponent from "./_right-item-component.vue";

export default {
    components: {
        LeftContactItemComponent,
        RightContactItemComponent
    }
}
</script>