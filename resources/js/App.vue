<template>
    <div class="page-wrapper">
        <header-component />

        <transition name="view">
            <router-view />
        </transition>
        <footer-component />
        <button id="scroll-top" title="Back to Top">
            <i class="icon-arrow-up"></i>
        </button>
        <div class="mobile-menu-overlay"></div>
        <mobile-menu-panel-component />

        <div class="spinner-warpper" v-if="isLoaded">
            <div class="spinner-component"></div>
        </div>
    </div>
</template>

<script>
import HeaderComponent from "./components/header/index.vue";
import FooterComponent from "./components/footer/index.vue";
import MobileMenuPanelComponent from "./components/panels/mobile-menu-panel.vue";
export default {
    components: {
        HeaderComponent,
        FooterComponent,
        MobileMenuPanelComponent
    },
    data() {
        return {
            isLoaded: true
        };
    },
    mounted() {
        setTimeout(() => {
            this.isLoaded = false;
        }, 1000);
    }
};
</script>

<style>
.view-leave-active {
    transition: opacity 0.5s ease-in-out, transform 0.5s ease;
}

.view-enter-active {
    transition: opacity 0.5s ease-in-out, transform 0.5s ease;
    transition-delay: 0.5s;
}

.view-enter,
.view-leave-to {
    opacity: 0;
}

.view-enter-to,
.view-leave {
    opacity: 1;
}
</style>
