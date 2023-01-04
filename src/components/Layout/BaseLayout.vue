<template>
    <v-main>
        <Header />
        <slot />
        <Footer />
    </v-main>
</template>

<script>
import Header from './Header/HeaderTest.vue'
import Footer from './Footer/FooterTest.vue'

export default {
    name: 'BaseLayout',
    components: {
        Header,
        Footer
    }
}
</script>