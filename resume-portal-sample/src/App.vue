<script setup lang="ts">
import { RouterLink, RouterView } from 'vue-router'
import HelloWorld from './components/HelloWorld.vue'
</script>

<template>
  <div id="header">
    <v-toolbar color="white" density="default">
      <v-toolbar-title>Resume</v-toolbar-title>
      <v-spacer></v-spacer>
      <v-btn icon>
        <v-icon>mdi-account-circle</v-icon>
      </v-btn>
    </v-toolbar>
  </div>
  <div id="main">
    <RouterView />
  </div>
</template>

<style scoped>
#header {
  width: 100%;
  background-color: white;
  padding: 0px 16px;
  box-shadow: 0 3px 3px -3px rgba(0, 0, 0, 0.5);
}

#main {
  width: 100%;
  padding: 16px;
}
</style>
