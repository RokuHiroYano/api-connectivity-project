<script setup lang="ts">
import TheWelcome from '../components/TheWelcome.vue'
import IconLogo from '../assets/icons/1.vue'
import { useRoute, useRouter, RouterLink } from 'vue-router'
import { ref } from "vue";

const textStrongneth = ref('Trying to become a man with much curiosity, energy and confidence.\nTo work and grow in a community development where my knowledge,experience and creativity can be put to the best use To be a part of the organization which is trying to the best of its effort to create a world where nature and human can co-exist To become a professional in the renewable energy related or materials related sectors.');
const textReserch = ref('Trying to become a man with much curiosity, energy and confidence.\nTo work and grow in a community development where my knowledge,experience and creativity can be put to the best use To be a part of the organization which is trying to the best of its effort to create a world where nature and human can co-exist To become a professional in the renewable energy related or materials related sectors.');
const textMessage = ref('Trying to become a man with much curiosity, energy and confidence.\nTo work and grow in a community development where my knowledge,experience and creativity can be put to the best use To be a part of the organization which is trying to the best of its effort to create a world where nature and human can co-exist To become a professional in the renewable energy related or materials related sectors.');
const isEdit = ref(false);

const changeIsEdit = (index: number) => {
  isEdit.value = !isEdit.value;
}
</script>

<template>
  <v-container fluid>
    <RouterLink to="/">◀︎ Back to home</RouterLink>
    <v-row dense style="height: 40px;"></v-row>
    <v-row dense>
      <v-card
        flat
        class="resume-card"
        width="300px"
        color="transparent"
      >
        <v-container>
            <v-row justify="center">
              <v-avatar size="160">
                <v-img
                  src="https://cdn.vuetifyjs.com/images/john.jpg"
                  alt="John"
                ></v-img>
              </v-avatar>
            </v-row>
          </v-container>
          <v-card-title class="mt-5" style="color: black; text-align: center;">
            Johon
          </v-card-title>
          <v-container class="mt-5" style="color: black;">
            <v-row justify="start" align="center">
              <div class="card-item">
                <IconLogo/>
                <span style="margin-left: 5px;">出身大学</span>
              </div>
              ：東京海洋大学
            </v-row>
            <v-row justify="start" align="center">
              <div class="card-item">
                <IconLogo/>
                <span style="margin-left: 5px;">出身国</span>
              </div>
              ：ミャンマー
            </v-row>
            <v-row justify="start" align="center">
              <div class="card-item">
                <IconLogo/>
                <span style="margin-left: 5px;">言語</span>
              </div>
              ：ミャンマー語・英語
            </v-row>
            <v-row justify="start" align="center">
              <div class="card-item">
                <IconLogo/>
                <span style="margin-left: 5px;">文理</span>
              </div>
              ：理系
            </v-row>
            <v-row justify="start" align="center">
              <div class="card-item">
                <IconLogo/>
                <span style="margin-left: 5px;">専攻</span>
              </div>
              ：材料科学工学
            </v-row>
            <v-row justify="start" align="center">
              <div class="card-item">
                <IconLogo/>
                <span style="margin-left: 5px;">居住地</span>
              </div>
              ：東京都文京区
            </v-row>
          </v-container>
          <v-container class="mt-5 pa-0">
            <v-btn block variant="flat" @click="changeIsEdit">
              {{!isEdit ? "編集する" : "保存する"}}
            </v-btn>
          </v-container>
      </v-card>
      <v-card
        flat
        class="pl-10"
        color="transparent"
        style="width: calc(100% - 300px);"
      >
        <v-container class="py-0" style="color: black; white-space: pre-wrap; word-wrap:break-word;">
            <h1 style="font-weight: bold;">Strongneth/Weekness</h1>
            <div style="height: 4px; width: 70%; min-width: 350px; background-color: #707070;"/>
            <div v-if="!isEdit" class="mt-5">
              {{ textStrongneth }}      
            </div>
            <div v-if="isEdit" class="mt-5">
              <v-textarea
                auto-grow
                variant="outlined"
                row-height="25"
                shaped
                v-model="textStrongneth"
              ></v-textarea>
            </div>
        </v-container>
        <v-container class="py-0 mt-15" style="color: black; white-space: pre-wrap; word-wrap:break-word;">
            <h1 style="font-weight: bold;">Reserch Topics</h1>
            <div style="height: 4px; width: 70%; min-width: 350px; background-color: #707070;"/>
            <div v-if="!isEdit" class="mt-5">
              {{ textReserch }}   
            </div>
            <div v-if="isEdit" class="mt-5">
              <v-textarea
                auto-grow
                variant="outlined"
                row-height="25"
                shaped
                v-model="textReserch"
              ></v-textarea>
            </div>
        </v-container>
        <v-container class="py-0 mt-15" style="color: black; white-space: pre-wrap; word-wrap:break-word;">
            <h1 style="font-weight: bold;">Message</h1>
            <div style="height: 4px; width: 70%; min-width: 350px; background-color: #707070;"/>
            <div v-if="!isEdit" class="mt-5">
              {{ textMessage }} 
            </div>
            <div v-if="isEdit" class="mt-5">
              <v-textarea
                auto-grow
                variant="outlined"
                row-height="25"
                shaped
                v-model="textMessage"
              ></v-textarea>
            </div>
        </v-container>
      </v-card>
    </v-row>
  </v-container>
</template>

<style scoped>
.resume-card {
  margin-bottom: 16px;
}

.card-item {
  display: flex;
  justify-content: start;
  align-items: center;
  padding: 5px;
  width: 40%;
}

@media (min-width: 1024px) {
  .about {
    min-height: 100vh;
    display: flex;
    align-items: center;
  }
}
</style>
