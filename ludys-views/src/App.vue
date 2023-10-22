<template>
  <img alt="Vue logo" src="./assets/logo.png">
  <HelloWorld msg="Welcome to Your Vue.js App"/>
  <v-container>
    <v-row justify="center" align="center">
      <v-col cols="auto">
        <v-btn density="compact">Compact Button</v-btn>
      </v-col>

      <v-col cols="auto">
        <v-btn density="comfortable">Comfortable Button</v-btn>
      </v-col>

      <v-col cols="auto">
        <v-btn density="default">Default Button</v-btn>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import HelloWorld from './components/HelloWorld.vue'
// Vuetify
import 'vuetify/styles'

export default {
  name: 'App',
  components: {
    HelloWorld
  }
}

</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
