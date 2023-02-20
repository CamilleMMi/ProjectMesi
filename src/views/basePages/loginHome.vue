<template>
  <v-app>
    <v-main>
      <v-container fluid fill-height>
        <v-layout align-center justify-center>
          <v-flex xs12 sm8 md4>
            <v-card class="elevation-12">
              <v-toolbar dark color="primary">
                <v-toolbar-title>Connexion</v-toolbar-title>
              </v-toolbar>
              <v-card-text>
                <v-form ref="form" v-model="valid" lazy-validation>
                  <v-text-field name="username" label="Nom d'utilisateur" />
                  <v-text-field name="password" label="Mot de Passe" />
                </v-form>
              </v-card-text>
              <v-card-actions>
                <nuxt-link to="registerHome">
                  <v-btn color="primary">
                    Nouveau Utilisateur
                  </v-btn>
                </nuxt-link>
                <v-spacer />
                <v-btn color="primary">
                  Connexion
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