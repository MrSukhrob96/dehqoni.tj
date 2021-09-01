<template>
    <div class="header-top d-none d-sm-block">
        <div class="container">
            <div class="header-left">
                <div class="header-dropdown">
                    <router-link to="">English</router-link>
                    <div class="header-menu">
                        <ul>
                            <li><a href="#">English</a></li>
                            <li><a href="#">French</a></li>
                            <li><a href="#">Spanish</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="header-right">
                <ul class="top-menu">
                    <li>
                        <a href="">Contacts</a>
                        <ul>
                            <li class="contact__link">
                                <a href="mailto:sukhrobazimov1996@gmail.com">
                                    <i class="icon-envelope"></i>
                                    sukhrobazimov@gmail.com
                                </a>
                            </li>
                            <li class="contact__link">
                                <a href="tel:+992926352444">
                                    <i class="icon-phone"></i>
                                    +92926352444
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: ()=>{
        return {
            
        }
    }
}
</script>

<style scoped>
.contact__link {
    text-transform: lowercase !important;
}
</style>
