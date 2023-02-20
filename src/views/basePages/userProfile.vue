<template>
    <v-app>
        <v-main>
            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <v-flex xs12 sm8 md4>
                        <v-card class="elevation-12">
                            <v-toolbar dark color="primary">
                                <v-toolbar-title>Profile</v-toolbar-title>
                            </v-toolbar>
                            <v-card-text>
                                <v-form>
                                    <v-text-field label="Username" outlined
                                        readonly />
                                    <v-container fluid>
                                        <v-textarea  label="Bio" outlined
                                            readonly />
                                    </v-container>
                                    <v-text-field label="City" outlined
                                        readonly />
                                    <v-text-field label="Country" outlined
                                        readonly />
                                </v-form>
                            </v-card-text>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-main>
    </v-app>
</template>

<script>
</script>