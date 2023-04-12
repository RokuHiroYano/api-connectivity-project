<script setup lang="ts">
import TheWelcome from '../components/TheWelcome.vue'
import IconLogo from '../assets/icons/1.vue'
import { useRoute, useRouter } from 'vue-router'

const router = useRouter();

const toDetail = (index: number) => {
  router.push(`/resumes/${index}`)
}
</script>

<template>
  <v-container fluid>
    <v-row dense>
      <v-col
        v-for="n in 8"
        :key="n"
        cols="3"
      >
        <v-card
          class="resume-card"
          max-width="450px"
          style="padding: 25px;"
          @click="toDetail(n)"
        >
          <v-container>
            <v-row justify="center">
              <v-avatar size="80">
                <v-img
                  src="https://cdn.vuetifyjs.com/images/john.jpg"
                  alt="John"
                ></v-img>
              </v-avatar>
            </v-row>
          </v-container>
          <v-card-title style="text-align: center;">
            Johon
          </v-card-title>
          <v-container style="width: 90%;">
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
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<style scoped>
#index-view-wrap {
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  justify-content: space-around;
}

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
</style>
