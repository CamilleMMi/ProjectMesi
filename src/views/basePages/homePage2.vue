<template>
    <v-app id="benesApp">
        <div class="app-container app-theme-white">
            <v-main>
                  <v-container
                    class="px-6"
                    fluid
                  >
                  <div>
        <v-app-bar app>
            <v-spacer></v-spacer>
            <v-toolbar-title class="text-center">Application</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-app-bar-nav-icon @click="drawer = !drawer"></v-app-bar-nav-icon>
        </v-app-bar>

        <v-navigation-drawer v-model="drawer" right fixed temporary>
            <v-card flat>
                <v-img cover height="250" src="https://cdn.vuetifyjs.com/images/cards/cooking.png"></v-img>

                <v-row>
                    <v-spacer></v-spacer>
                    <v-card-title class="justify-center mt-5">
                        Camille Michaud
                    </v-card-title>
                    <v-spacer></v-spacer>
                </v-row>

                <v-card-text>
                    Je suis la description du profile oui tres interessant ma fois
                </v-card-text>

            </v-card>
            <template v-slot:append>
                <div class="pa-2">
                    <v-btn>
                        Paramètres
                    </v-btn>
                </div>
            </template>
        </v-navigation-drawer>
        <v-row>
                    <template>
                        <v-col class="mt-2" cols="12">
                            <v-card class="elevation-12 ma-3" shaped>
                                <v-toolbar dark src="https://cdn.vuetifyjs.com/images/cards/forest-art.jpg" shaped>
                                    <v-toolbar-title>
                                        "<v-btn color="primary" depressed>
                                            <nuxt-link style="text-decoration: none; color: #FFFFFF">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt, erat vitae vehicula mollis, ipsum ligula dictum lectus, in placerat neque purus nec erat. Sed rhoncus dapibus risus ut auctor. Suspendisse mauris sem, ullamcorper vitae posuere sed, condimentum ac tortor. Phasellus vel ornare ligula, vel tempor arcu. Etiam vel nulla eu leo bibendum ornare. Etiam molestie nibh at urna ultricies mattis. Phasellus eget velit turpis. Morbi a vestibulum sapien
                                            </nuxt-link>
                                        </v-btn>" par "<v-btn color="primary" depressed>
                                            <nuxt-link style="text-decoration: none; color: #FFFFFF">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt, erat vitae vehicula mollis, ipsum ligula dictum lectus, in placerat neque purus nec erat. Sed rhoncus dapibus risus ut auctor. Suspendisse mauris sem, ullamcorper vitae posuere sed, condimentum ac tortor. Phasellus vel ornare ligula, vel tempor arcu. Etiam vel nulla eu leo bibendum ornare. Etiam molestie nibh at urna ultricies mattis. Phasellus eget velit turpis. Morbi a vestibulum sapien
                                            </nuxt-link>
                                        </v-btn>"
                                    </v-toolbar-title>
                                </v-toolbar>
                                <v-card-text text-h5 font-weight-bold>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt, erat vitae vehicula mollis, ipsum ligula dictum lectus, in placerat neque purus nec erat. Sed rhoncus dapibus risus ut auctor. Suspendisse mauris sem, ullamcorper vitae posuere sed, condimentum ac tortor. Phasellus vel ornare ligula, vel tempor arcu. Etiam vel nulla eu leo bibendum ornare. Etiam molestie nibh at urna ultricies mattis. Phasellus eget velit turpis. Morbi a vestibulum sapien
                                </v-card-text>
                            </v-card>
                            <v-card class="elevation-12 ma-3" shaped>
                                <v-toolbar dark src="https://cdn.vuetifyjs.com/images/cards/forest-art.jpg" shaped>
                                    <v-toolbar-title>
                                        "<v-btn color="primary" depressed>
                                            <nuxt-link style="text-decoration: none; color: #FFFFFF">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt, erat vitae vehicula mollis, ipsum ligula dictum lectus, in placerat neque purus nec erat. Sed rhoncus dapibus risus ut auctor. Suspendisse mauris sem, ullamcorper vitae posuere sed, condimentum ac tortor. Phasellus vel ornare ligula, vel tempor arcu. Etiam vel nulla eu leo bibendum ornare. Etiam molestie nibh at urna ultricies mattis. Phasellus eget velit turpis. Morbi a vestibulum sapien
                                            </nuxt-link>
                                        </v-btn>" par "<v-btn color="primary" depressed>
                                            <nuxt-link style="text-decoration: none; color: #FFFFFF">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt, erat vitae vehicula mollis, ipsum ligula dictum lectus, in placerat neque purus nec erat. Sed rhoncus dapibus risus ut auctor. Suspendisse mauris sem, ullamcorper vitae posuere sed, condimentum ac tortor. Phasellus vel ornare ligula, vel tempor arcu. Etiam vel nulla eu leo bibendum ornare. Etiam molestie nibh at urna ultricies mattis. Phasellus eget velit turpis. Morbi a vestibulum sapien
                                            </nuxt-link>
                                        </v-btn>"
                                    </v-toolbar-title>
                                </v-toolbar>
                                <v-card-text text-h5 font-weight-bold>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt, erat vitae vehicula mollis, ipsum ligula dictum lectus, in placerat neque purus nec erat. Sed rhoncus dapibus risus ut auctor. Suspendisse mauris sem, ullamcorper vitae posuere sed, condimentum ac tortor. Phasellus vel ornare ligula, vel tempor arcu. Etiam vel nulla eu leo bibendum ornare. Etiam molestie nibh at urna ultricies mattis. Phasellus eget velit turpis. Morbi a vestibulum sapien
                                </v-card-text>
                            </v-card><v-card class="elevation-12 ma-3" shaped>
                                <v-toolbar dark src="https://cdn.vuetifyjs.com/images/cards/forest-art.jpg" shaped>
                                    <v-toolbar-title>
                                        "<v-btn color="primary" depressed>
                                            <nuxt-link style="text-decoration: none; color: #FFFFFF">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt, erat vitae vehicula mollis, ipsum ligula dictum lectus, in placerat neque purus nec erat. Sed rhoncus dapibus risus ut auctor. Suspendisse mauris sem, ullamcorper vitae posuere sed, condimentum ac tortor. Phasellus vel ornare ligula, vel tempor arcu. Etiam vel nulla eu leo bibendum ornare. Etiam molestie nibh at urna ultricies mattis. Phasellus eget velit turpis. Morbi a vestibulum sapien
                                            </nuxt-link>
                                        </v-btn>" par "<v-btn color="primary" depressed>
                                            <nuxt-link style="text-decoration: none; color: #FFFFFF">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt, erat vitae vehicula mollis, ipsum ligula dictum lectus, in placerat neque purus nec erat. Sed rhoncus dapibus risus ut auctor. Suspendisse mauris sem, ullamcorper vitae posuere sed, condimentum ac tortor. Phasellus vel ornare ligula, vel tempor arcu. Etiam vel nulla eu leo bibendum ornare. Etiam molestie nibh at urna ultricies mattis. Phasellus eget velit turpis. Morbi a vestibulum sapien
                                            </nuxt-link>
                                        </v-btn>"
                                    </v-toolbar-title>
                                </v-toolbar>
                                <v-card-text text-h5 font-weight-bold>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt, erat vitae vehicula mollis, ipsum ligula dictum lectus, in placerat neque purus nec erat. Sed rhoncus dapibus risus ut auctor. Suspendisse mauris sem, ullamcorper vitae posuere sed, condimentum ac tortor. Phasellus vel ornare ligula, vel tempor arcu. Etiam vel nulla eu leo bibendum ornare. Etiam molestie nibh at urna ultricies mattis. Phasellus eget velit turpis. Morbi a vestibulum sapien
                                </v-card-text>
                            </v-card><v-card class="elevation-12 ma-3" shaped>
                                <v-toolbar dark src="https://cdn.vuetifyjs.com/images/cards/forest-art.jpg" shaped>
                                    <v-toolbar-title>
                                        "<v-btn color="primary" depressed>
                                            <nuxt-link style="text-decoration: none; color: #FFFFFF">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt, erat vitae vehicula mollis, ipsum ligula dictum lectus, in placerat neque purus nec erat. Sed rhoncus dapibus risus ut auctor. Suspendisse mauris sem, ullamcorper vitae posuere sed, condimentum ac tortor. Phasellus vel ornare ligula, vel tempor arcu. Etiam vel nulla eu leo bibendum ornare. Etiam molestie nibh at urna ultricies mattis. Phasellus eget velit turpis. Morbi a vestibulum sapien
                                            </nuxt-link>
                                        </v-btn>" par "<v-btn color="primary" depressed>
                                            <nuxt-link style="text-decoration: none; color: #FFFFFF">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt, erat vitae vehicula mollis, ipsum ligula dictum lectus, in placerat neque purus nec erat. Sed rhoncus dapibus risus ut auctor. Suspendisse mauris sem, ullamcorper vitae posuere sed, condimentum ac tortor. Phasellus vel ornare ligula, vel tempor arcu. Etiam vel nulla eu leo bibendum ornare. Etiam molestie nibh at urna ultricies mattis. Phasellus eget velit turpis. Morbi a vestibulum sapien
                                            </nuxt-link>
                                        </v-btn>"
                                    </v-toolbar-title>
                                </v-toolbar>
                                <v-card-text text-h5 font-weight-bold>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tincidunt, erat vitae vehicula mollis, ipsum ligula dictum lectus, in placerat neque purus nec erat. Sed rhoncus dapibus risus ut auctor. Suspendisse mauris sem, ullamcorper vitae posuere sed, condimentum ac tortor. Phasellus vel ornare ligula, vel tempor arcu. Etiam vel nulla eu leo bibendum ornare. Etiam molestie nibh at urna ultricies mattis. Phasellus eget velit turpis. Morbi a vestibulum sapien
                                </v-card-text>
                            </v-card>
                        </v-col>
                    </template>
                </v-row>
    </div>
                </v-container>
            </v-main>


        </div>

    </v-app>
</template>
<style scoped>
    .container{
        max-width: 1850px;
    }

</style>

<script>
export default {
    data: () => ({
        drawer: null,
        loading: false,
        selection: 1,
    }),

    methods: {
        reserve() {
            this.loading = true

            setTimeout(() => (this.loading = false), 2000)
        },
    },
}
</script>