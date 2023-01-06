import Vue from "vue";
import Vuetify from "vuetify/lib/framework";

Vue.use(Vuetify);

export default new Vuetify({
  theme: {
    themes: {
      light: {
        primary: "#175E60",
        secondary: "#4AB69F",
        accent: "#E5E3B2",
        error: "#BF4930",
        warning: "#E49043",
        info: '#2196F3',
        success: '#4CAF50',
      },
      dark: {
        primary: '#1976D2',
        secondary: '#424242',
        accent: '#82B1FF',
        error: '#FF5252',
        info: '#2196F3',
        success: '#4CAF50',
        warning: '#FFC107',
      }
    },
  },
});
