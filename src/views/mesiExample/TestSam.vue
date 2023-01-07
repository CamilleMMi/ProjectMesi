<template>
    <v-app>
  
      <v-app-bar
        class="white black--text"
        dark
        dense
        app
      >
        <v-btn icon href="https://www.youtube.com/watch?v=Q601mueWcmw" target="_blank">
            <v-icon color="black">
              mdi-home
            </v-icon>         
        </v-btn>
  
        <v-toolbar-title>ARANEA</v-toolbar-title>
  
        <v-spacer />
  
        <v-input
          mx-4
        >
          <v-text-field
            v-model="click"
            prepend-inner-icon="mdi-magnify"
            :background-color="is_focus ? 'black' :'white'"
            color="primary"
            class="mt-12"
            light
            enclosed
            outlined
            filled
            label="Que cherchez-vous ?"
            dense
            app
            @blur="is_focus = false"
            @focus="is_focus = true"
          />
        </v-input>
  
        <v-hover v-model="hover">
          <v-btn
            class="ma-2"
            outlined
            :color="hover ? 'primary' :'black'"
          >
            <nuxt-link
              class="white--"
              to="/login"
              style="text-decoration: none"
            >
              CONNEXIOn
            </nuxt-link>
          </v-btn>
        </v-hover>
  
        <v-app-bar-nav-icon class="black--text" @click="drawer = !drawer" />
      </v-app-bar>
  
      <v-navigation-drawer
        v-model="drawer"
        class="white black--text"
        width=""
        fixed
        light
        temporary
        right
      >
        <v-list-item>
          <v-list-item-content>
            <v-list-item-title class="text-h6">
              Gestion profil
            </v-list-item-title>
            <v-list-item-subtitle>
              test
            </v-list-item-subtitle>
          </v-list-item-content>
        </v-list-item>
        <v-container>
          <v-divider class="thirdary" />
        </v-container>
        <v-list>
          <v-list-item
            link
          >
            <v-btn
              block
              color="primary"
              dark
            >
              <v-list-item-icon>
                <v-icon>mdi.pen</v-icon>
              </v-list-item-icon>
  
              <v-list-item-content>
                <v-list-item-title>test title</v-list-item-title>
              </v-list-item-content>
            </v-btn>
          </v-list-item>
        </v-list>
        <v-container>
          <v-divider
            class="thirdary"
          />
        </v-container>
  

      </v-navigation-drawer>

  <!-- -------------------------  FOOTER   ------------------------ -->

      <v-footer app bottom fixed padless color="primary" >
      <v-row
        justify="center"
        no-gutters
      >
      <v-btn
        v-for="link in links"
        :key="link"
        color="white"
        text
        rounded
        class="my-2"
      >
        {{ link }}
      </v-btn>
        <v-btn color="white" rounded class="my-2" icon href="https://www.twitter.com" target="_blank">
        <v-icon size="24px">
          mdi-twitter
          </v-icon>
        </v-btn>
        <v-btn color="white" rounded class="my-2" icon href="https://www.instagram.com" target="_blank">
            <v-icon >
              mdi-instagram
            </v-icon>         
        </v-btn>
        <v-col
          class="primary lighten-2 py-4 text-center white--text"
          cols="12"
        >
          {{ new Date().getFullYear() }} — <strong>ARANEA </strong>
        </v-col>
      </v-row>
    </v-footer>
      <Nuxt />
    </v-app>
  </template>
  


<script>
  export default {
    data: () => ({
      drawer: null,
      click: true,
      hover: false,
      is_focus: false,
      items: [
        { title: 'Post', icon: 'mdi-view-dashboard', route: '/post' },
        { title: 'Account', icon: 'mdi-account-box', route: '/account' }
      ],
      links: [
      'Home',
      'About Us',
      'Contact Us',
    ],
    }),
    methods: {
    }
  }
</script>


