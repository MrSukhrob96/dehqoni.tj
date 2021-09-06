<template>
    <div class="header-middle  sticky-header">
        <div class="container">
            <div class="header-left">
                <router-link :to="{ name: 'home' }" class="logo">
                    <img
                        :src="`${host}assets/images/demos/demo-4/logo.png`"
                        alt="Molla Logo"
                        width="105"
                        height="25"
                    />
                </router-link>
            </div>

            <div class="header-center d-none d-xl-block">
                <div
                    class="header-search header-search-extended header-search-visible"
                >
                    <button class="btn search-toggle" role="button"
                        ><i class="icon-search"></i
                    ></button>
                    <form action="#" method="get" @submit.prevent="">
                        <div class="header-search-wrapper search-wrapper-wide">
                            <label for="q" class="sr-only">Search</label>
                            <button class="btn" type="submit">
                                <i class="icon-search"></i>
                            </button>
                            <input
                                type="search"
                                class="form-control"
                                name="searching"
                                id="q"
                                placeholder="Search product ..."
                                required
                            />
                        </div>
                    </form>
                </div>
            </div>

            <div class="header-right">
                <div class="dropdown compare-dropdown d-none d-lg-flex">
                    <router-link
                        :to="{ name: 'auth-login' }"
                        class="dropdown-toggle"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        data-display="static"
                        title="Compare Products"
                        aria-label="Compare Products"
                    >
                        <div class="icon">
                            <i class="icon-user"></i>
                        </div>
                        <p>Кабинет</p>
                    </router-link>
                </div>

                <div class="wishlist d-none d-lg-flex">
                    <router-link :to="{ name: 'wishlist' }" title="Wishlist">
                        <div class="icon">
                            <i class="icon-heart-o"></i>
                            <span class="wishlist-count badge">3</span>
                        </div>
                        <p>Wishlist</p>
                    </router-link>
                </div>

                <div class="ml-4">
                    <router-link
                        :to="{ name: 'advertisement-create' }"
                        class="btn btn-outline-dark btn-round"
                        >Подать обявление</router-link
                    >
                </div>
                <button class="mobile-menu-toggler">
                    <span class="sr-only">Toggle mobile menu</span>
                    <i class="icon-bars"></i>
                </button>
            </div>

        </div>
    </div>
</template>
