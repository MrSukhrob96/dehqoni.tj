<template>
    <footer class="footer">
        <footer-top-component />
        <footer-bottom-component />
    </footer>
</template>
<script>
import FooterTopComponent from "./footer-top.vue";
import FooterBottomComponent from "./footer-bottom.vue";

export default {
    components: {
        FooterTopComponent,
        FooterBottomComponent
    }
};
</script>
