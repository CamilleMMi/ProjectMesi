<template>
    <v-app>
        <v-main class="white">
            <v-sheet v-if="loading" color="white" class="pa-3">
                <v-skeleton-loader v-bind="attrs" type="card-avatar, article, actions" />

                <v-skeleton-loader v-bind="attrs" type="date-picker" />
            </v-sheet>
            <v-container v-else class="white">
                <!--contrainer > vraw -->
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
            </v-container>
        </v-main>
    </v-app>
</template>

<script>
</script>