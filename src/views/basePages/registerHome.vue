<template>
    <v-app>
        <v-main>
            <v-container fluid fill-height>
                <v-layout align-center justify-center>
                    <v-flex xs12 sm8 md4>
                        <v-card class="elevation-12">
                            <v-toolbar dark color="primary">
                                <v-toolbar-title>Inscription</v-toolbar-title>
                            </v-toolbar>
                            <v-card-text>
                                <v-form lazy-validation>
                                    <v-text-field name="pseudo" label="Pseudo"
                                        type="text" :counter="25" required />
                                    <v-text-field name="email" label="Email" required />
                                    <v-container fluid>
                                        <v-textarea name="bio" label="Bio *" />
                                    </v-container>
                                    <span class="material-icons">
                                        <v-text-field label="Mot de passe" name="password"/>
                                    </span>
                                    <v-text-field name="phone" label="Phone *" type="number" />
                                    <v-text-field name="city" label="City *" type="text" />
                                    <v-text-field name="address" label="Address *" type="text" />
                                    <v-text-field name="zipcode" label="Zipcode *" type="number" />
                                    <v-text-field name="country" label="Country *" type="letters" />
                                    * = Optional
                                </v-form>
                            </v-card-text>
                            <v-card-actions>
                                    <v-btn to="/" color="primary">
                                        Déjà Inscrit
                                    </v-btn>
                                <v-spacer />
                                <v-btn color="primary">
                                    Inscrire
                                </v-btn>
                            </v-card-actions>
                        </v-card>
                    </v-flex>
                </v-layout>
            </v-container>
        </v-main>
    </v-app>
</template>

<script>
</script>