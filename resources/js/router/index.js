import Vue from "vue";
import VueRouter from "vue-router";
import IndexPage from "../pages/IndexPage.vue";
import LoginPage from "../pages/LoginPage.vue";
import RegisterPage from "../pages/RegisterPage.vue";
import ProductPage from "../pages/ProductPage.vue";
import ProfilePage from "../pages/ProfilePage.vue";
import UserInfoPage from "../pages/UserInfoPage.vue";
import UserWishlistPage from "../pages/UserWishlistPage.vue";
import AdvertisementPage from "../pages/AdvertisementPage.vue";
import AdvertisementCreate from "../pages/AdvertisementCreate.vue";
import AdvertisementEdit from "../pages/AdvertisementEdit.vue";
import SearchPage from "../pages/SearchPage.vue";

Vue.use(VueRouter);

const routes = [
    {
        path: "/",
        name: 'home',
        component: IndexPage
    },
    {
        path: '/product/:id',
        name: "product",
        component: ProductPage
    },
    {
        path: 'search',
        name: 'search',
        component: SearchPage
    },
    {
        path: '/advertisement',
        name: "advertisement",
        component: AdvertisementPage,
        children: [
            {
                path: 'create',
                name: 'advertisement-create',
                component: AdvertisementCreate
            },
            {
                path: 'edit/:id',
                component: AdvertisementEdit
            }
        ]
    },
    {
        path: '/profile',
        name: 'product',
        component: ProfilePage,
        children: [
            {
                path: 'info',
                component: UserInfoPage
            },
            {
                path: 'wishlist',
                name: 'wishlist',
                component: UserWishlistPage
            }

        ]
    },
    {
        path: "/login",
        name: 'auth-login',
        component: LoginPage
    },
    {
        path: "/register",
        name: 'auth-register',
        component: RegisterPage
    }
];

const router = new VueRouter({
    scrollBehavior() {
        return { x: 0, y: 0 };
    },
    mode: "history",
    base: process.env.BASE_URL,
    routes
});

export default router;