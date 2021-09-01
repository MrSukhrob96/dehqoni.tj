<template>
    <header
        class="header header-intro-clearance header-4 mb-4"
        style="box-shadow: 0 1px 15px 0px rgba(0,0,0,0.07)"
    >
        <header-top-component />
        <header-bottom-component />
    </header>
</template>

<script>
import HeaderTopComponent from "./_header__top.vue";
import HeaderBottomComponent from "./_header__bottom.vue";

export default {
    components: {
        HeaderTopComponent,
        HeaderBottomComponent
    }
};
</script>
