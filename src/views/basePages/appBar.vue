<template>
    <v-app>
        <v-app-bar app>
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>

            <v-toolbar-title>Application</v-toolbar-title>
        </v-app-bar>

        <v-navigation-drawer v-model="drawer" fixed temporary>
        </v-navigation-drawer>
    </v-app>
</template>

<script>
export default {
    data: () => ({ drawer: null }),
}
</script>